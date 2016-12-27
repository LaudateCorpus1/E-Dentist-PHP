-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 01:37 PM
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
(1, 'Kontrolla te dentisti', 'Disa persona kur shkojne per here te pare te dentisti, ose kur detyrohen te shkojne me pas per nje kohe te gjate, jetojne ankth. Frika e pabaza, paragjykimet, zhurmat e pajisjeve e shtojne ankthin.\nKontrolla e dhembeve tek dentisti  eshte teper e rendesishme prandaj duhet te behet se paku 2 here gjate vitit.\n', 'images/kontrolla.png'),
(2, 'Menyra e pastrimit te dhembeve', 'Pastrimi i dhembeve duhet te behet ne keto menyra nga 1 - 6 nga 30 sekonda per secilen menyre <br>Pastrimi duhet te behet dy here ne dite pas ushqimit  Semundjet e gojes ndikojne ne cilesine e jetes se njeriut. Larja e dhembeve duhet te filloje menjehere pas daljes se dhembit te pare te qumeshtit. Pastat e dhembeve kane ne perberje disa substanca qe kane rolin e tyre specifik. Numri i baktereve ne goje mund te jete me i madh se popullsia e botes. Era e keqe e gojes mund te jete shenje e disa semundjeve. Higjiena e gojes eshte shume e rendesishme sidomos gjate shtatezanise. Nje person i rritur ka 32 dhembe qe do te thote 160 siperfaqe per tu pastruar.', 'images/pastrimi.png'),
(3, 'Brusha dhe Pasta e Dhembeve', 'Perdorni brushat e buta jane me te mira per mishrat e dhembeve.\nBrushen e dhembeve duhet ta nderroni qdo 3-6 muaj. \nPasta duhet te permbaj flourid i cili ndikon ne forcimin e dhembeve.\nFurqa e dhembeve eshte mjeti me i rendesishem per higjienen e gojes. Si e tille, edhe ndaj saj duhet pasur shume kujdes.\n\nSpecialistet keshillojne qe furqa e dhembeve duhet te qendroje ne nje vend te hapur, por jo ne vende me lageshtire dhe, per me teper, aty ku mund te kete kontakt me bakteret.\n\nMos harro, nese furqen e mbroni me nje kapak, me pare duhet ta lesh te thahet dhe pastaj ta vendosesh aty.', 'images/brusha.png'),
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
(1, '2017-01-10', '12:00:00', 2),
(2, '2016-12-15', '10:00:00', 2),
(8, '2016-12-12', '10:00:00', 1),
(9, '2016-12-16', '08:00:00', 1),
(13, '2016-12-12', '15:00:00', 1),
(15, '2016-12-12', '14:00:00', 1),
(16, '2016-12-12', '09:00:00', 1),
(21, '2016-12-12', '14:00:00', 2),
(23, '2016-12-12', '14:00:00', 2),
(24, '2016-12-12', '14:00:00', 2),
(29, '2016-12-12', '14:00:00', 2),
(30, '2016-12-12', '14:00:00', 2),
(31, '2016-12-12', '14:00:00', 2),
(32, '2016-12-12', '16:00:00', 2),
(34, '2017-01-25', '10:00:00', 2),
(35, '2016-12-24', '10:00:00', 2),
(37, '2016-12-23', '08:00:00', 2),
(38, '2016-12-31', '16:00:00', 2),
(41, '2016-12-27', '08:00:00', 3),
(42, '2016-12-20', '14:00:00', 2),
(43, '2016-12-20', '12:00:00', 3),
(44, '2016-12-28', '09:00:00', 2),
(46, '2016-12-29', '08:00:00', 2),
(47, '2017-01-18', '08:00:00', 3),
(48, '2016-12-31', '08:00:00', 3),
(49, '2017-01-04', '08:00:00', 3),
(50, '2017-01-21', '08:00:00', 3),
(51, '2017-01-22', '08:00:00', 2),
(52, '2017-01-20', '14:00:00', 0),
(53, '0000-00-00', '00:00:00', 0);

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
(2, 'ensar', 'ensar123', 'Ensar', 'Ibrahimi', 'ensar-ibrahimi@hotmail.com', 0),
(3, 'eniskpteam', '12345678', 'Enis ', 'Halimi', 'kp-team@hotmail.com', 1),
(4, 'eronhalili', 'eron1234', 'Eron', 'Halili', 'eron-halili@hotmail.com', 1),
(5, 'davidb', '12345678', 'David', 'Bytyqi', 'david_bytyqi@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vizita`
--

CREATE TABLE `vizita` (
  `id_historiku` int(11) NOT NULL,
  `diagnose` text NOT NULL,
  `termin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vizita`
--

INSERT INTO `vizita` (`id_historiku`, `diagnose`, `termin_id`) VALUES
(1, 'Heqje dhembi duke perdorur metoden standarde', 1),
(2, 'Pacientit eshte shfaqur semundja e mishit te dhembeve', 41);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `vizita`
--
ALTER TABLE `vizita`
  ADD PRIMARY KEY (`id_historiku`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id_termini` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vizita`
--
ALTER TABLE `vizita`
  MODIFY `id_historiku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
