-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2017 a las 19:53:02
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `monsterinc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monstruos`
--

CREATE TABLE IF NOT EXISTS `monstruos` (
  `id_monstruo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `habilitado` smallint(6) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_monstruo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `monstruos`
--

INSERT INTO `monstruos` (`id_monstruo`, `nombre`, `email`, `password`, `apellido`, `habilitado`, `cargo`) VALUES
(1, 'av', 'av@eee.cl', 'e0c9035898', 'vc', 0, '1'),
(7, 'suly', 's@s.cl', '356a192b79', 'suli', 1, 'asustador'),
(8, 'r', 'm@a.cl', 'da4b9237ba', 'e', 1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
