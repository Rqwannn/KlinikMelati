-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2021 pada 09.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `umur`, `keahlian`, `gambar`) VALUES
(1, 'Muhammad Raqwan', '20', 'Orthopedic', 'Dokter1.jpg'),
(2, 'Haura Oktavia', '20', 'Pediatric', 'Dokter1.jpg'),
(3, 'Nadia Eka', '20', 'Nutritionist', 'Dokter1.jpg'),
(4, 'Rizki Ramadhan', '20', 'Anaesthestic', 'Dokter1.jpg'),
(5, 'Siti Hamidah', '20', 'Orthopedic', 'Dokter1.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perjanjian`
--

INSERT INTO `perjanjian` (`id`, `nama`, `email`, `spesialis`, `umur`, `jk`, `tanggal_pesan`, `tanggal_temu`) VALUES
(1, 'Haura', 'haura@gmail.com', 'Dokter Anak', '17', 'Perempuan', '2021-03-11 09:42:20', '2021-03-10 17:00:00'),
(2, 'raqwan', 'raqwan@gmail.com', 'Dokter Gigi', '17', 'Laki-Laki', '2021-03-11 09:42:20', '2021-03-13 17:00:00'),
(3, 'Risky', 'risky@gmail.com', 'Dokter Umum', '17', 'Laki-Laki', '2021-03-11 09:49:59', '2021-03-10 17:00:00'),
(4, 'Nadia', 'nadia@gmail.com', 'Dokter Umum', '17', 'Perempuan', '2021-03-11 09:53:42', '2021-03-11 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
