-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 10:14 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `ID` int(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_number` int(15) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `order_list` varchar(1000) NOT NULL,
  `confirmation` varchar(10) DEFAULT '+'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`ID`, `first_name`, `last_name`, `email`, `telephone_number`, `street`, `city`, `order_list`, `confirmation`) VALUES
(1, 'Nemanja', 'Avramovic', 'hrca@gmail.com', 12345678, 'Retfala', 'Osijek', 'Pizza Vesuvio 40kn x 1,\r\nUkupno 40kn', 'potvrdjena'),
(2, 'Nemanja', 'Avramovic', 'hrca@gmail.com', 12345678, 'Retfala', 'Osijek', 'Pizza Vesuvio 40kn x 1,\r\nUkupno 40kn', 'odbijena'),
(3, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 3,\r\nPizza Vesuvio 40kn x 2,\r\nRaÅ¾njiÄ‡i 40kn x 1,\r\nUkupno 240kn', 'odbijena'),
(4, 'Vesna', 'Avramovic', 'vesna.short@gmail.com', 32445555, 'Retfala', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nPizza Slavonska 45kn x 1,\r\nUkupno 85kn', 'potvrdjena'),
(5, 'Mickey', 'Mouse', 'hrca@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Piletina s roÅ¡tilja 40kn x 1,\r\nRaÅ¾njiÄ‡i 40kn x 1,\r\nUkupno 80kn', 'potvrdjena'),
(6, 'Pero', 'Peric', 'peroperic@gmail.com', 989563784, 'Dunavska 85', 'Vukovar', 'Pizza Slavonska 45kn x 1,\r\nPiletina s roÅ¡tilja 40kn x 3,\r\nGurmanska pljeskavica 43kn x 1,\r\nUkupno 208kn', 'potvrdjena'),
(7, 'Vesna', 'Avramovic', 'vesna.looong@gmail.com', 989428333, 'Dunavska 85', 'Vukovar', 'Pizza Capricosa 40kn x 2,\r\nPizza Slavonska 45kn x 3,\r\nPiletina s roÅ¡tilja 40kn x 2,\r\nUkupno 295kn', 'odbijena'),
(8, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 3,\r\nPizza Slavonska 45kn x 2,\r\nPizza Mexican 45kn x 2,\r\nPiletina s roÅ¡tilja 40kn x 2,\r\nGurmanska pljeskavica 43kn x 2,\r\nUkupno 466kn', 'potvrdjena'),
(9, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(10, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(11, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(12, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(13, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(14, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(15, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(16, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'potvrdjena'),
(17, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', '+'),
(18, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', 'odbijena'),
(19, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', '+'),
(20, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Vukovar', 'Gurmanska pljeskavica 43kn x 1,\r\nUkupno 43kn', '+'),
(21, 'Nemanja', 'Mouse', 'nemanja.crypto1996@gmail.com', 32445555, 'Dunavska 85', 'Vukovar', 'Pizza Capricosa 40kn x 4,\r\nPizza Vesuvio 40kn x 3,\r\nPiletina s roÅ¡tilja 40kn x 2,\r\nRaÅ¾njiÄ‡i 40kn x 2,\r\nUkupno 440kn', 'potvrdjena'),
(22, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Vesuvio 40kn x 2,\r\nPizza Mexican 45kn x 1,\r\nUkupno 125kn', 'odbijena'),
(23, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Vesuvio 40kn x 2,\r\nPizza Mexican 45kn x 1,\r\nUkupno 125kn', 'odbijena'),
(24, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Vesuvio 40kn x 2,\r\nPizza Mexican 45kn x 1,\r\nUkupno 125kn', 'potvrdjena'),
(25, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 3,\r\nPizza Vesuvio 40kn x 2,\r\nUkupno 200kn', 'potvrdjena'),
(26, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'SendviÄ s kulenom 30kn x 2,\r\nZagrebaÄki odrezak 48kn x 2,\r\nGurmanska pljeskavica 43kn x 3,\r\nPizza Capricosa 40kn x 5,\r\nUkupno 485kn', '+'),
(27, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(28, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(29, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(30, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(31, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(32, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(33, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(34, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(35, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(36, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(37, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(38, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(39, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(40, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(41, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(42, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(43, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(44, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', '+'),
(45, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza Capricosa 40kn x 1,\r\nUkupno 40kn', 'odbijena'),
(46, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 989428333, 'Ivana Gorana Kovacica 11', 'Osijek', 'Pizza s piletinom 45kn x 3,\r\nPizza Tiroleza 43kn x 2,\r\nUkupno 221kn', 'potvrdjena');

-- --------------------------------------------------------

--
-- Table structure for table `pdo`
--

CREATE TABLE `pdo` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `secretpin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdo`
--

INSERT INTO `pdo` (`id`, `fullname`, `username`, `password`, `secretpin`) VALUES
(2, 'Nemanja Avramovic', 'admin', '21232f297a57a5a743894a0e4a801fc3', 142753);

-- --------------------------------------------------------

--
-- Table structure for table `poruke`
--

CREATE TABLE `poruke` (
  `ID` int(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'neodgovoreno'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poruke`
--

INSERT INTO `poruke` (`ID`, `first_name`, `last_name`, `email`, `message`, `status`) VALUES
(1, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 'afsdgasdg', 'odgovoreno'),
(2, 'Nemanja', 'Avramovic', 'nemanja.avramovic1996@gmail.com', 'Pozdrav poÅ¡tovani, kakvo vam je radno vrijeme sutra?', 'odgovoreno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pdo`
--
ALTER TABLE `pdo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruke`
--
ALTER TABLE `poruke`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `narudzba`
--
ALTER TABLE `narudzba`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pdo`
--
ALTER TABLE `pdo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poruke`
--
ALTER TABLE `poruke`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
