-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2023 a las 22:13:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tigo_prueba_tecnica`
--
CREATE DATABASE IF NOT EXISTS `tigo_prueba_tecnica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tigo_prueba_tecnica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ClienteCodigo` varchar(9) NOT NULL,
  `ClienteNombre` varchar(80) NOT NULL,
  `ClienteDui` varchar(10) NOT NULL,
  `ClienteDireccion` varchar(300) NOT NULL,
  `ClienteCorreo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ClienteCodigo`, `ClienteNombre`, `ClienteDui`, `ClienteDireccion`, `ClienteCorreo`) VALUES
('CL1445511', 'Oscar Reyes', '05958789-7', 'Av. jerusalen', 'oscar@gmail.com'),
('CL1445567', 'Juan Perez', '05987478-7', 'Av. España, Pasaje #3, Casa 1-7', 'juan@gmail.com'),
('CL1445568', 'Pedro Ramos', '01014887-7', 'Santa Tecla, 3ra Calle, casa #2', 'pedro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_plan`
--

CREATE TABLE `cliente_plan` (
  `ClientePlanId` int(11) NOT NULL,
  `ClienteCodigo` varchar(9) NOT NULL,
  `PlanCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente_plan`
--

INSERT INTO `cliente_plan` (`ClientePlanId`, `ClienteCodigo`, `PlanCodigo`) VALUES
(17, 'CL1445567', 5),
(21, 'CL1445511', 3),
(22, 'CL1445568', 5),
(23, 'CL1445511', 1),
(24, 'CL1445567', 6),
(25, 'CL1445511', 3),
(26, 'CL1445568', 2),
(27, 'CL1445567', 2),
(28, 'CL1445567', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `PlanCodigo` int(11) NOT NULL,
  `PlanDescripcion` varchar(1000) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`PlanCodigo`, `PlanDescripcion`, `Precio`) VALUES
(1, '3000 minutos a redes nacionales, USA y Canadá', 19.99),
(2, 'Hasta 10 GB para navegar y apps ilimitadas', 24.99),
(3, 'YouTube 3 GB, Tigo Sports incluido en planes televisión Tigo', 15.99),
(4, 'Incluye: WhatsApp ilimitado, Facebook ilimitado incluido en planes prepago y pospago', 10.99),
(5, 'LLamadas ilimitadas a red tigo por 30 días', 6.99),
(6, 'Datos ilimitados por 30 días, incluye 100 minutos a todas las redes', 30.99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ClienteCodigo`);

--
-- Indices de la tabla `cliente_plan`
--
ALTER TABLE `cliente_plan`
  ADD PRIMARY KEY (`ClientePlanId`),
  ADD KEY `ClienteCodigo` (`ClienteCodigo`),
  ADD KEY `PlanCodigo` (`PlanCodigo`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`PlanCodigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente_plan`
--
ALTER TABLE `cliente_plan`
  MODIFY `ClientePlanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `PlanCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_plan`
--
ALTER TABLE `cliente_plan`
  ADD CONSTRAINT `cliente_plan_ibfk_1` FOREIGN KEY (`ClienteCodigo`) REFERENCES `cliente` (`ClienteCodigo`),
  ADD CONSTRAINT `cliente_plan_ibfk_2` FOREIGN KEY (`ClienteCodigo`) REFERENCES `cliente` (`ClienteCodigo`),
  ADD CONSTRAINT `cliente_plan_ibfk_3` FOREIGN KEY (`PlanCodigo`) REFERENCES `plan` (`PlanCodigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
