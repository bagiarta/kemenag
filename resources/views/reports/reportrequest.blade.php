<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Process</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .status-approved {
            background-color: #d4edda;
        }
        .status-rejected {
            background-color: #f8d7da;
        }
        .status-proccess {
            background-color: #fff3cd;
        }
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        .center-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .center-image img {
            max-width: 100%;
            height: auto;
            width: 400px; /* Atur lebar gambar sesuai kebutuhan */
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="center-image">
            <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <form method="GET" action="{{ route('search') }}" class="form-inline">
                <input type="text" name="search" class="form-control mr-2" placeholder="Cari..." value="{{ request()->input('search') }}">
                <select name="status" class="form-control mr-2">
                    <option value="all">Semua Status</option>
                    <option value="approved" {{ request()->input('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ request()->input('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="proccess" {{ request()->input('status') == 'proccess' ? 'selected' : '' }}>Proccess</option>
                </select>
                <button type="submit" class="btn btn-primary mr-2">Cari</button>
                <button type="reset" onclick="window.history.back();" class="btn btn-secondary">Kembali</button>
            </form>
            <a href="{{ route('generate-report', ['search' => request()->input('search'), 'status' => request()->input('status')]) }}" class="btn btn-success">
                Unduh PDF
            </a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nomor Permohonan</th>
                    <th>Layanan</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Catatan</th>
                    <th>Status</th>
                    <th>Alasan</th>
                    <th>Aksi</th>
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
                        <td class="
                            @if ($userRequest->status == 'approved') status-approved
                            @elseif($userRequest->status == 'rejected') status-rejected
                            @elseif($userRequest->status == 'proccess') status-proccess @endif
                        ">
                            {{ $userRequest->status }}
                        </td>
                        <td>{{ $userRequest->reason }}</td>
                        <td>
                            @if (auth()->user()->role == 'admin' && $userRequest->status == 'proccess')
                                <div class="action-buttons">
                                    <form action="{{ route('approve-request', $userRequest->id) }}" method="POST" class="mr-1">
                                        @csrf
                                        <input type="text" name="reason" class="form-control mb-2" placeholder="Alasan approve">
                                        <button type="submit" class="btn btn-success">Approve</button>
                                    </form>
                                    <form action="{{ route('reject-request', $userRequest->id) }}" method="POST" class="mr-1">
                                        @csrf
                                        <input type="text" name="reason" class="form-control mb-2" placeholder="Alasan reject">
                                        <button type="submit" class="btn btn-danger">Reject</button>
                                    </form>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>