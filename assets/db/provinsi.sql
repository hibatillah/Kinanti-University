-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2020 pada 15.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_mahasiswa_baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
('Aceh'), ('Sumatera Utara'), ('Sumatera Barat'), ('Riau'), 
('Jambi'), ('Sumatera Selatan'), ('Bengkulu'), ('Lampung'),
('Kepulauan Bangka Belitung'), ('Kepulauan Riau'),
('DKI Jakarta'), ('Jawa Barat'), ('Jawa Tengah'),
('DI Yogyakarta'), ('Jawa Timur'), ('Banten'),
('Bali'), ('Nusa Tenggara Barat'), ('Nusa Tenggara Timur'),
('Kalimantan Barat'), ('Kalimantan Tengah'),
('Kalimantan Selatan'), ('Kalimantan Timur'),
('Kalimantan Utara'), ('Sulawesi Utara'), ('Papua'), 
('Sulawesi Tengah'), ('Sulawesi Selatan'),
('Sulawesi Tenggara'), ('Gorontalo'), ('Sulawesi Barat'),
('Maluku'), ('Maluku Utara'), ('Papua Barat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
