CREATE DATABASE IF NOT EXISTS db_mahasiswa;
USE db_mahasiswa;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    no_induk VARCHAR(12) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jk ENUM('L','P') NOT NULL DEFAULT 'L',
    tgl_lahir DATE NOT NULL,
    alamat TEXT NOT NULL,
    dosen VARCHAR(50) NOT NULL,
    telp VARCHAR(50) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data contoh sesuai buku (halaman 181)
INSERT INTO mahasiswa (no_induk, nama, jk, tgl_lahir, alamat, dosen, telp) VALUES
('160202340010', 'Agus',  'L', '1990-10-02', 'Malang',   'Bambang',   '081233456789'),
('160202340013', 'Budi',  'L', '1989-02-03', 'Surabaya', 'Atin',      '081145673456'),
('160202340017', 'Cahya', 'P', '1991-05-06', 'Blitar',   'Atin',      '081334556689'),
('160202340018', 'Doni',  'L', '1990-12-05', 'Malang',   'Samsuddin', '-');
