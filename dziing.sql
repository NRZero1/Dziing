-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 09:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dziing`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `developer` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `genre` enum('Action','Adventure','Casual','FPS','Free to Play','Indie','Massive Multiplayer','Racing','RPG','Simulation','Sports','Strategy') DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `news_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `game_id` varchar(50) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user','company') NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `country`, `phone`, `username`, `password`, `level`, `photo`) VALUES
('A', 'BCD', 'asdadasda@asdadsad.com', 'AAAAAA', '12312313123213', 'ABCDE', '6547436690a26a399603a7096e876a2d', 'admin', 'no_image.png'),
('Freddy', 'AAAAA', 'asdasdads@gmail.com', 'Indonesia', '081231321', 'apa_aja', '6547436690a26a399603a7096e876a2d', 'user', NULL),
('Leonardo', 'Calvin', 'leonardo.calvin@student.ubm.ac.id', 'Indonesia', '09909090909', 'leonardo', '020e60c6a84db8c5d4c2d56a4e4fe082', 'user', 'leonardo.jpg'),
('Daniel', 'Ronaldo Pangestu', 'ronaldo.pangestu1@gmail.com', 'Indonesia', '08260394746', 'NRZero', '262031397020fd8df478ec13b4b096c5', 'admin', '32180091.jpg'),
('Universitas', 'Bunda Mulia', 'universitasbundamulia@ubm.ac.id', 'Indonesia', '0987654', 'UBM', '0301404159e6aaffac73ada7f6bc069d', 'company', 'ubm logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `username` (`username`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
