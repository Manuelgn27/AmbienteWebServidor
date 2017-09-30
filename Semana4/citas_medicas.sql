-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2017 a las 18:24:10
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas_medicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `paciente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medico` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechacita` datetime NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `sucursal` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `paciente`, `medico`, `fechacita`, `costo`, `sucursal`) VALUES
(1, 'Manuel', 'Ricardo Brenes L', '2017-09-13 00:00:00', '25000.80', 'Cartago'),
(2, 'Adriana', 'Pedro Coto V', '2017-09-18 00:00:00', '80000.00', 'San Jose'),
(3, 'Paola', 'Laura Velez G', '2017-06-15 00:00:00', '20000.00', 'Heredia'),
(4, 'Manuel', 'Vera Garita', '2017-06-15 10:30:00', '50000.00', 'Cartago'),
(5, 'Rosa', 'Eduardo Brenes L', '2017-06-11 02:00:00', '260000.80', 'San Jose'),
(6, 'Marco', 'Victor Arias', '2017-10-15 10:30:00', '60000.00', 'Heredia'),
(7, 'Manuel', 'Rosa Navarro', '2017-10-03 10:30:00', '60000.00', 'Cartago');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
