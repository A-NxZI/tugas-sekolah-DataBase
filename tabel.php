<?php
require 'koneksi.php';

$query = "SELECT * FROM mahasiswa ORDER BY id ASC";
$hasil = mysqli_query($koneksi, $query);
?>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="mystyle.css" media="all" />
</head>
<body>
<h2>DATA MAHASISWA</h2>
<table class='dttabel' width='100%'>
    <tr>
        <th>No.</th>
        <th>No. Induk</th>
        <th>Nama Mahasiswa</th>
        <th>JK</th>
        <th>Tgl. Lahir</th>
        <th>Alamat</th>
        <th>Dosen Pembimbing</th>
        <th>No. Telepon</th>
    </tr>

    <?php
    $no = 1;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . htmlspecialchars($baris['no_induk']) . "</td>";
        echo "<td>" . htmlspecialchars($baris['nama']) . "</td>";
        echo "<td>" . htmlspecialchars($baris['jk']) . "</td>";
        echo "<td>" . date('d-m-Y', strtotime($baris['tgl_lahir'])) . "</td>";
        echo "<td>" . htmlspecialchars($baris['alamat']) . "</td>";
        echo "<td>" . htmlspecialchars($baris['dosen']) . "</td>";
        echo "<td>" . htmlspecialchars($baris['telp']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<a href='add.html'>Add Data</a>
</body>
</html>
