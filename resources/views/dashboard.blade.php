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
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_ppid'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnppid.png') }}" alt="ppid" style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_bankdata';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnbankdata.png') }}" alt="bank data"
                                style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_request';"
                            style=" background: none; border: none;">

                            <img src="{{ asset('image/btnrequest.png') }}" alt="request"
                                style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_consult'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnconsult.png') }}" alt="consult"
                                style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_bergizi';"
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnbergizi.png') }}" alt="bergizi"
                                style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_messi';"
                            style=" background: none; border: none;">

                            <img src="{{ asset('image/btnmessi.png') }}" alt="messi" style="width: 100%; height: auto; ">
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" onclick="window.location.href='link_ke_services'; "
                            style=" background: none; border: none;">
                            <img src="{{ asset('image/btnservices.png') }}" alt="services"
                                style="width: 100%; height: auto; ">
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="moreicon ">
            <div class="row justify-content-center">
                <img src="moreicon1.jpg" alt="icon1">
                <img src="moreicon2.jpg" alt="icon2">
            </div>
        </div>
        <!-- Peta lokasi -->
        <div class="maps">
            <!-- tambahkan kode peta-->
        </div>
    @endsection
