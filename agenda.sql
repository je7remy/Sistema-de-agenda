-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2023 a las 00:25:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `IdPersona` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`IdPersona`, `Nombre`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'Jeremy', '(829) 522-1765', 'Je7remy@gmail.com', 'La Vega (Las Martínez)'),
(2, 'Maria Yosiel', '(829) 527-6212', 'mariayosiel@gmail.com', 'La Vega (Las Martínez)'),
(3, 'Gabriel', '(829) 632-9885', 'josegabrieldelacruzperez@gmail.com', 'La Vega (Las Martínez)'),
(4, 'Julio', '(809) 304-4774', 'julio@gmail.com', 'La Vega (Guaco)'),
(5, 'Yornes Altagracia', '(829) 876-5439', 'yornes@gmail.com', 'La Vega (Las Martínez)'),
(6, 'Jhonny', '(809) 462-0486', 'jhonnyarismendy1398@gmail.com', 'La Vega (Guaco)'),
(7, 'Jose Ramon', '(809) 304-4774', 'josermondelacruz@gmail.com', 'La Vega (Las Martínez)');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`IdPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `IdPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
