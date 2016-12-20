-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 01:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE dentist;
USE dentist;

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
-- Table structure for table `keshillat`
--

CREATE TABLE `keshillat` (
  `keshillat_id` int(11) NOT NULL,
  `titulli` varchar(1000) NOT NULL,
  `permbajtja` varchar(1000) NOT NULL,
  `imazhi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keshillat`
--

INSERT INTO `keshillat` (`keshillat_id`, `titulli`, `permbajtja`, `imazhi`) VALUES
(1, 'Kontrolla te dentisti', 'Kontrolla e dhembeve tek dentisti duhet te behet se paku 2 here gjate vitit', 'images/kontrolla.png'),
(2, 'Menyra e pastrimit te dhembeve', 'Pastrimi i dhembeve duhet te behet ne keto menyra nga 1 - 6 nga 30 sekonda per secilen menyre <br>Pastrimi duhet te behet dy here ne dite pas ushqimit ', 'images/pastrimi.png'),
(3, 'Brusha dhe Pasta e Dhembeve', 'Perdorni brushat e buta jane me te mira per mishrat e dhembeve.\r\nBrushen e dhembeve duhet ta nderroni çdo 3-6 muaj. \r\nPasta duhet te permbaj flourid i cili ndikon ne forcimin e dhembeve', 'images/brusha.png'),
(4, 'Keshilla te pergjithshme', 'Perdorni uje pas ushqimit.<br>\r\nPerdorni fije dentare per heqjen e mbeturinave ushqimore mes dhembeve.<br>\r\nMos konsumoni ushqime te thata dhe me shume sheqer.<br>				Reduktoni marrjen e karbohidrateve (sheqernave) gjate dites.<br>\r\nBeni kujdes gjate ngrenjes se ushqimeve te forta.<br>\r\nDuhani dhe alkooli ndikojn negativisht sidomos te mishrat e dhembeve.<br>', 'images/kujdesi.png');

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
(1, '2016-12-21', '17:00:00', 2),
(2, '2016-12-15', '10:00:00', 2),
(8, '2016-12-12', '10:00:00', 1),
(9, '2016-12-16', '08:00:00', 1),
(13, '2016-12-12', '15:00:00', 1),
(15, '2016-12-12', '14:00:00', 1),
(16, '2016-12-12', '09:00:00', 1),
(21, '2016-12-12', '14:00:00', 2),
(23, '2016-12-12', '14:00:00', 2),
(24, '2016-12-12', '14:00:00', 2),
(25, '2016-12-12', '14:00:00', 2),
(26, '2016-12-12', '14:00:00', 2),
(27, '2016-12-12', '14:00:00', 2),
(28, '2016-12-12', '14:00:00', 2),
(29, '2016-12-12', '14:00:00', 2),
(30, '2016-12-12', '14:00:00', 2),
(31, '2016-12-12', '14:00:00', 2),
(32, '2016-12-12', '16:00:00', 2),
(34, '2016-12-25', '10:00:00', 2),
(35, '2016-12-24', '10:00:00', 2),
(37, '2016-12-23', '15:00:00', 2),
(38, '2016-12-31', '16:00:00', 2),
(39, '2016-12-25', '09:00:00', 3),
(41, '2016-12-27', '08:00:00', 3),
(42, '2016-12-20', '14:00:00', 2),
(43, '2016-12-20', '12:00:00', 3),
(44, '2016-12-28', '09:00:00', 2),
(46, '2016-12-29', '08:00:00', 2);

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
(2, 'ensari', 'ensar123', 'Ensar', 'Ibrahimi', 'ensar-ibrahimi@hotmail.com', 0),
(3, 'eniskpteam', 'Kpteam123', 'Enis ', 'Halimi', 'kp-team@hotmail.com', 1),
(4, 'eronhalili', 'eron1234', 'Eron', 'Halili', 'eron-halili@hotmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historiku`
--
ALTER TABLE `historiku`
  ADD PRIMARY KEY (`id_historiku`);

--
-- Indexes for table `keshillat`
--
ALTER TABLE `keshillat`
  ADD PRIMARY KEY (`keshillat_id`);

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
-- AUTO_INCREMENT for table `keshillat`
--
ALTER TABLE `keshillat`
  MODIFY `keshillat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id_termini` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;