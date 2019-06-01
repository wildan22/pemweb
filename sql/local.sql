-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 11:48 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE IF NOT EXISTS `local` (
`id` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `file_location` varchar(100) NOT NULL,
  `clicked` int(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`id`, `title`, `owner`, `tahun`, `kategori`, `file_location`, `clicked`) VALUES
(1, 'Al-Iqtishad: Jurnal Ilmu Ekonomi Syariah', 'Admin', '2017', 'Ekonomi', 'Al-Iqtishad_Jurnal_Ilmu_Ekonomi_Syariah', 1),
(2, 'Jurnal Sistem Informasi (Journal of Information System)', 'Admin', '2016', 'Teknik', 'Jurnal_Administrasi_Kesehatan_Indonesia_Unair', 100),
(3, 'Jurnal MEDISAINS (Jurnal Ilmiah Ilmu Kesehatan)	', 'Admin', '2015', 'Kesehatan', 'Jurnal_MEDISAINS_(Jurnal_Ilmiah_Ilmu_Kesehatan)', 10),
(4, 'Jurnal Administrasi Kesehatan Indonesia Unair	', 'Admin', '2017', 'Kesehatan', 'Jurnal_Pendidikan_Teknologi_dan_Kejuruan', 60),
(5, 'Jurnal Pendidikan Teknologi dan Kejuruan	', 'Admin', '2019', 'Pendidikan', 'Jurnal_Sistem_Informasi_(Journal_of_Information_System)', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `local`
--
ALTER TABLE `local`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
