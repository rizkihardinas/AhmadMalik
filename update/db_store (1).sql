-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 11:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `min_price` double NOT NULL,
  `max_price` double NOT NULL,
  `description` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `photo` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `address`, `min_price`, `max_price`, `description`, `latitude`, `longitude`, `photo`, `dateCreated`) VALUES
(1, 'Vis Vape Store', 'Jl. Raya Sukabumi', 50000, 1200000, '<p>Whatsapp +6289509872222</p>', 106.76819845458715, -6.193943839501372, 'logo_bg_black6.jpg', '2020-10-31 15:25:45'),
(2, 'Patahola Volars', ' Jl. Kemerdekaan', 60000, 5000000, '<p>Whatsapp +629503334321</p>', 106.74331069381691, -6.193810160864217, 'IMG_7289.jpg', '2020-10-31 15:26:06'),
(3, 'Cahaya Timur', 'Jl. Raya Bandung -  Cianjur', 100000, 1000000, '<p>Whatsapp +628210001111</p><p>Semua kebutuhan vape bahan alumunium</p>', 106.75789877196786, -6.210326876146311, 'Logo.png', '2020-10-31 15:27:04'),
(4, 'Kawan Baru', 'Jl. Raya Bandung - Cianjur', 100000, 5000000, '<p>Telp (0263) 2283889</p><p>Vape Store untuk para Kuli Bangunan</p>', 106.88836141845263, -6.1761949761092865, 'icon_pakkabar.png', '2020-10-31 15:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `idJenis` int(11) NOT NULL,
  `idLink` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `idJenis`, `idLink`, `title`, `description`, `dateCreated`, `status`) VALUES
(5, 2, 3, 'Users has review', 'Users has review', '2020-10-31 16:14:15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `foto` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `foto`, `dateCreated`, `idUser`) VALUES
(1, 'Panduan Pod System Untuk Pemula – Mulai Dari Sini!', '<h4 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 25.5px; font-family: Arial, Helvetica, sans-serif; font-size: 17px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">CARA MEMILIH POD SYSTEM YANG TEPAT</strong></h4><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Vape Pod Sistem sangat populer saat ini. Mereka menawarkan penyerapan nikotin yang cepat dan sangat mudah untuk dibawa kemana-mana. Tetapi dengan begitu banyak model di pasaran, sering kali sulit untuk menentukan pikiran Kalian pada Pod tertentu. Berikut kami mencoba membantu kalian memilih POD yang tepat untuk kebutuhan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">OPEN SYSTEM VS CLOSED SYSTEM VAPES</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Ada 2 jenis Pod beredar di pasaran, Open sistem dan Close System. Open Pod Sistem memungkinkan pod diisi ulang dengan e-liquid sementara Close System yang tertutup sudah diisi sebelumnya dan tidak dapat diisi ulang.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">&nbsp;</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Contoh Open Pod System :</strong></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Vladdin , Smok Novo , Smok Nord , Smok Infinix , Jusfog Minifit , Justfog C601, Aspire Breeze , Shaan Lite , Joytech Teros, , dll</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Contoh Closed System :</strong>&nbsp;JUUL , NCIG</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\"><em style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">HAL-HAL LAIN YANG ANDA HARUS MEMPERTIMBANGKAN:</em></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Kapasitas Battery</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Ketahuilah kapasitas battery Pod yang ingin kalian cari, agar kalian dapat menggunakan Pod lebih lama. Hal ini juga sangat penting di perhatikan untuk kalian yang ingin berhenti merokok memulai dengan Vape Pod, agar dapat memenuhi kebutuhan vaping dalam sehari.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Feeling Inhale atau isapan</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Setiap Pod memiliki feeling inhale yang berbeda beda, ada yang loose / lebih gampang &amp; ada yang lebih padat isapannya seperti menghisap rokok. Pastikan kalian mencobanya lebih dahulu tester yang tersedia di toko Vape. Memastikan kalian nyaman nantinya menggunakan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Gunakan level Nicotine yang tepat</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">ada 2 pilihan jenis nicotine : Free base Nicotine &amp; Salt Nicotine. Free base memberikan kalian sensasi Throat Hit di awal sedotan / inhale, sedangkan Salt Nicotine lebih rendah throat hit nya , tetapi penyerapan nicotine ke dalam tubuh lebih cepat. Menggunakan level nicotine yang tepat membantu kalian untuk lebih jarang menggunakan Pod,dan tentunya battery daya tahannya lebih lama.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Garansi</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Mengapa garansi itu penting ? untuk memastikan kalian terlindungi dari kerusakan.</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">*Budget</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 12px; vertical-align: baseline; color: rgb(119, 119, 119);\">Siapkan budget terlebih dahulu. Pada dasarnya semua POD sistem pengoprasian nya sama, Yang membedakan adalah Fitur yang terdapat di dalam nya.Seperti display atau indicator battery , Otomatis / Manual inhale (isapan) &amp; jenis coil yang di pakai.</p>', 'memilih_pod.jpg', '2020-10-31 15:41:56', 1),
(2, '7 Tips Memilih Vape yang Tepat untuk Pemula', '<ol><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Ketahui perbedaan jenis <b>vape</b>. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Sesuaikan dengan bujet. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Baca dulu review-nya. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Ketahui liquid dan kegunaannya. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Pilih baterai yang cocok. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Pilih charger yang digunakan dengan benar. ...</li><li style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Mengetahui OHM/Resistance.</li></ol>', 'meimilihvape.jpg', '2020-10-31 15:46:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMerchant` int(11) NOT NULL,
  `rating` double NOT NULL,
  `review` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `idUser`, `idMerchant`, `rating`, `review`, `dateCreated`) VALUES
(1, 1, 1, 4, 'Mantap sih ini', '2020-10-31 15:53:14'),
(2, 2, 3, 2, 'Kurang lengkap sih ini ah', '2020-10-30 15:56:18'),
(3, 2, 1, 5, 'Lengkap pisan', '2020-10-31 16:13:44');

--
-- Triggers `rating`
--
DELIMITER $$
CREATE TRIGGER `NOTIF_RATING` AFTER INSERT ON `rating` FOR EACH ROW INSERT INTO notifikasi(idJenis,idLink,title,description) VALUES(2,NEW.id,'Users has review','Users has review')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `phone` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `dateCreated`) VALUES
(1, 'Willy Setiawan', '089503800600', 'willysetiawan7@gmail.com', '2020-10-31 15:50:53'),
(2, 'Rizki Hape', '082188883333', 'rizkihp@gmail.com', '2020-10-31 15:51:21');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `NOTIF_USERS` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO notifikasi(idJenis,idLink,title,description) VALUES(1,NEW.id,'User has register','new user has register')
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idMerchant` (`idMerchant`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
