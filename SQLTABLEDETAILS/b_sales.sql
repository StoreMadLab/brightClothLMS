-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 04:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_sales`
--

CREATE TABLE `b_sales` (
  `S_id` int(11) NOT NULL,
  `l_type_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_rcv` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_sales`
--

INSERT INTO `b_sales` (`S_id`, `l_type_id`, `c_id`, `qty`, `date_rcv`, `amount`) VALUES
(22, 2, 5, 5, 20230113, 0),
(23, 2, 5, 5, 20230114, 0),
(24, 2, 3, 5, 20230112, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_sales`
--
ALTER TABLE `b_sales`
  ADD PRIMARY KEY (`S_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `l_type_id` (`l_type_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_sales`
--
ALTER TABLE `b_sales`
  ADD CONSTRAINT `b_sales_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`C_id`),
  ADD CONSTRAINT `b_sales_ibfk_2` FOREIGN KEY (`l_type_id`) REFERENCES `l_type` (`l_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
