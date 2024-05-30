@extends('layouts.app')

@section('content')
<style>
    .btn-kategori {
        background: none;
        border: none;
        display: inline-block;
        text-align: center;
        width: 100%;
        padding: 0;
    }

    .btn-kategori img {
        max-width: 100%; /* mengatur gambar icon */
        height: auto;
    }

    .btn-text {
        display: block;
        text-align: center;   /* mengatur font */
        font-size: 28px;
        margin-top: 10px;
        color: black;
    }

    @media (max-width: 768px) {
        .btn-text {
            font-size: 24px; 
        }
    }

    @media (max-width: 576px) {
        .btn-text {
            font-size: 20px; 
        }
    }
</style>

<div class="row">
    <div class="col-md-12">
        <!-- Banner dengan gambar dan teks -->
        <div class="banner">
            <img src="{{ asset('image/banner1.png') }}" alt="banner" class="img-fluid">
        </div>
    </div>
    <div class="col-md-12">
        <!-- Enam ikon kategori -->
        <div class="kategori">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='{{ route('login') }}';" class="btn-kategori">
                        <img src="{{ asset('image/btnpublik.png') }}" alt="layanan publik" class="img-fluid mb-2">
                        <span class="btn-text">LAYANAN PUBLIK</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_ppid';" class="btn-kategori">
                        <img src="{{ asset('image/btnppid.png') }}" alt="ppid" class="img-fluid mb-2">
                        <span class="btn-text">PPID</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_bankdata';" class="btn-kategori">
                        <img src="{{ asset('image/btnbankdata.png') }}" alt="bank data" class="img-fluid mb-2">
                        <span class="btn-text">BANK DATA</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_request';" class="btn-kategori">
                        <img src="{{ asset('image/btnrequest.png') }}" alt="request" class="img-fluid mb-2">
                        <span class="btn-text">REQUEST</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_consult';" class="btn-kategori">
                        <img src="{{ asset('image/btnconsult.png') }}" alt="consult" class="img-fluid mb-2">
                        <span class="btn-text">KONSULTASI</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_bergizi';" class="btn-kategori">
                        <img src="{{ asset('image/btnbergizi.png') }}" alt="bergizi" class="img-fluid mb-2">
                        <span class="btn-text">BERGIZI</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_messi';" class="btn-kategori">
                        <img src="{{ asset('image/btnmessi.png') }}" alt="messi" class="img-fluid mb-2">
                        <span class="btn-text">MESSI</span>
                    </button>
                </div>
                <div class="col-6 col-md-4 mb-4 text-center">
                    <button type="button" onclick="window.location.href='link_ke_services';" class="btn-kategori">
                        <img src="{{ asset('image/btnservices.png') }}" alt="services" class="img-fluid mb-2">
                        <span class="btn-text">SERVICES</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


