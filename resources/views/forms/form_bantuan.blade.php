<!DOCTYPE html>
<html lang="en">
@extends('layouts.formslayout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bantuan pemerintah</title>
</head>

<body>
    <div class="banner">
        <img src="{{ asset('image/kopsurat.png') }}" alt="banner">
        <h1>BANTUAN PEMERINTAH</h1>
        <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <label for="nomor_permohonan">Nomor Permohonan:</label>
            <input type="text" id="nomor_permohonan" name="nomor_permohonan" readonly>

            <label for="layanan">Pilih Layanan:</label>
            <select id="layanan" name="layanan" required>
                <option value="Pembangunan/Rehabilitasi Tempat Ibadah">Pembangunan/Rehabilitasi Tempat Ibadah
                </option>
                <option value="Bantuan Sarana dan Prasarana Tempat Ibadah">Bantuan Sarana dan Prasarana Tempat Ibadah
                </option>
                <option value="Bantuan Lembaga Keagamaan">Bantuan Lembaga Keagamaan</option>
                <option value=" Bantuan BOS/PIP"> Bantuan BOS/PIP</option>
                <option value="Bantuan KKG/MGMP">Bantuan KKG/MGMP</option>
            </select>

            <p>Persyaratan:</p>
            <ul>
                <p>Mengajukan Bantuan Pembangunan/Rehabilitasi Tempat Ibadah/ Bantuan Sarana dan Prasarana Tempat
                    Ibadah/ Bantuan Lembaga Keagamaan/Bantuan BOS/PIP/ Bantuan KKG/MGMP Ke Kantor Kementerian Agama
                    Kabupaten Bangli
                </p>
                <ul>
                    <P>SOP Pelayanan dan Dokumen Terkait bisa di <a href="#">download</a> </P>
                    <li>Standar Pelayanan Permohonan Izin Pendirian</li>
                    <li>SOP Permohonan Izin Pendirian</li>
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
            <textarea id="catatan_tambahan" name="catatan_tambahan"></textarea>

            <label for="file_proposal">Upload File Proposal:</label>
            <input type="file" id="file_proposal" name="file_proposal">

            <button type="submit">Simpan</button>
        </form>
</body>

</html>
