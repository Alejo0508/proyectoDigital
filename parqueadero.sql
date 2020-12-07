-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 01:11:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidad`
--

CREATE TABLE `mensualidad` (
  `idslot` int(11) NOT NULL,
  `disponible` text NOT NULL,
  `placa` varchar(6) NOT NULL,
  `color` varchar(10) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `nombreConductor` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `fechaingreso` varchar(20) NOT NULL,
  `horaingreso` varchar(20) NOT NULL,
  `contratomensual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensualidad`
--

INSERT INTO `mensualidad` (`idslot`, `disponible`, `placa`, `color`, `modelo`, `nombreConductor`, `foto`, `fechaingreso`, `horaingreso`, `contratomensual`) VALUES
(1, '', 'asd123', 'negro', '2020', 'alejandro', 'https://www.chevrolet.com.co/content/dam/chevrolet/south-america/colombia/espanol/index/cars/2018-onix/colorizer/04-images/quantum-negro-nuevo-onix-g03.jpg?imwidth=960', '2020-12-05', '', 'si'),
(2, 'no', 'asd456', 'azul', '2015', 'natalia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSuV_fNESNpZ_fsE6P-r6dE8gRlBnEk6xkqg&usqp=CAU', '2020-12-05', '23:34', 'si'),
(3, 'no', 'asd789', 'rojo', '2010', 'andres', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ft4nIjHYzMRVa8Ek4dnmmFl1YX1STsljzA&usqp=CAU', '2020-12-05', '23:34', 'si'),
(4, 'no', 'asd987', 'gris', '2013', 'jorge', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzNYETucMy0aIciP9duf65_CnC7S3Llxe_Mg&usqp=CAU', '2020-12-05', '23:34', 'si'),
(5, 'no', 'asd654', 'blanco', '2016', 'sara', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ43L-c0Ki9M3mlYBwsZcCi2LtAclzXFciRQ&usqp=CAU', '2020-12-05', '23:34', 'si'),
(6, 'no', 'asd321', 'verde', '2018', 'sebastian', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToaXABl4LuSi_866sDhYRTXP431SiFEbTllg&usqp=CAU', '2020-12-05', '23:34', 'si'),
(7, 'no', 'asd147', 'morado', '2019', 'eimi', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK4Jsg-JrY_5sI-dh84AoIK02qMffB5goEKw&usqp=CAU', '2020-12-05', '23:34', 'si'),
(8, 'no', 'asd258', 'negro', '2020', 'leonardo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1Ly82RzPYhDP_uijDHvuUWYDLy72B-1PLWA&usqp=CAU', '2020-12-05', '23:34', 'si'),
(9, 'no', 'asd369', 'gris', '2014', 'jessica', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg2wcRwyp99nttTusrLY5d13UG76ty21cDEQ&usqp=CAU', '2020-12-05', '23:34', 'si'),
(10, 'no', 'asd963', 'amarillo', '2011', 'carlos', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOHl3ISTDYVrgzePpzRnC2uudnuR95ZJgfGA&usqp=CAU', '2020-12-06', '08:43', 'si'),
(11, 'no', 'qwe123', 'azul', '2021', 'ignacio', '', '2020-12-06', '09:10', 'no'),
(12, 'si', '', '', '', '', '', '', '', 'no'),
(13, 'si', '', '', '', '', '', '', '', 'no'),
(14, 'si', '', '', '', '', '', '', '', 'no'),
(15, 'si', '', '', '', '', '', '', '', 'no'),
(16, 'si', '', '', '', '', '', '', '', 'no'),
(17, 'si', '', '', '', '', '', '', '', 'no'),
(18, 'si', '', '', '', '', '', '', '', 'no'),
(19, 'si', '', '', '', '', '', '', '', 'no'),
(20, 'si', '', '', '', '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idcarro` int(11) NOT NULL,
  `placa` varchar(6) NOT NULL,
  `color` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `nombreConductor` varchar(20) NOT NULL,
  `fechaingreso` varchar(20) NOT NULL,
  `horaingreso` varchar(20) NOT NULL,
  `fechasalida` varchar(20) NOT NULL,
  `horasalida` varchar(20) NOT NULL,
  `contratomensual` text NOT NULL,
  `valor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idcarro`, `placa`, `color`, `modelo`, `nombreConductor`, `fechaingreso`, `horaingreso`, `fechasalida`, `horasalida`, `contratomensual`, `valor`) VALUES
(1, 'qwe123', 'azul', '2021', 'ignacio', '', '07:50', '2020-12-06', '07:56', 'no', 6000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensualidad`
--
ALTER TABLE `mensualidad`
  ADD PRIMARY KEY (`idslot`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idcarro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensualidad`
--
ALTER TABLE `mensualidad`
  MODIFY `idslot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idcarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
