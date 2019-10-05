-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 08:47 PM
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
-- Database: `ajaxdatatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(255) NOT NULL,
  `car_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `brand`, `date`, `img`, `car_name`) VALUES
(16, 'asdsa', 'dsads', '2019-10-26', '', ''),
(17, 'hjkhk', 'hjkhj', '2019-10-08', '', ''),
(23, 'hjkhk', 'hjkhj', '2019-10-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hire_date` date NOT NULL,
  `car_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`, `car_name`) VALUES
(1, '2019-10-30', 'asd.jpg', 'asd', 'asd', '2019-10-30', ''),
(2, '2019-10-30', 'bb', 'asd', 'asd', '2019-10-30', ''),
(3, '2019-10-30', 'asdf', 'asd', 'asd', '2019-10-30', ''),
(4, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(5, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(6, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(7, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(8, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(9, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(10, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(11, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(12, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(13, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(14, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(16, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30', ''),
(17, '2019-10-18', 'test', 'test', '<p>asdasdadadadad</p>\r\n', '2019-10-17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
