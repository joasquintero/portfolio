-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2018 a las 17:27:30
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morbilidad`
--
CREATE DATABASE IF NOT EXISTS `morbilidad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `morbilidad`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas` (
  `fecha` date NOT NULL,
  `diagnostico` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `centroclinico` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `examen` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `referencia` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FKpaciente` int(11) NOT NULL,
  `FKdoctores` int(11) NOT NULL,
  `idconsultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`fecha`, `diagnostico`, `centroclinico`, `examen`, `referencia`, `FKpaciente`, `FKdoctores`, `idconsultas`) VALUES
('2018-01-10', 'sueño', '', '', '', 0, 0, 1),
('2018-01-01', 'pereza', '', '', '', 0, 0, 2),
('2018-03-14', 'AAAAAA', 'BBBBBB', 'CCCCCC', 'DDDDDD', 0, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

DROP TABLE IF EXISTS `doctores`;
CREATE TABLE `doctores` (
  `nombre` char(126) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` char(126) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` enum('Masculino','masculino','Femenino','femenino') COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nivel` int(1) NOT NULL,
  `especialidad` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estatus` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iddoctores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`nombre`, `apellido`, `sexo`, `cedula`, `clave`, `nivel`, `especialidad`, `estatus`, `fecha_registro`, `iddoctores`) VALUES
('Carlos', 'Blanco', 'Masculino', '222', '202cb962ac59075b964b07152d234b70', 2, '', '1', '2018-06-17 02:02:31', 1),
('endryx', 'Herrera', 'Masculino', '333', '202cb962ac59075b964b07152d234b70', 3, '', '1', '2018-06-17 02:02:31', 2),
('Joas', 'Quintero', 'Masculino', '111', '202cb962ac59075b964b07152d234b70', 1, '', '1', '2018-06-17 02:02:31', 3),
('mordred', 'Di arthur', 'Femenino', '666', '123', 3, 'proctologia', '0', '2018-06-17 02:02:31', 4),
('perencito', 'espagetti', 'Masculino', '888', '123', 3, 'posologo', '1', '2018-06-05 02:02:31', 5),
('fghjfghj', 'fghjfghj', 'Masculino', '2352345', '234523452345', 3, 'dfghdfghdfgh', '0', '2018-06-17 02:02:31', 6),
('fghj', 'fghjfghj', 'Masculino', '0', 'fghjfghj', 3, 'fghjfghj', '0', '2018-06-17 02:02:31', 7),
('fghjfghjfghj', 'fghjfghjfghjfghj', 'Masculino', '325423452', 'dfghdfghdfgh', 3, 'fghdfghdfgh', '0', '2018-06-17 02:02:31', 8),
('A', 'B', 'Masculino', '456', '123', 3, 'C', '0', '2018-06-17 02:02:31', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `nombre` char(126) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` char(126) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` date NOT NULL,
  `sexo` enum('Masculino','masculino','Femenino','femenino') COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `personal` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mencion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '1',
  `idpaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`nombre`, `apellido`, `edad`, `sexo`, `cedula`, `telefono`, `direccion`, `personal`, `mencion`, `fecha_registro`, `estatus`, `idpaciente`) VALUES
('joas', 'quintero', '2018-05-03', 'Masculino', '1', '412', 'direccion 001', 'Estudiante', 'Informatica', '2018-06-17 01:45:36', '1', 1),
('Carlos', 'saab', '2017-06-06', 'Masculino', '2', '414', 'direccion 002', 'Estudiante', 'Informatica', '2018-06-17 01:45:36', '1', 2),
('ENDRY', 'HERRERA', '2018-06-14', 'Masculino', '25676816', '416', 'LA FLORESTA', 'Obrero', 'Contaduria', '2018-06-17 01:45:36', '1', 3),
('CARLOS', 'BLANCO', '2018-06-14', 'Masculino', '24576815', '412', 'LA LAGUNITA', 'Estudiante', 'Informatica', '2018-06-17 01:45:36', '1', 4),
('ENDRY 2', 'HERRERA', '2018-06-14', 'Femenino', '2355961', '426', 'LA FLORESTA', 'MARISCO', 'PASIVO', '2018-06-17 01:45:36', '1', 5),
('EEEEEE', 'EEEEEE', '2018-06-14', 'Masculino', '25555', '04140867379', 'VVV', 'No aplica', 'No aplica', '2018-06-17 01:45:36', '1', 6),
('name', 'apell', '2018-06-14', 'Femenino', '25660716', '416', 'av princial', 'Obrero', 'No aplica', '2018-06-17 01:45:36', '0', 7),
('con fecha', 'con fecha', '2018-06-05', 'Masculino', '333333', '416', '0dlf,dlgmdl', 'Obrero', 'Informatica', '2018-06-17 01:46:42', '0', 8),
('desd', 'desde 3', '2018-06-06', 'Masculino', '09876666', '098753', 'lloonhgfc vfhgdhg', 'Obrero', 'Seguridad alimentaria', '2018-06-18 00:46:54', '1', 9),
('brando', 'urdaneta', '2018-06-05', 'Masculino', '25660717', '343435353', 'fghrthfhfhch', 'megdgrgrg', 'rgrhgrnrthnrhr', '2018-06-23 17:25:33', '1', 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`idconsultas`),
  ADD KEY `FKpaciente` (`FKpaciente`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`iddoctores`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idpaciente`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `idconsultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `iddoctores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
