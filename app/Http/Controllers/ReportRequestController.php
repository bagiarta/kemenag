<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use app\Models\user_request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportRequestController extends Controller
{
    public function generateReport()
    {
        $userRequest = user_request::all();

        $data = [
            'userRequest' => $userRequest,
        ];

        $pdf = PDF::loadView('report.user_requests', $data);
        return $pdf->download('uer_request_report.pdf');
    }
    public function approveRequest($id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->stat = 'approved';
        $userRequest->save();

        return redirect()->back()->with('success', 'permohonan disetujui');
    }

    public function rejectRequest($id)
    {
        $userRequest = user_request::findOrFail($id);
        $userRequest->status = 'rejected';
        $userRequest->save();

        return redirect()->back()->with('sucess', 'permohonan ditolak');
    }
}
