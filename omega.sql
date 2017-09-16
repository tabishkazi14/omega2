-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2017 at 04:45 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omega`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `book_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `origin` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `reciever_name` text NOT NULL,
  `status` text,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `cost`, `book_date`, `origin`, `destination`, `reciever_name`, `status`, `email`) VALUES
(1, 250, '2017-03-05 03:27:49', 'mumbai', 'kolkata', 'benerjee', 'Delivered', 'alamaftab096@gmail.com'),
(2, 152, '2017-03-05 03:47:02', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(3, 152, '2017-03-05 03:47:41', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(4, 152, '2017-03-05 03:49:13', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(5, 152, '2017-03-05 03:49:53', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(6, 152, '2017-03-05 03:50:52', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(7, 152, '2017-03-05 03:52:35', 'mumbai', 'kolkata', 'mr x', 'Delivered', 'alamaftab096@gmail.com'),
(8, 155, '2017-03-05 21:17:36', 'lucknow', 'ahemadabad', 'shahid', 'Delivered', 'tabkaz@yahoo.in'),
(9, 105, '2017-03-05 21:39:03', 'mumbai', 'kolkata', 'mr z', 'Delivered', 'alamaftab096@gmail.com'),
(10, 155, '2017-03-05 21:43:46', 'lucknow', 'ahemadabad', 'shahid', 'Delivered', 'tabkaz@yahoo.in'),
(31, 450, '2017-03-05 16:45:05', 'bhopal', 'Banglore', 'iyer', 'Delivered', 'tabkaz@yahoo.in'),
(32, 700, '2017-03-05 22:15:17', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(33, 700, '2017-03-05 22:16:14', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(34, 700, '2017-03-05 22:16:54', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(35, 700, '2017-03-05 22:17:05', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(36, 700, '2017-03-05 22:17:36', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(37, 700, '2017-03-05 22:18:57', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(38, 700, '2017-03-05 22:19:20', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(39, 700, '2017-03-05 22:55:14', 'jaipur', 'nashik', 'anna', 'Delivered', 'alamaftab096@gmail.com'),
(62, 650, '2017-07-30 21:26:32', 'jaipur', 'laddakh', 'javed', 'Picked', 'alamaftab096@gmail.com'),
(63, 210, '2017-07-30 21:28:43', 'mumbai', 'surat', 'modi', 'Picked', 'alamaftab096@gmail.com'),
(64, 650, '2017-07-30 21:33:07', 'jaipur', 'laddakh', 'obama', 'Picked', 'alamaftab096@gmail.com'),
(65, 210, '2017-08-03 00:14:26', 'mumbai', 'something', 'obama', NULL, 'whtever@whereever.om'),
(66, 1500, '2017-08-03 11:42:49', 'Mumbai', 'Delhi', 'Mishra', NULL, 'alamaftab096@gmail.com'),
(67, 150, '2017-08-03 11:46:54', 'Mumbai', 'Delhi', 'Mishra', NULL, 'alamaftab096@gmail.com'),
(68, 50, '2017-08-03 11:49:58', '', '', 'amer', NULL, 'alamaftab096@gmail.com'),
(69, 50, '2017-08-03 11:50:22', '', '', '', NULL, 'alamaftab096@gmail.com'),
(70, 50, '2017-08-03 11:55:17', '', '', 'ababab', NULL, 'alamaftab096@gmail.com'),
(71, 50, '2017-08-03 11:55:17', '', '', 'ababab', NULL, 'alamaftab096@gmail.com'),
(72, 50, '2017-08-03 11:56:44', '', '', '', NULL, 'alamaftab096@gmail.com'),
(73, 50, '2017-08-03 11:56:44', '', '', '', NULL, 'alamaftab096@gmail.com'),
(74, 50, '2017-08-03 11:58:36', '', '', '', NULL, 'alamaftab096@gmail.com'),
(75, 50, '2017-08-03 11:58:36', '', '', '', NULL, 'alamaftab096@gmail.com'),
(76, 50, '2017-08-03 12:00:56', '', '', '', NULL, 'alamaftab096@gmail.com'),
(77, 50, '2017-08-03 12:02:49', '', '', '', NULL, 'alamaftab096@gmail.com'),
(78, 50, '2017-08-03 12:03:29', '', '', '', NULL, 'alamaftab096@gmail.com'),
(79, 50, '2017-08-03 12:04:13', '', '', '', NULL, 'alamaftab096@gmail.com'),
(80, 155, '2017-08-05 19:05:04', 'mumbai', 'kolkata', 'jj', NULL, 'alamaftab096@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `phone`) VALUES
('Aftab', 'Khan', 'alamaftab096@gmail.com', 'akakak', '8879171545'),
('mohid', 'kazi', 'mohuidak@gmail.com', 'mc', '9322234567'),
('tabish', 'kazi', 'tabkaz@yahoo.in', 'm3golden', '7899874566'),
('shahid', 'khan', 'thecoder@gmail.com', 'schu', '7977546546'),
('unknown', 'member', 'unknown@member.com', 'unknown', '1234567890'),
('tbish', 'khan', 'whtever@whereever.om', 'idonno', '555464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
