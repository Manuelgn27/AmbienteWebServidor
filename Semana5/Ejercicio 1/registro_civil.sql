-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2017 a las 21:56:56
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
-- Base de datos: `registro_civil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `cedula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `estadocivil` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `canton` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `distrito` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cedula`, `nombre`, `apellido1`, `apellido2`, `fechanacimiento`, `estadocivil`, `provincia`, `canton`, `distrito`) VALUES
('304310073', 'Manuel', 'Garita', 'Navarro', '1988-09-27', 'Soltero', 'Cartago', 'Central', 'San Nicolas'),
('304560085', 'Adriana', 'Cordero', 'Piedra', '1990-08-28', 'Soltera', 'Cartago', 'El Guarco', 'El Tejar'),
('305550899', 'Marco', 'Valverde', 'Loria', '2017-12-05', 'Soltero', 'Cartago', 'Central', 'San Nicolas'),
('305630012', 'Armando', 'Garita', 'Navarro', '1990-11-12', 'Soltero', 'Cartago', 'Central', 'San Nicolas'),
('305890896', 'Rosa', 'Navarro', 'Segura', '2017-10-10', 'Casada', 'Cartago', 'Central', 'San Nicolas'),
('307890044', 'Manuel', 'Garita', 'Ramirez', '2017-02-25', 'Casado', 'Cartago', 'Central', 'San Nicolas'),
('999999999', 'Roy', 'Alvarado', 'Coto', '2017-06-21', 'Casado', 'Cartago', 'El Guarco', 'El Tejar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
