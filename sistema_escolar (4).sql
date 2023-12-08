-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2023 a las 06:33:17
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
-- Base de datos: `sistema_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum_cali`
--

CREATE TABLE `alum_cali` (
  `idnta` int(11) NOT NULL,
  `idsems` int(11) NOT NULL,
  `idstu` int(11) NOT NULL,
  `idsec` int(11) NOT NULL,
  `idcur` int(11) NOT NULL,
  `prm` decimal(11,1) NOT NULL,
  `srm` decimal(11,1) NOT NULL,
  `trm` decimal(11,1) NOT NULL,
  `sug` text NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum_secc`
--

CREATE TABLE `alum_secc` (
  `idaluse` int(11) NOT NULL,
  `idsec` int(11) NOT NULL,
  `idstu` int(11) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asisten_alumn`
--

CREATE TABLE `asisten_alumn` (
  `idasisa` int(11) NOT NULL,
  `idstu` int(11) NOT NULL,
  `idtea` int(11) NOT NULL,
  `idsec` int(11) NOT NULL,
  `idsems` int(11) NOT NULL,
  `presen` varchar(30) NOT NULL,
  `fecha_create` date NOT NULL,
  `fechre` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `idcur` int(11) NOT NULL,
  `nomcur` varchar(100) NOT NULL,
  `idper` int(11) NOT NULL,
  `iddeg` int(11) NOT NULL,
  `idsub` int(11) NOT NULL,
  `idtea` int(11) NOT NULL,
  `foto` text NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `degree`
--

CREATE TABLE `degree` (
  `iddeg` int(11) NOT NULL,
  `idper` int(11) NOT NULL,
  `nomgra` varchar(25) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `idsub` int(11) NOT NULL,
  `our` text NOT NULL,
  `day1` text NOT NULL,
  `day2` text NOT NULL,
  `day3` text NOT NULL,
  `day4` text NOT NULL,
  `day5` text NOT NULL,
  `state` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fathers`
--

CREATE TABLE `fathers` (
  `idfa` int(11) NOT NULL,
  `dnifa` char(8) NOT NULL,
  `nomfa` varchar(30) NOT NULL,
  `profefa` varchar(150) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefa` char(9) NOT NULL,
  `direc` varchar(150) NOT NULL,
  `foto` text NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` char(1) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fat_stud`
--

CREATE TABLE `fat_stud` (
  `idfatstu` int(11) NOT NULL,
  `idfa` int(11) NOT NULL,
  `idstu` int(11) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `period`
--

CREATE TABLE `period` (
  `idper` int(11) NOT NULL,
  `numperi` char(11) NOT NULL,
  `starperi` date NOT NULL,
  `endperi` date NOT NULL,
  `nomperi` varchar(150) NOT NULL,
  `state` varchar(15) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `idsec` int(11) NOT NULL,
  `nomsec` text NOT NULL,
  `idsub` int(11) NOT NULL,
  `idcur` int(11) NOT NULL,
  `capa` char(2) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semester`
--

CREATE TABLE `semester` (
  `idsems` int(11) NOT NULL,
  `namsems` text NOT NULL,
  `idper` int(11) NOT NULL,
  `idsec` int(11) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `idstu` int(11) NOT NULL,
  `dnist` char(8) NOT NULL,
  `nomstu` varchar(25) NOT NULL,
  `edast` varchar(20) NOT NULL,
  `direce` varchar(150) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `sexes` varchar(15) NOT NULL,
  `fenac` date NOT NULL,
  `foto` varchar(150) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `state` char(1) NOT NULL,
  `rol` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgrade`
--

CREATE TABLE `subgrade` (
  `idsub` int(11) NOT NULL,
  `nomsub` varchar(50) NOT NULL,
  `iddeg` int(11) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `idtea` int(11) NOT NULL,
  `dnite` char(8) NOT NULL,
  `nomte` varchar(35) NOT NULL,
  `sexte` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telet` char(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` char(1) NOT NULL,
  `state` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` char(1) NOT NULL,
  `estado` char(1) NOT NULL,
  `foto` text NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `correo`, `clave`, `rol`, `estado`, `foto`, `fere`) VALUES
(1, 'admin01', 'administrador', 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '1', '1', '902073.jpeg', '2023-03-08 00:30:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alum_cali`
--
ALTER TABLE `alum_cali`
  ADD PRIMARY KEY (`idnta`),
  ADD KEY `idsems` (`idsems`),
  ADD KEY `idstu` (`idstu`),
  ADD KEY `idsec` (`idsec`),
  ADD KEY `idcur` (`idcur`);

--
-- Indices de la tabla `alum_secc`
--
ALTER TABLE `alum_secc`
  ADD PRIMARY KEY (`idaluse`),
  ADD KEY `idsec` (`idsec`),
  ADD KEY `idstu` (`idstu`);

--
-- Indices de la tabla `asisten_alumn`
--
ALTER TABLE `asisten_alumn`
  ADD PRIMARY KEY (`idasisa`),
  ADD KEY `idstu` (`idstu`),
  ADD KEY `idtea` (`idtea`),
  ADD KEY `idsec` (`idsec`),
  ADD KEY `idsems` (`idsems`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idcur`),
  ADD KEY `idper` (`idper`),
  ADD KEY `iddeg` (`iddeg`),
  ADD KEY `idsub` (`idsub`),
  ADD KEY `idtea` (`idtea`);

--
-- Indices de la tabla `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`iddeg`),
  ADD KEY `idper` (`idper`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsub` (`idsub`);

--
-- Indices de la tabla `fathers`
--
ALTER TABLE `fathers`
  ADD PRIMARY KEY (`idfa`);

--
-- Indices de la tabla `fat_stud`
--
ALTER TABLE `fat_stud`
  ADD PRIMARY KEY (`idfatstu`),
  ADD KEY `idfa` (`idfa`),
  ADD KEY `idstu` (`idstu`);

--
-- Indices de la tabla `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`idsec`),
  ADD KEY `idsub` (`idsub`),
  ADD KEY `idcur` (`idcur`);

--
-- Indices de la tabla `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`idsems`),
  ADD KEY `idper` (`idper`),
  ADD KEY `idsec` (`idsec`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idstu`);

--
-- Indices de la tabla `subgrade`
--
ALTER TABLE `subgrade`
  ADD PRIMARY KEY (`idsub`),
  ADD KEY `iddeg` (`iddeg`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`idtea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alum_cali`
--
ALTER TABLE `alum_cali`
  MODIFY `idnta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alum_secc`
--
ALTER TABLE `alum_secc`
  MODIFY `idaluse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asisten_alumn`
--
ALTER TABLE `asisten_alumn`
  MODIFY `idasisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `idcur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `degree`
--
ALTER TABLE `degree`
  MODIFY `iddeg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fathers`
--
ALTER TABLE `fathers`
  MODIFY `idfa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fat_stud`
--
ALTER TABLE `fat_stud`
  MODIFY `idfatstu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `period`
--
ALTER TABLE `period`
  MODIFY `idper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `idsec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semester`
--
ALTER TABLE `semester`
  MODIFY `idsems` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `idstu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subgrade`
--
ALTER TABLE `subgrade`
  MODIFY `idsub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `idtea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alum_cali`
--
ALTER TABLE `alum_cali`
  ADD CONSTRAINT `alum_cali_ibfk_1` FOREIGN KEY (`idsems`) REFERENCES `semester` (`idsems`),
  ADD CONSTRAINT `alum_cali_ibfk_2` FOREIGN KEY (`idstu`) REFERENCES `students` (`idstu`),
  ADD CONSTRAINT `alum_cali_ibfk_3` FOREIGN KEY (`idsec`) REFERENCES `seccion` (`idsec`),
  ADD CONSTRAINT `alum_cali_ibfk_4` FOREIGN KEY (`idcur`) REFERENCES `course` (`idcur`);

--
-- Filtros para la tabla `alum_secc`
--
ALTER TABLE `alum_secc`
  ADD CONSTRAINT `alum_secc_ibfk_1` FOREIGN KEY (`idsec`) REFERENCES `seccion` (`idsec`),
  ADD CONSTRAINT `alum_secc_ibfk_2` FOREIGN KEY (`idstu`) REFERENCES `students` (`idstu`);

--
-- Filtros para la tabla `asisten_alumn`
--
ALTER TABLE `asisten_alumn`
  ADD CONSTRAINT `asisten_alumn_ibfk_1` FOREIGN KEY (`idstu`) REFERENCES `students` (`idstu`),
  ADD CONSTRAINT `asisten_alumn_ibfk_2` FOREIGN KEY (`idtea`) REFERENCES `teachers` (`idtea`),
  ADD CONSTRAINT `asisten_alumn_ibfk_3` FOREIGN KEY (`idsec`) REFERENCES `seccion` (`idsec`),
  ADD CONSTRAINT `asisten_alumn_ibfk_4` FOREIGN KEY (`idsems`) REFERENCES `semester` (`idsems`);

--
-- Filtros para la tabla `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`idper`) REFERENCES `period` (`idper`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`iddeg`) REFERENCES `degree` (`iddeg`),
  ADD CONSTRAINT `course_ibfk_3` FOREIGN KEY (`idsub`) REFERENCES `subgrade` (`idsub`),
  ADD CONSTRAINT `course_ibfk_4` FOREIGN KEY (`idtea`) REFERENCES `teachers` (`idtea`);

--
-- Filtros para la tabla `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`idper`) REFERENCES `period` (`idper`);

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`idsub`) REFERENCES `subgrade` (`idsub`);

--
-- Filtros para la tabla `fat_stud`
--
ALTER TABLE `fat_stud`
  ADD CONSTRAINT `fat_stud_ibfk_1` FOREIGN KEY (`idfa`) REFERENCES `fathers` (`idfa`),
  ADD CONSTRAINT `fat_stud_ibfk_2` FOREIGN KEY (`idstu`) REFERENCES `students` (`idstu`);

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`idsub`) REFERENCES `subgrade` (`idsub`),
  ADD CONSTRAINT `seccion_ibfk_3` FOREIGN KEY (`idcur`) REFERENCES `course` (`idcur`);

--
-- Filtros para la tabla `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`idper`) REFERENCES `period` (`idper`),
  ADD CONSTRAINT `semester_ibfk_2` FOREIGN KEY (`idsec`) REFERENCES `seccion` (`idsec`);

--
-- Filtros para la tabla `subgrade`
--
ALTER TABLE `subgrade`
  ADD CONSTRAINT `subgrade_ibfk_1` FOREIGN KEY (`iddeg`) REFERENCES `degree` (`iddeg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
