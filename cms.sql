-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2017 at 05:51 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `ftab`
--

CREATE TABLE `ftab` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftab`
--

INSERT INTO `ftab` (`id`, `title`, `post`, `section`) VALUES
(7, 'sagad', '1234', 0),
(9, 'abdulrahman', '12345', 0),
(10, 'asade', '1234567', 0),
(11, 'abdo', '33332', 0),
(15, 'ali', '22333', 22),
(16, 'aoday', '1234566', 3),
(17, 'alayi', '2223344', 3),
(18, 'saeed', '22556', 5),
(19, 'jassim', '44556', 22),
(20, 'zx', '444', 44),
(21, 'sssd', '556699', 44),
(23, 'asdfg', '123432', 3),
(24, 'sdefffddff', 'xcxbxfgdfgdfvcbvbcvbcbcbcvdffhfjfnbvnnvmjftgbcvcbvnjfgf', 1),
(25, 'xdfgsdfg', 'zdgsds', 1),
(26, 'zdsg', 'zsfgds', 0),
(27, 'adsffasd', 'sdgsdgsds', 0),
(28, 'zxvd', 'zdgsdg', 0),
(29, 'xxf', 'zfsdfasf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `namecode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `namecode`) VALUES
(32, 'img_14046.'),
(33, 'img_333.'),
(34, 'img_13314.'),
(35, 'img_12479.'),
(36, 'img_9100.');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `namecode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportnews`
--

CREATE TABLE `sportnews` (
  `id` int(11) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thenews`
--

CREATE TABLE `thenews` (
  `id` int(11) NOT NULL,
  `news` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thenews`
--

INSERT INTO `thenews` (`id`, `news`, `details`) VALUES
(1, 'zxfngm', 'zxdxcbcbxc'),
(2, 'zdfcncvn', 'zvcbxcnvncvnvn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ftab`
--
ALTER TABLE `ftab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportnews`
--
ALTER TABLE `sportnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thenews`
--
ALTER TABLE `thenews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ftab`
--
ALTER TABLE `ftab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sportnews`
--
ALTER TABLE `sportnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thenews`
--
ALTER TABLE `thenews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
