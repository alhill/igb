-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2017 a las 10:48:13
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `igb`
--
CREATE DATABASE IF NOT EXISTS `igb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `igb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `igb_users`
--

DROP TABLE IF EXISTS `igb_users`;
CREATE TABLE `igb_users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pw` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `igb_users`
--

INSERT INTO `igb_users` (`id`, `usuario`, `pw`, `email`, `nombre`, `apellidos`, `fechanac`) VALUES
(12, 'MKL_37', 'qweqwe', 'alvarogil91@gmail.com', 'Alvaro', 'Gil', '1991-04-24'),
(13, 'cacaculopedopis', 'qweqwe', 'qwe@qwe.qwe', 'qwe', 'qwe', '0000-00-00'),
(14, 'pollas', 'envinagre', 'po@llas.vin', 'Pollas', 'En Vinagre', '2000-01-12'),
(15, 'AAAAAA', 'qweqwe', 'qwe@rty.uiop', 'asd', 'fgh', '2000-01-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `igb_users`
--
ALTER TABLE `igb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario_2` (`usuario`,`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `igb_users`
--
ALTER TABLE `igb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
