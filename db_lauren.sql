-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2019 at 02:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
(2, 'Kurniawan Gigih Lutfi Umam', 'admin', 'admin', 'umam.tekno@gmail.com', 'Admin');

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
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kronologi`
--

INSERT INTO `tbl_kronologi` (`id`, `nama`, `kronologi`, `id_pelayanan`, `file`, `id_user`, `flag`, `waktu`) VALUES
(1, 'Kurniawan Gigih Lutfi Umam', '<p>fdfdsfsd</p>\r\n', 1, 'detail_agenda.png', 1, 1, '2019-09-07 10:45:56'),
(2, 'fdfdf', '<p>fdfdfdf</p>\r\n', 1, 'dd.png', 1, 0, '2019-09-07 10:45:56'),
(3, 'mammama', '<p>dfd</p>\r\n', 1, 'M7_L0.2.png', 1, 0, '2019-09-07 10:47:40'),
(4, 'fdfd', '<p>ganteng</p>\r\n', 1, 'Screen Shot 2018-12-07 at 22.28.10.png', 3, 1, '2019-09-07 12:31:33'),
(5, 'Kurniawan Gigih Lutfi Umam', '<p>fdf</p>\r\n', 2, 'Screen Shot 2019-01-12 at 21.12.08.png', 3, 0, '2019-09-07 12:38:36');

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
(4, 1, '<p>afdfadfa</p>\r\n'),
(5, 4, '<p>kamu ganteng banget</p>\r\n');

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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `ttl`, `email`, `no_kk`, `no_ktp`, `no_telpon`, `alamat`, `password`) VALUES
(3, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(5, 'Kurniawan Gigih Lutfi Umam', '03/02/1995', 'umam.tekno@gmail.com', '1213', '31441', '085758547924', 'Bandar Jaya', '123'),
(6, 'Kurniawan Gigih Lutfi Umam 111', '11', 'umam.tekno@gmail.com', '11', '11', '11', 'Jln. R.A Kartini No. 36 ', '111'),
(7, 'Kurniawan Gigih Lutfi Umam', 'yukum jya, 03-02-1995', 'umam.tekno@gmail.com', 'Kurniawan Gigih Lutfi Umam', 'Kurniawan Gigih Lutfi Umam', '085758547924', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', 'fdfdf');

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
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
