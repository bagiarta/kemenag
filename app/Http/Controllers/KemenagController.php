<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
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
        $user = User::with('biodata')->where('id',auth()->user()->id)->first();
        return view('forms.form_biodata',[
            'user' => $user
        ]);
    }

    public function updatebiodata()
    {
        $user = User::with('biodata')->where('id',auth()->user()->id)->first();
        return view('forms.form_update_biodata',compact('user'));
    }

    public function updatebiodata_post(Request $request){
        User::where('id',auth()->user()->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);
        $user_id = User::where('id',auth()->user()->id)->pluck('id')->first();
        Biodata::where('user_id',$user_id)->updateOrCreate(['user_id' => $user_id],[
            'user_id' => $user_id,
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
        ]);
        dd('success');

    }
}
