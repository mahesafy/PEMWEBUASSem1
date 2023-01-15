-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jan 2023 pada 20.07
-- Versi server: 8.0.31
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptops`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
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
-- Struktur dari tabel `laptops`
--

CREATE TABLE `laptops` (
  `id` int NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `processor` text NOT NULL,
  `memory` int NOT NULL,
  `storage` varchar(255) NOT NULL,
  `graphics` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laptops`
--

INSERT INTO `laptops` (`id`, `brand`, `model`, `price`, `processor`, `memory`, `storage`, `graphics`, `date`) VALUES
(7, 'Asus', 'Asus ROG Zephyrus Duo 16 (2022) GX650', '6309.00', 'AMD Ryzen 9 6900HX 3.3GHz', 64, '8TB SSD + 8TB SSD', 'Nvidia GeForce RTX 3070 Ti', '11/01/2023'),
(8, 'MSI ', 'MSI GE76 Raider 12UHS 239', '3199.00', 'Intel Core i9-12900HK 2.5GHz', 64, '2TB SSD + 1TB SSD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(9, 'MSI ', 'MSI GT77 Titan 12UHS-006', '3199.00', 'Intel Core i9-12900HX 2.3GHz', 64, '2TB SSD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(10, 'ASUS ', 'ASUS Zenbook Pro 16X ', '2950.00', 'Intel Core i9-12900H 2.5GHz', 32, '2TB SSD', 'Nvidia GeForce RTX 3060', '11/01/2023'),
(11, 'MSI ', 'MSI GS77 Stealth 12UHS-040', '3199.00', 'Intel Core i9-12900H 1.8GHz', 32, '1TB SDD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(12, 'Asus ', 'Asus ROG Flow X13 (2022) GV301', '1770.00', 'AMD Ryzen 9 6900HS 3.3GHz', 32, '1TB SSD', 'Nvidia GeForce RTX 3050 Ti', '11/01/2023'),
(13, 'Gigabyte ', 'Gigabyte AERO 16 YE5', '2899.00', 'Intel Core i9-12900HK 2.5GHz', 16, '2TB SSD', 'Nvidia GeForce RTX 3080 Ti', '11/01/2023'),
(14, 'Asus ', 'Asus ROG Strix Scar 15 (2022) G533', '1984.00', 'Intel Core i9-12900H 2.5GHz', 64, '2TB SSD', 'Nvidia GeForce RTX 3080', '11/01/2023'),
(15, 'Razer ', 'Razer Blade 17 4K Touch', '3750.00', 'Intel Core i9-11900H 2.5GHz', 32, '1TB SSD', 'Nvidia GeForce RTX 3080', '11/01/2023'),
(23, 'Gigabyte', 'Gigabyte Aorus 17G YD', '3500.00', 'Intel Core i7-11800H 2.3GHz', 32, '512GB SSD', 'Nvidia GeForce RTX 3080', '15/01/2023');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
