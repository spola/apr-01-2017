-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2017 a las 21:44:32
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `monstruos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `sexo` varchar(40) DEFAULT NULL,
  `fdn` varchar(40) DEFAULT NULL,
  `pais` varchar(40) DEFAULT NULL,
  `cp` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `celular` varchar(40) DEFAULT NULL,
  `puesto` varchar(200) DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  `id` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`nombre`, `apellidos`, `direccion`, `sexo`, `fdn`, `pais`, `cp`, `email`, `telefono`, `celular`, `puesto`, `comentarios`, `id`) VALUES
('James', 'P Sullivan', 'No tengo ni la menor idea', 'Masculino', '2017-07-17', 'USA', '123', 'sullivan@gmail.com', '1235', '1233', 'Asustador, uno de los mejores. Actual jefe de Monsters, Inc.', 'Es azul', 19),
('Mike', 'Wazowski', 'Edimburgo 9041', 'Masculino', '2017-07-07', 'MÃ©xico', '12345', 'mike.wazowski@gmail.com', '12345', '12345', 'El es el actual jefe en Monsters, Inc. Anteriormente era el ayudante de Sullivan', 'NAda', 18),
('Manuel', 'Trujillo Esparza', 'Edimburgo 9041', 'Masculino', '2017-07-07', 'MÃ©xico', '20126', 'manue.trujillo@gmail.com', '123456', '654321', 'Programador', '=)', 29),
('Yael', 'Sanchez Granados', 'Panfilo Natera #75', 'Masculino', '1995-04-12', 'MÃ©xico', '20126', 'yael@gmail.com', '3314993538', '3314993538', 'DiseÃ±ador de la pÃ¡gina web', 'Bien', 21),
('Enrique', 'Valdivia PÃ©rez', 'Pedro de Valdivia', 'Masculino', '2017-07-07', 'Chile', '45698', 'enrique.valdivia@gmail.com', '15684152', '2195620', 'Asustador', 'Es bueno', 28),
('Adanely', 'JimÃ©nez Mireles', 'Edimburgo 9041', 'Femenino', '2017-07-14', 'MÃ©xico', '20126', 'adanely.jimenez@gmail.com', '49975697', '1355224582', 'Becaria de Monsters, Inc.', 'Y', 30),
('Ricardo', 'Guerrero Guerrero', 'Ejercito Militar', 'Masculino', '2008-01-01', 'USA', '123123', 'ricardo.guerrero@gmail.com', '12345678', '87654321', 'El trabaja de maestro', 'Es la onda', 31);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
