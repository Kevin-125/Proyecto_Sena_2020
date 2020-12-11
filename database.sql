-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 15:10:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nit_empresa` int(9) DEFAULT NULL,
  `nombre_empresa` varchar(40) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `persona_resp` varchar(40) DEFAULT NULL,
  `producto_cot` int(11) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `codigo` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `codigo`, `unidades`, `precio`, `referencia`, `tipo`) VALUES
(1, 'foto', 1, -108, 1000, '34', 'producto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_recibo` int(11) NOT NULL,
  `cajero` varchar(30) DEFAULT NULL,
  `nombre_cliente` varchar(40) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `valor_total` decimal(10,0) DEFAULT NULL,
  `cantidad_pagada` decimal(10,0) DEFAULT NULL,
  `cantidad_debida` decimal(10,0) DEFAULT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recibos`
--

INSERT INTO `recibos` (`id_recibo`, `cajero`, `nombre_cliente`, `producto`, `cantidad`, `precio`, `subtotal`, `iva`, `valor_total`, `cantidad_pagada`, `cantidad_debida`, `fecha_reg`) VALUES
(63, 'kevin', 'xiomara', 1, 2, 100000, 200000, 38000, '238000', '50000', '188000', '2020-11-25'),
(66, 'kevin', 'alejandro', 1, 2, 40000, 80000, 15200, '95200', '50000', '45200', '2020-12-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'auxiliar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `clave`, `rol_id`, `correo`) VALUES
(6, 'kevin', '123', 1, 'kevinandres1250987@gmail.com'),
(7, 'andres', '1234', 2, 'cristian.2604@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `fk_productoencot` (`producto_cot`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_recibo`),
  ADD KEY `fk_idproductorecibo` (`producto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuarios_ibfk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_recibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_productoencot` FOREIGN KEY (`producto_cot`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD CONSTRAINT `fk_idproductorecibo` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
