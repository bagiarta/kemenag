<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = user_request::query();
        $user = auth()->user();

        if ($user->role != 'admin') {
            $query->where('nik', $user->nik);
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('req_no', 'like', "%$search%")
                    ->orWhere('layanan', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('nama', 'like', "%$search%")
                    ->orWhere('telepon', 'like', "%$search%")
                    ->orWhere('alamat', 'like', "%$search%");
            });
        }

        if ($request->has('status') && $request->input('status') != 'all') {
            $status = $request->input('status');
            $query->where('status', $status);
        }

        $userRequests = $query->get();
        return view('reports.reportrequest', compact('userRequests'));
    }

    public function generateReport(Request $request)
    {
        $query = user_request::query();
        $user = auth()->user();

        if ($user->level != 'admin') {
            $query->where('nik_pemohon', $user->nik);
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('req_no', 'like', "%$search%")
                    ->orWhere('layanan', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('nama', 'like', "%$search%")
                    ->orWhere('telepon', 'like', "%$search%")
                    ->orWhere('alamat', 'like', "%$search%")
                    ->orWhere('remarks', 'like', "%$search%");
            });
        }

        if ($request->has('status') && $request->input('status') != 'all') {
            $status = $request->input('status');
            $query->where('status', $status);
        }

        $userRequests = $query->get();

        $data = [
            'userRequests' => $userRequests,
        ];

        $pdf = Pdf::loadView('reports.generatereport', $data);
        return $pdf->download('request_proccess.pdf');
    }

    public function approveRequest(Request $request, $id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->status = 'approved';
        $userRequest->reason = $request->input('reason');
        $userRequest->save();

        return redirect()->back()->with('success', 'Permohonan disetujui');
    }

    public function rejectRequest(Request $request, $id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->status = 'rejected';
        $userRequest->reason = $request->input('reason');
        $userRequest->save();

        return redirect()->back()->with('success', 'Permohonan ditolak');
    }
}
