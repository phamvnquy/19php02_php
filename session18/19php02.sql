-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2019 at 03:26 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.2.18-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19php02`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created`, `updated`) VALUES
(2, 'CÃ¡i khÃ³ trong phÃ¢n tÃ­ch bÃ³ng Ä‘Ã¡', 'yyyy', 'default.png', '2019-07-07 15:20:12', NULL),
(3, 'Cái khó trong phân tích bóng đá', '345345345', 'default.png', '2019-07-07 15:21:26', NULL),
(4, 'Đánh bại nhà cái', '345345345', 'default.png', '2019-07-07 15:25:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `customer_type` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `address` text,
  `start_number` int(11) NOT NULL,
  `end_number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `customer_type`, `start_date`, `end_date`, `address`, `start_number`, `end_number`) VALUES
(10, 'Manchester city', 'male', 3, '2019-06-03', '2019-06-11', 'DA Nang', 12, 1234),
(11, 'Iphone X', 'male', 3, '2019-06-03', '2019-06-11', 'DA Nang', 12, 1234),
(12, 'test new', 'male', 3, '2019-06-03', '2019-06-11', 'DA Nang', 12, 1234),
(13, '44', 'male', 1, '2019-07-03', '2019-07-03', '24', 1, 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
