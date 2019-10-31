-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 03:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lauren`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`, `email`, `level`) VALUES
(2, 'Laurentdra Muhammad Aldo Duarsa Siagian', 'admin', 'admin', 'admin@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kronologi`
--

CREATE TABLE `tbl_kronologi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kronologi` text NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kronologi`
--

INSERT INTO `tbl_kronologi` (`id`, `nama`, `kronologi`, `id_pelayanan`, `file`, `id_user`, `flag`, `waktu`) VALUES
(1, 'Durasa', '<p>Laporan terkait</p>\r\n', 1, 'detail_agenda.png', 1, 1, '2019-09-07 14:43:30'),
(2, 'Aldo', '<p>ingin mengadu terkait kekerasan wokwowkowko ofkaofakfam ag aojaogakg goajgoahgak gaohgaigbaidg gihiagiaghag gohigahg</p>\r\n', 1, 'dd.png', 1, 1, '2019-10-24 14:54:16'),
(3, 'Muhammad', '<p>Laporan</p>\r\n', 1, 'M7_L0.2.png', 1, 0, '2019-09-07 14:44:21'),
(4, 'Siagian', '<p>Melapor kekerasan disekitar lingkungan</p>\r\n', 1, 'Screen Shot 2018-12-07 at 22.28.10.png', 3, 1, '2019-09-07 14:44:10'),
(5, 'Laurentdra Muhammad Aldo Duarsa Siagian', '<p>Izin Melapor</p>\r\n', 2, 'Screen Shot 2019-01-12 at 21.12.08.png', 3, 1, '2019-10-24 15:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`id_pelayanan`, `nama_pelayanan`) VALUES
(1, 'Kekerasan Keluarga'),
(2, 'Kekerasan Anak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan`
--

CREATE TABLE `tbl_tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggapan`
--

INSERT INTO `tbl_tanggapan` (`id_tanggapan`, `id`, `tanggapan`) VALUES
(4, 1, '<p>Siap Laporan Diterima</p>\r\n\r\n'),
(5, 4, '<p>Laporan Diterima</p>\r\n'),
(6, 2, '<p>haha ini lo tanggapannya</p>\r\n'),
(7, 5, '<p>fadfaadada</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `verif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `ttl`, `email`, `no_kk`, `no_ktp`, `no_telpon`, `alamat`, `password`, `verif`) VALUES
(1, 'aldo', '1 agustus 2001', 'aldo@gmail.com', '8774663728273764', '124343522333', '085758547924', 'Bandar Jaya', '123', 1),
(3, 'Laurentdra Muhammad Aldo Duarsa Siagian', '20 juni 1996', 'umam.tekno@gmail.com', '1231241315135235', '252512143525', '0857585976', 'Tanjung Karang', '123', 0),
(6, 'duarsa', '20 juni 1995', 'duarsa@gmail.com', '1321321441434', '221434121411431', '111413131231', 'Jln. R.A Kartini No. 36 ', '111', 0),
(7, 'siagian', '22 juni 1996', 'siagian@gmail.com', '12314354444333', '13444444222222', '085758547924', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', 'fdfdf', 0),
(8, 'sdf', 'knkn', 'nk', 'knk', 'nk', 'kn', 'kn', 'k', 0),
(9, 'kadkfj', 'jkj', 'kj', 'kj', '123', 'kj', 'kj', 'kj', 0),
(10, 'kjkj', 'kjj', 'kj', '12345', 'jk', 'kj', 'kj', 'kj', 0),
(12, 'kjk', 'jkj', 'kj', '89', 'kjk', 'kjk', 'kj', 'ij', 1),
(13, 'nknk', 'nk', 'nk', 'nk', 'kn', 'b', 'b', 'b', 0),
(14, 'lknk', 'kn', 'k', 'kn', 'k', 'kn', 'k', 'kn', 0),
(15, 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1083230419', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kronologi`
--
ALTER TABLE `tbl_kronologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kronologi`
--
ALTER TABLE `tbl_kronologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
