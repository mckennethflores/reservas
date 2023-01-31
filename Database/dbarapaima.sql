-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2023 at 06:04 AM
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
-- Table structure for table `fechasalida`
--

DROP TABLE IF EXISTS `fechasalida`;
CREATE TABLE IF NOT EXISTS `fechasalida` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_swedish_ci NOT NULL,
  `paqueteid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `fechasalida`
--

INSERT INTO `fechasalida` (`id`, `nombre`, `paqueteid`) VALUES
(1, '1 DE ENERO AL 3 DE ENERO', 1),
(2, '5 DE ENERO AL 8 DE ENERO', 1),
(3, '9 DE ENERO AL 12 DE ENERO', 1),
(4, '12 DE ENERO AL 18 DE ENERO', 1),
(5, '20 DE ENERO AL 24 DE ENERO', 3),
(6, '24 DE ENERO AL 28 DE ENERO', 3),
(7, '29 DE ENERO AL 30 DE ENERO', 3);

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
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `codigopedido` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idusuario` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechapedido` datetime NOT NULL,
  `idestadopedido` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `tipodepago` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `recojoen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `pagacon` decimal(11,2) DEFAULT NULL,
  `idstore` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` decimal(11,2) NOT NULL,
  `delivery` decimal(11,2) NOT NULL,
  `razonsocial` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruc` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vuelto` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `codigopedido`, `idusuario`, `fechapedido`, `idestadopedido`, `tipodepago`, `recojoen`, `total`, `pagacon`, `idstore`, `subtotal`, `delivery`, `razonsocial`, `ruc`, `direccion`, `vuelto`) VALUES
(15, 'PTV00-29', '29', '2023-01-27 16:03:50', '4', 'Pagoefectivo', 'Envio delivery', '107.20', '0.00', '321314', '112.20', '5.00', '', '', '', '0.00'),
(16, 'ORD-519', '519', '2023-01-29 21:14:23', '4', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(17, 'ORD-519', '519', '2023-01-29 21:17:47', '4', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(18, 'ORD-519', '519', '2023-01-29 21:25:12', '4', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(19, 'ORD-519', '519', '2023-01-29 21:26:12', '4', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(20, 'ORD-519', '519', '2023-01-29 21:57:32', '4', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(21, 'ORD-535', '535', '2023-01-30 00:54:34', '14', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(22, 'ORD-536', '536', '2023-01-30 00:59:40', '4', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(23, 'ORD-537', '537', '2023-01-30 01:02:01', '1', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00');

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
-- Table structure for table `sb_usuarios`
--

DROP TABLE IF EXISTS `sb_usuarios`;
CREATE TABLE IF NOT EXISTS `sb_usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `dniusuario` varchar(15) NOT NULL,
  `nomusuario` varchar(70) NOT NULL,
  `sexousuario` varchar(60) NOT NULL,
  `telusuario` varchar(20) NOT NULL,
  `emailusuario` varchar(150) NOT NULL,
  `dirusuario` text NOT NULL,
  `claveusuario` varchar(64) NOT NULL,
  `condicionusuario` tinyint(1) NOT NULL DEFAULT '1',
  `imagenusuario` varchar(100) NOT NULL,
  `idtienda` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL,
  `tokenusuario` varchar(6) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sb_usuarios`
--

INSERT INTO `sb_usuarios` (`idusuario`, `dniusuario`, `nomusuario`, `sexousuario`, `telusuario`, `emailusuario`, `dirusuario`, `claveusuario`, `condicionusuario`, `imagenusuario`, `idtienda`, `idperfil`, `tokenusuario`, `date_created`) VALUES
(519, '12345678', 'Juan Perez', '', '938222552', 'oswaldoelflori@gmail.com', 'Lima', '123456', 1, 'perfil_default.jpg', 0, 5, NULL, '2023-01-29 23:09:37'),
(537, '', '', '', '', 'mflores@frsystem.com.pe', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 01:01:59'),
(536, '', '', '', '', 'carlos@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:59:33'),
(535, '', '', '', '', 'wewewedoraxyz@gmail.com', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:54:09'),
(534, '', '', '', '', 'qwqwqw@frsystem.com.pe', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:51:56'),
(533, '', '', '', '', 'asasassaraxyz@gmail.com', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:50:53'),
(532, '', '', '', '', 'oswaldaslflori@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:50:04'),
(531, '', '', '', '', 'sads@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:48:08'),
(530, '', '', '', '', 'distwribuidoraxyz@gmail.com', '', '1234', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:47:00'),
(529, '', '', '', '', 'qw@gmail.com', '', '1234', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 00:47:00');

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
  `personasporhabitacion` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`id`, `paqueteid`, `nombre`, `en`, `precio`, `imagen`, `cabana_disp`, `personasporhabitacion`, `date_created`, `date_updated`) VALUES
(1, 1, 'Habitacion doble', 'Double Room', '1700', 'paq1.jpg', '2', '2', '2023-01-02 17:21:34', '2023-01-02 17:21:34'),
(2, 1, 'Suite Esquina', 'Corner Suite', '2500', 'paq2.JPG', '4', '3', '2023-01-11 22:29:32', '2023-01-11 22:29:32'),
(3, 3, 'Suite Arriba ', 'Upper Suite', '4900', 'paq1.jpg', '3', '2', '2023-01-29 14:17:39', '2023-01-29 14:17:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
