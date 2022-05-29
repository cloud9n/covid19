-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 12:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nok` varchar(255) NOT NULL,
  `region` varchar(25) NOT NULL,
  `new_confirmed` int(25) NOT NULL,
  `total_confirmed` varchar(25) NOT NULL,
  `new_deaths` varchar(25) NOT NULL,
  `total_death` varchar(25) NOT NULL,
  `new_recovered` varchar(25) NOT NULL,
  `total_recovered` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `email`, `address`, `nok`, `region`, `new_confirmed`, `total_confirmed`, `new_deaths`, `total_death`, `new_recovered`, `total_recovered`) VALUES
(5, 'John carter', 'future@g.com', 'No. 3. home suleja', 'suman john', 'Garam', 2, ' 13', '2', '12', '', '7'),
(2, 'Chris toh', 'chris@g.com', 'No. 3. home suleja', 'suman john', 'Bwari22', 2, ' 5', '1', '45', '3', '1'),
(4, 'Jexx future', 'jexx@gmail.com', 'No. 3. home suleja', 'suman john', 'Bwari', 3, '25', '2', '', '', ''),
(6, '', '', '', '', 'kuduru', 5, '5 + 3', '3', '1', '2', '1'),
(7, '', '', '', '', 'sabon wuse', 21, '812', '38732', '', '', ''),
(8, '', '', '', '', 'Bwari', 1762, '736276', '27672', '', '', '732676'),
(9, '', '', '', '', 'Bwari', 7872837, '98392839', '3982398', '983298873', '', '984329'),
(10, '', '', '', '', 'sabon wuse', 22, '1000', '1', '8', '89', '800');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin', '08062898177', 'cloudigblog@gmail.com', '123', 'Admin'),
(2, 'cloud', 'cloud', '08062898177', 'cloudig', '12345', 'Normal'),
(5, 'Indiya', 'Reuben', '8062898177', 'cloudigblog@gmail.com', '123121', 'user'),
(7, 'Indiya', 'Reuben', '08062898177', 'cloudigblog@gmail.com', 'w232323', 'Normal'),
(8, 'Indiya', 'Reuben', '08062898177', 'cloudigblog@gmail.com', 'w232323', 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
