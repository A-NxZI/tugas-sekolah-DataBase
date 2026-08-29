<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $noinduk = trim($_POST['noinduk']);
    $nama    = trim($_POST['nama']);
    $jk      = $_POST['jk'];
    $tgllahir = $_POST['tgllahir'];
    $alamat  = trim($_POST['alamat']);
    $dosen   = trim($_POST['dosen']);
    $telp    = trim($_POST['telp']);

    // Validasi sederhana di sisi server (No. Induk, Nama, No. Telepon wajib diisi)
    if ($noinduk === '' || $nama === '' || $telp === '') {
        echo "<script>alert('Kolom harus diisi'); window.history.back();</script>";
        exit;
    }

    // Gunakan prepared statement agar aman dari SQL Injection
    $stmt = mysqli_prepare(
        $koneksi,
        "INSERT INTO mahasiswa (no_induk, nama, jk, tgl_lahir, alamat, dosen, telp)
         VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "sssssss",
        $noinduk,
        $nama,
        $jk,
        $tgllahir,
        $alamat,
        $dosen,
        $telp
    );

    if (mysqli_stmt_execute($stmt)) {
        header('Location: tabel.php');
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($koneksi);
