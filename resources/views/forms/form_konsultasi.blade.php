<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konsultasi informasi</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>KONSULTASI DAN INFORMASI</h1>
        <form action="{{ route('user-requests.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <label for="nomor_permohonan">Nomor Permohonan:</label>
            <input type="text" id="nomor_permohonan" name="nomor_permohonan" readonly>

            <label for="layanan">Pilih Layanan:</label>
            <select id="layanan" name="layanan" required>
                <option value="Informasi   Jadwal Imsakyah">Informasi Jadwal Imsakyah</option>
                <option value="Informasi   Bantuan Pemerintah">Informasi Bantuan Pemerintah</option>
                <option value="Informasi   Data Agama, Pendidikan Agama dan Pendidikan Keagamaan">Informasi Data Agama,
                    Pendidikan Agama dan Pendidikan Keagamaan</option>
                <option value="Permohonan Audiensi/Konsultasi"> Permohonan Audiensi/Konsultasi</option>
            </select>

            <p>Persyaratan:</p>
            <ul>
                <p>Mengajukan Informasi Jadwal Imsakyah/ Sholat/Informasi Bantuan Pemerintah/
                    Informasi Data Agama, Pendidikan Agama dan Pendidikan Keagamaan /Permohonan Audiensi/
                    Konsultasi Ke Kantor Kementerian Agama Kabupaten Bangli
                </p>
                <ul>
                    <P>SOP Pelayanan dan Dokumen Terkait bisa di <a href="#">download</a></P>
                    <li>Standar Pelayanan Permohonan Bantuan</li>
                    <li>SOP Permohonan Bantuan</li>
                    <li>Contoh Proposal</li>
                </ul>
            </ul>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="catatan_tambahan">Catatan Tambahan:</label>
            <textarea id="remarks" name="remarks"></textarea>

            <label for="file_proposal">Upload File Proposal:</label>
            <input type="file" id="file_proposal" name="file_proposal">

            <button type="submit">Simpan</button>
        </form>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}'
                });
            </script>
        @endif
</body>

</html>
