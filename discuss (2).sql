-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 04:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(25) NOT NULL,
  `isi_comment` varchar(50) NOT NULL,
  `id_user` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(5) NOT NULL,
  `nama_image` varchar(255) NOT NULL,
  `deskripsi_image` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_image`, `nama_image`, `deskripsi_image`, `username`) VALUES
(7, '9418315_774b894d-0668-4c8d-bf7c-4ab6bbee8c98.jpg', 'test', 'Haris Angriawan'),
(8, '53297-4k-gaming-wallpaper-3840x2160-for-mobile-hd.jpg', 'assasin', 'Haris Angriawan'),
(9, '143821-free-4k-gaming-wallpapers-3840x2160.jpg', 'petugas kewalahan memadamkan api yang semakin membesar.', 'Haris Angriawan'),
(10, 'Shopee_3741d377f1513bf079a5c9f2704250db.jpg', 'jual baju cok', 'Haris Angriawan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telepon`, `jenis_kelamin`, `email`, `password`) VALUES
(1, 'Haris Angriawan', 'Jl. Maguwo', '082384383680', 'Laki-Laki', 'silah766@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Dikot Syarif', 'Jl. Nangka III', '082384383680', 'Perempuan', 'crazymone_atlantica@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'DIKOT', 'Jl. Nangka III', '082384383680', 'Perempuan', 'crazymone_atlantica@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'iluth', 'kemiri', '093248775', 'Laki-Laki', '1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(25) NOT NULL,
  `nama_video` varchar(100) NOT NULL,
  `deskripsi_video` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
