-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2015 at 05:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `dss_news`
--

CREATE TABLE IF NOT EXISTS `dss_news` (
`ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Date` text NOT NULL,
  `Author` text NOT NULL,
  `releasedate` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dss_news`
--

INSERT INTO `dss_news` (`ID`, `Title`, `Date`, `Author`, `releasedate`, `Content`) VALUES
(1, 'Mein erster Beitrag', '02-04-2015', 'Ares', '02-04-2015', 'mEIN ERSTER sadfsadfasdfsadfasd'),
(2, 'Mein zweiter Beitrag', '05-04-2015', 'Ares', '05-04-2015', 'asdfasdfsadgdfg'),
(3, 'Mein 3. Beitrag', '05-04-2015', '', '05-04-2015', 'asdfasdfsad');

-- --------------------------------------------------------

--
-- Table structure for table `dss_sites`
--

CREATE TABLE IF NOT EXISTS `dss_sites` (
`ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Date` date NOT NULL,
  `Content` text NOT NULL,
  `Author` text NOT NULL,
  `hidden` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `alias` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dss_sites`
--

INSERT INTO `dss_sites` (`ID`, `Title`, `Date`, `Content`, `Author`, `hidden`, `ord`, `alias`) VALUES
(1, 'Meine Erste Seite.', '2015-04-23', 'Das hier ist die erste seite.', 'Ares', 0, 1, 'meine-erste-seite'),
(2, 'Impressum', '2015-04-15', 'Impressum blabla', 'Ares', 0, 3, 'impressum'),
(3, 'Unwichtige seite', '0000-00-00', 'ist unwictig', 'ares', 1, 2, 'unwichtige-seite'),
(4, 'Home', '0000-00-00', 'Das ist die Startseite.', '', 0, 0, 'home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dss_news`
--
ALTER TABLE `dss_news`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dss_sites`
--
ALTER TABLE `dss_sites`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dss_news`
--
ALTER TABLE `dss_news`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dss_sites`
--
ALTER TABLE `dss_sites`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
