-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 08:58:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--
CREATE DATABASE IF NOT EXISTS `base` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

CREATE TABLE `tbl_noticias` (
  `id` int(11) NOT NULL,
  `FechaNoticia` date NOT NULL,
  `Titular` varchar(50) NOT NULL,
  `Texto` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `slug` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_noticias`
--

INSERT INTO `tbl_noticias` (`id`, `FechaNoticia`, `Titular`, `Texto`, `categoria_id`, `slug`) VALUES
(2, '2022-09-22', 'Guardianes', 'orem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.', 4, 'guardinaes-noticia'),
(6, '2022-09-27', 'Termino invierno', 'orem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.', 3, 'noticia-Termino-invierno'),
(7, '2022-09-30', 'Carro mas rapido del Mundo', 'orem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.\r\n', 4, 'Carro-rapido'),
(8, '2022-09-28', 'Moto mas Rapida', 'safdibsadoifnlksdnflkjnsadikjbfikjsadbkhfbsakjdbfkjasbdfkljbasdkhjfbkshjdbfkjsbdkjfbskjdbfks', 1, 'moto-rapida'),
(9, '2022-09-30', 'Record Mundia', 'asdasidgiayusgdiojanskljdbaikhsbvdkhasbkjdasdqasas', 2, 'redord-mundial'),
(10, '2022-09-30', 'Mejores Ciudades', 'asfasfasdfasdfsafasdfas', 4, 'noticia-ciudad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias_categorias`
--

CREATE TABLE `tbl_noticias_categorias` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_noticias_categorias`
--

INSERT INTO `tbl_noticias_categorias` (`id`, `Nombre`) VALUES
(1, 'Farandula'),
(2, 'Deportes'),
(3, 'Clima'),
(4, 'Internacionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Contrasena` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `Nombre`, `Contrasena`) VALUES
(1, 'danielforigua', '123'),
(3, 'pedro', '12'),
(4, 'eduardo', '123'),
(9, 'pedro', '12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Usuarios_Categorias` (`categoria_id`);

--
-- Indices de la tabla `tbl_noticias_categorias`
--
ALTER TABLE `tbl_noticias_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_noticias_categorias`
--
ALTER TABLE `tbl_noticias_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD CONSTRAINT `Usuarios_Categorias` FOREIGN KEY (`categoria_id`) REFERENCES `tbl_noticias_categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
