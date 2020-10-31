-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 08:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Rizki Hardinas Permana', 'Jl. Barisan banteng Gg Attaqwa', 10000, 222000, '2', -6.820549, 107.146127, '404_Not_Found.png', '2020-10-14 11:11:52'),
(2, 'Design Interior', '', 5000, 150000, 'test', -6.820549, 107.146127, '', '2020-10-14 11:19:07'),
(3, '111', '', 85000, 222000, 'test', -6.820549, 107.146127, '21.png', '2020-10-14 11:25:04'),
(4, 'Rizki Hardinas Permana', '', 12, 14000, '123', -6.820549, 107.146127, '404_Not_Found.png', '2020-10-14 11:43:45');

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
(1, 1, 11, 'User has register', 'new user has register', '2020-10-30 14:18:50', '0'),
(2, 2, 15, 'Users has review', 'Users has review', '2020-10-31 11:26:57', '0');

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
(1, 'Hahahah test', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '404_Not_Found.png', '2020-10-20 12:09:00', 1);

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
(1, 1, 1, 3, 'hehehe', '2020-10-14 16:15:15'),
(2, 2, 1, 2, 'test lagi', '2020-10-16 09:38:15'),
(3, 3, 1, 5, 'Test', '2020-10-16 16:45:48'),
(4, 4, 1, 5, 'Test', '2020-10-16 16:47:26'),
(5, 5, 1, 5, 'ufg', '2020-10-16 16:48:14'),
(6, 6, 1, 4, 'ufg', '2020-10-16 16:48:44'),
(7, 7, 1, 3, 'ufgnnb', '2020-10-16 16:49:01'),
(8, 8, 1, 2.5, 'ufgnnb', '2020-10-16 16:49:32'),
(9, 9, 1, 5, 'jhhhh', '2020-10-16 16:50:16'),
(10, 10, 1, 2.5, 'bfhg', '2020-10-16 16:52:36'),
(11, 11, 1, 2.5, 'hallo', '2020-10-16 17:05:44'),
(12, 2, 3, 5, 'haha bisa aja \n', '2020-10-16 17:53:07'),
(13, 10, 2, 3.5, 'test', '2020-10-17 10:45:42'),
(14, 10, 3, 3, 'ngetes aha', '2020-10-17 10:54:59'),
(15, 1, 1, 3, 'asdasd', '2020-10-31 11:26:57');

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
(1, 'Rizki', '', '', '2020-10-14 16:15:24'),
(2, 'Rani Indriana', 'null', 'raniindriana91@gmail.com', '2020-10-15 13:07:14'),
(3, 'Resti Meliani', 'null', 'resti.meliani1998@gmail.com', '2020-10-17 08:50:31'),
(4, 'rizkihardinas', '0', 'rizkihardinas@gmail.com', '2020-10-17 08:54:16'),
(9, 'Rizki', '6289563464844', '', '2020-10-17 10:21:26'),
(10, 'haha', '62895634648446', '', '2020-10-17 10:27:26'),
(11, '22222', '222', '2222', '2020-10-30 14:18:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
