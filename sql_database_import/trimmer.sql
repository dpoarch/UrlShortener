-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 10:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trimmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `visited` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `url`, `code`, `visited`, `created`) VALUES
(1, 'https://www.youtube.com/watch?v=UBCxCbqP7RU', '5yc1t', 3, '2019-10-02 14:14:14'),
(2, 'https://www.youtube.com/watch?v=Vk0odeQMdsY&list=PLNue7pveifxwvSxWrX2T4XZrn_7kGgSzv&index=6&t=0s', '5yc1u', 2, '2019-10-02 15:04:44'),
(3, 'https://www.youtube.com/watch?v=bhjBqzeIy2k', '5yc1v', 3, '2019-10-02 15:16:06'),
(4, 'https://www.instagram.com/p/BpmrkPZgMmY/', '5yc1w', 0, '2019-10-02 15:21:45'),
(5, 'https://www.youtube.com/watch?v=VqvnuLTs7m4&t=129s', '5yc1x', 0, '2019-10-02 15:26:38'),
(6, 'https://m.youtube.com/watch?v=kXYiU_JCYtU', '5yc1y', 0, '2019-10-02 15:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
