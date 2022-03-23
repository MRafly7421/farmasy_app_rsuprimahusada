-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2022 pada 04.35
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_farmasy_app_primhus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama`, `role`) VALUES
('Ab71528', 'admin@admin.com', '$2y$10$Gg/miVi/MaVMG0qWOLvBJOosxCDXaZe2S7iHTlYZ2W.Vvl6Z6aiK2', 'Admin', 'admin'),
('Af82380', 'rsuprimahusada@gmail.com', '$2y$10$D917D0ceZnfA64JElT08VO6lN/bjVjBaS6TbSyIyiRImqWAoFfmjq', 'RSU Prima Husada', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sisa_obat`
--

CREATE TABLE `sisa_obat` (
  `id` int(11) NOT NULL,
  `kode_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama_lengkap`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `role`, `is_active`) VALUES
('Uc92710', 'aanarjom@yahoo.co.id', '$2y$10$DpZEln85sclUdzLgaNjyc.0yFJU3cXybqgXzsEYG/zD2D..x52h9q', 'Aan Arjom', 'Laki-laki', 'Islam', 'Jombang', '2022-03-01', 'Jombang', '085810203040', 'user', 1),
('Ug17553', 'mnofal378@yahoo.co.id', '$2y$10$IPCVhgql11DRFcfz6ko.U.GxkoCDPzr2vKkXyyhILqfHpBV86qpcq', 'Nofal Widodo', 'Laki-laki', 'Islam', 'Surabaya', '2022-03-20', 'Surabaya', '085844332211', 'user', 1),
('Ug75139', 'raflyujicoba@gmail.com', '$2y$10$d/nhCF4vShWJSksvqPRDf.vq2bZG4Rc2KDKWULIziQ4XsvAtsOo3K', 'Muhammad Rafly', 'Laki-laki', 'Islam', 'Surabaya', '2001-01-30', 'Surabaya', '085840302010', 'user', 1),
('Uv83506', 'mail@mail.com', '$2y$10$uIWz6xBQEd2TTJyE5DBUQ.Pyhnyn0yqklknD1bfA.7mQIStNzm94O', 'Ismail bin Mail', 'Laki-laki', 'Islam', 'Surabaya', '2022-03-22', 'Surabaya', '081122334455', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sisa_obat`
--
ALTER TABLE `sisa_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sisa_obat`
--
ALTER TABLE `sisa_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
