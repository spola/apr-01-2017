-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2017 a las 06:03:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datosmonstruos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `FechaNac` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`ID`, `Nombre`, `Apellidos`, `Pais`, `Sexo`, `FechaNac`, `email`, `Telefono`, `Direccion`) VALUES
(5, 'Yael', 'Sanchez', 'Canada', 'Hombre', '2017-07-12', '1@1.com', '+52 1 449 204 81 45', 'Convencion Militar 1606'),
(22, 'Sandra', 'Ortiz', 'usa', 'Mujer', '2017-07-18', 'sandraor@hotmail.com', '+52 1 449 204 81 44', 'Oxford 941 Las Condes'),
(23, 'Samuel', 'Gomez', 'argentina', 'Mujer', '2016-07-12', 'samg.21@hotmail.com', '+56 9 402-56-87', 'JosÃ© Ferrerro 412'),
(21, 'Rocio', 'Aguirre de Luna', 'argentina', 'Mujer', '2017-04-29', 'rocio.aguirredl@gmail.com', '+52 1 449 209 51 64 ', 'Edimburgo 9041 Las Condes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
