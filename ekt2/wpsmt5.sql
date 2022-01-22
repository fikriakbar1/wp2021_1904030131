-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2022 at 03:37 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE IF NOT EXISTS `calon_mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'lukman hakim', 'cikupa tangerang', 'laki-laki', 'islam', 'SMK darussalam', 'foto1.png'),
(2, 'fikri akbar', 'balaraja tangerang', 'laki-laki', 'islam', 'SMK yuppentek2', 'foto2.png'),
(3, 'azis firda', 'bitung tangerang', 'laki-laki', 'islam', 'SMK yuppentek2', 'foto1.png'),
(4, 'siti jamila', 'kronjo tangerang', 'perempuan', 'islam', 'SMK yuppentek3', 'foto2.png'),
(5, 'jaidi', 'grogol jakarta', 'perempuan', 'islam', 'SMA 18 jakarta', 'foto1.png');
