<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>request proccess</title>
    @extends('layouts.reportlayout')
</head>

</head>

<body>
    <h1>Data Request </h1>

    <table border="1">
        <thead>
            <tr>
                <th>No Permohonan </th>
                <th>Layanan</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>catatan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userRequests as $userRequest)
                <tr>
                    <td>{{ $userRequest->req_no }}</td>
                    <td>{{ $userRequest->layanan }}</td>
                    <td>{{ $userRequest->nama }}</td>
                    <td>{{ $userRequest->telepon }}</td>
                    <td>{{ $userRequest->alamat }}</td>
                    <td>{{ $userRequest->remarks }}</td>
                    <td>{{ $userRequest->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
