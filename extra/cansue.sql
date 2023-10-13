-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 09:29:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cansue`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `Nombre` varchar(100) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`Nombre`, `Categoria`, `Descripcion`, `Imagen`) VALUES
('Jujutsu Kaisen', 'Shonen', 'Las emociones negativas creadas por los humanos se convierten en maldiciones y se esconden en la vida cotidiana. \r\n				Las maldiciones son una fuerte epidemia en el mundo y, en el peor de los casos, lleva a los humanos a la muerte. \r\n				Estas maldiciones solo pueden ser exorcizadas. Yuji Itadori, quien tiene una increíble fuerza física, pero no tiene \r\n				ningún interés en los deportes y prefiere apuntarse al club de ocultismo de la escuela con tal de no dar palo al agua. \r\n				Sin embargo, tras la aparición de un espíritu maligno, la cosa empiezan a tornarse un tanto serias y su vida cambia por completo.', 'fotos/jujutsu.png'),
('Blue Lock', 'Deportes', 'Tras una desastrosa derrota en el Mundial 2018, la selección de Japón lucha por recuperarse. \r\n				¿Pero qué le falta? Un delantero absoluto, que pueda guiarles hacia la victoria. La Asociación \r\n				de Fútbol de Japón está empeñada en crear un delantero con hambre de gol y sed de victoria, que \r\n				pueda ser el instrumento decisivo para dar la vuelta a un partido perdido… y para ello ha reunido \r\n				a 300 de los mejores y más brillantes jugadores juveniles de Japón, encerrándolos en un centro \r\n				conocido como “Blue Lock”. ¿Podras convertirte en el líder del equipo? ¿Serás capaz de superar a \r\n				todos los que se interpongan en su camino?', 'fotos/BlueLock.png'),
('One Piece', 'Shonen', 'esta es la historia de un chico llamado Monkey D. Luffy, quién se inspiró en Shanks, un pirata que le salvó la \r\n				vida, para convertirse en el Rey de los Piratas. Al comienzo de la serie, veinticuatro años antes de la \r\n				historia actual, un pirata llamado Gol D. Roger, conocido como el Rey de los Piratas, fue ejecutado, pero \r\n				antes de su muerte, le dijo a la multitud de su tesoro, el One Piece. Sus palabras desataron lo que sería \r\n				conocida como «la Gran Era de la Piratería», innumerables piratas se dispusieron a buscar el tesoro \r\n				causando grandes problemas al Gobierno Mundial. Monkey D. Luffy se convierte en uno de ellos, deseando \r\n				ser el próximo Rey de los Piratas y se dispone a reunir compañeros de tripulación y comenzar sus \r\n				aventuras.', 'fotos/OnePiece.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Correo`, `Contraseña`) VALUES
(1, 'Canteroxx', 'Canteroxx92@gmail.com', '$2y$10$dU1LZpHs'),
(2, 'vicente', 'vrivera@alu.uct.cl', '$2y$10$1QHYUaVv');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
