<!DOCTYPE html>
<html lang="en">
@extends('layouts.logins')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffffea;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.507);
            width: 95%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #080808;
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="password"],
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            color: #000000;
            margin-top: 10px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <img src="{{ asset('image/logo.png') }}" alt=""
        style="width: 50%; height: auto; padding: 10px; ">
        <form action="{{ route('login.custom') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="{{ route('register-user') }}">Klik disini untuk mendaftar</a></p>
    </div>
</body>
</html>

