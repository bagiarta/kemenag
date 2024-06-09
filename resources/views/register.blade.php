<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
@vite(['resources/sass/app.scss','resources/js/app.js'])
<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1> Registrasi </h1>

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            @if (session()->has('success'))
                <p>{{ session()->get('success') }}</p>
            @endif
            <label for="NIK">NIK</label>
            <input type="text" name="nik" placeholder="nik" required>
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="nama" required>
            @if ($errors->has('nama'))
                <div class="error">{{ $errors->first('nama') }}</div>
            @endif
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required>

            <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                <button type="submit" style="width: 48%;">Simpan</button>
                <button type="reset" onclick="window.history.back();" style="width: 48%;">Kembali</button>
            </div>
            

        </form>

        <p style="text-align: center">Sudah punya akun? <a href="{{ route('login') }}">login</a></p>
</body>

</html>
