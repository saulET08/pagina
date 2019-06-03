-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 03:00:40
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rocatours`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `idDestacado` int(11) NOT NULL,
  `numero` int(1) NOT NULL,
  `ruta` varchar(200) COLLATE utf32_spanish_ci NOT NULL,
  `lugar` varchar(200) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`idDestacado`, `numero`, `ruta`, `lugar`) VALUES
(1, 1, 'img/mazind.jpg', 'Mazatlan, Sinaloa.'),
(2, 2, 'img/sayind.jpg', 'Sayulita, Nayarit.'),
(3, 3, 'img/mexind.jpg', 'Mexiquillo, Durango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idSlider` int(11) NOT NULL,
  `numero` int(1) NOT NULL,
  `ruta` varchar(200) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idSlider`, `numero`, `ruta`) VALUES
(1, 1, 'img/rt1.jpg'),
(2, 2, 'img/rt2.jpg'),
(3, 3, 'img/rt3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` int(10) NOT NULL,
  `username` varchar(25) COLLATE utf32_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`) VALUES
(1, 'saul', 'tecno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`idDestacado`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idSlider`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `idDestacado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
