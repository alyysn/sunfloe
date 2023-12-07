-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `caraousel_id` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`caraousel_id`, `judul`, `foto`) VALUES
(1, 'ehew', '20231122073206.jpg'),
(2, 'nn', '20231122073235.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `galery_id` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`galery_id`, `judul`, `foto`, `tanggal`) VALUES
(2, 'nn', '20231122075034.jpg', '2023-11-22'),
(12, 'Dandelion sang Pemikat Hati', '20231203212933.jpg', '2023-12-03'),
(14, 'Ea', '20231203213014.jpg', '2023-12-03'),
(15, 'mwah', '20231203213046.jpg', '2023-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Bahasa Jawa'),
(2, 'sejarah'),
(3, 'apa saja');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `konfigurasi_id` int(11) NOT NULL,
  `judul_website` varchar(25) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(35) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_wa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`konfigurasi_id`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'sunfloe', '-', 'https://instagram.com/aliya.sita', '-', 'avvalyy@gmail.com', 'karangpandan,Karanganyar', 'https://wa.me/6285800127522');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `konten_id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `kategori_id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`konten_id`, `judul`, `keterangan`, `foto`, `slug`, `kategori_id`, `tanggal`, `username`) VALUES
(6, 'Latief Hendradiningrat', '<p style=\"text-align: justify;\"><span style=\"font-size: 14pt;\">Nama lengkapnya Raden Mas Abdul Latief Hendraningrat, lahir di Jakarta tanggal 15 Februari 1911. Kedua orang tua Latief, yakni Raden Mas Mochamad Said Hendraningrat dan Raden Ajeng Haerani, berasal dari keluarga ningrat Jawa. Ayah Latief adalah seorang demang atau wedana di wilayah Jatinegara. </span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 14pt;\">Sejak muda, Latief Hendraningrat sudah turut dalam arus pergerakan nasional. Ia merupakan anggota Perkumpulan Indonesia Moeda. Ia juga bergabung dengan Soerjawirawan, laskar kepanduan milik Partai Indonesia Raya (Parindra) yang dirintis Dr. Soetomo, salah seorang pendiri Boedi Oetomo (BO), pada 1930. Latief Hendraningrat pernah menjadi guru bahasa Inggris di Perguruan Rakyat dan sekolah milik Muhammadiyah di Batavia (Jakarta). Selain itu, ia juga aktif dalam berkesenian. Menurut buku Bunga Rampai Setengah Abad Perguruan Rakyat (1978), Latief Hendraningrat memimpin misi kebudayaan ke Amerika Serikat dalam ajang New York World&rsquo;s Fair pada 1939.</span><br><br></p>', '20231129033357.jpg', 'Latief-Hendradiningrat', '2', '2023-11-29', 'alyeah'),
(8, 'my currently book  in december', '<p>jhjkhkhkjk</p>', '20231203135344.jpg', 'my-currently-book--in-december', '3', '2023-12-03', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `recent_login`
--

CREATE TABLE `recent_login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_login`
--

INSERT INTO `recent_login` (`id`, `username`, `waktu`, `tanggal`, `status`) VALUES
(27, 'admin', '14:08:32', '2023-12-01', 'LOGIN'),
(28, 'admin', '14:36:46', '2023-12-01', 'LOGIN'),
(29, 'admin', '07:51:08', '2023-12-02', 'LOGIN'),
(30, 'admin', '06:13:24', '2023-12-03', 'LOGIN'),
(31, 'admin', '13:51:05', '2023-12-03', 'LOGIN'),
(32, 'admin', '17:39:21', '2023-12-03', 'LOGIN');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `saran_id` int(11) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`user_id`, `username`, `nama`, `password`, `level`) VALUES
(1, 'admin', 'alyaaa', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'is', 'isss', 'c4ca4238a0b923820dcc509a6f75849b', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`caraousel_id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`galery_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`konfigurasi_id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`konten_id`);

--
-- Indexes for table `recent_login`
--
ALTER TABLE `recent_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`saran_id`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `caraousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `galery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `konfigurasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `konten_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recent_login`
--
ALTER TABLE `recent_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `saran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
