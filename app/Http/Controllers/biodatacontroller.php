<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class biodatacontroller extends Controller
{
    public function show($nik)
    {

$biodata = Biodata::where('nik', $nik)->firstOrFail(); // Ambil biodata berdasarkan NIK, jika tidak ditemukan, beri response 404
        return view('forms.form_update_biodata', compact('biodata')); // Kirim data biodata ke view
    }
}
