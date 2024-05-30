<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class biodatacontroller extends Controller
{
    public function show($id)
    {

        $biodata = Biodata::where('nik', $id)->firstOrFail();
        return view('forms.form_update_biodata', compact('biodata'));
    }
}
