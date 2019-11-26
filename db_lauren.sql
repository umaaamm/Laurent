-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 04:09 PM
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
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL,
  `latar_belakang` text NOT NULL,
  `informasi_kekerasan` text NOT NULL,
  `informasi_uu` text NOT NULL,
  `informasi_p2` text NOT NULL,
  `informasi_kemitraan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id`, `latar_belakang`, `informasi_kekerasan`, `informasi_uu`, `informasi_p2`, `informasi_kemitraan`) VALUES
(1, '<p>PEMBENTUKAN P2TP2A<br />\r\nPERLUNYA WADAH UNTUK MEMFASILITASI PEMECAHAN MASALAH YANG DIALAMI OLEH PEREMPUAN/MASYARAKAT DI BIDANG:</p>\r\n\r\n<ol>\r\n	<li>Pendidikan;</li>\r\n	<li>Kesehatan dan Lingkungan Hidup</li>\r\n	<li>Ekonomi dan Tenaga Kerja;</li>\r\n	<li>Hukum, Politik dan Pengambilan Keputusan</li>\r\n	<li>Informasi,</li>\r\n	<li>Perlindungan Tindak Kekerasan dan Perdagangan Orang</li>\r\n</ol>\r\n\r\n<p><strong>Visi dan Misi</strong> :</p>\r\n\r\n<p><strong>Visi</strong> :</p>\r\n\r\n<p>Terwujudnya anak dan perempuan di Provinsi Lampung yang terhindar dari ancaman kejahatan dan tindak pidana lainnya demi menegakkan Hak Azasi Manusia sesuai dengan harkat dan martabatnya sebagai Warga Negara</p>\r\n\r\n<p><strong>Misi</strong> :</p>\r\n\r\n<p>Memberikan layanan secara mudah dan cepat kepada korban</p>\r\n\r\n<ul>\r\n	<li>Menyelenggarakan perlindungan dan pemenuhan rehabilitasi kesehatan, pemulangan, reintegrasi sosial dan bantuan hukum</li>\r\n	<li>Melakukan jejaring dengan Rumah Sakit dan Dinas Sosial untuk penagnanan korban melalui rujukan</li>\r\n	<li>Melakukankerjasama lembaga pemerintah antar Provinsi dalam rangka Rehabilitasi Sosial pemulangan korban</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Peran P2TP2A</strong></p>\r\n\r\n<ul>\r\n	<li>Wahana pelayanan pemberdayaan perempuan dan perlindungan anak yang berbasis masyarakat</li>\r\n	<li>pelayanan yang berperan dalam upaya pemenuhan kebutuhan peningkatan pendidikan, kesehatan, ekonomi, penanggulangan tindak kekerasan terhadap perempuan dan perlindungan anak serta peningkatan posisi dan kondisi perempuan dalam masyarakat</li>\r\n	<li>Upaya untuk mewujudkan kesetaraan dan keadilan gender antara laki-laki dan perempuan, mengingat kualitas hidup perempuan masih jauh tertinggal dari laki-laki hampir di seluruh bidang pembangunan terutama bidang pendidikan, kesehatan dan ekonomi.</li>\r\n	<li>Pusat data dan informasi, pusat rujukan dan memberikan berbagai jenis pelayanan baik fisik maupun psikologis.</li>\r\n</ul>\r\n\r\n<p><strong>Dasar Pembentukan</strong><br />\r\n<br />\r\nInstruksi Presiden No. 9 tahun 2000 tentang Pengarusutamaan Gender dalam Pembangunan Nasional;</p>\r\n\r\n<ol>\r\n	<li>Konferensi Dunia tentang Perempuan ke-5 Tahun 2000 di New York;</li>\r\n	<li>UU No. 23 tahun 2002 tentang Perlindungan Anak;</li>\r\n	<li>UU No. 12 Tahun 2003 tentang Pemilu yang mengamanatkan kepada Partai Politik peserta Pemilu untuk dapat mencalonkan anggota DPR-RI, DPRD Propinsi dan DPRD Kabupaten/ Kota dengan memperhatikan Keterwakilan Perempuan sekurang-kurangnya 30%;</li>\r\n</ol>\r\n\r\n<p>UU No. 23 tahun 2004 tentang Penghapusan Kekerasan dalam Rumah Tangga;</p>\r\n\r\n<p><strong>Pendampingan Kasus:</strong></p>\r\n\r\n<p><strong><em>Secara Hukum</em></strong><em>:</em></p>\r\n\r\n<ol>\r\n	<li>Di Kepolisian pendampingan pada saat pelaporan, pembuatan Berita Acara Pemeriksaan (BAP), memberikan masukan pasal-pasal yang digunakan, lobby dan monitoring perkembangan kasus.</li>\r\n	<li>Di Kejaksaan melakukan lobby dalam penyusunan dakwaan, tuntutan dan monitoring perkembangan kasus.</li>\r\n	<li>Di Pengadilan pendampingan pada saat persidangan, membuat surat dukungan untuk tuntutan dan putusan, Monitoring perkembangan kasus, Mengusulkan JPU agar menerima atau banding terhadap hasil putusan.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Secara Non Hukum</em></strong>:</p>\r\n\r\n<ol>\r\n	<li>Bantuan dan pendampingan medis untuk pengobatan luka dan <em>visum et repertum</em></li>\r\n	<li>Bantuan psikososial dan spiritual dengan konseling rutin untuk mengatasi dampak trauma&agrave; kembali percaya diri</li>\r\n	<li>Rujukan ke <em>shelter/</em>rumah aman&agrave; kerjasama dengan Dinas Sosial Lampung</li>\r\n	<li>Pelayanan sosial dan akses keterampilan&agrave; pendidikan life skill</li>\r\n	<li>Menguatkan korban untuk menyelesaikan kasusnya melalui jalur hukum dan memberikan pendampingan</li>\r\n	<li>Pemberian bantuan modal dalam rangka penguatan ekonomi korban pasca kasus, kerjasama dengan&nbsp; Dinsos Provinsi Lampung</li>\r\n</ol>\r\n', '<p>Informasi Jenis Kekerasan Pada Perempuan dan Anak :</p>\r\n\r\n<ol>\r\n	<li>Kekerasan Fisik</li>\r\n	<li>Kekerasan Psikis</li>\r\n	<li>Kekerasan Seksual TPPO</li>\r\n	<li>Penelantaran Anak</li>\r\n	<li>Perceraian Hak Asuh Anak</li>\r\n	<li>PHK Hak Untuk Mendapatkan Pendidikan</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Instruksi Presiden No. 9 tahun 2000 tentang Pengarusutamaan Gender dalam Pembangunan Nasional;</li>\r\n	<li>Konferensi Dunia tentang Perempuan ke-5 Tahun 2000 di New York;</li>\r\n	<li>UU No. 23 tahun 2002 tentang Perlindungan Anak;</li>\r\n	<li>UU No. 12 Tahun 2003 tentang Pemilu yang mengamanatkan kepada Partai Politik peserta Pemilu untuk dapat mencalonkan anggota DPR-RI, DPRD Propinsi dan DPRD Kabupaten/ Kota dengan memperhatikan Keterwakilan Perempuan sekurang-kurangnya 30%;</li>\r\n	<li>UU No. 23 tahun 2004 tentang Penghapusan Kekerasan dalam Rumah Tangga;</li>\r\n</ol>\r\n', '<p><strong>P2TP2A-LIP</strong> adalah salah satu wahana pelayanan bagi perempuan dan anak dalam upaya pemenuhan informasi dan kebutuhan di bidang pendidikan, kesehatan, ekonomi, politik, hukum, perlindungan dan penanggulangan tindak kekerasan serta perdagangan terhadap perempuan dan anak.</p>\r\n\r\n<p>Dibentuk sesuai dengan Keputusan Gubernur Lampung Nomor : G/3456/B.VIII/HK/2002, tentang Pembentukan Pengurus P2TP2A</p>\r\n\r\n<p><em>(Panduan Pemantapan dan Pengembangan P2TP2A, 2007)</em></p>\r\n', '<p>Dalam melaksanakan aktivitasnya UPTD P2TP2A tidak terlepas dari lembaga-lembaga lain yang bergerak dalam upaya pemberdayaan perempuan yang telah ada, seperti:</p>\r\n\r\n<ul>\r\n	<li>Rumah Aman (shelter)</li>\r\n	<li>Pusat Krisis Terpadu (PKT) berbasis rumah sakit maupun komunitas, &lowast; Unit Pelayanan Terpadu (UPT)</li>\r\n	<li>Unit Pelayanan Perempuan dan Anak (UPPA) di kepolisian serta pusat-pusat pelayanan lainnya</li>\r\n	<li>Pusat konsultasi usaha, pusat konsultasi kesehatan reproduksi, pusat konsultasi hukum</li>\r\n	<li>Pusat trauma (trauma center)</li>\r\n	<li>Pusat Informasi Ilmu Pengetahuan dan Teknologi (PIPTEK), Rumah singgah, dan bentuk-bentuk lainnya</li>\r\n</ul>\r\n');

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
(3, 'Muhammad', '<p>Jadi, kan, pindahin kulit dari paha 40 centimeter kulitnya dipindahin ke kaki. Jadi, kulit di kaki dikorek, dipotong sampai ke bagian tulang kering, terus ditutup kulit baru yang di paha itu,\" sambungnya. Jedar menjelaskan, dua tahun lalu Richard mengalami kecelakaan yang menyebabkan luka dalam pada kakinya.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Richard Kyle Jalani Operasi Kaki di Australia akibat Kecelakaan 2 Tahun Lalu\", https://www.kompas.com/hype/read/2019/11/07/193155566/richard-kyle-jalani-operasi-kaki-di-australia-akibat-kecelakaan-2-tahun.\r\nPenulis : Ira Gita Natalia Sembiring\r\nEditor : Tri Susanto Setiawan</p>\r\n', 1, 'M7_L0.2.png', 1, 0, '2019-11-07 12:34:11'),
(4, 'Siagian', '<p>Melapor kekerasan disekitar lingkungan</p>\r\n', 1, 'Screen Shot 2018-12-07 at 22.28.10.png', 3, 1, '2019-09-07 14:44:10'),
(5, 'Laurentdra Muhammad Aldo Duarsa Siagian', '<p>Izin Melapor</p>\r\n', 2, 'Screen Shot 2019-01-12 at 21.12.08.png', 3, 1, '2019-10-24 15:14:04'),
(6, 'Kurniawan Gigih Lutfi Umam', '<p>vdgsf</p>\r\n', 2, 'Blog_Mengenal-Lebih-Dekat-Pemain-The-Avengers-Marvel.jpg', 1, 0, '2019-11-07 12:48:55'),
(7, 'wetw', '<p>twetw</p>\r\n', 1, '273-2421-1-PB.pdf', 1, 0, '2019-11-07 12:56:49');

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
(15, 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1083230419', 1),
(16, 'Kurniawan Gigih Lutfi Umam', '01-11-2019', 'umam.tekno@gmail.com', '1', '1', '1', '1', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
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
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kronologi`
--
ALTER TABLE `tbl_kronologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
