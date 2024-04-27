<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class UserRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request jika diperlukan
        $validatedData = $request->validate([
            'layanan' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'remarks' => 'nullable',
        ]);

        // Simpan data ke dalam tabel user_requests
        $userRequest = new user_request();
        $userRequest->layanan = $request->layanan;
        $userRequest->email = $request->email;
        $userRequest->nama = $request->nama;
        $userRequest->telepon = $request->telepon;
        $userRequest->alamat = $request->alamat;
        $userRequest->remarks = $request->remarks;

        // Jangan set req_no di sini, akan diisi secara otomatis oleh event model

        $userRequest->save();

        // Redirect atau berikan respons yang sesuai
        return redirect()->back()->with('success', 'Document request berhasil ditambahkan');
    }
}
