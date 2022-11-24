-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cutt_febric`
--

CREATE TABLE `cutt_febric` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `cut_fab` varchar(255) NOT NULL,
  `cate_fab` varchar(255) NOT NULL,
  `remain_fab` varchar(255) NOT NULL,
  `fabric_qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutt_febric`
--

INSERT INTO `cutt_febric` (`id`, `date`, `fabric`, `cut_fab`, `cate_fab`, `remain_fab`, `fabric_qty`) VALUES
(1, '2022-11-02', '24380', '2590', 'Muzzy and Winter-shirts', '21790', '');

-- --------------------------------------------------------

--
-- Table structure for table `daily_usage`
--

CREATE TABLE `daily_usage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sale_name` varchar(255) NOT NULL,
  `totalamount` int(120) NOT NULL,
  `receive` int(120) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_usage`
--

INSERT INTO `daily_usage` (`id`, `name`, `sale_name`, `totalamount`, `receive`, `date`) VALUES
(1, 'jhghf', 'hgfdd', 8764399, 87900, '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `add_equipment` varchar(255) NOT NULL,
  `quantity` int(123) NOT NULL,
  `purchase` int(123) NOT NULL,
  `add_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `add_equipment`, `quantity`, `purchase`, `add_status`, `date`) VALUES
(1, 'Plates', 10, 2400, 'new', '2022-10-01'),
(2, 'tables', 20, 24100, 'old', '2022-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `quantity`, `price`, `date`) VALUES
(1, 'Hammad Ali', 'Summer_shirts', 240000, '2022-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE `fabric` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`id`, `date`, `name`, `fabric`, `purpose`) VALUES
(1, '2022-11-01', 'Ajmal ALi', '24380', 'Summer-shirts, Muzzy and winter-shirts');

-- --------------------------------------------------------

--
-- Table structure for table `finish`
--

CREATE TABLE `finish` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sti_feb` varchar(255) NOT NULL,
  `finish_feb` varchar(255) NOT NULL,
  `remain_feb` varchar(255) NOT NULL,
  `cat_feb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finish`
--

INSERT INTO `finish` (`id`, `date`, `sti_feb`, `finish_feb`, `remain_feb`, `cat_feb`) VALUES
(1, '2022-11-03', '1540', '1030', '510', 'Muzzy');

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `id` int(21) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_desig` varchar(255) NOT NULL,
  `emp_pay` int(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`id`, `emp_name`, `emp_desig`, `emp_pay`, `date`) VALUES
(1, 'Jamal Ahmad', 'operator', 20000, '2022-09-01'),
(2, 'ALi Kamal', 'Helper', 10000, '2022-09-01'),
(3, 'Mubbashir ALi', 'Checker', 24000, '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `pack_feb`
--

CREATE TABLE `pack_feb` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sti_feb` varchar(255) NOT NULL,
  `pack_feb` varchar(255) NOT NULL,
  `remain_feb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pack_feb`
--

INSERT INTO `pack_feb` (`id`, `date`, `sti_feb`, `pack_feb`, `remain_feb`) VALUES
(1, '2022-11-03', '1030', '687', '343 KG');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `piece` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `s_name`, `services`, `price`, `piece`) VALUES
(1, 'Ali Haider', 'Cutting, Stitching', '380,230', '1000&nbsp;&nbsp; , 460\n');

-- --------------------------------------------------------

--
-- Table structure for table `stitch_feb`
--

CREATE TABLE `stitch_feb` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `cut_fab` varchar(255) NOT NULL,
  `sti_fab` varchar(255) NOT NULL,
  `remain_fab` varchar(255) NOT NULL,
  `cut_feb_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stitch_feb`
--

INSERT INTO `stitch_feb` (`id`, `date`, `cut_fab`, `sti_fab`, `remain_fab`, `cut_feb_id`) VALUES
(1, '2022-11-02', '2590', '1540', '1050 KG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cutt_febric`
--
ALTER TABLE `cutt_febric`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forign_key` (`fabric_qty`);

--
-- Indexes for table `daily_usage`
--
ALTER TABLE `daily_usage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finish`
--
ALTER TABLE `finish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pack_feb`
--
ALTER TABLE `pack_feb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sti_feb` (`sti_feb`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stitch_feb`
--
ALTER TABLE `stitch_feb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forign_key` (`cut_feb_id`),
  ADD KEY `sti_fab` (`sti_fab`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cutt_febric`
--
ALTER TABLE `cutt_febric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_usage`
--
ALTER TABLE `daily_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finish`
--
ALTER TABLE `finish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monthly`
--
ALTER TABLE `monthly`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pack_feb`
--
ALTER TABLE `pack_feb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stitch_feb`
--
ALTER TABLE `stitch_feb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
