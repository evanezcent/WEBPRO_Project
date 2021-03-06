-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumblr`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Komentar` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idPosting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idComment`, `username`, `Komentar`, `idPosting`) VALUES
(6, 'amat', 'huuu', 12),
(7, 'tama', 'b aja', 12),
(8, 'amat', 'waw', 14),
(9, 'tama', 'wkwkwk', 11);

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE `follower` (
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idfollower` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `idPesan` int(11) NOT NULL,
  `idPosting` int(11) NOT NULL,
  `userAsal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `userTujuan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `idPosting` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postText` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postFoto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`idPosting`, `username`, `postText`, `postFoto`, `caption`, `tag`) VALUES
(11, 'amat', 'satu', NULL, 'pertama', NULL),
(12, 'tama', NULL, 'tempImage-min.jpg', 'kedua', NULL),
(14, 'tama', 'tiga', NULL, 'ketiga', NULL),
(15, 'tama', 'empat', NULL, 'post ke empat', ''),
(24, 'tama', NULL, 'me.jpg', '   kelima', NULL),
(25, 'tama', NULL, '400_F_133319905_lbTo0t1j2dpV7ogDdAb9aji2YCMVsuST.jpg', '   ke 6', NULL),
(26, 'tama', 'tujuh', NULL, 'ketujuh', '#udahbisa'),
(27, 'tama', 'delapan', NULL, 'Kedelapan', ''),
(29, 'yoga', NULL, '2016-06-11-0114.jpg', '   ke 10', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fotoProfil` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nama`, `fotoProfil`, `bio`) VALUES
('amat', '123', 'b@mail.com', 'Amat', NULL, NULL),
('evanescent', '777', 'tyoga124@gmail.com', NULL, NULL, NULL),
('pratamays', '777', 'pratamayo16@gmail.com', NULL, NULL, NULL),
('tama', '123', 'a@gmail.com', 'Tama', NULL, NULL),
('yoga', '123', 'c@gmail.com', 'Yoga', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `username` (`username`) USING BTREE,
  ADD KEY `idPosting` (`idPosting`);

--
-- Indexes for table `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idfollower` (`idfollower`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `userAsal` (`userAsal`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`idPosting`),
  ADD KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `idPosting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `commentpost` FOREIGN KEY (`idPosting`) REFERENCES `posting` (`idPosting`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentuser` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `follow` FOREIGN KEY (`idfollower`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `post` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
