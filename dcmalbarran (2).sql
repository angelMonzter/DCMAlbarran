-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2018 a las 10:24:30
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dcmalbarran`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombremu` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombremu`) VALUES
(1, 'Acambay'),
(2, 'Acolman'),
(3, 'Aculco'),
(4, 'Almoloya de Alquisiras'),
(5, 'Almoloya de Juárez'),
(6, 'Almoloya del Río'),
(7, 'Amanalco'),
(8, 'Amatepec'),
(9, 'Amecameca'),
(10, 'Apaxco'),
(11, 'Atenco'),
(12, 'Atizapán'),
(13, 'Atizapán de Zaragoza'),
(14, 'Atlacomulco'),
(15, 'Atlautla'),
(16, 'Axapusco'),
(17, 'Ayapango'),
(18, 'Calimaya'),
(19, 'Capulhuac'),
(20, 'Coacalco de Berriozábal'),
(21, 'Coatepec Harinas'),
(22, 'Cocotitlán'),
(23, 'Coyotepec'),
(24, 'Cuautitlán'),
(25, 'Chalco'),
(26, 'Chapa de Mota'),
(27, 'Chapultepec'),
(28, 'Chiautla'),
(29, 'Chicoloapan'),
(30, 'Chiconcuac'),
(31, 'Chimalhuacán'),
(32, 'Donato Guerra'),
(33, 'Ecatepec de Morelos'),
(34, 'Ecatzingo'),
(35, 'Huehuetoca'),
(36, 'Hueypoxtla'),
(37, 'Huixquilucan'),
(38, 'Isidro Fabela'),
(39, 'Ixtapaluca'),
(40, 'Ixtapan de la Sal'),
(41, 'Ixtapan del Oro'),
(42, 'Ixtlahuaca'),
(43, 'Xalatlaco'),
(44, 'Jaltenco'),
(45, 'Jilotepec'),
(46, 'Jilotzingo'),
(47, 'Jiquipilco'),
(48, 'Jocotitlán'),
(49, 'Joquicingo'),
(50, 'Juchitepec'),
(51, 'Lerma'),
(52, 'Malinalco'),
(53, 'Melchor Ocampo'),
(54, 'Metepec'),
(55, 'Mexicaltzingo'),
(56, 'Morelos'),
(57, 'Naucalpan de Juárez'),
(58, 'Nezahualcóyotl'),
(59, 'Nextlalpan'),
(60, 'Nicolás Romero'),
(61, 'Nopaltepec'),
(62, 'Ocoyoacac'),
(63, 'Ocuilan'),
(64, 'El Oro'),
(65, 'Otumba'),
(66, 'Otzoloapan	'),
(67, 'Otzolotepec'),
(68, 'Otzolotepec'),
(69, 'Papalotla'),
(70, 'La Paz'),
(71, 'Polotitlán'),
(72, 'Rayón'),
(73, 'San Antonio la Isla'),
(74, 'San Felipe del Progreso'),
(75, 'San Martín de las Pirámides'),
(76, 'San Mateo Atenco'),
(77, 'San Simón de Guerrero'),
(78, 'Santo Tomás'),
(79, 'Soyaniquilpan de Juárez'),
(80, 'Sultepec'),
(81, 'Tecámac'),
(82, 'Tejupilco'),
(83, 'Temamatla'),
(84, 'Temascalapa'),
(85, 'Temascalcingo'),
(86, 'Temascaltepec'),
(87, 'Temoaya'),
(88, 'Tenancingo'),
(89, 'Tenango del Aire'),
(90, 'Tenango del Valle'),
(91, 'Teoloyucan'),
(92, 'Teotihuacán'),
(93, 'Tepetlaoxtoc'),
(94, 'Tepetlixpa'),
(95, 'Tepotzotlán'),
(96, 'Tequixquiac'),
(97, 'Texcaltitlán'),
(98, 'Texcalyacac'),
(99, 'Texcoco'),
(100, 'Tezoyuca'),
(101, 'Tianguistenco'),
(102, 'Timilpan'),
(103, 'Tlalmanalco'),
(104, 'Tlalnepantla de Baz'),
(105, 'Tlatlaya'),
(106, 'Toluca'),
(107, 'Tonatico'),
(108, 'Tultepec'),
(109, 'Tultitlán'),
(110, 'Valle de Bravo'),
(111, 'Villa de Allende'),
(112, 'Villa del Carbón'),
(113, 'Villa Guerrero'),
(114, 'Villa Victoria'),
(115, 'Xonacatlán'),
(116, 'Zacazonapan'),
(117, 'Zacualpan'),
(118, 'Zinacantepec'),
(119, 'Zumpahuacán'),
(120, 'Zumpango'),
(121, 'Cuautitlán Izcalli'),
(122, 'Valle de Chalco Solidaridad'),
(123, 'Luvianos'),
(124, 'San José del Rincón'),
(125, 'Tonanitla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postular`
--

CREATE TABLE `postular` (
  `id_post` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `estudiante` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `municipio` int(11) NOT NULL,
  `municipio2` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `postular`
--

INSERT INTO `postular` (`id_post`, `nombre`, `telefono`, `estudiante`, `correo`, `detalles`, `municipio`, `municipio2`) VALUES
(8, 'Sergio', '7332313123', 'Si', 'checo@gmail.com', 'no lo se ', 1, 'Santa Cruz Atzcapotzaltongo'),
(9, 'Angel', '7322231231', 'Si', 'angel@gmail.com', 'ubusdusdbsd', 1, 'La Loma'),
(10, 'Ani', '7232312312', 'Si', 'ani@gmail.com', '2dasdasdbyede', 1, 'Almoloya'),
(11, 'Monse', '7332432432', 'No', 'monse@gmail.com', '43dbydgsbda', 1, 'Buenavista'),
(13, 'efren', '7232312312', 'Si', 'ange@gmail.com', 'oojdshda uabduasbd', 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `postular`
--
ALTER TABLE `postular`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `municipio` (`municipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `postular`
--
ALTER TABLE `postular`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postular`
--
ALTER TABLE `postular`
  ADD CONSTRAINT `postular_ibfk_1` FOREIGN KEY (`municipio`) REFERENCES `municipio` (`id_municipio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
