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

    <a
        href="{{ route('generate-report', ['search' => request()->input('search'), 'status' => request()->input('status')]) }}">
        <button>Download Pdf</button>
    </a>
    <form method="GET" action="{{ route('search') }}">
        <input type="text" name="search" placeholder="Cari..." value="{{ request()->input('search') }}">
        <select name="status">
            <option value="all">Semua Status</option>
            <option value="approved" {{ request()->input('status') == 'approved' ? 'selected' : '' }}>Approved</option>
            <option value="rejected" {{ request()->input('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            <option value="proccess" {{ request()->input('status') == 'proccess' ? 'selected' : '' }}>Proccess</option>
        </select>
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Nomor Permohonan </th>
                <th>Layanan</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>catatan</th>
                <th>Status</th>
                <th>Alasan</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($userRequests as $userRequest)
                <tr>
                    <td>{{ $userRequest->req_no }}</td>
                    <td>{{ $userRequest->layanan }}</td>
                    <td>{{ $userRequest->email }}</td>
                    <td>{{ $userRequest->nama }}</td>
                    <td>{{ $userRequest->telepon }}</td>
                    <td>{{ $userRequest->alamat }}</td>
                    <td>{{ $userRequest->remarks }}</td>
                    <td
                        class="
                        @if ($userRequest->status == 'approved') status-approved
                        @elseif($userRequest->status == 'rejected') status-rejected
                        @elseif($userRequest->status == 'proccess') status-proccess @endif
                    ">
                        {{ $userRequest->status }}
                    </td>
                    <td>{{ $userRequest->reason }}</td>

                    <td>
                        @if ($userRequest->status == 'proccess')
                            <form action="{{ route('approve-request', $userRequest->id) }}" method="POST">
                                @csrf
                                <input type="text" name="reason" placeholder="Alasan approve">
                                <button type="submit">Approve</button>
                            </form>
                            <form action="{{ route('reject-request', $userRequest->id) }}" method="POST">
                                @csrf
                                <input type="text" name="reason" placeholder="Alasan reject">
                                <button type="submit">Reject</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
