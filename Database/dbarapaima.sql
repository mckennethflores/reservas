-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2023 at 04:30 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arapaima`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion_corta` varchar(512) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `tarjeta` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `email`, `telefono`, `tarjeta`, `direccion`, `genero`, `date_created`, `date_updated`) VALUES
(1, 'Juan Perez', 'j@gmail.com', '987654321', 'BCP VISA', 'Lima', 'Masculino', '2023-01-02 17:28:57', '2023-01-02 17:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `dias`
--

DROP TABLE IF EXISTS `dias`;
CREATE TABLE IF NOT EXISTS `dias` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `mesid` bigint(20) NOT NULL,
  `anioid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paquete`
--

DROP TABLE IF EXISTS `paquete`;
CREATE TABLE IF NOT EXISTS `paquete` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `programa` varchar(150) COLLATE utf8mb4_swedish_ci NOT NULL,
  `programa_en` varchar(150) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_en` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `paquete`
--

INSERT INTO `paquete` (`id`, `programa`, `programa_en`, `nombre`, `nombre_en`, `precio`, `imagen`) VALUES
(1, 'PROGRAMA 1', 'PROGRAM 1', '4 DIAS / 3 NOCHES / RESERVA PACAYA SAMIRIA ', '4 DAYS / 3 NIGHTS / PACAYA SAMIRIA RESERVE', '750', 'p1.jpg'),
(2, 'PROGRAMA 2', 'PROGRAM 2', 'PROGRAMA 5 DIAS / 4 NOCHES / RESERVA PACAYA SAMIRIA', 'PROGRAM 5 DAYS / 4 NIGHTS / PACAYA SAMIRIA RESERVE', '1500', 'p2.jpg'),
(3, 'PROGRAMA 3', 'PROGRAM 3', 'PROGRAMA 8 DIAS / 7 NOCHES / RESERVA PACAYA SAMIRIA', 'PROGRAM 8 DAYS / 7 NIGHTS / PACAYA SAMIRIA RESERVE', '15000', 'p3.jpg'),
(4, 'PROGRAMA 4', 'PROGRAM 4', 'PROGRAMA 3 DIAS / 2 NOCHES / \r\nRIO AMAZONAS CULTURAL', 'PROGRAM 3 DAYS / 2 NIGHTS /\r\nCULTURAL AMAZON RIVER', '2000', 'p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `clienteid` bigint(20) NOT NULL,
  `paqueteid` bigint(20) NOT NULL,
  `tipo_habitacionid` bigint(20) NOT NULL,
  `diaid` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarjeta`
--

DROP TABLE IF EXISTS `tarjeta`;
CREATE TABLE IF NOT EXISTS `tarjeta` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `tipo` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporal`
--

DROP TABLE IF EXISTS `temporal`;
CREATE TABLE IF NOT EXISTS `temporal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `clienteid` bigint(20) NOT NULL,
  `paqueteid` bigint(20) NOT NULL,
  `tipo_habitacionid` bigint(20) NOT NULL,
  `diaid` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `temporal`
--

INSERT INTO `temporal` (`id`, `clienteid`, `paqueteid`, `tipo_habitacionid`, `diaid`, `fecha`, `date_created`, `date_updated`) VALUES
(1, 1, 1, 1, 1, '2023-01-02 20:35:08', '2023-01-02 20:35:08', '2023-01-02 20:35:08'),
(2, 1, 3, 1, 2023, '2023-01-02 20:38:58', '2023-01-02 20:38:58', '2023-01-02 20:38:58'),
(3, 1, 3, 3, 2024, '2023-01-02 20:39:49', '2023-01-02 20:39:49', '2023-01-02 20:39:49'),
(4, 1, 3, 5, 2023, '2023-01-02 20:40:49', '2023-01-02 20:40:49', '2023-01-02 20:40:49'),
(5, 1, 2, 2, 2024, '2023-01-03 20:15:49', '2023-01-03 20:15:49', '2023-01-03 20:15:49'),
(6, 1, 2, 2, 2023, '2023-01-03 20:16:52', '2023-01-03 20:16:52', '2023-01-03 20:16:52'),
(7, 1, 2, 6, 2023, '2023-01-05 11:25:27', '2023-01-05 11:25:27', '2023-01-05 11:25:27'),
(8, 1, 2, 6, 2023, '2023-01-05 11:29:06', '2023-01-05 11:29:06', '2023-01-05 11:29:06'),
(9, 1, 2, 6, 2023, '2023-01-05 11:29:27', '2023-01-05 11:29:27', '2023-01-05 11:29:27'),
(10, 1, 1, 1, 2023, '2023-01-05 12:35:05', '2023-01-05 12:35:05', '2023-01-05 12:35:05'),
(11, 1, 2, 4, 2023, '2023-01-05 19:18:59', '2023-01-05 19:18:59', '2023-01-05 19:18:59'),
(12, 1, 1, 1, 2023, '2023-01-11 23:14:09', '2023-01-11 23:14:09', '2023-01-11 23:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_habitacion`
--

DROP TABLE IF EXISTS `tipo_habitacion`;
CREATE TABLE IF NOT EXISTS `tipo_habitacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `paqueteid` bigint(20) NOT NULL,
  `nombre` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `en` varchar(170) COLLATE utf8mb4_swedish_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `imagen` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `cabana_disp` varchar(70) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`id`, `paqueteid`, `nombre`, `en`, `precio`, `imagen`, `cabana_disp`, `date_created`, `date_updated`) VALUES
(1, 1, 'Habitacion doble', 'Double Room', '1700', 'paq1.jpg', '2', '2023-01-02 17:21:34', '2023-01-02 17:21:34'),
(2, 1, 'Suite Esquina', 'Corner Suite', '2500', 'paq2.JPG', '4', '2023-01-11 22:29:32', '2023-01-11 22:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(180) COLLATE utf8mb4_swedish_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
