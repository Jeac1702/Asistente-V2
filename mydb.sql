-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2022 a las 06:49:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adaptadores`
--

CREATE TABLE `adaptadores` (
  `idadaptadores` int(11) NOT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adaptadores`
--

INSERT INTO `adaptadores` (`idadaptadores`, `clasificacion`, `descripcion`) VALUES
(1, 'Adaptadores', 'Para manguera de aceite hidraulico'),
(2, 'Adaptadores', 'Para manguera de agua'),
(3, 'Adaptadores', 'Para manguera de aire');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `idbandas` int(11) NOT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`idbandas`, `clasificacion`, `descripcion`) VALUES
(1, 'Bandas', 'Extremos Abiertos'),
(2, 'Bandas', 'Anchas'),
(3, 'Bandas', 'Planas'),
(4, 'Bandas', 'Flex'),
(5, 'Bandas', 'Sleeve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

CREATE TABLE `conexiones` (
  `idconexiones` int(11) NOT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conexiones`
--

INSERT INTO `conexiones` (`idconexiones`, `clasificacion`, `descripcion`) VALUES
(1, 'Conexiones', 'Tee'),
(2, 'Conexiones', 'Yee'),
(3, 'Conexiones', 'Cople'),
(4, 'Conexiones', 'Codo 90'),
(5, 'Conexiones', 'Codo 45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manguera`
--

CREATE TABLE `manguera` (
  `idmanguera` int(11) NOT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manguera`
--

INSERT INTO `manguera` (`idmanguera`, `clasificacion`, `descripcion`) VALUES
(1, 'Mangueras', 'Tipo de aceite'),
(2, 'Mangueras', 'Tipo de agua y aire '),
(3, 'Mangueras', 'Tipo de Alta Presion'),
(4, 'Mangueras', 'Tipo de Baja Presion'),
(5, 'Mangueras', 'Tipo de Media-Alta Presion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adaptadores`
--
ALTER TABLE `adaptadores`
  ADD PRIMARY KEY (`idadaptadores`);

--
-- Indices de la tabla `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`idbandas`);

--
-- Indices de la tabla `conexiones`
--
ALTER TABLE `conexiones`
  ADD PRIMARY KEY (`idconexiones`);

--
-- Indices de la tabla `manguera`
--
ALTER TABLE `manguera`
  ADD PRIMARY KEY (`idmanguera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adaptadores`
--
ALTER TABLE `adaptadores`
  MODIFY `idadaptadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `idbandas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `conexiones`
--
ALTER TABLE `conexiones`
  MODIFY `idconexiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `manguera`
--
ALTER TABLE `manguera`
  MODIFY `idmanguera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
