-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 feb 2023 om 16:35
-- Serverversie: 8.0.30
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeyourown`
--
CREATE DATABASE IF NOT EXISTS `makeyourown` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `makeyourown`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` int NOT NULL,
  `sauce` varchar(20) NOT NULL,
  `topping` varchar(15) NOT NULL,
  `spices` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pizzas`
--

INSERT INTO `pizzas` (`id`, `size`, `sauce`, `topping`, `spices`) VALUES
(5, 30, 'cremeFraice', 'meat', 'oregano blackPeper '),
(6, 35, 'tomatoSauce', 'vegetables', 'parsley oregano chiliFlakes blackPeper '),
(7, 40, 'tomatoSauce', 'meat', 'parsley chiliFlakes blackPeper '),
(9, 30, 'spicyTomatoSauce', 'meat', 'chiliFlakes blackPeper '),
(11, 20, 'bbqSauce', 'vegetables', 'parsley chiliFlakes ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollercoaster`
--

DROP TABLE IF EXISTS `rollercoaster`;
CREATE TABLE IF NOT EXISTS `rollercoaster` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `park` varchar(30) NOT NULL,
  `country` varchar(40) NOT NULL,
  `topSpeed` float(5,2) NOT NULL,
  `height` float(5,2) NOT NULL,
  `date` date NOT NULL,
  `rating` float(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `rollercoaster`
--

INSERT INTO `rollercoaster` (`id`, `name`, `park`, `country`, `topSpeed`, `height`, `date`, `rating`) VALUES
(1, 'Speedy', 'SimonsPark', 'Nederland', 200.00, 135.00, '2023-02-09', 10.00),
(5, 'Speedy2.0', 'MBOutrecht', 'Nederland', 1.00, 2.00, '2023-02-17', 3.70),
(6, 'realFastRollerCoaster', 'simonPark', 'Nederland', 221.00, 122.00, '2023-02-25', 10.00),
(7, 'SpeedMonster', 'oldPark', 'duitsland', 322.00, 2.00, '2023-02-24', 6.80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
