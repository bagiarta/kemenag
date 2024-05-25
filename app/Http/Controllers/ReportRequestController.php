<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportRequestController extends Controller
{
    public function index()
    {
        // Mengambil semua data permintaan dari database
        $userRequests = user_request::all();

        // Mengirim data ke view
        return view('reports.reportrequest', compact('userRequests'));
    }

    public function generateReport()
    {
        $userRequests = user_request::all();

        $data = [
            'userRequests' => $userRequests,
        ];

        $pdf = Pdf::loadView('reports.reportrequest', $data);
        return $pdf->download('request proccess.pdf');
    }

    public function approveRequest($id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->status = 'approved';
        $userRequest->save();

        return redirect()->back()->with('success', 'Permohonan disetujui');
    }

    public function rejectRequest($id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->status = 'rejected';
        $userRequest->save();

        return redirect()->back()->with('success', 'Permohonan ditolak');
    }
}
