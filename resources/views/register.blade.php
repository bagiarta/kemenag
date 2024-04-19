<!DOCTYPE html>
<html lang="en">
@extends('layouts.logins')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <h1> Registrasi </h1>

    <form action="{{ route('register.custom') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <button type="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Klik disini untuk login</a></p>
</body>

</html>
