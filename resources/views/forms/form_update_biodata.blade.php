<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update biodata</title>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>UPDATE BIODATA</h1>
        <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" value="{{ $biodata->nik }}" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $biodata->nama }}">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $biodata->nama }}">
            <label for="ttl">TTL</label>
            <input type="date" name="ttl" id="ttl"><br>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" name="gender" id="gender" value="laki-laki"
                {{ $biodata->gender == 'laki-laki' ? 'checked' : '' }}>
            <label for="gender">Laki-laki</label>
            <input type="radio" name="gender" id="gender" value="perempuan"
                {{ $biodata->gender == 'perempuan' ? 'checked' : '' }}>
            <label for="gender">Perempuan</label><br><br>
            <label for="agama">Agama</label>
            <input type="text" name="agama" id="agama" value="{{ $biodata->agama }}">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{ $biodata->alamat }}">
            <label for="telepon">TELEPON</label>
            <input type="text" name="telepon" id="telepon" value="{{ $biodata->telepon }}">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" value="{{ $biodata->pekerjaan }}">

            <button type="submit">Simpan </button>
            <button type="reset">Batal</button>
        </form>
    </div>

</body>
