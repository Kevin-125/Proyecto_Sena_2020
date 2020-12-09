-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2020 a las 03:11:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_orden`
--

CREATE TABLE `recibo_orden` (
  `id` int(11) NOT NULL,
  `de` varchar(45) NOT NULL,
  `nombrecliente` varchar(45) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `subtotal` varchar(45) NOT NULL,
  `iva` varchar(45) NOT NULL,
  `total` varchar(45) NOT NULL,
  `cantidadpagada` varchar(45) NOT NULL,
  `cantidaddebida` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recibo_orden`
--

INSERT INTO `recibo_orden` (`id`, `de`, `nombrecliente`, `producto`, `cantidad`, `precio`, `subtotal`, `iva`, `total`, `cantidadpagada`, `cantidaddebida`) VALUES
(73, 'De: kevin', 'andres', 'foto', '5', '1000', '5000', '950', '5950', '4000', '1950');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`) VALUES
(1, 'kevin', '123'),
(2, 'andres', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recibo_orden`
--
ALTER TABLE `recibo_orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recibo_orden`
--
ALTER TABLE `recibo_orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
