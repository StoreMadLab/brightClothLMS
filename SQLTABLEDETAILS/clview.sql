-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 08:19 PM
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
-- Structure for view `clview`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clview`  AS SELECT `s`.`S_id` AS `S_id`, `c`.`C_id` AS `C_id`, `c`.`C_name` AS `C_name`, `l`.`l_type_desc` AS `l_type_desc`, `s`.`qty` AS `qty`, `s`.`date_rcv` AS `date_rcv`, `l`.`l_type_price`* `s`.`qty` AS `amount` FROM ((`customer` `c` join `sales` `s`) join `l_type` `l`) WHERE `c`.`C_id` = `s`.`c_id` AND `l`.`l_type_id` = `s`.`l_type_id``l_type_id`  ;

--
-- VIEW `clview`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
