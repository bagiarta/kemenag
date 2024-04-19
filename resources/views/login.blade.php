<!DOCTYPE html>
<html lang="en">
@extends('layouts.logins')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login.custom') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email Address">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="{{ route('register-user') }}">Klik disini untuk mendaftar</a></p>
    </div>
</body>

</html>
