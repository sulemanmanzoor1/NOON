-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:34 PM
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
(18, 'two', 2, 2, 'new', '2022-11-02'),
(21, 'nine', 9, 9, 'new', '2022-11-09'),
(23, 'add_equipment', 0, 0, 'add_status', '0000-00-00'),
(24, 'asd', 123, 123, 'old', '0000-00-00'),
(25, 'asd', 123, 123, 'old', '0000-00-00'),
(26, 'asddd', 123767, 98988, 'new', '0000-00-00'),
(27, 'asddd', 123767, 98988, 'new', '0000-00-00'),
(28, 'dsa', 312, 321, 'old', '2022-11-02'),
(29, 'dsa', 31244, 321444, 'new', '2022-11-14'),
(30, 'dsadsds', 31244434, 321444534, 'new', '2022-09-09'),
(31, 'gfds', 5432, 65432, 'new', '2022-10-30'),
(32, 'gfds', 5432, 65432, 'new', '2022-10-30'),
(33, 'gfds', 5432, 65432, 'new', '2022-10-30'),
(34, 'ppp', 444, 4321, 'old', '2022-11-01'),
(35, 'kkk', 999, 99, 'new', '2022-11-06'),
(36, 'kjk', 73487, 83492, 'old', '2022-11-25'),
(37, 'tera', 13, 13, 'old', '2022-11-13'),
(38, 'tera', 13, 13, 'old', '2022-11-13'),
(39, 'four', 4, 4, 'new', '2022-11-14'),
(40, 'five', 5, 5, 'old', '2022-11-15'),
(41, 'fawad', 12, 123, 'old', '2022-11-14'),
(42, 'jkj', 4646, 5774, '', '2022-11-12'),
(43, 'nbn', 3565, 768, 'new', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `s_name`, `services`, `price`) VALUES
(1, 'Fawad Kaleem', 'flutter, design,web, IT', '10'),
(2, 'ALi Abbas', 'web, flutter,ads, marketing\n', '200'),
(3, 'ali akram', 'aer, erew,/ ad, sdfe, dfe\n', '12'),
(4, 'akram kki', 'aer, erew,/adw, efef\n', '20'),
(5, 'ALi sulyeman', 'asd, qwe,da, we', '400,20,10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
