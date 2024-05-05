<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class biodatacontroller extends Controller
{
    public function show($nik)
    {

        $biodata = Biodata::where('nik', $nik)->firstOrFail();
        return view('forms.form_update_biodata', compact('biodata'));
    }
}
