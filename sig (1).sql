-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2021 pada 20.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `marker`
--

CREATE TABLE `marker` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marker`
--

INSERT INTO `marker` (`id`, `nama`, `alamat`, `latitude`, `longitude`) VALUES
(2, 'Amaris Hotel Solo', 'Jl. Kebangkitan Nasional No.24, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', '-7.569908430066403', '110.81557571944462'),
(4, 'Novotel Solo', 'Jl. Slamet Riyadi No.272, Timuran, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57141', '-7.567727679474065', '110.81721337193753'),
(5, 'Museum Batik Danar Hadi', 'Jl. Slamet Riyadi No.261, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', '-7.568535968081199', '110.81630142090566'),
(6, 'Bank BRI Solo Slamet Riyadi', 'Jl. Slamet Riyadi No.236, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', '-7.56745115933963', '110.81473501089799'),
(7, 'Gor Sritex Arena', 'Jl. Abiyoso No.21, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', '-7.57081193053898', '110.81499250292518'),
(8, 'Pasar Kembang Solo', 'Jl. Honggowongso, Kemlayan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57141', '-7.572364683046225', '110.81648381108316'),
(9, 'Museum Keris Solo', 'Jl. Bhayangkara No.2, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', '-7.568812487580887', '110.8108833587655'),
(10, 'RS PKU Muhammadiyah Surakarta', 'Jl. Ronggowarsito No.130, Timuran, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', '-7.5653985235117025', '110.81683786268248'),
(11, 'Hotel Sahid Jaya Solo', 'Jl. Gajahmada No.82, Ketelan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57132', '-7.563484139366497', '110.81941278340011'),
(12, 'Polsek Banjarsari', 'Jl. Kartini No.65, Timuran, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', '-7.566727952008968', '110.82094700692734');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `marker`
--
ALTER TABLE `marker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `marker`
--
ALTER TABLE `marker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
