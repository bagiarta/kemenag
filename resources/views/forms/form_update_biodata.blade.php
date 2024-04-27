<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update biodata</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>UPDATE BIODATA</h1>
        <form action="{{ route('updatebiodata-post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" value="{{ $user->nik }}" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $user->name }}" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            <label for="ttl">TTL</label>
            <input type="date" name="ttl" id="ttl"
                value="{{ $user->biodata != null ? $user->biodata->ttl : null }}" required><br>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" name="gender" id="gender" value="laki-laki"
                {{ $user->biodata != null ? ($user->biodata->gender == 'laki-laki' ? 'checked' : '') : null }}>
            <label for="gender">Laki-laki</label>
            <input type="radio" name="gender" id="gender" value="perempuan"
                {{ $user->biodata != null ? ($user->biodata->gender == 'perempuan' ? 'checked' : '') : null }}>
            <label for="gender">Perempuan @required(true)</label><br><br>
            <label for="agama">Agama </label>
            <input type="text" name="agama" id="agama"
                value="{{ $user->biodata != null ? $user->biodata->agama : null }}" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"
                value="{{ $user->biodata != null ? $user->biodata->alamat : null }}" required>
            <label for="telepon">TELEPON</label>
            <input type="text" name="telepon" id="telepon"
                value="{{ $user->biodata != null ? $user->biodata->telepon : null }}"@required(true)>
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan"
                value="{{ $user->biodata != null ? $user->biodata->pekerjaan : null }}"@required(true)>

            <button type="submit">Simpan </button>
            <button type="reset">Batal</button>
        </form>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}'
            });
        </script>
    @endif

</body>
