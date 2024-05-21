<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>request proccess</title>
</head>

<body>
    <h1>Poccess Request </h1>

    <table>
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
                    <td>{{ $userRequest->status }}</td>

                    <td>
                        @if ($userRequest->status == 'pending')
                            <form action="{{ route('aprrove-request', $userRequest->id) }}" method="POST">
                                @csrf
                                <button type="submit">Approve</button>
                            </form>
                            <form action="{{ route('reject-request', $userRequest->id) }}" method="POST">
                                @csrf
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
