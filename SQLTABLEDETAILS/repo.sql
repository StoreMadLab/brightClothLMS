-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 11:21 AM
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
-- Structure for view `repo`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `repo`  AS SELECT `c`.`C_name` AS `C_name`, `l`.`l_type_desc` AS `l_type_desc`, `b`.`date_rcv` AS `date_rcv`, `r`.`p_date` AS `p_date`, `l`.`l_type_price`* `b`.`qty` AS `amount` FROM (((`customer` `c` join `l_type` `l`) join `b_sales` `b`) join `report` `r`) WHERE `c`.`C_id` = `b`.`c_id` AND `b`.`l_type_id` = `l`.`l_type_id` AND `r`.`S_id` = `b`.`S_id``S_id`  ;

--
-- VIEW `repo`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
