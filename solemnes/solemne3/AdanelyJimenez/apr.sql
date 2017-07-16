-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2017 a las 01:33:19
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monstruos`
--

CREATE TABLE `monstruos` (
  `monstruoID` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `nacimiento` varchar(30) DEFAULT NULL,
  `empleo` varchar(30) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `monstruos`
--

INSERT INTO `monstruos` (`monstruoID`, `nombre`, `apellidos`, `nacimiento`, `empleo`, `sexo`, `email`) VALUES
(15, 'Victor hugo', 'jimenez M.', '2003-10-22', 'Asustador', 'Masculino', 'Hugo@monsterinc.com'),
(24, 'Armando', 'Jimenez', '2003-10-22', 'Asistente asustador', 'Masculino', 'armando@blah.mx'),
(26, 'Cuca', 'Mireles', '2003-10-22', 'Directivo', 'Femenino', 'cuca@monsterinc.com'),
(27, 'Maria', 'Mireles', '1988-10-22', 'Asistente asustador', 'Femenino', 'maria@monsterinc.com'),
(29, 'Herminio', 'Mireles', '1999-09-19', 'Asustador', 'Masculino', 'Herminio@monsterinc.com'),
(48, 'Refugio', 'Mireles', '2014-10-30', 'Directivo', 'Femenino', 'refugio@monsterinc.com'),
(49, 'Salvador', 'Jimenez', '2004-09-27', 'Asustador', 'Masculino', 'salvador.chavita.jimenez@gmail.com'),
(50, 'Chucho', 'Elperro', '2003-10-22', 'Mensajero', 'Masculino', 'chucho@monsterinc.com'),
(51, 'Jose', 'Jimenez', '1988-09-14', 'Directivo', 'Masculino', 'jose@monsterinc.com'),
(52, 'prueba', 'primera', '1997-08-04', 'Mensajero', 'Masculino', 'prueba@prub.com'),
(53, 'Adanely', 'Jimenez', '2008-08-18', 'Mensajero', 'Femenino', 'adaBlah@blah.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `habilitado`) VALUES
('armando@monsterinc.com', '50136d56438ea71652842fa72addd334d71e2e31', 1),
('sulley@monsterinc.com', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `monstruos`
--
ALTER TABLE `monstruos`
  ADD PRIMARY KEY (`monstruoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `monstruos`
--
ALTER TABLE `monstruos`
  MODIFY `monstruoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
