<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\user_request;

class KemenagController extends Controller

{
    public function admindashboard()
    {
        return view('admin');
    }
    public function index()
    {
        $totalRequests = user_request::where('status', 'proccess')->count();
        return view('public', compact('totalRequests'));
    }

    public function formbantuan()
    {
        return view('forms.form_bantuan');
    }

    public function formkepegawaian()
    {
        return view('forms.form_kepegawaian');
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
        $user = User::with('biodata')->where('id', auth()->user()->id)->first();
        return view('forms.form_biodata', [
            'user' => $user
        ]);
    }

    public function updatebiodata()
    {
        $user = User::with('biodata')->where('id', auth()->user()->id)->first();
        return view('forms.form_update_biodata', compact('user'));
    }

    public function updatebiodata_post(Request $request)
    {
        User::where('id', auth()->user()->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);
        $user_id = User::where('id', auth()->user()->id)->pluck('id')->first();
        // Biodata::where('user_id', $user_id)->updateOrCreate(['user_id' => $user_id], [
        Biodata::updateOrCreate(['user_id' => $user_id], [
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
        ]);
        if ($user_id) {
            return redirect()->route('biodata')->with('success', 'biodata berhasil diperbaharui.');
        } else {
            // Jika penyimpanan gagal
            return back()->with('error', 'gagal melakukan perbaharuan data! Silakan coba lagi.');
        }
    }
}
