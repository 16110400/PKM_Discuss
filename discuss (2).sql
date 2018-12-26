-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2018 pada 10.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discuss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(25) NOT NULL,
  `id_video` int(11) NOT NULL,
  `isi_comment` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `id_video`, `isi_comment`, `username`, `tanggal`) VALUES
(1, 38, 'tidak mendidik sekali', 'xxxx', '0000-00-00 00:00:00'),
(2, 48, 'hahahaha', 'silah766@gmail.com', '0000-00-00 00:00:00'),
(12, 47, 'cuk', 'crazymone_atlantica@yahoo.com', '0000-00-00 00:00:00'),
(13, 47, 'test', 'crazymone_atlantica@yahoo.com', '0000-00-00 00:00:00'),
(14, 47, 'test 2', 'crazymone_atlantica@yahoo.com', '0000-00-00 00:00:00'),
(20, 47, 'osas', 'Dikot Syarif', '0000-00-00 00:00:00'),
(21, 47, 'yeye', 'Dikot Syarif', '0000-00-00 00:00:00'),
(22, 47, 'sasa', 'Dikot Syarif', '2018-12-26 00:00:00'),
(23, 47, 'dsfs', 'Dikot Syarif', '2018-12-26 00:00:00'),
(27, 47, 'jgsajgasjg', 'Dikot Syarif', '2018-12-26 10:16:40'),
(28, 47, 'sasaas', 'Dikot Syarif', '2018-12-26 10:17:55'),
(29, 47, 'dsdssd', 'Dikot Syarif', '1970-01-01 01:00:00'),
(30, 47, 'asasas', 'Dikot Syarif', '2018-12-26 16:27:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_profil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telepon`, `jenis_kelamin`, `email`, `password`, `foto_profil`) VALUES
(1, 'Haris Angriawan', 'Jl. Maguwo', '082384383680', 'Laki-Laki', 'silah766@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'download.png'),
(6, 'Dikot Syarif', 'Jl. Nangka III', '082384383680', 'Perempuan', 'crazymone_atlantica@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(7, 'DIKOT', 'Jl. Nangka III', '082384383680', 'Perempuan', 'crazymone_atlantica@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(8, 'iluth', 'kemiri', '093248775', 'Laki-Laki', '1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(25) NOT NULL,
  `nama_video` varchar(100) NOT NULL,
  `deskripsi_video` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `deskripsi_video`, `username`) VALUES
(38, '46994765_256378795041075_5972109685300396032_n.mp4', 'wik wik wik', 'Haris Angriawan'),
(42, '48171402_2251681351769921_7920038642943262720_n.mp4', 'test', 'Haris Angriawan'),
(45, 'Instagram.mp4', 'laser cuk', 'Haris Angriawan'),
(46, 'Better Writing with Grammarly.MP4', 'test', 'Dikot Syarif'),
(47, '47423240_2202975539746805_623338065481433088_n.mp4', 'diduga mabuk 2 orang siswa joget joget sendiri.', 'Haris Angriawan'),
(48, '48171402_2251681351769921_7920038642943262720_n.mp4', 'Youtube Rewind 2018', 'Haris Angriawan'),
(50, '47569104_355228421973216_9162977933315276800_n.mp4', 'kuciang', 'iluth');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
