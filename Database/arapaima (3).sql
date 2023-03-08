-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2023 at 06:57 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `codigopedido`, `idusuario`, `fechapedido`, `idestadopedido`, `tipodepago`, `recojoen`, `total`, `pagacon`, `idstore`, `subtotal`, `delivery`, `razonsocial`, `ruc`, `direccion`, `vuelto`) VALUES
(15, 'PTV00-29', '29', '2023-01-27 16:03:50', '4', 'Pagoefectivo', 'Envio delivery', '107.20', '0.00', '321314', '112.20', '5.00', '', '', '', '0.00'),
(41, 'ORD-555', '555', '2023-02-01 13:07:49', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(40, 'ORD-519', '519', '2023-02-01 12:44:38', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(39, 'ORD-554', '554', '2023-01-30 14:48:28', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(38, 'ORD-553', '553', '2023-01-30 14:42:24', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(37, 'ORD-550', '550', '2023-01-30 14:38:41', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(36, 'ORD-549', '549', '2023-01-30 14:36:06', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(35, 'ORD-548', '548', '2023-01-30 14:34:01', '1', 'Transferencia', 'PedidoOnline', '20700.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(34, 'ORD-547', '547', '2023-01-30 14:31:40', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(33, 'ORD-546', '546', '2023-01-30 14:25:31', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(32, 'ORD-545', '545', '2023-01-30 13:17:00', '4', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(31, 'ORD-544', '544', '2023-01-30 13:15:43', '4', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(30, 'ORD-543', '543', '2023-01-30 12:34:23', '4', 'Transferencia', 'PedidoOnline', '13200.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(29, 'ORD-519', '519', '2023-01-30 08:35:47', '4', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(42, 'ORD-556', '556', '2023-02-01 13:55:30', '1', 'Paypal', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(43, 'ORD-559', '559', '2023-02-01 14:03:22', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(44, 'ORD-560', '560', '2023-02-01 14:03:44', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(45, 'ORD-561', '561', '2023-02-01 14:15:03', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(46, 'ORD-562', '562', '2023-02-03 11:48:28', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(47, 'ORD-563', '563', '2023-02-03 16:28:18', '1', 'Transferencia', 'PedidoOnline', '7500.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(48, 'ORD-564', '564', '2023-02-03 19:00:33', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(49, 'ORD-565', '565', '2023-02-06 14:34:08', '1', 'Transferencia', 'PedidoOnline', '9800.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(50, 'ORD-566', '566', '2023-02-08 18:05:34', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(51, 'ORD-567', '567', '2023-02-13 11:02:35', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(52, 'ORD-568', '568', '2023-02-13 19:53:36', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(53, 'ORD-569', '569', '2023-02-21 16:39:00', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00'),
(54, 'ORD-570', '570', '2023-02-28 16:17:42', '1', 'Transferencia', 'PedidoOnline', '3400.00', '0.00', '321314', '0.00', '0.00', '-', '-', '-', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
CREATE TABLE IF NOT EXISTS `permiso` (
  `idpermiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT '',
  PRIMARY KEY (`idpermiso`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Usuarios'),
(2, 'Productos'),
(3, 'Pedidos'),
(4, 'Pedidos Tiendas'),
(5, 'Zonas');

-- --------------------------------------------------------

--
-- Table structure for table `productoestado`
--

DROP TABLE IF EXISTS `productoestado`;
CREATE TABLE IF NOT EXISTS `productoestado` (
  `idproductoestado` int(11) NOT NULL AUTO_INCREMENT,
  `nomproductoestado` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idproductoestado`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productoestado`
--

INSERT INTO `productoestado` (`idproductoestado`, `nomproductoestado`) VALUES
(1, 'En proceso'),
(2, 'Finalizado'),
(3, 'Anulado');

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
-- Table structure for table `sb_aux`
--

DROP TABLE IF EXISTS `sb_aux`;
CREATE TABLE IF NOT EXISTS `sb_aux` (
  `id` int(11) NOT NULL,
  `v` varchar(50) NOT NULL,
  `t` varchar(50) NOT NULL,
  `o` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sb_aux`
--

INSERT INTO `sb_aux` (`id`, `v`, `t`, `o`) VALUES
(3, 'Masculino', 'sexo', 3),
(4, 'Femenino', 'sexo', 4),
(1, 'Habilitado', 'hab', 1),
(2, 'Deshabilitado', 'hab', 2),
(5, 'Cliente', 'perfil', 5),
(6, 'Empleado', 'perfil', 6);

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
) ENGINE=MyISAM AUTO_INCREMENT=571 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sb_usuarios`
--

INSERT INTO `sb_usuarios` (`idusuario`, `dniusuario`, `nomusuario`, `sexousuario`, `telusuario`, `emailusuario`, `dirusuario`, `claveusuario`, `condicionusuario`, `imagenusuario`, `idtienda`, `idperfil`, `tokenusuario`, `date_created`) VALUES
(519, '12345678', 'Juan Perez', '', '938222552', 'oswaldoelflori@gmail.com', 'Lima', '123456', 1, 'perfil_default.jpg', 0, 5, NULL, '2023-01-29 23:09:37'),
(552, '', '', '', '', 'dfds@gd.com', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:39:38'),
(551, '', '', '', '', 'sdfasdfasdfres@frsystem.com.pe', '', '12', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:39:04'),
(550, '', '', '', '', 'owseflori@gmail.com', '', '1232', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:38:28'),
(549, '', '', '', '', 'sdasdasdsdasdsadsad@f.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:36:05'),
(548, '', '', '', '', 'poioide@gma.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:34:00'),
(547, '', '', '', '', 'oswaldoelflorifrfrfr@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:31:38'),
(546, '', '', '', '', 'juanperez@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:25:29'),
(545, '', '', '', '', 'oswaldasasas@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 13:16:59'),
(544, '', '', '', '', 'sdfasdfoelflori@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 13:15:41'),
(543, '', '', '', '', 'oswaldgergregregreoelflori@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 12:34:22'),
(542, '48039852', 'Wilson Gatica', 'M', '1', 'info@arapaimaexpeditions.com', 'lima', '123456', 1, 'perfil_default.jpg', 321314, 6, NULL, '2023-01-30 11:07:18'),
(553, '', 'Jose', '', '147852639', 'oswsri@gmdfasdafdsail.com', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:42:14'),
(554, '', 'Juan Perez P', '', '968574231', 'juanperez1@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-01-30 14:48:26'),
(555, '', 'Juan', '', '987654321', 'oswaldo456i@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 13:07:40'),
(556, '', 'kenneth', '', '938222552', 'oswaldoelflo12345ri@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 13:55:21'),
(557, '', 'kenneth', '', '938222552', 'oswaldoelflo12345r1i@gmail.com', '', '1', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 13:55:51'),
(558, '', 'Mckenneth Flores', '', '938222552', 'oswaldoe9876ori@gmail.com', '', '123', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 14:01:03'),
(559, '', 'Mckenneth Flores', '', '938222552', 'osw56765hfgdhflori@gmail.com', '', '678', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 14:03:20'),
(560, '', 'Mckenneth Flores', '', '938222552', 'osw56765hfgdhfl785ori@gmail.com', '', '7', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 14:03:39'),
(561, '', 'Maria Fernanda NuÃ±ez', '', '940215001', 'oswaldo5t5t9oi9ri@gmail.com', '', '345', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-01 14:14:37'),
(562, '', 'Mirella', '', '987654321', 'mirella@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-03 11:48:24'),
(563, '', 'Ruben', '', '987654321', 'rubenchavez@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-03 16:28:13'),
(564, '', 'Marco Flores', '', '938222552', 'oswaldmri@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-03 19:00:28'),
(565, '', 'Mckenneth Flores', '', '938222552', 'oswal4444doelflori@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-06 14:34:01'),
(566, '', 'kenneth', '', '938222552', 'oswaldo4747elflori@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-08 18:05:27'),
(567, '', 'Miguel', '', '987654321', 'oswald435345345@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-13 11:02:31'),
(568, '', 'Alexander', '', '987654321', 'oswaldoelflocdcdcd@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-13 19:53:32'),
(569, '', 'Distribuidora de Zapatos XYZ', '', '0234567', 'oswaldftfgori@gmail.com', '', '123456', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-21 16:38:57'),
(570, '', 'Juan Perez', '', '+51938222552', 'oswaldoelfsdlori@gmail.com', '', '1234', 1, 'noimage.jpg', 321314, 5, NULL, '2023-02-28 16:17:37');

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

-- --------------------------------------------------------

--
-- Table structure for table `usuario_permiso`
--

DROP TABLE IF EXISTS `usuario_permiso`;
CREATE TABLE IF NOT EXISTS `usuario_permiso` (
  `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  PRIMARY KEY (`idusuario_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`idusuario_permiso`, `idusuario`, `idpermiso`) VALUES
(4, 13, 0),
(18, 542, 1),
(19, 542, 2),
(20, 542, 3),
(21, 542, 4),
(22, 542, 5),
(25, 79, 0),
(26, 79, 0),
(29, 2, 0),
(30, 2, 0),
(31, 2, 3),
(32, 78, 0),
(33, 9, 0),
(34, 9, 0),
(35, 9, 3),
(36, 87, 3),
(37, 87, 0),
(38, 87, 0),
(39, 92, 0),
(40, 92, 3),
(41, 93, 3),
(44, 98, 3),
(45, 99, 3),
(46, 101, 3),
(47, 102, 3),
(48, 137, 4),
(49, 137, 5),
(50, 36, 2),
(51, 390, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
