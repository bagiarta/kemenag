@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <center>
        <center>
            <h1>DASHBOARD ADMIN</h1>
            <p>Selamat datang di Dashboard admin</p>
        </center>

        <div style="margin-top: 40px; display: flex; justify-content: space-between; text-align: center; margin-top: 20px;">
            <div>
                <button style="border: none; background: none; cursor: pointer;">
                    <a href="{{ 'search' }}">
                        <img src="{{ asset('image\progres .png') }}" alt="Icon 1" style="max-width: 50%;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    </a>
                </button>
                <p>Proggres</p>
            </div>
            <div>
                <button style="border: none; background: none; cursor: pointer;">
                    <a href="{{ url('...') }}">
                        <img src="{{ asset('image\user.png') }}" alt="Icon 1" style="max-width: 50%;">
                    </a>
                </button>
                <p>User</p>
            </div>
            <div>
                <button style="border: none; background: none; cursor: pointer;">
                    <a href="{{ url('...') }}">
                        <img src="{{ asset('image\pegawai.png') }}" alt="Icon 1" style="max-width: 50%;">
                    </a>
                </button>
                <p>Pegawai</p>
            </div>
        </div>
    @endsection
