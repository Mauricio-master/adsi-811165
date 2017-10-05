-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-03-2017 a las 12:22:18
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `adsi1132816`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `gender` varchar(16) DEFAULT NULL,
  `image` varchar(64) DEFAULT 'public/imgs/avatar.png',
  `color` varchar(16) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `gender`, `image`, `color`) VALUES
(1, 'Destructor', 'Masculino', 'public/imgs/avatars/1490195725.png', '#61A497'),
(2, 'Amarilla', 'Femenino', 'public/imgs/avatars/1490200940.png', '#CCCC00'),
(3, 'Rogelio', 'Masculino', 'public/imgs/avatars/1490195762.png', '#AA0000'),
(4, 'PUNKETA', 'Femenino', 'public/imgs/avatars/1490195785.png', '#5C51A4'),
(5, 'NN', 'Masculino', 'public/imgs/avatar.png', '#AAAAAA'),
(7, 'GreenMan', 'Masculino', 'public/imgs/avatars/1490202737.png', '#53A455'),
(8, 'Barbolio', 'Masculino', 'public/imgs/avatars/1490202791.png', '#63E090'),
(9, 'Azulejo', 'Masculino', 'public/imgs/avatars/1490202845.png', '#5488C7');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;