-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 04:09 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_2_official_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_c_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`admin_id`, `admin_username`, `admin_email`, `admin_pass`, `admin_c_pass`) VALUES
(5, 'syed ittyhadul islam', 'ami.azmain30822@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `clint_log_reg`
--

CREATE TABLE `clint_log_reg` (
  `clint_id` int(11) NOT NULL,
  `clint_username` varchar(255) NOT NULL,
  `clint_email` varchar(155) NOT NULL,
  `clint_pass` varchar(255) NOT NULL,
  `clint_c_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clint_log_reg`
--

INSERT INTO `clint_log_reg` (`clint_id`, `clint_username`, `clint_email`, `clint_pass`, `clint_c_pass`) VALUES
(1, 'Syed Itttyhadul Islam', 'az.walker30822@gmail.com', '698d51a19d8a121ce581499d7b701668', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `product_item_details`
--

CREATE TABLE `product_item_details` (
  `id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img1` varchar(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(255) NOT NULL,
  `product_img4` varchar(255) NOT NULL,
  `product_details` longtext NOT NULL,
  `product_category` text NOT NULL,
  `product_short_description` longtext NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_item_details`
--

INSERT INTO `product_item_details` (`id`, `product_title`, `product_price`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_details`, `product_category`, `product_short_description`, `status`) VALUES
(7, 'This is the simple text', 145, '77.png', '77.png', '77.png', '77.png', 'This is the simple text', 'example0, example1, example2', 'This is the simple text', 0),
(8, 'Man Shirt', 123, 'Hacker Rank.png', 'Hacker Rank.png', 'Hacker Rank.png', 'Hacker Rank.png', 'this is the dame product_details', 'example0,example1,example2', 'this short description', 1),
(9, 'Man pant', 146, '77.png', '', '', '', 'This is the sample ', 'example0, example1, example2', 'This is the sample ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clint_log_reg`
--
ALTER TABLE `clint_log_reg`
  ADD PRIMARY KEY (`clint_id`);

--
-- Indexes for table `product_item_details`
--
ALTER TABLE `product_item_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clint_log_reg`
--
ALTER TABLE `clint_log_reg`
  MODIFY `clint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_item_details`
--
ALTER TABLE `product_item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
