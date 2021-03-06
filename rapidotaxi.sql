-- phpMyAdmin SQL Dump
-- version 3.3.7deb5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2011 at 07:59 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rapidotaxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `visitas` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`visitas`) VALUES
(57);

-- --------------------------------------------------------

--
-- Table structure for table `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(100) NOT NULL,
  `bandeirada` varchar(10) CHARACTER SET utf8 NOT NULL,
  `b1_km` varchar(10) CHARACTER SET utf8 NOT NULL,
  `b2_km` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tarifa`
--

INSERT INTO `tarifa` (`id`, `cidade`, `bandeirada`, `b1_km`, `b2_km`) VALUES
(1, 'Sao Paulo - SP', '5.00', '2.70', '3.24'),
(2, 'Campinas - SP', '4.40', '2.65', '3.45'),
(3, 'Curitiba - PR', '4.00', '2.00', '2.30'),
(4, 'Belo Horizonte - MG', '4,10', '2.40', '2.88'),
(5, 'Florianopolis - SC', '3.80', '2.00', '2.40'),
(6, 'Rio de Janeiro - RJ', '4.70', '1.70', '2.04');
(7, 'Brasilia - DF', '4.80', '2.22', '2.82');
