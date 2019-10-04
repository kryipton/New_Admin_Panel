-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 11:03 PM
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
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `brand`, `date`, `img`) VALUES
(1, 'asd', 'asdasd', '0000-00-00', ''),
(2, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(4, 'asdsa', 'dsads', '2019-10-26', ''),
(5, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(6, 'asdsa', 'dsads', '2019-10-26', ''),
(7, 'asa', '', '0000-00-00', ''),
(8, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(9, 'hjkhk', 'фывфы', '2019-10-08', ''),
(10, 'asdsaффывфвфы', 'dsads', '2019-10-26', ''),
(11, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(12, 'asdsa', 'dsads', '2019-10-26', ''),
(13, 'asa', 'asdasd', '0000-00-00', ''),
(14, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(15, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(16, 'asdsa', 'dsads', '2019-10-26', ''),
(17, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(18, 'asdsa', 'dsads', '2019-10-26', ''),
(19, 'asa', 'asdasd', '0000-00-00', ''),
(22, 'asdsa', 'dsads', '2019-10-26', ''),
(23, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(24, 'asdsa', 'dsads', '2019-10-26', ''),
(25, 'asdsa', 'asdasd', '0000-00-00', ''),
(26, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(27, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(28, 'asdsa', 'dsads', '2019-10-26', ''),
(29, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(30, 'asdsa', 'dsads', '2019-10-26', ''),
(31, 'asa', 'asdasd', '0000-00-00', ''),
(32, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(33, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(34, 'asdsa', 'dsads', '2019-10-26', ''),
(35, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(36, 'asdsa', 'dsads', '2019-10-26', 'Blog-post-on-web-dev-.jpg'),
(37, 'asa', 'asdasd', '0000-00-00', ''),
(38, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(39, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(40, 'asdsa', 'dsads', '2019-10-26', ''),
(41, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(42, 'asdsa', 'dsads', '2019-10-26', ''),
(43, 'asa', 'asdasd', '0000-00-00', ''),
(44, 'hgkjhk', 'hjkhj', '0000-00-00', ''),
(45, 'hjkhk', 'hjkhj', '2019-10-08', ''),
(46, 'asdsa', 'dsads', '2019-10-26', ''),
(48, 'asdsa', 'dsads', '2019-10-26', ''),
(49, 'cavi', 'cavid123', '2019-10-04', '190501_wnt_index_cruise_hpMain_16x9_992.jpg'),
(50, 'mutu', 'mutututut', '2019-10-19', '1331blog-01-01.jpg'),
(51, 'asdas', 'asdasd', '2019-10-02', 'default.png'),
(52, 'test', 'adasdas', '0022-02-22', '2.jpg'),
(53, 'sdfsdf', 'sddsfdsf', '2019-10-16', '190501_wnt_index_cruise_hpMain_16x9_9921.jpg'),
(54, 'C180', 'Mercedes', '2019-10-02', 'A-class.jpg'),
(59, '222', '2222', '0022-02-22', 'nmf.png'),
(68, 'asdasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '<p>ADASDA</p>\r\n', '2019-10-23', '190501_wnt_index_cruise_hpMain_16x9_9924.jpg'),
(69, 'asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '<p>adadadsda</p>\r\n', '2019-10-11', '190501_wnt_index_cruise_hpMain_16x9_9925.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '2019-10-30', 'asd.jpg', 'asd', 'asd', '2019-10-30'),
(2, '2019-10-30', 'bb', 'asd', 'asd', '2019-10-30'),
(3, '2019-10-30', 'asdf', 'asd', 'asd', '2019-10-30'),
(4, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(5, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(6, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(7, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(8, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(9, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(10, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(11, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(12, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(13, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(14, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(15, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30'),
(16, '2019-10-30', 'asd', 'asd', 'asd', '2019-10-30');

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
  ADD PRIMARY KEY (`emp_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
