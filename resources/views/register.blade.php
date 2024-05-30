<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1> Registrasi </h1>

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            @if (session()->has('success'))
                <p>{{ session()->get('success') }}</p>
            @endif
            <label for="nik">Nik</label>
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
            <button type="submit">Daftar</button>
            <button type="reset" onclick="window.history.back();" class="btn btn-secondary">
                Kembali
            </button>
        </form>

        <p style="text-align: center">Sudah punya akun? <a href="{{ route('login') }}">login</a></p>
</body>

</html>
