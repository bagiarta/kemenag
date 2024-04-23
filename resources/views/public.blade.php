<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')
@extends('layouts.formslayout')

@section('content')

    <body>
        <h1>PELAYANAN PUBLIK</h1>
    </body>
    <div class="col-md-12">

        <div class="kategory">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href= '{{ 'formhaji' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnhaji.png') }}" alt="layanan publik" style="width: 100%; height: auto; ">

                        <!-- panggil nama function disini window.location.href= '{{ 'formhaji' }}'-->
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formizin' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnlicense.png') }}" alt="license" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formbantuan' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnbankdata.png') }}" alt="bank data" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_KUA';"
                        style=" background: none; border: none;">

                        <img src="{{ asset('image/kua.png') }}" alt="kua" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formkonsultasi' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnconsult.png') }}" alt="consult" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formlayanan' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/petugas.png') }}" alt="petugas" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_pegawai=';"
                        style=" background: none; border: none;">

                        <img src="{{ asset('image/btnrequest.png') }}" alt="pegawai" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'legalisir' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/pengesahan.png') }}" alt="pengesahan"
                            style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_pelayanankhusus'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnmessi.png') }}" alt="pelayanankhusus"
                            style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_progress'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/progres.png') }}" alt="progres" style="width: 100%; height: auto; ">
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_edit'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/edit.png') }}" alt="edit" style="width: 100%; height: auto; ">
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Peta lokasi -->
    <div class="maps">
        <!-- tambahkan kode peta-->
    </div>
@endsection
