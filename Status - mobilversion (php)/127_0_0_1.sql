-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 25. 04 2018 kl. 11:01:42
-- Serverversion: 5.6.24
-- PHP-version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `statusopdateringer`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `opdatering`
--

CREATE TABLE IF NOT EXISTS `opdatering` (
  `status_id` int(11) NOT NULL,
  `brugernavn` varchar(256) NOT NULL,
  `profilbillede` varchar(256) NOT NULL,
  `status` text NOT NULL,
  `likes` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `opdatering`
--

INSERT INTO `opdatering` (`status_id`, `brugernavn`, `profilbillede`, `status`, `likes`, `time`) VALUES
(7, 'funky monky', 'mig.png', 'hej', 0, '2018-04-13 11:03:37'),
(12, 'funky monky', 'mig.png', 'dag 1\r\n', 0, '2018-04-18 06:49:07'),
(13, 'funky monky', 'mig.png', 'hej med dig', 0, '2018-04-18 07:14:16'),
(14, 'funky monky', 'mig.png', 'hej malte \r\n', 0, '2018-04-18 09:01:37');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `opdatering`
--
ALTER TABLE `opdatering`
  ADD PRIMARY KEY (`status_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `opdatering`
--
ALTER TABLE `opdatering`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
