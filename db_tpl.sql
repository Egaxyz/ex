-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 14.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `new_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `adm`
--

INSERT INTO `adm` (`id`, `username`, `password`, `new_password`) VALUES
(1, 'admin', '$2y$10$tVtDoB5v0W7WQOZgf5dEle4lZcN72LhQUvIQbQ9J4dc', '$2y$10$tVtDoB5v0W7WQOZgf5dEle4lZcN72LhQUvIQbQ9J4dcEm/fX11FQK'),
(2, 'admin2', '$2y$10$KnvPcWKpGXdat2LevozoMecc3uPpOrGy4aIVlP8T5rb', '$2y$10$KnvPcWKpGXdat2LevozoMecc3uPpOrGy4aIVlP8T5rbfcc6vVpLtS'),
(3, 'admin', '$2y$10$URfdmDycf107hDElJq9k3OejI1ZTbo.vriDjX4cpg6S', '$2y$10$URfdmDycf107hDElJq9k3OejI1ZTbo.vriDjX4cpg6S5s7F.nsree'),
(4, 'admin', '$2y$10$6JH0OA/P7tI0nZ8hdQoiRuMlZJen/c3C6R.pg3O4Jny', '$2y$10$6JH0OA/P7tI0nZ8hdQoiRuMlZJen/c3C6R.pg3O4JnyXMOzlo6fWq'),
(5, 'admin', '$2y$10$QuPwYvtPlBBDmWr0WqftHegBeSKTsqKtTU76jOC3FTs', '$2y$10$QuPwYvtPlBBDmWr0WqftHegBeSKTsqKtTU76jOC3FTs8gQ7XV8zBy'),
(6, 'admin', '$2y$10$DkWgrhP2o0oSjy85nhXF0O8kYQiy/0enZCLKSqFIf40', '$2y$10$DkWgrhP2o0oSjy85nhXF0O8kYQiy/0enZCLKSqFIf40b14jpBPfz2'),
(7, 'admin7', '$2y$10$hDR3kDRSPtYf7Yb/pGEGsujj7kQLYD2wmAQxc18lsr5', '$2y$10$hDR3kDRSPtYf7Yb/pGEGsujj7kQLYD2wmAQxc18lsr52CFu6Spphe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
