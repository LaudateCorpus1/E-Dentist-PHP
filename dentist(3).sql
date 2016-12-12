-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 04:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentist`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `surname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historiku`
--

CREATE TABLE `historiku` (
  `id_historiku` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `diagnose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ID`, `rating`) VALUES
(3, 5),
(4, 4),
(5, 4),
(6, 5),
(7, 5),
(8, 4),
(9, 1),
(10, 3),
(11, 3),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `description`, `price`) VALUES
(1, 'images/dentist1.jpg', 'Seanca per pastrimin e dhe zbardhjen e dhembeve.', '20'),
(2, 'images/dentist2.jpg', 'Ekzaminimi radiografik.', '10'),
(3, 'images/dentist6.jpg', 'Heqja e dhembit.', '10'),
(4, 'images/dentist3.jpg', 'Mbushja e dhembit.', '15'),
(5, 'images/dentist4.jpg', 'Implantet.', '100 - 200 '),
(6, 'images/dentist5.jpg', 'Ndërhyrjet operacionale.', '150 - 300'),
(7, 'images/dentist7.jpg', 'Protezat.', '1000 - 1500');

-- --------------------------------------------------------

--
-- Table structure for table `termini`
--

CREATE TABLE `termini` (
  `id_termini` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `termini`
--

INSERT INTO `termini` (`id_termini`, `date`, `time`, `id_users`) VALUES
(1, '2016-12-21', '00:00:00', 2),
(2, '2016-12-12', '10:00:00', 4),
(7, '2016-12-12', '14:00:00', 2),
(8, '2016-12-12', '10:00:00', 1),
(9, '2016-12-12', '14:00:00', 1),
(10, '0000-00-00', '00:00:00', 0),
(11, '2016-12-12', '12:00:00', 1),
(12, '2016-12-12', '15:00:00', 1),
(13, '2016-12-12', '15:00:00', 1),
(14, '2016-12-12', '15:00:00', 1),
(15, '2016-12-12', '14:00:00', 1),
(16, '2016-12-12', '09:00:00', 1),
(17, '2016-12-12', '14:00:00', 1),
(18, '2016-12-12', '10:00:00', 2),
(19, '2016-12-12', '14:00:00', 2),
(20, '2016-12-12', '14:00:00', 2),
(21, '2016-12-12', '14:00:00', 2),
(22, '2016-12-12', '14:00:00', 2),
(23, '2016-12-12', '14:00:00', 2),
(24, '2016-12-12', '14:00:00', 2),
(25, '2016-12-12', '14:00:00', 2),
(26, '2016-12-12', '14:00:00', 2),
(27, '2016-12-12', '14:00:00', 2),
(28, '2016-12-12', '14:00:00', 2),
(29, '2016-12-12', '14:00:00', 2),
(30, '2016-12-12', '14:00:00', 2),
(31, '2016-12-12', '14:00:00', 2),
(32, '2016-12-12', '16:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `surname`, `email`, `admin`) VALUES
(1, 'admin', 'admin', 'Filan ', 'Fisteku', 'filan-fisteku@hotmail.com', 1),
(2, 'filan', 'fisteku', 'Fistek', 'Filani', 'fistek-filani@hotmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historiku`
--
ALTER TABLE `historiku`
  ADD PRIMARY KEY (`id_historiku`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termini`
--
ALTER TABLE `termini`
  ADD PRIMARY KEY (`id_termini`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historiku`
--
ALTER TABLE `historiku`
  MODIFY `id_historiku` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `termini`
--
ALTER TABLE `termini`
  MODIFY `id_termini` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
