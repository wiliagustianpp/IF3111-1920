-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2019 pada 17.35
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(20) NOT NULL,
  `author` varchar(35) NOT NULL,
  `isi` varchar(512) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `lampiran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `author`, `isi`, `judul`, `kategori`, `waktu`, `lampiran`) VALUES
(1, 'ARIF WICAKSONO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Prasarana Gedung Serba Guna', 'Infrastruktur', '2019-11-01 05:14:00', 'user.img');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
