-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2023 pada 06.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkrota`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid_baru`
--

CREATE TABLE `murid_baru` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid_baru`
--

INSERT INTO `murid_baru` (`id_siswa`, `nama`, `jenis_kelamin`, `asal_sekolah`, `alamat`, `mobile`, `jurusan`) VALUES
(7, 'Ardi Dwi Wibowo', 'Perempuan', 'aaa', 'Yogyakarta', '13141', 'Keramik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, '', 'Frisca', 'friscaavril@gmail.com', '$2y$10$jpPQrz5fXjXoWeE7Yd/TkuJzFB/BsYPQ3'),
(2, '', 'pus', 'fris@gmail.com', '$2y$10$R80ij2sMsK4CPwA0vPoPMO3th1U02l/LB'),
(8, '', 'aa', 'ardi.dwiwibowo@yahoo.com', '$2y$10$7ixYtpzm7SS9qbe/a5EONu4SlFzHln5mEDusmd40otUEc.DVMVRcu'),
(9, '', 'ArdiKun', 'ardi.dwiwibowo@yahoo.com', '$2y$10$pjTc7nEivKz8/ZUDwFs6LuEGpmyxv.JyZLPUHsJSzNDwe2vq3QvS.'),
(10, '', 'yagami', 'yagami@gmail.com', '$2y$10$7PIOOZaWn8Ci0LAYY.TmyeSHFwYY/WYYXnp2vSNNSgMIU.vQ2beIq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `murid_baru`
--
ALTER TABLE `murid_baru`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `murid_baru`
--
ALTER TABLE `murid_baru`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
