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
            @csrf
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" readonly>
            <label for="email">Email</label>
            <input type="email" id="email" name="email"@readonly(true)>
            <label for="ttl">TTL</label>
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
            <input type="text" name="pekerjaan" id="pekerjaan" readonly>

            <button type="submit">Ubah <a href='{{ 'updatebiodata' }};'></a></button>
            <button type="reset">Batal</button>

</body>