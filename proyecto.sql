-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2021 a las 21:38:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `idblog` int(100) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `urlimagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`idblog`, `codigo`, `fecha`, `descripcion`, `urlimagen`) VALUES
(1, '011', '2020/03/15', 'Somos una empresa la cual esta en una etapa de adaptación en entorno Social y Productiva, conoce nue', 'archivos/empresa.png'),
(2, '3213', '12/21/2020', 'Estamos Fundamentados con un gran personal competitivo tanto laboral como social para una mejor aten', 'archivos/empleado.jpg'),
(3, '12323', '12/02/2020', 'Estamos comprometidos con nuestras entregas las cuales son rápidas y seguras.', 'archivos/repartidor.png'),
(4, '676', '7/09/2021', 'Nuestro personal brinda uno de los mejores servicio en atención al cliente, atendiendo las diferente', 'archivos/servicio.jpg'),
(5, '123', '03/12/2021', 'Manejamos una seguridad en el tratamiento de datos la cual brinda tranquilidad a nuestros clientes.', 'archivos/seguridad.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envoltura`
--

CREATE TABLE `envoltura` (
  `idenvoltura` int(100) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `envoltura` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `urlimagenE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `envoltura`
--

INSERT INTO `envoltura` (`idenvoltura`, `codigo`, `envoltura`, `urlimagenE`) VALUES
(1, '010', 'caja ', 'archivos/c1.jpg'),
(2, '011', 'bolsa ', 'archivos/bol1.jpg'),
(3, '012', 'caja ', 'archivos/c2.jpg'),
(4, '013', 'caja ', 'archivos/c3.jpg'),
(5, '123', 'bolsa ', 'archivos/bol2.jpg'),
(6, '134', 'caja ', 'archivos/c4.jpg'),
(7, '345', 'caja ', 'archivos/c5.jpg'),
(8, '43435', 'caja ', 'archivos/c6.jpg'),
(9, '3283923', 'caja ', 'archivos/c7.jpg'),
(10, '098', 'bolsa ', 'archivos/bol3.jpg'),
(11, '9878', 'bolsa ', 'archivos/bol4.jpeg'),
(12, '344', 'bolsa', 'archivos/bol5.jpg'),
(13, '23d', 'bolsa', 'archivos/bol6.jpg'),
(14, '232f', 'bolsa', 'archivos/bol7.jpg'),
(15, '232f', 'bolsa', 'archivos/bol7.jpg'),
(16, '233434h', 'bolsa', 'archivos/bol8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `envoltura` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `urlimagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `nombre`, `categoria`, `descripcion`, `cantidad`, `precio`, `envoltura`, `urlimagen`) VALUES
(1, '011', 'Porta Retrato', 'Dama', 'Porta retratos para sublimación de piedra rectangular. Unidad de venta pieza', '90', '10000', 'caja', 'archivos/retrato.jpg'),
(2, '012', 'Tarjeta Navideña', 'Dama', 'Es una tarjeta de felicitación que se adorna de una manera que celebre la Navidad. ', '100', '2000', 'bolsa', 'archivos/targeta.jpg'),
(3, '013', 'Hugo Boss', 'Caballero', 'La loción Hugo Boss Selección Eau de Toilette 90 ml tiene notas de salida de pimienta y mandarina.', '87', '168000', 'caja', 'archivos/hugo.jpg'),
(4, '014', 'Reloj Checo', 'Caballero', 'Tiene un diseño muy acertado. No es demasiado grande. Ideal para cocina, oficina u otros espacios. E', '48', '280000', 'papel', 'archivos/reloj.jpg'),
(6, '016', 'PlayStation 4', 'Juguetes', 'Consola de videojuegos de ultima generación.', '60', '1000000', 'caja', 'archivos/play4.jpg'),
(7, '017', 'xbox series x', 'Juguetes', 'Consola de Ultima generación con 3 núcleos en el procesador. ', '100', '2000000', 'bolsa', 'archivos/xbox3.jpg'),
(8, '018', 'Buso de Lana', 'Ropa', 'Espectacular buso con color rosa para dama.', '200', '160000', 'papel', 'archivos/busol.jpg'),
(9, '019', 'Peluche', 'Ropa', 'Espectacular Oso de  peluche color dorado perfecto para regalara en estas fechas.', '400', '100000', 'caja', 'archivos/peluche1.jpg'),
(10, '0100', 'Billetera Lacoste', 'Detalles', 'Billetera de bolcillo para caballero de marca reconocida.', '50', '280000', 'caja', 'archivos/billetera.jpg'),
(13, '0130', 'Pantalón z', 'Ropa', 'Pantalón azul oscuro diseñado a mano talla  mediana.', '100', '200.000', 'papel', 'archivos/pantalonz.jpg'),
(15, '015', 'Muñeca Bebe.', 'Juguetes', 'Esta muñeca cuenta con diferentes accesorios los cuales son interactivos.', '20', '48000', 'bolsa', 'archivos/muñeca2.jpg'),
(19, '019', 'Perfume Loba', 'Detalles', 'Perfume para dama la cual esta echo constituida  de montaña y savia pura.', '200', '280000', 'caja', 'archivos/loba.jpg'),
(20, '0200', 'Llavero.', 'Detalles', 'Llavero para decorativo para llaves de tu casa.', '400', '50.000', 'bolsa', 'archivos/llavero.jpg'),
(21, '321', 'computador ASUS', 'tecnologia', ' computador de 12 gb ram Laptop asus 1tb Dd 12gb Ram Corea I3 Mo con mejor procesador en la actualid', '200', '6000000', 'caja', 'archivos/pcasus.jpg'),
(22, '123', 'Reloj Inteligente', 'tecnología', 'Componente tecnológico para cuenta con brújula reloj y conexión a internet estable.', '30', '12000', 'caja', 'archivos/reloj.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `cedula` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `passwordx` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `urlimagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `cedula`, `nombre`, `apellido`, `telefono`, `rol`, `email`, `usuario`, `passwordx`, `urlimagen`) VALUES
(11, '1056994920', 'Efrain', 'Tarazona', '3213367476', 'Administrador', 'efraintarazona@gmail.com', 'Etarazona', '789', ''),
(12, '1056994123', 'Jonatan', 'Hernández', '320765872', 'Administrador', 'jhernadez@hotmail.com', 'Jhernandez', '123', ''),
(13, '24087565', 'Felipe', 'Vlabuena', '321456589', 'Cliente', 'felipev@gmail.com', 'Fvalbuena', '456', ''),
(14, '23242432', 'María', 'Gomez', '434342334', 'Cliente', 'mariav@ockol.com', 'maria', '321', ''),
(15, '34454646', 'Lorena', 'Serrano', '243535', 'Cliente', 'lorenase@ockol.com', 'loren', '5567', ''),
(21, '2323232', 'Camila', 'Salinas', '323213213', 'Cliente', 'cmilo344@hotmail.com', 'camilo12', 'amilo9900', ''),
(22, '23232434', 'Maria', 'Gutierres', '233334243', 'Cliente', 'mariadeforest@gmail.com', 'marias09', 'lolas54', ''),
(23, '24734723', 'Yulia', 'Tarazona', '43545345', 'Cliente', 'tarazona545@gmail.com', 'tarazona32', '32komils', ''),
(24, '21331', 'dfgfdgd', '4234234', '234342', 'Cliente', 'jhernandez@gmail.com', '423442', '423432', 'archivos/photo_2021-02-22_08-31-55.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idblog`);

--
-- Indices de la tabla `envoltura`
--
ALTER TABLE `envoltura`
  ADD PRIMARY KEY (`idenvoltura`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `idblog` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `envoltura`
--
ALTER TABLE `envoltura`
  MODIFY `idenvoltura` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
