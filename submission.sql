-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Sep 2021 pada 09.18
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `submission`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `nip` int(20) NOT NULL,
  `id_prog` int(11) NOT NULL,
  `nama_prog` varchar(100) NOT NULL,
  `nama_bijak` varchar(50) NOT NULL,
  `latar` text NOT NULL,
  `tujuan` text NOT NULL,
  `indikator` text NOT NULL,
  `pelaksana` varchar(50) NOT NULL,
  `jadwal` varchar(100) NOT NULL,
  `peserta` varchar(100) NOT NULL,
  `tempat` text NOT NULL,
  `nomor_dana` int(11) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `qty_dana` varchar(10) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `nomor_keg` int(11) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `qty_keg` varchar(10) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `jumlah_keg` varchar(30) NOT NULL,
  `total` varchar(50) NOT NULL,
  `direktur` varchar(50) NOT NULL,
  `keuangan` varchar(50) NOT NULL,
  `kepsek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `posisi_pekerjaan` varchar(50) NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `kode_bank` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_file`, `nip`, `username`, `posisi_pekerjaan`, `nomor_rekening`, `nama_rekening`, `nama_bank`, `kode_bank`, `password`, `level`) VALUES
(2, '', '1111111111', 'Anggitania', 'Admin Website', '111111111111111', 'Anggitania Aurien', 'Bank Central Asia', '014', 'letitgo0', 'Admin Website'),
(16, '', '1010101010', 'orel wakwaw', 'Admin Website', '101010101010101', 'orel', 'Bank Syariah Indonesia', 'Bank OCBC NISP', 'letitgo0', 'Admin Website'),
(17, '', '1010101010', 'Anggitania Aurien', 'Admin Website', '101010101010101', 'Anggitania Aurien', 'Bank Syariah Indonesia', '451', 'letitgo0', 'Admin Website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
