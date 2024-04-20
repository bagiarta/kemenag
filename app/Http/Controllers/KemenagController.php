<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemenagController extends Controller

{
    public function formbantuan()
    {
        return view('forms.form_bantuan');
    }

    public function formhaji()
    {
        return view('forms.form_haji');
    }

    public function formkonsultasi()
    {
        return view('forms.form_konsultasi');
    }

    public function formlayanan()
    {
        return view('forms.form_layanankhusus');
    }

    public function formizin()
    {
        return view('forms.form_perizinan');
    }
    public function public()
    {
        return view('public');
    }

    public function legalisir()
    {
        return view('forms.form_legalisir');
    }

    public function biodata()
    {
        return view('forms.form_biodata');
    }

}
