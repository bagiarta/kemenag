<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kua</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
@vite(['resources/sass/app.scss','resources/js/app.js'])
<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>KUA</h1>
        <form action="{{ route('user-requests.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <label for="nomor_permohonan">Nomor Permohonan:</label>
            <input type="text" id="nomor_permohonan" name="nomor_permohonan" readonly>

            <label for="layanan">Pilih Layanan:</label>
            <select id="layanan" name="layanan" required>
                <option value="SP Khusus WA Siaga">SP Khusus WA Siaga</option>
                <option value="SP Layanan Khusus">SP Layanan Khusus</option>
                <option value="SP Layanan Antar Jemput Berkas">SP Layanan Antar Jemput Berkas</option>
            </select>

            <p>Persyaratan:</p>
            <ul>
                <p>Mengajukan SP Khusus WA Siaga/ SP Layanan Khusus/
                    SP Layanan Antar Jemput Berkas Ke Kantor Kementerian Agama Kabupaten Bangli
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
            <textarea id="remarks" name="remarks" required></textarea>

            <label for="file_proposal">Upload File Proposal:</label>
            <input type="file" id="files" name="files" required>

            <div style="display: flex; justify-content: space-between;">
                <button type="submit" style="width: 48%;">Simpan</button>
                <button type="reset" onclick="window.history.back();" style="width: 48%;">Kembali</button>
            </div>
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
