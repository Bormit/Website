-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 04:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census`
--

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `сity` varchar(50) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`id`, `name`, `сity`, `sex`, `age`) VALUES
(39, '5', 'Краснодар', '5', 5),
(8, '12', 'Омск', '1', 12),
(47, '10', 'Омск', 'M', 21),
(48, 'Антон', 'Москва', 'M', 21),
(49, 'Антон', 'Москва', 'M', 21),
(50, 'Антон', 'Москва', 'M', 21),
(51, 'Ринат', 'Москва', 'M', 21),
(56, 'Михаил', 'Питер', 'М', 21),
(61, 'Ринта', 'Москва', 'Ж', 88),
(58, 'Саша', 'Омск', 'Ж', 12),
(65, 'Митя', 'Калуга', 'М', 98),
(60, 'Клава', 'Омск', 'Ж', 12),
(62, 'Катя', 'Москва', 'Ж', 88),
(63, 'Маша', 'Омск', 'Ж', 56),
(64, 'Маша', 'Питер', 'Ж', 34),
(66, 'Маруся', 'Воронеж', 'Ж', 29),
(76, 'Антон', 'Киев', 'М', 21),
(73, 'Антон', 'Киев', 'М', 76),
(74, 'Сережа', 'Воронеж', 'М', 21),
(75, 'Ринат', 'Омск', 'М', 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
