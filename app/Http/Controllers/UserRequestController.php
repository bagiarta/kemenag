<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use Illuminate\Support\Facades\Storage;
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
            'files' => 'nullable|file|mimes:pdf|max:5620',
        ]);

        $path = null;
        if ($request->hasFile('files')) {
            $file = $request->file('files');
            $path = $file->store();
        }
        // Simpan data ke dalam tabel user_requests
        $userRequest = new user_request();
        $userRequest->layanan = $request->layanan;
        $userRequest->email = $request->email;
        $userRequest->nama = $request->nama;
        $userRequest->telepon = $request->telepon;
        $userRequest->alamat = $request->alamat;
        $userRequest->remarks = $request->remarks;
        $userRequest->files = $path;
        $userRequest->status = 'proccess';


        $userRequest->save();
        //dd($request->all());

        // Redirect atau berikan respons yang sesuai
        return redirect()->back()->with('success', 'Document request berhasil ditambahkan');
    }



    public function processRequest($id, $action)
    {
        // Temukan data user_request berdasarkan ID
        $userRequest = user_request::find($id);

        // Ubah status sesuai dengan tindakan yang dilakukan
        if ($action == 'approve') {
            $userRequest->status = 'approved';
        } elseif ($action == 'reject') {
            $userRequest->status = 'rejected';
        }

        $userRequest->save();

        return response()->json(['message' => 'Permintaan ' . ucfirst($action)]);
    }
}
