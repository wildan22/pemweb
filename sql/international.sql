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
-- Table structure for table `international`
--

CREATE TABLE IF NOT EXISTS `international` (
`id` int(6) NOT NULL,
  `title` varchar(300) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `file_location` varchar(300) NOT NULL,
  `clicked` int(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `international`
--

INSERT INTO `international` (`id`, `title`, `owner`, `tahun`, `kategori`, `file_location`, `clicked`) VALUES
(1, 'The effects of schooling, family and poverty on childrens attainment, potential and confidence Evidence from Kinondoni, Dar es Salaam, Tanzania', 'Admin', '2017', 'Pendidikan', 'The_effects_of_schooling,_family_and_poverty_on_childrens_attainment,_potential_and_confidence_Evidence_from_Kinondoni,_Dar_es_Salaam,_Tanzania', 6),
(2, 'Computers and students achievement: An analysis of the One Laptop per Child program in Catalonia', 'Admin', '2016', 'Science', 'Computers_and_students_achievement_An_analysis_of_the_One_Laptop_per_Child_program_in_Catalonia', 125),
(3, 'How to improve student learning in every classroom now', 'Admin', '2017', 'Pendidikan', 'How_to_improve_student_learning_in_every_classroom_now', 30),
(4, 'Indonesial Journal of Clinical Pathology and Medical Laboratory	', 'Admin', '2015', 'Kesehatan', 'Indonesial_Journal_of_Clinical_Pathology_and_Medical_Laboratory', 12),
(5, 'The Asian Journal of Technology Management: AJTM', 'Admin', '2018', 'Ekonomi', 'The_Asian_Journal_of_Technology_Management_AJTM', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `international`
--
ALTER TABLE `international`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `international`
--
ALTER TABLE `international`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
