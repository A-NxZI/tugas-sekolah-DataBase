<?php
// =========================================================
// koneksi.php
// Sesuaikan $host, $user, $pass, $db dengan konfigurasi
// MySQL/XAMPP/Laragon di komputer Anda
// =========================================================

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_mahasiswa';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}

mysqli_set_charset($koneksi, 'utf8mb4');
