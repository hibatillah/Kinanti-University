-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 01:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinantiuniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `alamat_id` int(4) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `pendaftar_id` int(4) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `nik_pendaftar` varchar(20) NOT NULL,
  `tempatlahir_pendaftar` varchar(100) NOT NULL,
  `tanggallahir_pendaftar` date NOT NULL,
  `kewarganegaraan_pendaftar` varchar(10) NOT NULL,
  `email_pendaftar` varchar(50) NOT NULL,
  `telp_pendaftar` int(15) NOT NULL,
  `agama_pendaftar` varchar(20) NOT NULL,
  `jk_pendaftar` enum('Laki-laki','Perempuan') NOT NULL,
  `wali_id` int(4) DEFAULT NULL,
  `alamat_id` int(4) DEFAULT NULL,
  `pendidikan_id` int(4) DEFAULT NULL,
  `pilihprodi_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `wali_id` int(4) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `tempatlahir_wali` varchar(100) NOT NULL,
  `tanggallahir_wali` date NOT NULL,
  `kewarganegaraan_wali` varchar(10) NOT NULL,
  `telp_wali` int(15) NOT NULL,
  `penghasilan_wali` varchar(20) NOT NULL,
  `agama_wali` varchar(20) NOT NULL,
  `jk_wali` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_akhir`
--

CREATE TABLE `pendidikan_akhir` (
  `pendidikan_id` int(4) NOT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `jurusan_sekolah` varchar(50) DEFAULT NULL,
  `nilai_akhir` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pilih_prodi`
--

CREATE TABLE `pilih_prodi` (
  `pilihprodi_id` int(4) NOT NULL,
  `prodi1` varchar(20) NOT NULL,
  `prodi2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email_user`, `password_user`) VALUES
(1, 'habib', 'hibatillah21si@mahasiswa.pcr.ac.id', '1391921ec73a2f5dff54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`alamat_id`);

--
-- Indexes for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`pendaftar_id`),
  ADD KEY `fk_wali` (`wali_id`),
  ADD KEY `fk_alamat` (`alamat_id`),
  ADD KEY `fk_pendidikan` (`pendidikan_id`),
  ADD KEY `fk_prodi` (`pilihprodi_id`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`wali_id`);

--
-- Indexes for table `pendidikan_akhir`
--
ALTER TABLE `pendidikan_akhir`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `pilih_prodi`
--
ALTER TABLE `pilih_prodi`
  ADD PRIMARY KEY (`pilihprodi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `alamat_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  MODIFY `pendaftar_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `wali_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan_akhir`
--
ALTER TABLE `pendidikan_akhir`
  MODIFY `pendidikan_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilih_prodi`
--
ALTER TABLE `pilih_prodi`
  MODIFY `pilihprodi_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD CONSTRAINT `fk_alamat` FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`alamat_id`),
  ADD CONSTRAINT `fk_pendidikan` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan_akhir` (`pendidikan_id`),
  ADD CONSTRAINT `fk_prodi` FOREIGN KEY (`pilihprodi_id`) REFERENCES `pilih_prodi` (`pilihprodi_id`),
  ADD CONSTRAINT `fk_wali` FOREIGN KEY (`wali_id`) REFERENCES `data_wali` (`wali_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
