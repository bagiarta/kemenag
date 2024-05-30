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
                        <span style="display: block; text-align: center; font-size: 28px;">HAJI</span>

                        <!-- panggil nama function disini window.location.href= '{{ 'formhaji' }}'-->
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formizin' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnlicense.png') }}" alt="license" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">PERIZINAN & REKOMENDASI</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formbantuan' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnbankdata.png') }}" alt="bank data" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">BANTUAN PEMERINTAH</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='link_ke_KUA';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/kua.png') }}" alt="kua" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">KUA</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formkonsultasi' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnconsult.png') }}" alt="consult" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">KONSULTASI & INFORMASI</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formlayanan' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/petugas.png') }}" alt="petugas" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">PERMOHONAN PETUGAS</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formkepegawaian' }}';"
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnrequest.png') }}" alt="pegawai" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">KEPEGAWAIAN</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'legalisir' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/pengesahan.png') }}" alt="pengesahan"
                            style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">PENGESAHAN</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'formlayanan'}}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/btnmessi.png') }}" alt="pelayanankhusus"
                            style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">PELAYANAN KHUSUS</span>
                    </button>
                </div>

                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'search' }}';" style="background: none; border: none; position: relative; width: 100%;">
                        <img src="{{ asset('image/progres .png') }}" alt="progres" style="width: 100%; height: auto;">
                        <span style="display: block; text-align: center; font-size: 28px;">PROGRESS PERMOHONAN</span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{$totalRequests}}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>
                </div>
                
                <div class="col-md-3">
                    <button type="button" onclick="window.location.href='{{ 'biodata' }}'; "
                        style=" background: none; border: none;">
                        <img src="{{ asset('image/edit.png') }}" alt="edit" style="width: 100%; height: auto; ">
                        <span style="display: block; text-align: center; font-size: 28px;">BIODATA USER</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection
