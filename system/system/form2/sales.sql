-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 09:32 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `salestable`
--

CREATE TABLE `salestable` (
  `water` text NOT NULL,
  `kahrba` text NOT NULL,
  `gas` text NOT NULL,
  `id` int(11) NOT NULL,
  `sadad` text NOT NULL,
  `aset` text NOT NULL,
  `adad` int(11) NOT NULL,
  `asanser` text NOT NULL,
  `message` text NOT NULL,
  `3mola` text NOT NULL,
  `w_street` text NOT NULL,
  `enter` text NOT NULL,
  `cash` text NOT NULL,
  `num_of_houes` text NOT NULL,
  `num_dor` text NOT NULL,
  `dor` text NOT NULL,
  `kind_of_pro` text NOT NULL,
  `date` datetime NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `num_land` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adwar` int(55) NOT NULL,
  `msaha` varchar(50) NOT NULL,
  `wagha` varchar(50) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `kind_houes` varchar(255) NOT NULL,
  `address_houes` varchar(255) NOT NULL,
  `misaha2` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `resh` varchar(255) NOT NULL,
  `matalat` varchar(255) NOT NULL,
  `mabany` varchar(255) NOT NULL,
  `garash` varchar(255) NOT NULL,
  `tashteb` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salestable`
--

INSERT INTO `salestable` (`water`, `kahrba`, `gas`, `id`, `sadad`, `aset`, `adad`, `asanser`, `message`, `3mola`, `w_street`, `enter`, `cash`, `num_of_houes`, `num_dor`, `dor`, `kind_of_pro`, `date`, `name`, `number`, `num_land`, `address`, `adwar`, `msaha`, `wagha`, `address2`, `kind_houes`, `address_houes`, `misaha2`, `room`, `bath`, `resh`, `matalat`, `mabany`, `garash`, `tashteb`, `price`) VALUES
('', '', '', 70, '', '', 0, '', '', '', '', '', '', '', '', '', '', '2017-03-21 09:31:07', 'ahmed yousry', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salestable`
--
ALTER TABLE `salestable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salestable`
--
ALTER TABLE `salestable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
