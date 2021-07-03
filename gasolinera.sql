-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 21:54:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gasolinera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bomba`
--

CREATE TABLE `bomba` (
  `id_bomba` int(11) NOT NULL,
  `bomba` int(11) NOT NULL,
  `dispensadores` varchar(100) DEFAULT NULL,
  `tipo_gasolina` varchar(100) DEFAULT NULL,
  `alta_bomba` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bomba`
--

INSERT INTO `bomba` (`id_bomba`, `bomba`, `dispensadores`, `tipo_gasolina`, `alta_bomba`) VALUES
(1, 32, '23', 'dad', '2021-07-03 21:34:41'),
(2, 32, '23', 'dad', '2021-07-03 14:35:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `colonia` varchar(150) NOT NULL,
  `poblacion` varchar(150) NOT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `curp` varchar(30) NOT NULL,
  `saldo` double NOT NULL,
  `alta_cliente` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `direccion`, `colonia`, `poblacion`, `rfc`, `curp`, `saldo`, `alta_cliente`) VALUES
(2, 'Wilebaldo', 'Vasquez', '(000) 000-0000', 'Av. simbolos patrios 1002', 'ex hacienda candiani', 'Mexico', 'XAXX010101000', 'VACW921002HOCSHL06', 0, '2021-07-03 11:43:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `articulo` varchar(200) DEFAULT NULL,
  `clave` varchar(60) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `costo` double DEFAULT NULL,
  `linea` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `alta_articulo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `articulo`, `clave`, `cantidad`, `descripcion`, `costo`, `linea`, `grupo`, `alta_articulo`) VALUES
(4, 'ARTICULO DE PRUEBA', 'H87', 1, NULL, 12, 'LINEA DE PRUEBA', 'df', '2021-07-03 18:53:28'),
(5, 'ARTICULO DE PRUEBA', 'H87', 1, 'xzc', 12, 'LINEA DE PRUEBA', 'df', '2021-07-03 18:57:03'),
(6, 'ARTICULO DE PRUEBA', 'H87', 1, 'jj', 12, 'LINEA DE PRUEBA', 'df', '2021-07-03 11:59:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `alta_personal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `poblacion` varchar(100) DEFAULT NULL,
  `alta_proveedor` datetime DEFAULT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `curp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `direccion`, `colonia`, `poblacion`, `alta_proveedor`, `rfc`, `curp`) VALUES
(1, 'CLIENTE DE PRUEBA', '(000) 000-0000', 'AV. SIMBOLOS PATRIOS', 'EXHACIENDA CANDIANI', 'OAXACA', '2021-07-03 13:56:15', 'XAXX010101000', 'sdsadasdasdadsada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `permisos` varchar(100) DEFAULT NULL,
  `alta_usuario` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `telefono`, `usuario`, `password`, `permisos`, `alta_usuario`) VALUES
(1, 'PRUEBA', 'a', '(000) 000-0000', 'admin', 'a', 'Adminitrador', '2021-07-02 13:40:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bomba`
--
ALTER TABLE `bomba`
  ADD PRIMARY KEY (`id_bomba`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bomba`
--
ALTER TABLE `bomba`
  MODIFY `id_bomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
