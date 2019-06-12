-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 20:25:34
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
-- Base de datos: `u102940273_roca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `idDestacado` int(11) NOT NULL,
  `ruta` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `lugar` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`idDestacado`, `ruta`, `lugar`) VALUES
(1, 'img/mazatlan.jpg', 'Mazatlan, Sinaloa.'),
(2, 'img/sayind.jpg', 'Sayulita, Nayarit.'),
(3, 'img/mexind.jpg', 'Mexiquillo, Durango.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `iddestino` int(11) NOT NULL,
  `ruta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`iddestino`, `ruta`, `lugar`, `descripcion`) VALUES
(1, 'img/guanajuato.jpg', 'Guanajuato, Gto', '\r\nGuanajuato\r\nLa cordial ciudad de Guanajuato, declarada Patrimonio de la Humanidad por la UNESCO, y la Ruta de las Minas, que atraviesa sus municipios, y su riquísima y honesta gastronomía hacen de este estado un excelente destino que reúne las tradiciones mexicanas con la cultura novohispana. Tan luminoso en su vida subterránea como en la superficie, Guanajuato en la actualidad y desde hace casi 40 años, es sede de una de las muestras culturales más importantes del mundo: el Festival Internacional Cervantino.'),
(2, 'img/maz.jpg', 'Mazatlan, Sinaloa.', 'Mazatlán te va a encantar pues es un destino que combina sol y playa con la riqueza arquitectónica de su centro histórico con detalles y acabados de corte neoclásico y barroco francés, que contribuyen a darle a una belleza única entre los destinos turísticos de México. Recorrer la Plaza Machado te permitirá disfrutar de sus jardines y su quiosco.'),
(3, 'img/sayulita.jpg', 'Sayulita, Nayarit.', 'En Sayulita se respira un aire internacional. Tiene también una vibra similar a la que se promulgaba en los sesenta: amor y paz, encuentro con la naturaleza en un ambiente amigable y relajado, donde además encontrarás eventos internacionales de surf, galerías de arte.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `idpaquete` int(11) NOT NULL,
  `ruta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `dias` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ruta2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion2` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`idpaquete`, `ruta`, `lugar`, `fecha`, `descripcion`, `dias`, `ruta2`, `descripcion2`) VALUES
(1, 'img/maz.jpg', 'mazatlan', 'Viaja con nosotros este 10 de Abril', 'Todo incluido', '4 noches y 2 dias', 'img/maz.jpg', 'hola'),
(2, 'img/sayulita.jpg', 'Sayulita', 'Viaja con nosotros este 10 de Abril', 'Todo incluido', '3 noches y 2 dias', 'img/say2.jpg', 'Ven y conoce Mazátlan con nosotros, disfruta de esta hermosa playa de México.\r\nDisfruta de nuestro gran paquete de promoción para 10 personas que incluye:\r\n- Hospedaje por 2 dias y 3 noches\r\n- Kit viajero\r\n- Fotografia profesional\r\n- Paseo en yate por la isla de la Piedra\r\nTodo esto por solo $10,000 pesos.'),
(3, 'img/mexind.jpg', 'Mexiquillo', 'Viaja con nosotros este 10 de Abril', 'Todo incluido', '3 noches y 2 dias', 'img/mex2.jpg', 'Ven y conoce Mazátlan con nosotros, disfruta de esta hermosa playa de México.\r\nDisfruta de nuestro gran paquete de promoción para 10 personas que incluye:\r\n- Hospedaje por 2 dias y 3 noches\r\n- Kit viajero\r\n- Fotografia profesional\r\n- Paseo en yate por la isla de la Piedra\r\nTodo esto por solo $10,000 pesos.'),
(4, 'img/guanajuato.jpg', 'Guanajuato', 'Viaja con nosotros este 10 de Abril', 'Todo incluid', '3 noches y 2 dias', 'img/gua2.jpg', 'Ven y conoce Mazátlan con nosotros, disfruta de esta hermosa playa de México.\r\nDisfruta de nuestro gran paquete de promoción para 10 personas que incluye:\r\n- Hospedaje por 2 dias y 3 noches\r\n- Kit viajero\r\n- Fotografia profesional\r\n- Paseo en yate por la isla de la Piedra\r\nTodo esto por solo $10,000 pesos.'),
(5, 'img/hua2.jpg', 'Huasteca', 'Viaja con nosotros este 10 de Abril', 'Todo incluido', '3 noches y 2 dias', 'img/hua2.jpg', 'Ven y conoce Mazátlan con nosotros, disfruta de esta hermosa playa de México.\r\nDisfruta de nuestro gran paquete de promoción para 10 personas que incluye:\r\n- Hospedaje por 2 dias y 3 noches\r\n- Kit viajero\r\n- Fotografia profesional\r\n- Paseo en yate por la isla de la Piedra\r\nTodo esto por solo $10,000 pesos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idSlider` int(11) NOT NULL,
  `ruta` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idSlider`, `ruta`) VALUES
(1, 'img/rt1.jpg'),
(2, 'img/rt2.jpg'),
(3, 'img/rt5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` int(10) NOT NULL,
  `username` varchar(25) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`) VALUES
(1, 'admin', 'tecno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`idDestacado`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`iddestino`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idpaquete`);

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
  MODIFY `idDestacado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `iddestino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `idpaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
