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

        <form action="{{ route('register.custom') }}" method="POST">
            @csrf
            <input type="text" name="nik" placeholder="Full Name">
            <input type="text" name="nama" placeholder="nama">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Daftar</button>
        </form>

        <p style="text-align: center">Sudah punya akun? <a href="{{ route('login') }}">login</a></p>
</body>

</html>
