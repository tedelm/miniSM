-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Serverversion: 10.3.34-MariaDB-1:10.3.34+maria~focal
-- PHP-version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `myDatabaseName`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `miniSM_Rating`
--

CREATE TABLE `miniSM_Rating` (
  `id_` int(100) NOT NULL,
  `VOTER_` varchar(250) DEFAULT NULL,
  `BEER_IDENTITY` varchar(5) DEFAULT NULL,
  `IBU_` varchar(100) DEFAULT NULL,
  `EBC_` varchar(100) DEFAULT NULL,
  `CO2_` varchar(100) DEFAULT NULL,
  `SHBF_` varchar(100) DEFAULT NULL,
  `ALLOVERRATING_` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `miniSM_Rating`
--

INSERT INTO `miniSM_Rating` (`id_`, `VOTER_`, `BEER_IDENTITY`, `IBU_`, `EBC_`, `CO2_`, `SHBF_`, `ALLOVERRATING_`) VALUES
(19, 'bot', '1', '0', '0', '0', '0', '0'),
(20, 'bot', '2', '0', '0', '0', '0', '0'),
(21, 'bot', '3', '0', '0', '0', '0', '0'),
(22, 'bot', '4', '0', '0', '0', '0', '0'),
(23, 'bot', '5', '0', '0', '0', '0', '0'),
(24, 'bot', '6', '0', '0', '0', '0', '0'),
(25, 'bot', '7', '0', '0', '0', '0', '0');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `miniSM_Rating`
--
ALTER TABLE `miniSM_Rating`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `miniSM_Rating`
--
ALTER TABLE `miniSM_Rating`
  MODIFY `id_` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
