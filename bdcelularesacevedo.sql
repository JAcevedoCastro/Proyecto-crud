-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 21:50:24
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcelularesacevedo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `name`, `correo`, `usuario`, `password`) VALUES
(1, 'Jonathan Acevedo', 'jona@gmial.com', 'Jonathan', '202cb962ac59075b964b07152d234b70'),
(2, 'Jony', 'jony@gmail.com', 'jony', '202cb962ac59075b964b07152d234b70'),
(3, 'Jony', 'jony@gmail.com', 'jony', '202cb962ac59075b964b07152d234b70'),
(4, 'david arrellano', 'david@gmail.com', 'david', '202cb962ac59075b964b07152d234b70'),
(5, 'emma', 'emma@gmail.com', 'emma', '202cb962ac59075b964b07152d234b70'),
(6, 'asd asd', 'asd@gmail.com', 'asd', '202cb962ac59075b964b07152d234b70'),
(7, 'emma', 'ema@gmial.com', 'emma', '202cb962ac59075b964b07152d234b70'),
(8, 'asd', 'asd@gmail.com', 'asd1', '202cb962ac59075b964b07152d234b70'),
(9, 'enanito', 'enanito@gmail.com', 'enanito', '202cb962ac59075b964b07152d234b70'),
(10, 'asdasd', 'asd@gmail.com', '123asd', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
