-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 23:35:06
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `opcemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `material` int(11) NOT NULL,
  `commission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `access`
--

INSERT INTO `access` (`id`, `material`, `commission`) VALUES
(1, 3, 1),
(2, 1, 1),
(3, 1, 3),
(4, 1, 4),
(5, 5, 1),
(6, 5, 1),
(7, 5, 2),
(8, 5, 6),
(9, 7, 2),
(10, 7, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commission`
--

CREATE TABLE `commission` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `commission`
--

INSERT INTO `commission` (`id`, `city`, `number`) VALUES
(1, 'Lobería', 1),
(2, 'Lobería', 2),
(3, 'Azul', 1),
(4, 'Necochea', 1),
(5, 'Tres Arroyos', 1),
(6, 'Lobería', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `archive` varchar(50) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `title`, `archive`, `link`) VALUES
(1, 'Material 1', NULL, NULL),
(2, 'Material 1', NULL, NULL),
(3, 'Material 1', NULL, NULL),
(4, 'Material 1', NULL, NULL),
(5, 'Material 1', NULL, NULL),
(6, 'Material 1', NULL, NULL),
(7, 'Material 1', NULL, NULL),
(8, 'Material 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `DNI` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `commission` int(100) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `permits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `email`, `date`, `DNI`, `city`, `commission`, `password`, `permits`) VALUES
(6, 'Soledad', 'Merino', 'Soledad Merino', 'soledadmerino.1994@gmail.com', '1994-05-20', 38428046, 'Lobería', 0, '$2y$10$CSdOA2jheCGxrIPqgRdgdOknx.QWKyzic8rlBDoQ2pBIamOZZnZ3e', 1),
(7, 'Pepe', 'Perez', 'Pepe Perez', 'pepeperez@gmail.com', '1990-01-01', 38456789, 'Lobería', 1, '$2y$10$SE5waoDmSq5/gn0j9wDdBOse0mMSObZfS.fOrVCpNSgnGl06MUTG6', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `commission`
--
ALTER TABLE `commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
