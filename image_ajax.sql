-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 06:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_ajax`
--

CREATE TABLE `image_ajax` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_ajax`
--

INSERT INTO `image_ajax` (`id`, `name`, `type`, `size`) VALUES
(146, 'images.jpg', 'image/jpeg', 8777),
(147, 'nature.jpg', 'image/jpeg', 65928),
(148, 'photo.jpg', 'image/jpeg', 66851),
(149, 'photo-15.jpg', 'image/jpeg', 130633),
(150, 'website.jpg', 'image/jpeg', 124814),
(151, 'tree.jpg', 'image/jpeg', 46620),
(152, 'Screenshot (9).png', 'image/png', 132542),
(153, 'Screenshot (17).png', 'image/png', 447151),
(159, 'Screenshot (50).png', 'image/png', 243253);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_ajax`
--
ALTER TABLE `image_ajax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_ajax`
--
ALTER TABLE `image_ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
