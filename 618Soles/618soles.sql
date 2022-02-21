-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2021 at 02:24 AM
-- Server version: 5.7.24
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
-- Database: `618soles`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` varchar(8) NOT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `emp_designation` varchar(20) DEFAULT NULL,
  `emp_age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `emp_name`, `emp_designation`, `emp_age`) VALUES
('1', 'Brett Shirley', 'Owner', 22),
('2', 'Daniel Ganey', 'Owner', 22),
('3', 'Nathan Kuhl', 'Sales', 22),
('4', 'Luis Gonzales', 'Sales', 22);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='products that can be added to cart';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`) VALUES
(1, 'Yeezy Boost 700 Wave Runner', '', '700.00', '2017-08-12 20:43:12', '2021-12-13 01:46:10'),
(2, 'Nike Supreme Airforce One White', '', '400.00', '2020-04-05 20:00:00', '2021-12-13 01:59:49'),
(3, 'Jordan One Royal Toe', '', '550.00', '2020-05-09 20:00:00', '2021-12-13 01:59:49'),
(4, 'Jordan Cadence', '', '450.00', '2020-09-25 20:00:00', '2021-12-13 01:59:49'),
(5, 'Jordan One Court Purple 2.0', '', '350.00', '2020-06-03 20:00:00', '2021-12-13 01:59:49'),
(6, 'Jordan Four Guava Ice', '', '1200.00', '2020-08-29 20:00:00', '2021-12-13 01:59:49'),
(7, 'Nike Air Presto Off White', '', '3400.00', '2018-08-03 20:00:00', '2021-12-13 01:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `PASSWORD`, `created_at`) VALUES
(3, 'admin', '$2y$10$YxZL0NjPr19reZtJIaJ4ueJ98J4OYtCMkSt7xKLFfX26NvtBXMrnG', '2021-12-12 15:57:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;