-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 04:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(5) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `num` int(3) NOT NULL,
  `files` varchar(100) NOT NULL COMMENT 'รูป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `fname`, `lname`, `num`, `files`) VALUES
(23, 'kkk', 'kkk', 100, '123456'),
(24, 'เต้', '111111', 0, './members/sm_5aba147bcacf2.png'),
(25, '', '', 0, './members/images.jfif'),
(26, '', '', 0, './members/images.jfif'),
(27, '', '', 0, './members/3images (2).jfif'),
(28, '', '', 0, './members/3images (1).jfif'),
(29, '', '', 0, './members/3images (3).jfif'),
(30, '', '', 0, './members/3images (3).jfif'),
(31, '', '', 0, './members/3images (3).jfif'),
(32, 'Iphon 10', 'over', 4000, './members/3images.jfif'),
(33, 'Iphon 10', 'over', 4000, './members/3images.jfif'),
(34, 'ซัมซุง', 'โทรรสับ', 10000, './members/3images (1).jfif'),
(35, 'name', 'lname', 0, './members/3images (1).jfif'),
(36, 'name', 'lname', 0, './members/3images (1).jfif'),
(37, 'name', 'lname', 0, './members/3im.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
