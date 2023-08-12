-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2023 pada 16.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_melati`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `keahlian` enum('Pediatric','Orthopedic','Nutritionist','Anaesthestic') NOT NULL,
  `gambar` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `umur`, `keahlian`, `gambar`) VALUES
(1, 'Faizal Maulana', '20', 'Orthopedic', 'Dokter1.jpg'),
(2, 'Shidqi Ahmad', '20', 'Pediatric', 'Dokter1.jpg'),
(3, 'Attila Ghozali', '20', 'Nutritionist', 'Dokter1.jpg'),
(4, 'Hafizhan Noor Amril', '20', 'Anaesthestic', 'Dokter1.jpg'),
(5, 'Zahidan', '20', 'Orthopedic', 'Dokter1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `gambar_obat` blob NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_obat` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `produsen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `gambar_obat`, `nama_penyakit`, `jenis_obat`, `harga_obat`, `deskripsi`, `produsen`) VALUES
(1, 'Ibuprofen', '', 'Orthopedic', 'Tablet', 25000, '', 'Pharos'),
(2, 'Curcuma Plus', '', 'Nutritionist', 'Sirup', 30000, '', 'Soho Industri Pharmasi'),
(3, 'Panadol', '', 'Pediatric', 'Tablet', 14000, '', 'Sterling'),
(4, 'Petidin HCL', '', 'Anaesthestic', 'Suntik', 1750000, '', 'Generk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjanjian`
--

CREATE TABLE `perjanjian` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_temu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perjanjian`
--

INSERT INTO `perjanjian` (`id`, `nama`, `email`, `spesialis`, `umur`, `jk`, `tanggal_pesan`, `tanggal_temu`) VALUES
(5, 'Raqwan', 'mraqwan@gmail.com', 'Dokter Anak', '19', 'Laki-Laki', '2023-07-17 03:19:04', '2023-07-16 17:00:00'),
(6, 'Zira Alifa Resanti', 'zira@gmail.com', 'Dokter Gigi', '19', 'Perempuan', '2023-08-12 14:17:07', '2023-08-11 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
