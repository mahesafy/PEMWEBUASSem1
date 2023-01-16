-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2023 pada 17.02
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(3, '63c56f740bb96-1673883508', '2023-01-16 22:38:28', '1'),
(4, '63c56f8c56f7d-1673883532.png', '2023-01-16 22:38:52', '1'),
(5, '63c5712150416-1673883937.png', '2023-01-16 22:45:37', '1'),
(6, '63c57241e817d-1673884225.png', '2023-01-16 22:50:25', '1'),
(7, '63c5728c0dafa-1673884300.png', '2023-01-16 22:51:40', '1'),
(8, '63c573c7a7a89-1673884615.png', '2023-01-16 22:56:55', '1'),
(9, '63c57407efcde-1673884679.png', '2023-01-16 22:57:59', '1'),
(10, '63c574152886c-1673884693.png', '2023-01-16 22:58:13', '1'),
(11, '63c5743be7e31-1673884731.png', '2023-01-16 22:58:51', '1'),
(12, '63c574449c5a8-1673884740.png', '2023-01-16 22:59:00', '1'),
(13, '63c57507b76b3-1673884935.png', '2023-01-16 23:02:15', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `processor` text NOT NULL,
  `memory` int(11) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `graphics` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laptops`
--

INSERT INTO `laptops` (`id`, `brand`, `image`, `model`, `price`, `processor`, `memory`, `storage`, `graphics`, `date`) VALUES
(7, 'Asus', '63c574449c5a8-1673884740.png', 'Asus ROG Zephyrus Duo 16 (2022) GX650', '6309.00', 'AMD Ryzen 9 6900HX 3.3GHz', 64, '8TB SSD + 8TB SSD', 'Nvidia GeForce RTX 3070 Ti', '2023-01-09'),
(8, 'MSI ', '63c57507b76b3-1673884935.png', 'MSI GE76 Raider 12UHS 239', '3199.00', 'Intel Core i9-12900HK 2.5GHz', 64, '2TB SSD + 1TB SSD', 'Nvidia GeForce RTX 3080 Ti', '2023-01-11'),
(9, 'MSI ', '', 'MSI GT77 Titan 12UHS-006', '3199.00', 'Intel Core i9-12900HX 2.3GHz', 64, '2TB SSD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(10, 'ASUS ', '', 'ASUS Zenbook Pro 16X ', '2950.00', 'Intel Core i9-12900H 2.5GHz', 32, '2TB SSD', 'Nvidia GeForce RTX 3060', '11/01/2023'),
(11, 'MSI ', '', 'MSI GS77 Stealth 12UHS-040', '3199.00', 'Intel Core i9-12900H 1.8GHz', 32, '1TB SDD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(12, 'Asus ', '', 'Asus ROG Flow X13 (2022) GV301', '1770.00', 'AMD Ryzen 9 6900HS 3.3GHz', 32, '1TB SSD', 'Nvidia GeForce RTX 3050 Ti', '11/01/2023'),
(13, 'Gigabyte ', '', 'Gigabyte AERO 16 YE5', '2899.00', 'Intel Core i9-12900HK 2.5GHz', 16, '2TB SSD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(14, 'Asus ', '', 'Asus ROG Strix Scar 15 (2022) G533', '1984.00', 'Intel Core i9-12900H 2.5GHz', 64, '2TB SSD', 'Nvidia GeForce RTX 3080', '11/01/2023'),
(15, 'Razer ', '', 'Razer Blade 17 4K Touch', '3750.00', 'Intel Core i9-11900H 2.5GHz', 32, '1TB SSD', 'Nvidia GeForce RTX 3080', '11/01/2023'),
(22, 'asd', '63c570c1f342d-1673883841.', 'asd', '12.00', '12', 12, '12', '12', '2023-01-16'),
(23, 'asd', '63c5712150416-1673883937.png', 'asd', '2672.00', 'Intel Core i9-11980HK 2.6GHz', 12, '12', 'asd', '2023-01-10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
