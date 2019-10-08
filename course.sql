-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 09:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p>cavid</p>\r\n', '<p>cavid en</p>\r\n', '<p>cavid ru</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `max_student` int(11) NOT NULL,
  `lesson_start_hour` time NOT NULL,
  `lesson_end_hour` time NOT NULL,
  `whole_hour` int(11) NOT NULL,
  `whole_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `start_date`, `max_student`, `lesson_start_hour`, `lesson_end_hour`, `whole_hour`, `whole_month`) VALUES
(10, 'asda', 'asdsad', 'asdasd', '<p>asdas</p>\r\n', '<p>asdas</p>\r\n', '<p>asdasd</p>\r\n', 'default.png', '2019-10-12', 222, '22:22:00', '22:22:00', 2222, 2222);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
