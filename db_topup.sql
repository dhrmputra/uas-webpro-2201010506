-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 10.55
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
-- Database: `db_topup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtopup`
--

CREATE TABLE `tbtopup` (
  `id` int(11) NOT NULL,
  `gameid` varchar(100) NOT NULL,
  `zoneid` varchar(50) NOT NULL,
  `pesanan` varchar(50) NOT NULL,
  `idtopup` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbtopup`
--

INSERT INTO `tbtopup` (`id`, `gameid`, `zoneid`, `pesanan`, `idtopup`, `harga`) VALUES
(23, '11232760', '2314', '14 Diamonds', '1fb9a5f994e129d0b8857d8d3403cd2d', '5045'),
(25, '08261218621', '+62', 'GameMax Gold', 'a019dc22ad05e4bc403d25b2d918047b', '10000'),
(26, '21721992', '0021', '6480 + 1600 Genesis Crystal', 'd75631efc8e8932e919723d1e2575028', '1629000'),
(27, '088212176', '+62', 'Premium Bulanan', '24c68a58656406d96cbab7a48087ff27', '59999'),
(28, 'Didok', '#Rawr', '4000 Points', '85588af0f522f4d2ca7a384ed947b90e', '380000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passkey` varchar(50) NOT NULL,
  `iduser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(1, 'dharma', 'dharma.putra2003@gmail.com', 'dharma', '123', '78947661afee90b0f2d7'),
(2, 'asep', 'asep@gmail.com', 'asep', '123', 'dc855efb0dc7476760af'),
(3, 'didok', 'didok@gmail.com', 'didok', '123', '14080dec0c8c79b4cc63');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbtopup`
--
ALTER TABLE `tbtopup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbtopup`
--
ALTER TABLE `tbtopup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
