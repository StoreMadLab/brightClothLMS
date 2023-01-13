-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 11:45 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `procrepo` (IN `del_date` DATE)   BEGIN
SELECT C_name, l_type_desc, date_rcv, p_date, amount
FROM customer c, l_type l, b_sales b, report r
WHERE c.C_id=b.c_id AND b.l_type_id=l.l_type_id AND b.S_id=r.S_id AND
r.p_date=del_date;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prorepo` (IN `f_date` DATE)   BEGIN
SELECT * FROM repo WHERE p_date=f_date;
END$$

DELIMITER ;

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `cla`
-- (See below for the actual view)
--
CREATE TABLE `cla` (
`C_id` int(200)
,`C_name` varchar(15)
,`l_type_desc` varchar(50)
,`qty` int(11)
,`date_rcv` date
,`amount` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `clview`
-- (See below for the actual view)
--
CREATE TABLE `clview` (
`S_id` int(11)
,`C_id` int(200)
,`C_name` varchar(15)
,`l_type_desc` varchar(50)
,`qty` int(11)
,`date_rcv` date
,`amount` double
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_id` int(200) NOT NULL,
  `C_name` varchar(15) NOT NULL,
  `Ph_no` int(10) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `C_name`, `Ph_no`, `Address`) VALUES
(3, 'atr', 54845, 'mlore'),
(5, 'ghwf', 54845, 'mlore'),
(6, 'ghwffa', 54845, 'ffafe');

-- --------------------------------------------------------

--
-- Table structure for table `l_type`
--

CREATE TABLE `l_type` (
  `l_type_id` int(11) NOT NULL,
  `l_type_desc` varchar(50) NOT NULL,
  `l_type_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `l_type`
--

INSERT INTO `l_type` (`l_type_id`, `l_type_desc`, `l_type_price`) VALUES
(1, 'T-Shirts', 30),
(2, 'Pants-Casual', 20);

-- --------------------------------------------------------

--
-- Stand-in structure for view `repo`
-- (See below for the actual view)
--
CREATE TABLE `repo` (
`C_name` varchar(15)
,`l_type_desc` varchar(50)
,`date_rcv` int(11)
,`p_date` date
,`amount` double
);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `R_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`R_id`, `S_id`, `p_date`) VALUES
(4, 19, '2023-01-14'),
(5, 20, '2023-01-15'),
(6, 22, '2023-01-14'),
(7, 23, '2023-01-14'),
(8, 24, '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `S_id` int(11) NOT NULL,
  `l_type_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_rcv` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `tr1` BEFORE DELETE ON `sales` FOR EACH ROW INSERT into b_sales(S_id, l_type_id, c_id, qty, date_rcv, amount) VALUES(old.S_id, old.l_type_id, old.c_id, old.qty, old.date_rcv, old.amount)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `u_pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `user_name`, `u_pwd`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `cla`
--
DROP TABLE IF EXISTS `cla`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cla`  AS SELECT `c`.`C_id` AS `C_id`, `c`.`C_name` AS `C_name`, `l`.`l_type_desc` AS `l_type_desc`, `s`.`qty` AS `qty`, `s`.`date_rcv` AS `date_rcv`, `l`.`l_type_price`* `s`.`qty` AS `amount` FROM ((`customer` `c` join `sales` `s`) join `l_type` `l`) WHERE `c`.`C_id` = `s`.`c_id` AND `l`.`l_type_id` = `s`.`l_type_id``l_type_id`  ;

-- --------------------------------------------------------

--
-- Structure for view `clview`
--
DROP TABLE IF EXISTS `clview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clview`  AS SELECT `s`.`S_id` AS `S_id`, `c`.`C_id` AS `C_id`, `c`.`C_name` AS `C_name`, `l`.`l_type_desc` AS `l_type_desc`, `s`.`qty` AS `qty`, `s`.`date_rcv` AS `date_rcv`, `l`.`l_type_price`* `s`.`qty` AS `amount` FROM ((`customer` `c` join `sales` `s`) join `l_type` `l`) WHERE `c`.`C_id` = `s`.`c_id` AND `l`.`l_type_id` = `s`.`l_type_id``l_type_id`  ;

-- --------------------------------------------------------

--
-- Structure for view `repo`
--
DROP TABLE IF EXISTS `repo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `repo`  AS SELECT `c`.`C_name` AS `C_name`, `l`.`l_type_desc` AS `l_type_desc`, `b`.`date_rcv` AS `date_rcv`, `r`.`p_date` AS `p_date`, `l`.`l_type_price`* `b`.`qty` AS `amount` FROM (((`customer` `c` join `l_type` `l`) join `b_sales` `b`) join `report` `r`) WHERE `c`.`C_id` = `b`.`c_id` AND `b`.`l_type_id` = `l`.`l_type_id` AND `r`.`S_id` = `b`.`S_id``S_id`  ;

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `l_type`
--
ALTER TABLE `l_type`
  ADD PRIMARY KEY (`l_type_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`S_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `i_type_id` (`l_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `l_type`
--
ALTER TABLE `l_type`
  MODIFY `l_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_sales`
--
ALTER TABLE `b_sales`
  ADD CONSTRAINT `b_sales_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`C_id`),
  ADD CONSTRAINT `b_sales_ibfk_2` FOREIGN KEY (`l_type_id`) REFERENCES `l_type` (`l_type_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`C_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`l_type_id`) REFERENCES `l_type` (`l_type_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
