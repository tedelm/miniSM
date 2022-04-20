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
-- Tabellstruktur `miniSM_Users`
--

CREATE TABLE `miniSM_Users` (
  `id_` int(100) NOT NULL,
  `verificationCode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `miniSM_Users`
--

INSERT INTO `miniSM_Users` (`id_`, `verificationCode`, `email`) VALUES
(3, '7e2977482f3d0c1edbce0d872dsfsdfssdfsdsd', 'demoUser@example.com');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `miniSM_Users`
--
ALTER TABLE `miniSM_Users`
  ADD PRIMARY KEY (`id_`,`verificationCode`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `miniSM_Users`
--
ALTER TABLE `miniSM_Users`
  MODIFY `id_` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
