<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>request proccess</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .status-approved {
            background-color: #07f33e;
            /* Warna hijau */
        }

        .status-rejected {
            background-color: #f30707;
            /* Warna merah */
        }

        .status-proccess {
            background-color: #f3d707;
            /* Warna kuning */
        }
    </style>
</head>

</head>

<body>
    <h1>Data Request </h1>

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

                    <td>
                        @if ($userRequest->status == 'proccess')
                            <form action="{{ route('approve-request', $userRequest->id) }}" method="POST">
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
