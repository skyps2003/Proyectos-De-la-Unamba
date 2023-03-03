-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 03:45:52
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unamba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlu` int(11) NOT NULL,
  `codAlu` char(6) NOT NULL,
  `docAlu` char(8) NOT NULL,
  `nomAlu` varchar(80) DEFAULT NULL,
  `apeAlu` varchar(80) DEFAULT NULL,
  `sexAlu` char(1) DEFAULT NULL,
  `fnaAlu` date DEFAULT NULL,
  `celAlu` varchar(9) DEFAULT NULL,
  `emaAlu` varchar(100) DEFAULT NULL,
  `urlAlu` varchar(100) DEFAULT NULL,
  `ipeAlu` varchar(20) DEFAULT NULL,
  `regAlu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlu`, `codAlu`, `docAlu`, `nomAlu`, `apeAlu`, `sexAlu`, `fnaAlu`, `celAlu`, `emaAlu`, `urlAlu`, `ipeAlu`, `regAlu`) VALUES
(1, '211181', '76396706', 'Jose Luis', 'Loayza Narvaez', 'M', '2002-06-02', '988605555', '211181@unamba.edu.pe', 'https://www.youtube.com/watch?v=z5WrgDzNIZ0&list=RDH3c0F3oGZ4I&index=4', '191.123.2.2', '2023-03-02 21:43:29'),
(2, '211182', '75909339', 'Kevin', 'Lopez', 'M', '2004-05-03', '988789456', '211181@unamba.edu.pe', 'https://www.youtube.com/watch?v=z5WrgDzNIZ0&list=RDH3c0F3oGZ4I&index=4', '191.123.2.2', '2023-03-02 21:44:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCur` int(11) NOT NULL,
  `codCur` char(8) NOT NULL,
  `nomCur` varchar(50) NOT NULL,
  `creCur` int(1) NOT NULL,
  `preCur` char(8) NOT NULL COMMENT 'Pre Requisito',
  `sacCur` char(8) NOT NULL COMMENT 'Semestre academico',
  `afoCur` varchar(30) NOT NULL COMMENT 'Area de formacion',
  `imgCur` varchar(150) NOT NULL,
  `regCur` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCur`, `codCur`, `nomCur`, `creCur`, `preCur`, `sacCur`, `afoCur`, `imgCur`, `regCur`) VALUES
(1, 'ISA101', 'Fundamentos de Programación', 4, 'Ninguno', '2023-I', 'Especialidad', 'IMAGENES/1.png', '2023-03-02 09:58:52'),
(2, 'ISA806', 'Actividades', 2, 'Ninguno', '2023-I', 'General', 'IMAGENES/BD.png', '2023-03-02 10:00:00'),
(3, 'ISA403', 'Teoría de Autómatas y Compiladores', 3, 'ISA201', '2023-I', 'Especialidad', 'IMAGENES/dni.png', '2023-03-02 10:00:37'),
(4, 'ISAE01', 'Desarrollo de Aplicaciones Multimedia', 2, 'ISA602', '2002-I', 'Especifico', 'IMAGENES/2.jpeg', '2023-03-02 19:38:27'),
(5, 'ISA301', 'Análisis y complejidad de Algoritmos', 3, 'ISA201', '2023-ii', 'Especialidad', 'C:xampphtdocsPaginaWebIMAGENES/module_table_top.png', '2023-03-02 20:52:50'),
(6, 'ISA-E01', 'Fundamentos de Programación', 2, 'Ninguno', '2023-ii', 'Especialidad', 'C:xampphtdocsPaginaWebIMAGENES/module_table_bottom.png', '2023-03-02 20:55:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMat` int(11) NOT NULL,
  `idCur` int(11) NOT NULL,
  `idAlu` int(11) NOT NULL,
  `estMat` varchar(50) DEFAULT NULL,
  `regMat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idMat`, `idCur`, `idAlu`, `estMat`, `regMat`) VALUES
(1, 1, 1, 'Activo', '2023-03-02 21:45:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlu`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCur`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMat`),
  ADD KEY `idCur` (`idCur`),
  ADD KEY `idAlu` (`idAlu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idMat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idAlu`) REFERENCES `alumno` (`idAlu`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idCur`) REFERENCES `curso` (`idCur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
