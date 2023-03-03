-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 03:45:33
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
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCli` int(1) NOT NULL,
  `tdoCli` char(1) NOT NULL,
  `docCli` char(11) NOT NULL,
  `nomCli` varchar(100) NOT NULL,
  `apeCli` varchar(100) NOT NULL,
  `fnaCli` date NOT NULL,
  `dirCli` varchar(150) NOT NULL,
  `telCli` varchar(15) NOT NULL,
  `emaCli` varchar(100) NOT NULL,
  `sexCli` char(1) NOT NULL,
  `regC` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCli`, `tdoCli`, `docCli`, `nomCli`, `apeCli`, `fnaCli`, `dirCli`, `telCli`, `emaCli`, `sexCli`, `regC`) VALUES
(1, 'D', '76396706', 'Jose Luis', 'Loayza Narvaez', '2002-06-02', 'Cerca al jardin Intimpas', '983-789-789', 'TERATENIETE@GMAIL.COM', 'M', '2023-03-02 13:47:14'),
(2, 'D', '76396784', 'Jose Luis', 'loayza', '2002-12-09', 'Cerca al jardin Intimpas', '983-779-789', '211181@gmail.com', 'M', '2023-03-02 17:04:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_ip`
--

CREATE TABLE `cliente_ip` (
  `idPi` int(11) NOT NULL,
  `idCli` int(11) NOT NULL,
  `equIP` varchar(30) NOT NULL,
  `nroIP` varchar(32) NOT NULL,
  `famIP` char(1) NOT NULL,
  `estIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente_ip`
--

INSERT INTO `cliente_ip` (`idPi`, `idCli`, `equIP`, `nroIP`, `famIP`, `estIP`) VALUES
(1, 1, 'Laptop', '192.168.1.0', 'C', 'Reservada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `inicial` text NOT NULL,
  `palabra` varchar(50) NOT NULL,
  `remplazo` varchar(50) NOT NULL,
  `final` text NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `inicial`, `palabra`, `remplazo`, `final`, `cantidad`) VALUES
(1, '25 Cosas que no sabías en 5 minutos', 'no', 'si', '25 Cosas que si sabías en 5 minutos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `idTar` int(11) NOT NULL,
  `nroTar` varchar(20) NOT NULL,
  `empTar` varchar(20) NOT NULL,
  `venTar` varchar(6) NOT NULL,
  `cvvTar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`idTar`, `nroTar`, `empTar`, `venTar`, `cvvTar`) VALUES
(1, '4630270322000059', 'VISA', '06/27', 153),
(2, '36447629019739', 'DINER CLOUD', '09/23', 344),
(3, '4480308143300884', 'VISA', '12/24', 154),
(4, '36213818959873', 'DINERS CLOUD', '02/23', 154);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCli`),
  ADD KEY `idCli` (`idCli`);

--
-- Indices de la tabla `cliente_ip`
--
ALTER TABLE `cliente_ip`
  ADD PRIMARY KEY (`idPi`),
  ADD KEY `idCli` (`idCli`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`idTar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCli` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente_ip`
--
ALTER TABLE `cliente_ip`
  MODIFY `idPi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `idTar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_ip`
--
ALTER TABLE `cliente_ip`
  ADD CONSTRAINT `cliente_ip_ibfk_1` FOREIGN KEY (`idCli`) REFERENCES `cliente` (`idCli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
