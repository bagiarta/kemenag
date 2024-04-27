<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Banner dengan gambar dan teks -->
            <div class="banner">
                <img src="{{ asset('image/kemenag1.png') }}" alt="banner" style="width: 40%; height: auto;">
                <p style="text-align: right;">Beranda Pusaka Kemenag RI Srikadi E-kinerja Panduan Haji dan Umrah Hubungi Kami
                </p>
                <img src="{{ asset('image/banner1.png') }}" alt="banner" style="width: 100%; height: auto;">
            </div>
        </div>
        <div class="col-md-12">
            <!-- Enam ikon kategori -->

            <div class="kategory">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href= '{{ route('login') }}';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnpublik.png') }}" alt="layanan publik"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">LAYANAN PUBLIK</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_ppid'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnppid.png') }}" alt="ppid" style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">PPID</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_bankdata';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnbankdata.png') }}" alt="bank data"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">BANK DATA</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_request';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnrequest.png') }}" alt="request"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">REQUEST</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_consult'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnconsult.png') }}" alt="consult"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">KONSULTASI</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_bergizi';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnbergizi.png') }}" alt="bergizi"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">BERGIZI</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_messi';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnmessi.png') }}" alt="messi" style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">MESSI</span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_services'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnservices.png') }}" alt="services"
                                style="width: 100%; height: auto; ">
                            <span style="display: block; text-align: center; font-size: 28px;">SERVICES</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    @endsection
