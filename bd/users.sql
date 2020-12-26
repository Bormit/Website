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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `role`) VALUES
(47, 'login1', '1f694b96c5267f1ad8229a527758e3f4', '123', 'user'),
(42, '7', '685dd94badb577694a8480ba37e5f314', '123', 'user'),
(39, '5', '012fb10fd328e9c0e9fc0a95a90f3410', '123', 'user'),
(34, '1', '3efc1c0e3e724700948f0d129b8240ef', '123', 'user'),
(62, 'test2', 'c1d4830ccd295caa4a701c772feb4a68', 'Никита', 'user'),
(59, 'natali', 'a39b53ada19f87010218bccce90f94ad', 'natysya', 'user'),
(43, '9', '8e3f6e451ccf024d367cd4664292fd4b', '123', 'user'),
(20, '12', 'bc9184a4540c214b5c38f19daf1878f3', '123', 'user'),
(21, 'fafafi', '7314287a23353b5066ae16ec1f09f4ef', '123', 'user'),
(22, 'Manyany', '748769aae8145b1f3ccaba334e5f9c41', '123', 'user'),
(23, '@@@ert1', 'c4e4947c419fb6247a032aa166e5dea4', '123', 'user'),
(48, '1234', '1f694b96c5267f1ad8229a527758e3f4', '123', 'user'),
(49, 'login2', '5da6ee6cb48ccd151313c5885439f206', 'Логин2', 'user'),
(51, 'rinat', '1f694b96c5267f1ad8229a527758e3f4', 'rinat', 'user'),
(52, 'user1', 'c1d4830ccd295caa4a701c772feb4a68', '123', 'user'),
(53, 'user50', '03a7852d9af83cc765fd7ea2ad320ca7', 'Антон', 'user'),
(63, 'test3', 'c1d4830ccd295caa4a701c772feb4a68', 'Вася', 'user'),
(60, 'mamamiy', 'c1d4830ccd295caa4a701c772feb4a68', 'mumu', 'user'),
(57, 'Vova', 'c1d4830ccd295caa4a701c772feb4a68', 'Михаил', 'user'),
(56, 'Admin', 'c1d4830ccd295caa4a701c772feb4a68', 'Admin', 'admin'),
(54, 'login3', '331cb464a69e2138d039943d0658d18f', '3', 'user'),
(55, 'rinat12', 'c1d4830ccd295caa4a701c772feb4a68', '12', 'user'),
(69, 'test5', '95b132423df9856fb56e09d54644012b', 'Антон', 'user'),
(65, 'fafafid', 'c1d4830ccd295caa4a701c772feb4a68', 'Оля', 'user'),
(66, 'test6', 'c1d4830ccd295caa4a701c772feb4a68', 'Валя', 'user'),
(67, 'test7', 'c1d4830ccd295caa4a701c772feb4a68', 'Валя', 'user'),
(71, 'test9', 'c1d4830ccd295caa4a701c772feb4a68', 'Антон', 'user'),
(72, 'test10', '2a6f109d0bb44ea1abe3347c1edf4017', 'Оля', 'user'),
(83, 'uuuu', '946871399a37a2159edaecbed482e150', 'iiiiiiii', 'user'),
(76, 'rinat121', 'c1d4830ccd295caa4a701c772feb4a68', 'Антон', 'user'),
(77, 'aaaa', 'c1d4830ccd295caa4a701c772feb4a68', 'aaaa', 'user'),
(78, 'aaaaa', 'c1d4830ccd295caa4a701c772feb4a68', 'aaaaa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
