-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 03:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junkonnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` bigint(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date_sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `email`, `name`, `message`, `date_sent`) VALUES
(10114, 'jersonl@gmail.com', 'Jerson Lippad', 'Ang tagal ng delivery niyo.', '2023-07-26 21:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `type_of_junk` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `estimated_weight` float NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `date_of_pickup` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `product_name`, `type_of_junk`, `description`, `estimated_weight`, `img_path`, `price`, `date_of_pickup`, `status`) VALUES
(6, 104, 'Dyaryo', 'Paper', 'Marami ito', 6, 'shanb64c11f7228b173.38908673WIN_20220711_10_26_01_Pro.jpg', '0.00', '2023-07-29', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 - customer\r\n1 - admin',
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `user_type`, `first_name`, `last_name`, `phone`, `telephone`, `address`, `password`, `registration_date`) VALUES
(101, 'admin1', 'junkonnectadmin@gmail.com', 1, 'Roxanne', 'Yambao', 9123456789, 81234567, 'Laguna, Philippines', '$2y$10$4RwgIuIRhEjYm.hqCTuJc.zfNtkl4QY5Bv7AuvggpE.vYN/rGm7ba', '2023-07-24'),
(102, 'admin2', 'junkonnectadmin2@gmail.com', 1, 'Shiela Mae', 'Bacud', 9123456789, 81234567, 'Makati, Philippines', '$2y$10$4RwgIuIRhEjYm.hqCTuJc.zfNtkl4QY5Bv7AuvggpE.vYN/rGm7ba', '2023-07-24'),
(103, 'maricrism', 'maricrism@gmail.com', 0, 'Maricris', 'Micael', 9123456789, 2456879, 'Pasig, Philippines', '$2y$10$4RwgIuIRhEjYm.hqCTuJc.zfNtkl4QY5Bv7AuvggpE.vYN/rGm7ba', '2023-07-24'),
(104, 'shanb', 'shan@gmail.com', 0, 'Shan', 'Bacsain', 912356789, 81234567, 'Cainta, Philippines', '$2y$10$r7YscanrXTKGgPIx5VEFA.kRHAbgQqA2qUiKvEM4WbvwXEEiZyCDK', '2023-07-26'),
(105, 'jersonl', 'jersonl@gmail.com', 0, 'Jerson', 'Lippad', 9123456789, 81234567, 'Marikina, Philippines', '$2y$10$puj.z8KwLhSVFAHouZXjUOESrU3y02yXZq6XXuwPWgDrEhspkPMQe', '2023-07-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10115;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
