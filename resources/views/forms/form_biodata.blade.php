<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata</title>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>BIODATA</h1>
        <form action="{{ route('updatebiodata') }}" method="GET">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" value="{{ $user->nik }}" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $user->name }}" readonly>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" @readonly(true)>
            {{-- <label for="ttl">TTL</label>
            <input type="date" name="ttl" id="ttl" readonly><br>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" name="gender" id="gender" value="laki-laki" readonly>
            <label for="gender">Laki-laki</label>
            <input type="radio" name="gender" id="gender" value="perempuan" readonly>
            <label for="gender">Perempuan</label><br><br>
            <label for="agama">Agama</label>
            <input type="text" name="agama" id="agama"@readonly(true)>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" readonly>
            <label for="telepon">TELEPON</label>
            <input type="text" name="telepon" id="telepon" readonly>
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" readonly> --}}
            <label for="ttl">TTL</label>
            <input type="date" name="ttl" id="ttl" value="{{ $user->biodata != null ? $user->biodata->ttl : null }} " readonly><br>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" name="gender" id="gender" value="laki-laki"
                {{ $user->biodata != null ? ($user->biodata->gender == 'laki-laki' ? 'checked' : '') : null }} readonly>
            <label for="gender">Laki-laki</label>
            <input type="radio" name="gender" id="gender" value="perempuan"
                {{ $user->biodata != null ? ($user->biodata->gender == 'perempuan' ? 'checked' : '') : null }} readonly>
            <label for="gender">Perempuan</label><br><br>
            <label for="agama">Agama</label>
            <input type="text" name="agama" id="agama"
                value="{{ $user->biodata != null ? $user->biodata->agama : null }}" readonly>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"
                value="{{ $user->biodata != null ? $user->biodata->alamat : null }}" readonly>
            <label for="telepon">TELEPON</label>
            <input type="text" name="telepon" id="telepon"
                value="{{ $user->biodata != null ? $user->biodata->telepon : null }}" readonly>
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan"
                value="{{ $user->biodata != null ? $user->biodata->pekerjaan : null }}" readonly>

            <a class="btn-primary" href="{{ route('updatebiodata') }}">Ubah</a>
            <button type="reset">Batal</button>
        </form>

</body>
