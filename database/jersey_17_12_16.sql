-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2016 pada 20.15
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jersey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_jersey`
--

CREATE TABLE `kat_jersey` (
  `id_kat_jersey` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kat_jersey`
--

INSERT INTO `kat_jersey` (`id_kat_jersey`, `kategori`) VALUES
('FC_BARCELONA', 'Barcelona'),
('FC_CHELSEA', 'Chelsea'),
('FC_MANU', 'Manchester United'),
('FC_RM', 'Real Madrid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` char(12) NOT NULL,
  `alamat` text NOT NULL,
  `id_prov` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `password`, `nama`, `email`, `no_telp`, `alamat`, `id_prov`, `tgl`) VALUES
('avril', 'avril', 'Avril Manis Cantik', 'avril@gmail.com', '057675767657', 'Jl. xxxx No.xx RT xxx RW xxx, Keca. XXXJl. xxxx No.xx RT xxx RW xxx, Keca. XXXJl. xxxx No.xx RT xxx RW xxx, Keca. XXXJl. xxxx No.xx RT xxx RW xxx, Keca. XXXJl. xxxx No.xx RT xxx RW xxx, Keca. XXXJl. xxxx No.xx RT xxx RW xxx, Keca. XXX', 5, '2016-12-16 16:55:19'),
('ciles', 'ciles', 'Ciles Raeuwa', 'raewura@gmail.com', '057675767657', 'Jl. xxxx No.xx RT xxx RW xxx, Keca. XXX', 5, '2016-12-16 16:55:27'),
('purnomo', 'purnomo', 'Purnomo Lamala', 'lamala@gmail.com', '057675767657', 'gkfdfghjhgfdfdghfdfdsdd', 4, '2016-12-16 16:55:36'),
('sriwah', 'sriwah', 'Sri Wahyuni', 'wahyunisirii277@gmail.com', '057675767657', 'Jl. xxxx No.xx RT xxx RW xxx, Keca. XXX', 1, '2016-12-16 16:55:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_prov` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `biaya_kirim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_prov`, `provinsi`, `biaya_kirim`) VALUES
(1, 'Sumatera Selatan', 25000),
(2, 'Sumatera Utara', 10000),
(3, 'Sulaewsi Utara', 12000),
(4, 'Sulawesi Tengah', 2010),
(5, 'Nusa Tenggara Timur', 13000),
(6, 'Nusa Tenggara Barat', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('ciles', 'ciles', 'Ciles', 'operator'),
('husni', 'husni', 'Muh Husni Mubaraq', 'operator'),
('muas', 'muas', 'Mukhlis Muas', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kat_jersey`
--
ALTER TABLE `kat_jersey`
  ADD PRIMARY KEY (`id_kat_jersey`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
