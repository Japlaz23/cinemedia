-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql309.infinityfree.com
-- Tiempo de generación: 25-05-2025 a las 06:40:59
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39074297_cinesmedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripción` text NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `descripción`, `imagen`) VALUES
(1, 'Interestelar', 'Una odisea espacial y emocional.', 'interestelar.jpg'),
(2, 'El gigante de hierro', 'Una historia de amistad con un robot gigante.', 'gigante_hierro.jpg'),
(3, 'El planeta del tesoro', 'Una aventura pirata en el espacio.', 'planeta_tesoro.jpg'),
(4, 'Kill Bill', 'Revenge y artes marciales en un estilo único.', 'kill_bill.jpg'),
(5, 'Pacific Rim', 'Robots gigantes contra monstruos interdimensionales.', 'pacific_rim.jpg'),
(6, 'Kung Fu Panda', 'Un panda torpe se convierte en maestro de kung fu.', 'kung_fu_panda.jpg'),
(7, 'El Conjuro', 'Una familia enfrenta fuerzas sobrenaturales en su nueva casa.', 'el_conjuro.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
