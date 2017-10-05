-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-03-2017 a las 07:38:29
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `adsi1132816`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `precio`) VALUES
(1, 'Nintento Switch', 1699000),
(2, 'Lavadora Mabe', 2400000),
(3, 'Tablet Samsung', 900000),
(4, 'Gafas de Sol', 220000),
(5, 'Ultra Cauchera', 80000),
(6, 'Barril Cerveza', 160000),
(7, 'Martillo', 20000),
(8, 'Secadora Cabello', 75000),
(9, 'Balon Futbol', 90000),
(10, 'Telefono Celular', 1400000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(32) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `documento`, `nombres`, `telefono`, `direccion`) VALUES
(1, 75000001, 'Jeremias Springfield', 8800011, 'Cra 09-10'),
(2, 75000002, 'Homero Simpson', 8800022, 'Av Siempre Viva'),
(3, 75000003, 'Liza Simpson', 8800033, 'Av Siempre Viva'),
(4, 75000004, 'Bart Simpson', 8800044, 'Av Siempre Viva'),
(5, 75000005, 'Marge Simpson', 8800055, 'Av Siempre Viva'),
(6, 75000006, 'Bob Patiño', 8800066, 'Cra 32-33'),
(7, 75000007, 'MilHouse Van Houten', 8800077, 'Cra 11-12'),
(8, 75000008, 'Apu Nahasa', 8800088, 'Calle 120-80'),
(9, 75000009, 'Barney Gomez', 8800099, 'Bar de Moe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cliente_id`, `articulo_id`) VALUES
(1, 4, 1),
(2, 4, 5),
(3, 4, 9),
(4, 2, 6),
(5, 2, 7),
(6, 5, 2),
(7, 5, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copia_articulos`
--

CREATE TABLE `copia_articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `copia_articulos`
--

INSERT INTO `copia_articulos` (`id`, `nombre`, `precio`) VALUES
(1, 'Nintento Switch', 1699000),
(2, 'Lavadora Mabe', 2400000),
(3, 'Tablet Samsung', 900000),
(4, 'Gafas de Sol', 220000),
(5, 'Ultra Cauchera', 80000),
(6, 'Barril Cerveza', 160000),
(7, 'Martillo', 20000),
(8, 'Secadora Cabello', 75000),
(9, 'Balon Futbol', 90000),
(10, 'Telefono Celular', 1400000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`);
