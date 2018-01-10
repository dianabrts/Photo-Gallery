-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 23:39:39
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `ruta`, `texto`) VALUES
(1, 'Foto 1', '1.jpg', 'Foto 1'),
(2, 'Foto 2', '2.jpg', 'Foto 2'),
(3, 'Foto 3', '3.jpg', 'Foto 3'),
(4, 'Foto 4', '4.jpg', 'Foto 4'),
(5, 'Foto 5', '5.jpg', 'Foto 5'),
(6, 'Foto 6', '6.jpg', 'Foto 6'),
(7, 'Foto 7', '7.jpg', 'Foto 7'),
(8, 'Foto 8', '8.jpg', 'Foto 8'),
(9, 'Foto 9', '9.jpg', 'Foto 9'),
(10, 'Foto 10', '10.jpg', 'Foto 10'),
(11, 'Foto 11', '11.jpg', 'Foto 11'),
(12, 'Foto 12', '12.jpg', 'Foto 12'),
(13, 'Foto 13', '13.jpg', 'Foto 13'),
(14, 'Foto 14', '14.jpg', 'Foto 14'),
(15, 'Foto 15', '15.jpg', 'Foto 15'),
(16, 'Foto 16', '16.jpg', 'Foto 16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
