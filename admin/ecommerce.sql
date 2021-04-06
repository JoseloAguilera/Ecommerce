-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-04-2021 a las 00:15:06
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `pagina` varchar(80) NOT NULL,
  `contenido` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms`
--

INSERT INTO `cms` (`id`, `pagina`, `contenido`) VALUES
(1, 'empresa.php', '<h2>EDT - Boas Escolhas</h2>\r\n\r\n<p>EDT - Boas Escolhas&nbsp;es una empresa&nbsp;de capital paraguayo, representante de marcas como Sacudido&#39;s | Made in Mato | BF//Ms | Santo Fole | Red Man | Vim du Mato | Chora Boy | B&atilde;o nu mundo | Elmo. La singularidad de su modelo de gesti&oacute;n, basado en su innovaci&oacute;n y la flexibilidad, y los logros alcanzados han convertido a EDT - Boas Escolhas en una empresa l&iacute;der en el sector.</p>\r\n\r\n<p>EDT - Boas Escolhas marcha al paso de la sociedad, vistiendo aquellas ideas, tendencias y gusto que la propia sociedad ha ido madurando. De ah&iacute; su &eacute;xito entre personas, culturas y generaciones que, a pesar de sus diferencias, comparten una especial sensibilidad por la moda.</p>\r\n'),
(2, 'terminos-y-condiciones.php', '<p>Pol&iacute;tica de T&eacute;rminos y Condiciones</p>\r\n\r\n<p>Bienvenido a <strong>EDT - Py</strong>. Estos t&eacute;rminos y condiciones describen las reglas y regulaciones para el uso del sitio web www.edtpy.com</p>\r\n\r\n<p><strong>EDT &ndash; Py se encuentra en San Alberto &ndash; Paraguay.</strong></p>\r\n\r\n<p>Al acceder a este sitio web, asumimos que aceptas estos t&eacute;rminos y condiciones en su totalidad. No contin&uacute;es usando el sitio web <strong>EDT - Py</strong> si no aceptas todos los t&eacute;rminos y condiciones establecidos en esta p&aacute;gina.</p>\r\n\r\n<p>La siguiente terminolog&iacute;a se aplica a estos T&eacute;rminos y Condiciones, Declaraci&oacute;n de Privacidad y Aviso legal y cualquiera o todos los Acuerdos: el&nbsp;<strong>Cliente</strong>,&nbsp;<strong>Usted</strong>&nbsp;y&nbsp;<strong>Su</strong>&nbsp;se refieren a usted, la persona que accede a este sitio web y acepta los t&eacute;rminos y condiciones de la Compa&ntilde;&iacute;a. La&nbsp;<strong>Compa&ntilde;&iacute;a, Nosotros mismos, Nosotros y Nuestro</strong>, se refiere a nuestra Compa&ntilde;&iacute;a.&nbsp;<strong>Parte, Partes o Nosotros</strong>, se refiere en conjunto al Cliente y a nosotros mismos, o al Cliente o a nosotros mismos.</p>\r\n\r\n<p>Todos los t&eacute;rminos se refieren a la oferta, aceptaci&oacute;n y consideraci&oacute;n del pago necesario para efectuar el proceso de nuestra asistencia al Cliente de la manera m&aacute;s adecuada, ya sea mediante reuniones formales de una duraci&oacute;n fija, o por cualquier otro medio, con el prop&oacute;sito expreso de conocer las necesidades del Cliente con respecto a la provisi&oacute;n de los servicios/productos declarados de la Compa&ntilde;&iacute;a, de acuerdo con y sujeto a la ley vigente de Paraguay.</p>\r\n\r\n<p>Cualquier uso de la terminolog&iacute;a anterior u otras palabras en singular, plural, may&uacute;sculas y/o, &eacute;l/ella o ellos, se consideran intercambiables y, por lo tanto, se refieren a lo mismo.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Empleamos el uso de cookies. Al utilizar el sitio web de EDT - Py, usted acepta el uso de cookies de acuerdo con la pol&iacute;tica de privacidad de EDT - Py. La mayor&iacute;a de los modernos sitios web interactivos de hoy en d&iacute;a usan cookies para permitirnos recuperar los detalles del usuario para cada visita.</p>\r\n\r\n<p>Las cookies se utilizan en algunas &aacute;reas de nuestro sitio para habilitar la funcionalidad de esta &aacute;rea y la facilidad de uso para las personas que lo visitan. Algunos de nuestros socios afiliados/publicitarios tambi&eacute;n pueden usar cookies.</p>\r\n\r\n<p><strong>Licencia</strong></p>\r\n\r\n<p>A menos que se indique lo contrario, EDT - Py y/o sus licenciatarios les pertenecen los derechos de propiedad intelectual de todo el material en EDT - Py.</p>\r\n\r\n<p>Todos los derechos de propiedad intelectual est&aacute;n reservados.</p>\r\n\r\n<p>No debes redistribuir contenido de EDT - Py, a menos de que el contenido se haga espec&iacute;ficamente para la redistribuci&oacute;n.</p>\r\n\r\n<p><strong>Aviso legal</strong></p>\r\n\r\n<p>En la medida m&aacute;xima permitida por la ley aplicable, excluimos todas las representaciones, garant&iacute;as y condiciones relacionadas con nuestro sitio web y el uso de este sitio web (incluyendo, sin limitaci&oacute;n, cualquier garant&iacute;a impl&iacute;cita por la ley con respecto a la calidad satisfactoria, idoneidad para el prop&oacute;sito y/o el uso de cuidado y habilidad razonables).</p>\r\n\r\n<p>Nada en este aviso legal:</p>\r\n\r\n<ul>\r\n	<li>Limita o excluye nuestra o su responsabilidad por muerte o lesiones personales resultantes de negligencia.</li>\r\n	<li>Limita o excluye nuestra o su responsabilidad por fraude o tergiversaci&oacute;n fraudulenta.</li>\r\n	<li>Limita cualquiera de nuestras o sus responsabilidades de cualquier manera que no est&eacute; permitida por la ley aplicable.</li>\r\n	<li>Excluye cualquiera de nuestras o sus responsabilidades que no pueden ser excluidas bajo la ley aplicable.</li>\r\n</ul>\r\n\r\n<p>Las limitaciones y exclusiones de responsabilidad establecidas en esta Secci&oacute;n y en otras partes de este aviso legal:<br />\r\n1. est&aacute;n sujetas al p&aacute;rrafo anterior; y<br />\r\n2. rigen todas las responsabilidades que surjan bajo la exenci&oacute;n de responsabilidad o en relaci&oacute;n con el objeto de esta exenci&oacute;n de responsabilidad, incluidas las responsabilidades que surjan en contrato, agravio (incluyendo negligencia) y por incumplimiento del deber legal.</p>\r\n\r\n<p>En la medida en que el sitio web y la informaci&oacute;n y los servicios en el sitio web se proporcionen de forma gratuita, no seremos responsables de ninguna p&eacute;rdida o da&ntilde;o de ning&uacute;n tipo.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, 'formas-de-pago.php', '<p>Las transacciones de pago se realizan a trav&eacute;s de la pasarela de pago <strong>Pagopar</strong></p>\r\n\r\n<p>Se disponen de los siguientes medios de pago.</p>\r\n\r\n<p>- Tarjetas de Cr&eacute;dito (Visa, Mastercard, Credicard, Unica, American Express, Discover, Diners Club y Credifielco)<br />\r\n- Bocas de Cobranza (Pago express, Aqui pago, Practipago, Infonet cobranzas)<br />\r\n- Homebanking (Vision Banco, Banco Amambay, Banco Atlas, Bancop, Banco GNB, Banco Interfisa, Cooperativa Universitaria)<br />\r\n- Billeteras Telef&oacute;nicas (Tigo Money, Billetera Personal)<br />\r\n- Pago M&oacute;vil</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_atributo`
--

CREATE TABLE `tb_atributo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_atributo`
--

INSERT INTO `tb_atributo` (`id`, `nombre`, `activo`) VALUES
(1, 'Colores', 1),
(3, 'Medida', 1),
(5, 'Inoxidable', 1),
(6, 'Tamaño', 1),
(8, 'Numeración ', 1),
(9, 'Modelos ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_atr_valor`
--

CREATE TABLE `tb_atr_valor` (
  `id` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_atr_valor`
--

INSERT INTO `tb_atr_valor` (`id`, `id_atributo`, `nombre`, `activo`) VALUES
(23, 9, '01', 1),
(2, 1, 'Amarillo', 1),
(8, 1, 'Blanco', 1),
(7, 1, 'Dorado ', 1),
(11, 6, 'P', 1),
(9, 3, '11x5', 1),
(10, 5, '5cm X 11 cm', 1),
(13, 1, 'Negro', 1),
(14, 1, 'Rosado ', 1),
(15, 1, 'Gris', 1),
(16, 6, 'M', 1),
(17, 6, 'G', 1),
(18, 6, 'GG', 1),
(22, 8, '40', 1),
(24, 9, '02', 1),
(25, 9, '03', 1),
(26, 9, '04', 1),
(27, 9, '05', 1),
(28, 9, '06', 1),
(29, 9, '07', 1),
(30, 9, '08', 1),
(31, 9, '09', 1),
(32, 9, '10', 1),
(33, 1, 'Whisky', 1),
(34, 1, 'Marron Oscuro ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `text_alt` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `posicion` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `img`, `text_alt`, `url`, `orden`, `posicion`, `activo`) VALUES
(12, 'banner-2020-12-20-03-32-37.jpeg', '', '', 1, 2, 1),
(7, 'banner-2021-02-14-02-51-25.jpeg', 'Terere Con Imagen Resinada', 'product.php?id=29', 1, 1, 1),
(4, 'banner-2020-12-20-03-39-28.jpeg', 'Nuestros Sombreros', 'categorie.php?cat=117', 2, 0, 1),
(10, 'banner-2021-02-14-02-54-44.jpeg', 'Personalizados ', 'categorie.php?cat=ALL', 2, 1, 1),
(11, 'banner-2020-12-11-07-02-20.jpeg', 'Termos Personalizados ', '', 3, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `menu` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `url` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `nombre`, `id_padre`, `menu`, `activo`, `url`) VALUES
(127, 'Lentes de Sol', NULL, 1, 1, 'lentes-de-sol-96180.jpeg'),
(122, 'Cuchillos', NULL, 1, 1, 'cuchillos-26698.jpeg'),
(123, 'Conjunto', 121, 0, 0, NULL),
(124, 'Corta Pluma', NULL, 1, 1, 'canivete-38740.jpeg'),
(125, 'Llaveros', NULL, 1, 1, 'llaveros-19163.jpeg'),
(126, 'Medallas', 125, 0, 0, ''),
(121, 'Guampa Inox Lazer ', NULL, 1, 1, 'guampa-inox-lazer--32826.jpeg'),
(120, 'Bombillas', NULL, 1, 1, 'bombillas-46988.jpeg'),
(119, 'Guampas', NULL, 1, 1, 'guampas-15824.jpeg'),
(118, 'Sombreros', NULL, 1, 1, 'sombreros-86439.jpeg'),
(117, 'Kepis', 115, 0, 0, ''),
(116, 'kkkkk', NULL, 0, 0, ''),
(115, 'KEPIS', NULL, 1, 1, 'kepis-33402.jpeg'),
(129, 'Remeras', NULL, 1, 1, 'remeras-64298.jpeg'),
(130, 'Remeras Femeninas', NULL, 0, 0, ''),
(131, 'Billetera', NULL, 1, 1, 'no-image.png'),
(132, 'Botas e Botinas ', NULL, 1, 1, 'no-image.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ciudad`
--

CREATE TABLE `tb_ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_ciudad`
--

INSERT INTO `tb_ciudad` (`id`, `nombre`, `id_departamento`) VALUES
(1, 'Cedrales', 1),
(2, 'Colonia Yguazu', 1),
(3, 'Hernandarias', 1),
(4, 'Itakyry ', 1),
(5, 'Juan E. O-Leary', 1),
(6, 'Colonia Yguazu', 1),
(7, 'Juan León Malloriquin', 1),
(8, 'Minga Guazú', 1),
(9, 'Minga Porá', 1),
(10, 'Naranjal', 1),
(11, 'Nueva Fortuna', 1),
(12, 'Puerto Pdte. Franco ', 1),
(13, 'San Alberto', 1),
(14, 'San Cristobal', 1),
(15, 'Santa Fe del Paraná', 1),
(16, 'Santa Rita', 1),
(17, 'Bella Vista Norte', 2),
(18, 'Capitán Bado', 2),
(19, 'Pedro Juan Caballero', 2),
(20, 'Sanja Pyta', 2),
(21, 'Filadelfia', 3),
(22, 'Loma Plata', 3),
(23, 'Caaguazú', 4),
(24, 'Campo 9', 4),
(25, 'Carayao', 4),
(26, 'Cecilio Báez', 4),
(27, 'Coronel Oviedo', 4),
(28, 'Juan Manuel Frutos -Pastoreo', 4),
(29, 'Nueva Londres', 4),
(30, 'Repatriación', 4),
(31, 'RI 3 Corrales', 4),
(32, 'San Joaquin', 4),
(33, 'San José de los Arroyos', 4),
(34, 'Santa Rosa del Mbutuy', 4),
(35, 'Simon Bolivar', 4),
(36, 'Vaquería', 4),
(37, 'Yhu', 4),
(38, 'Buena Vista', 5),
(39, 'Caazapá', 5),
(40, 'Fulgencio Yegros', 5),
(41, 'Higinio Morinigo', 5),
(42, 'Maciel', 5),
(43, 'Moises Bertoni', 5),
(44, 'San Juan Nepomuceno', 5),
(45, 'Yuty', 5),
(46, 'Corpus Christi', 6),
(47, 'Curuguaty', 6),
(48, 'Katuete', 6),
(49, 'Nueva Esperanza', 6),
(50, 'Puente Kyha', 6),
(51, 'Salto del Guaira', 6),
(52, 'Asunción', 7),
(53, 'Areguá', 8),
(54, 'Capiatá', 8),
(55, 'Fernando de la Mora', 8),
(56, 'Guarambaré', 8),
(57, 'Itá', 8),
(58, 'Itagua', 8),
(59, 'José Agusto Saldivar', 8),
(60, 'Lambaré', 8),
(61, 'Limpio', 8),
(62, 'Luque', 8),
(63, 'Mariano Roque Alonso', 8),
(64, 'Ñemby', 8),
(65, 'Nueva Italia', 8),
(66, 'San Antonio', 8),
(67, 'San Lorenzo', 8),
(68, 'Villa Elisa', 8),
(69, 'Villeta', 8),
(70, 'Ypacarai', 8),
(71, 'Ypane', 8),
(72, 'Azotey', 9),
(73, 'Concepción', 9),
(74, 'Horqueta', 9),
(75, 'Loreto', 9),
(76, 'Paso Barreto', 9),
(77, 'Yby Ya-u', 9),
(78, '1ro. De marzo', 10),
(79, 'Altos', 10),
(80, 'Arroyos y Esteros', 10),
(81, 'Atyra', 10),
(82, 'Caacupe', 10),
(83, 'Caraguatay', 10),
(84, 'Eusebio Ayala', 10),
(85, 'Isla Pucu', 10),
(86, 'Itacurubí de la Cordillera', 10),
(87, 'Piribebuy', 10),
(88, 'San Bernardino', 10),
(89, 'San José Obrero', 10),
(90, 'Santa Elena', 10),
(91, 'Tobatí', 10),
(92, 'Valenzuela', 10),
(93, 'Borja', 11),
(94, 'Colonia Independencia', 11),
(95, 'Coronel Martinez', 11),
(96, 'Dr. Botrel', 11),
(97, 'Eugenio A. Garay', 11),
(98, 'Felix Perez Cardozo', 11),
(99, 'Itapé', 11),
(100, 'Iturbe', 11),
(101, 'José Fassardi', 11),
(102, 'Mauricio Jose Troche', 11),
(103, 'Mbocayaty', 11),
(104, 'Natalicio Talavera', 11),
(105, 'Ñumi', 11),
(106, 'Paso Yobai', 11),
(107, 'San Salvador', 11),
(108, 'Tebicuary', 11),
(109, 'Villarrica', 11),
(110, 'Bella Vista Sur', 12),
(111, 'Cambyreta', 12),
(112, 'Capitán Meza', 12),
(113, 'Capitan Miranda', 12),
(114, 'Carmen del Paraná', 12),
(115, 'Colonia Fram', 12),
(116, 'Coronel Bogado', 12),
(117, 'Edelira', 12),
(118, 'Edelira 28', 12),
(119, 'Encarnación', 12),
(120, 'Gral. Artigas', 12),
(121, 'Gral. Delgado', 12),
(122, 'Hohenau', 12),
(123, 'Kimex -Colonia Carlos A. López', 12),
(124, 'La Paz', 12),
(125, 'Maria Auxiliadora', 12),
(126, 'Mayor Otaño', 12),
(127, 'Natalio', 12),
(128, 'Obligado', 12),
(129, 'Pirapo', 12),
(130, 'San Cosme Y Damián', 12),
(131, 'San Juan del Paraná', 12),
(132, 'San Rafael del Paraná', 12),
(133, 'Yatytay', 12),
(134, 'Ayolas', 13),
(135, 'San Ignacio Misiones	', 13),
(136, 'San Juan Bautista', 13),
(137, 'San Patricio', 13),
(138, 'Santa María Misiones', 13),
(139, 'Santa Rosa Misiones', 13),
(140, 'Santiago Misiones', 13),
(141, 'Alberdi', 14),
(142, 'Pilar', 14),
(143, 'Villa Oliva', 14),
(144, 'Acahay', 15),
(145, 'Caballero', 15),
(146, 'Carapeguá', 15),
(147, 'Escobar', 15),
(148, 'Paraguarí', 15),
(149, 'Pirayú', 15),
(150, 'Quiindy	', 15),
(151, 'San Roque Gonzalez', 15),
(152, 'Sapucai', 15),
(153, 'Yaguaron	', 15),
(154, 'Ybycui', 15),
(155, 'Ybytymí', 15),
(156, 'Benjamín Aceval', 16),
(157, 'Villa Hayes', 16),
(158, '25 de Diciembre', 17),
(159, 'Antequera', 17),
(160, 'Capiibary', 17),
(161, 'Choré', 17),
(162, 'Gral. Elizardo Aquino', 17),
(163, 'Gral. Resquín', 17),
(164, 'Guayaybi', 17),
(165, 'Itacurubí del Rosario', 17),
(166, 'Lima', 17),
(167, 'Puerto Rosario	', 17),
(168, 'San Pedro del Ycuamandiyú', 17),
(169, 'Santani', 17),
(170, 'Santa Rosa del Aguaray', 17),
(171, 'Unión', 17),
(172, 'Ciudad del Este', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `ruc` varchar(20) DEFAULT NULL COMMENT 'RUC, RG, CI',
  `documento` varchar(50) DEFAULT NULL,
  `razon_social` varchar(80) DEFAULT NULL,
  `mayorista` tinyint(1) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nombre`, `apellido`, `ruc`, `documento`, `razon_social`, `mayorista`, `telefono`, `email`, `url`) VALUES
(1, 'Ana Carolina', 'de Vernazza', 'RUC', '2498760', 'Mario Vernazza', 0, '0983781248', 'anacarolinaapv@gmail.com', NULL),
(2, 'Juan', 'richard', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Juan Richard', 'CABRERA', 'CI', '4402658', 'CAPACIT', 1, '09826371278', 'capacitcursoscde@gmail.com', NULL),
(4, 'José', 'Aguilera', '5971557-0', '5971557', 'José Aguilera', 1, '973 118404', 'joseaguilera1709@gmail.com', NULL),
(5, 'Jose ', 'Minorista', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(6, 'Juan', 'Cabreta', '4402651-0', '4402651', 'Capacit', 1, '0983112965', 'voawebpy@gmail.com', NULL),
(7, 'RBO9Z3L70XK13OZRJKAEGR5V http://mail.com/003', 'RBO9Z3L70XK13OZRJKAEGR5V http://mail.com/003', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(8, 'RBO9Z3L70XK13OZRJKAEGR5V http://mail.com/003', 'RBO9Z3L70XK13OZRJKAEGR5V http://mail.com/003', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(9, 'XXOOBJDFFGGEA90N1FLLPOXX http://mail.com/402', 'XXOOBJDFFGGEA90N1FLLPOXX http://mail.com/402', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(10, 'XXOOBJDFFGGEA90N1FLLPOXX http://mail.com/402', 'XXOOBJDFFGGEA90N1FLLPOXX http://mail.com/402', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(11, 'Metal', 'sensor', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(12, 'synergies', 'Consultant', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(13, 'framework', 'Assimilated', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(14, 'alarm', 'Table', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(15, 'Handcrafted Steel Ball', 'transmit', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(16, 'Distributed', 'Latvian', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(17, 'Eloisa', 'Beatriz', '', '5816490', '', 0, '0986746621', 'eloisabeatriz14@gmail.com', NULL),
(18, 'hard drive', 'Fantastic Plastic Fish', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(19, 'THX', 'mission-critical', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(20, 'Islands', 'Soft', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(21, 'Ana', 'Vernazza', '000000', '000000', 'Ana', 0, '090000000', 'anacarolinaaps@gmail.com', NULL),
(22, 'Viviani', 'Bello', NULL, NULL, NULL, 1, NULL, NULL, ''),
(23, 'Juan Richard', 'Cabrera', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(24, 'Viviani', 'Belo', NULL, NULL, NULL, 1, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cli_direccion`
--

CREATE TABLE `tb_cli_direccion` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `departamento` varchar(80) NOT NULL,
  `referencia` varchar(80) DEFAULT NULL,
  `favorito` tinyint(1) NOT NULL COMMENT '0 -> no 1 -> sí'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cli_direccion`
--

INSERT INTO `tb_cli_direccion` (`id`, `id_cliente`, `calle`, `ciudad`, `departamento`, `referencia`, `favorito`) VALUES
(5, 3, 'Avda. San Blas. Km 3 y medio', '3', '2', 'cerca de mi vecino', 1),
(6, 1, 'Calle Las Orquideas con Los Lapachos', '1', '1', 'Casa de esquina', 1),
(7, 4, 'Av. Blas Garay', '1', '1', 'Mi casa', 1),
(8, 6, 'Avda. San Blas ', '1', '1', '', 1),
(9, 21, 'Las Tacuaras', '1', '1', 'Capitão Bar', 1),
(10, 17, '4 de energia ', '13', '1', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_departamento`
--

CREATE TABLE `tb_departamento` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_departamento`
--

INSERT INTO `tb_departamento` (`id`, `nombre`) VALUES
(1, 'Alto Parana'),
(2, 'Central'),
(1, 'Alto Parana'),
(2, 'Amambay'),
(3, 'Boquerón'),
(4, 'Caaguazú'),
(5, 'Caazapá'),
(6, 'Canindeyú'),
(7, 'Capital'),
(8, 'Central'),
(9, 'Concepción'),
(10, 'Cordillera'),
(11, 'Guairá'),
(12, 'Itapúa'),
(13, 'Misiones'),
(14, 'Ñeembucú'),
(15, 'Paraguarí'),
(16, 'Presidente Hayes'),
(17, 'San Pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marca`
--

CREATE TABLE `tb_marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `url` varchar(80) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_marca`
--

INSERT INTO `tb_marca` (`id`, `nombre`, `url`, `activo`) VALUES
(2, 'Red Man', 'IMG-20190225-WA0253.jpg-2021-02-14', 1),
(5, 'Sacudidos', 'download.png-2021-02-14', 1),
(6, 'Choraboy', 'maxresdefault (9).jpg-2021-02-14', 1),
(7, 'BF///MS ', 'images (4).png-2021-02-14', 1),
(8, 'Made in Mato', 'images.png-2021-02-14', 1),
(9, 'EdT ', 'IMG-20200305-WA0126_20200311183912975.jpg-2021-02-14', 1),
(10, 'BÃO NU MUNDO', 'download.jpg-2021-02-15', 1),
(11, 'VIM DU MATO ', 'images.jpg-2021-02-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_met_envio`
--

CREATE TABLE `tb_met_envio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `costo` double DEFAULT '0',
  `default` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_met_envio`
--

INSERT INTO `tb_met_envio` (`id`, `descripcion`, `costo`, `default`) VALUES
(1, 'AEX', 45000, 1),
(2, 'Retirar en la Tienda', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_met_envio_costo`
--

CREATE TABLE `tb_met_envio_costo` (
  `id` int(11) DEFAULT NULL,
  `id_met_envio` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `tiempo_entrega` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_met_envio_costo`
--

INSERT INTO `tb_met_envio_costo` (`id`, `id_met_envio`, `id_ciudad`, `precio`, `tiempo_entrega`) VALUES
(1, 1, 1, 50000, '48hs'),
(2, 1, 2, 60000, '24hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_met_pago`
--

CREATE TABLE `tb_met_pago` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `default` int(11) DEFAULT NULL,
  `instrucciones` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_met_pago`
--

INSERT INTO `tb_met_pago` (`id`, `descripcion`, `default`, `instrucciones`) VALUES
(1, 'TARJETA / PAGO EXPRESS / PAGOPAR', 1, NULL),
(2, 'GIROS TIGO', NULL, 'Luego de la compra podes realizar el giro al 0983 112 965 y enviar el comprobante al mismo numero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pais`
--

CREATE TABLE `tb_pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cliente` int(11) NOT NULL,
  `id_met_pago` int(11) NOT NULL,
  `id_met_envio` int(11) NOT NULL,
  `id_cli_direccion` int(11) NOT NULL DEFAULT '1',
  `total` double NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `total_envio` double DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_pedido`
--

INSERT INTO `tb_pedido` (`id`, `fecha`, `id_cliente`, `id_met_pago`, `id_met_envio`, `id_cli_direccion`, `total`, `id_factura`, `observacion`, `total_envio`, `status`) VALUES
(1, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(2, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(3, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(4, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(5, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(6, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(7, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(8, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(9, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(10, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(11, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(12, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(13, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(14, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(15, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(16, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(17, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(18, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(19, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(20, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(21, '0000-00-00 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(42, '2020-11-14 16:03:40', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(56, '2020-11-18 14:14:16', 4, 2, 2, 1, 134000, NULL, '', 0, 0),
(55, '2020-11-16 15:23:29', 4, 1, 2, 1, 100000, NULL, '', 0, 0),
(54, '2020-11-16 15:22:43', 4, 1, 2, 1, 100000, NULL, '', 0, 0),
(53, '2020-11-16 15:21:59', 4, 1, 2, 1, 100000, NULL, '', 0, 0),
(52, '2020-11-14 16:31:06', 4, 1, 1, 1, 100000, NULL, '', 50000, 3),
(51, '2020-11-14 16:29:55', 4, 1, 1, 1, 100000, NULL, '', 50000, 0),
(50, '2020-11-14 16:28:04', 4, 1, 1, 1, 100000, NULL, '', 50000, 0),
(49, '2020-11-14 16:27:11', 4, 1, 1, 1, 100000, NULL, '', 50000, 0),
(48, '2020-11-14 16:25:32', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(47, '2020-11-14 16:25:07', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(46, '2020-11-14 16:24:15', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(45, '2020-11-14 16:21:50', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(44, '2020-11-14 16:17:20', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(43, '2020-11-14 16:16:24', 4, 1, 1, 1, 76800, NULL, '', 50000, 0),
(57, '2020-11-23 08:30:32', 4, 1, 2, 1, 1500, NULL, '', 0, 0),
(58, '2020-11-23 08:31:45', 4, 1, 2, 1, 1500, NULL, '', 0, 0),
(59, '2020-11-23 08:35:05', 4, 1, 2, 1, 1500, NULL, '', 0, 0),
(60, '2020-11-23 08:36:40', 4, 1, 2, 1, 1500, NULL, '', 0, 0),
(61, '2020-11-23 08:48:10', 4, 1, 2, 1, 1500, NULL, '', 0, 0),
(62, '2020-11-23 08:48:53', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(63, '2020-11-23 08:52:37', 4, 1, 2, 1, 1000, NULL, '', 50000, 0),
(64, '2020-11-23 08:52:44', 4, 1, 2, 1, 1000, NULL, '', 50000, 0),
(65, '2020-11-23 08:53:11', 4, 1, 2, 1, 1000, NULL, '', 50000, 0),
(66, '2020-11-23 08:53:33', 4, 1, 2, 1, 1000, NULL, '', 50000, 0),
(67, '2020-11-23 08:53:40', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(68, '2020-11-23 08:57:34', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(69, '2020-11-23 08:57:45', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(70, '2020-11-23 09:00:03', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(71, '2020-11-23 09:13:27', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(72, '2020-11-23 09:18:47', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(73, '2020-11-23 09:19:38', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(74, '2020-11-23 09:22:10', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(75, '2020-11-23 09:22:44', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(76, '2020-11-23 09:24:31', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(77, '2020-11-23 09:25:16', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(78, '2020-11-23 09:26:57', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(79, '2020-11-23 09:26:58', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(80, '2020-11-23 09:39:30', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(81, '2020-11-23 09:57:42', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(82, '2020-11-23 09:59:41', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(83, '2020-11-23 10:01:15', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(84, '2020-11-23 10:02:26', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(85, '2020-11-23 10:04:53', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(86, '2020-11-23 10:07:15', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(87, '2020-11-23 10:08:23', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(88, '2020-11-23 10:19:40', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(89, '2020-11-23 10:20:20', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(90, '2020-11-23 10:28:11', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(91, '2020-11-23 10:28:41', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(92, '2020-11-23 10:33:41', 4, 1, 1, 1, 1000, NULL, '', 50000, 0),
(93, '2020-11-23 10:34:29', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(94, '2020-11-23 11:21:47', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(95, '2020-11-23 12:10:12', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
(96, '2020-11-23 20:46:24', 3, 2, 1, 1, 78650, NULL, '', 45000, 0),
(97, '2020-11-24 19:17:29', 4, 1, 1, 1, 78000, NULL, '', 50000, 0),
(98, '2020-11-24 19:25:10', 4, 1, 2, 1, 1000, NULL, '', 0, 2),
(99, '2020-11-27 16:43:42', 4, 1, 2, 1, 1000, NULL, 'Llamar para entrega', 0, 2),
(100, '2020-12-11 10:43:20', 3, 1, 2, 1, 1000, NULL, '', 0, 0),
(101, '2020-12-11 10:44:48', 3, 1, 2, 1, 1000, NULL, '', 0, 0),
(102, '2020-12-11 10:56:42', 3, 1, 2, 1, 1000, NULL, '', 0, 0),
(103, '2020-12-11 11:08:51', 6, 1, 2, 1, 15000, NULL, '', 0, 2),
(104, '2020-12-17 20:57:43', 4, 1, 2, 1, 154900, NULL, '', 0, 0),
(105, '2021-03-16 19:38:32', 4, 1, 2, 1, 120000, NULL, '', 0, 0),
(107, '2021-04-05 11:03:04', 17, 1, 2, 1, 110000, NULL, '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ped_detalle`
--

CREATE TABLE `tb_ped_detalle` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `combinacion` varchar(100) DEFAULT NULL,
  `valor_unitario` double NOT NULL,
  `ctd` int(11) NOT NULL,
  `descuento` double DEFAULT NULL,
  `valor_total` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_ped_detalle`
--

INSERT INTO `tb_ped_detalle` (`id_pedido`, `id_producto`, `id_stock`, `combinacion`, `valor_unitario`, `ctd`, `descuento`, `valor_total`) VALUES
(21, 15, 0, NULL, 76000, 1, 0, 76000),
(21, 6, 0, NULL, 250000, 1, 0, 250000),
(22, 15, 0, NULL, 76000, 3, 0, 228000),
(22, 6, 0, NULL, 250000, 1, 0, 250000),
(23, 15, 0, NULL, 76000, 3, 0, 228000),
(23, 6, 0, NULL, 250000, 3, 0, 750000),
(24, 15, 0, NULL, 76000, 3, 0, 228000),
(24, 6, 0, NULL, 250000, 3, 0, 750000),
(25, 15, 0, NULL, 76000, 3, 0, 228000),
(25, 6, 0, NULL, 250000, 3, 0, 750000),
(26, 15, 0, NULL, 76000, 3, 0, 228000),
(26, 6, 0, NULL, 250000, 3, 0, 750000),
(27, 15, 0, NULL, 76000, 3, 0, 228000),
(27, 6, 0, NULL, 250000, 3, 0, 750000),
(28, 15, 0, NULL, 76000, 3, 0, 228000),
(28, 6, 0, NULL, 250000, 3, 0, 750000),
(29, 15, 0, NULL, 76000, 3, 0, 228000),
(29, 6, 0, NULL, 250000, 3, 0, 750000),
(30, 12, 0, NULL, 78650, 1, 0, 78650),
(31, 12, 0, NULL, 78650, 1, 0, 78650),
(32, 11, 0, NULL, 57890, 2, 0, 115780),
(33, 11, 0, NULL, 57890, 3, 0, 173670),
(33, 8, 0, NULL, 76800, 3, 0, 230400),
(34, 15, 0, NULL, 76000, 1, NULL, 76000),
(35, 8, 0, NULL, 76800, 1, 0, 76800),
(35, 6, 0, NULL, 250000, 1, 0, 250000),
(37, 8, 0, NULL, 76800, 1, 0, 76800),
(38, 8, 0, NULL, 76800, 1, 0, 76800),
(39, 8, 0, NULL, 76800, 1, 0, 76800),
(40, 8, 0, NULL, 76800, 1, 0, 76800),
(41, 8, 0, NULL, 76800, 1, 0, 76800),
(42, 8, 0, NULL, 76800, 1, 0, 76800),
(43, 8, 0, NULL, 76800, 1, 0, 76800),
(44, 8, 0, NULL, 76800, 1, 0, 76800),
(45, 8, 0, NULL, 76800, 1, 0, 76800),
(46, 8, 0, NULL, 76800, 1, 0, 76800),
(47, 8, 0, NULL, 76800, 1, 0, 76800),
(48, 8, 0, NULL, 76800, 1, 0, 76800),
(49, 13, 0, NULL, 100000, 1, 0, 100000),
(50, 13, 0, NULL, 100000, 1, 0, 100000),
(51, 13, 0, NULL, 100000, 1, 0, 100000),
(52, 13, 0, NULL, 100000, 1, 0, 100000),
(53, 13, 0, NULL, 100000, 1, 0, 100000),
(54, 13, 0, NULL, 100000, 1, 0, 100000),
(55, 13, 0, NULL, 100000, 1, 0, 100000),
(56, 6, 0, NULL, 134000, 1, 0, 134000),
(57, 16, 0, NULL, 1500, 1, 0, 1500),
(58, 16, 0, NULL, 1500, 1, 0, 1500),
(59, 16, 0, NULL, 1500, 1, 0, 1500),
(60, 16, 0, NULL, 1500, 1, 0, 1500),
(61, 16, 0, NULL, 1500, 1, 0, 1500),
(62, 16, 0, NULL, 1000, 1, 0, 1000),
(63, 16, 0, NULL, 1000, 1, 0, 1000),
(64, 16, 0, NULL, 1000, 1, 0, 1000),
(65, 16, 0, NULL, 1000, 1, 0, 1000),
(66, 16, 0, NULL, 1000, 1, 0, 1000),
(67, 16, 0, NULL, 1000, 1, 0, 1000),
(68, 16, 0, NULL, 1000, 1, 0, 1000),
(69, 16, 0, NULL, 1000, 1, 0, 1000),
(70, 16, 0, NULL, 1000, 1, 0, 1000),
(71, 16, 0, NULL, 1000, 1, 0, 1000),
(72, 16, 0, NULL, 1000, 1, 0, 1000),
(73, 16, 0, NULL, 1000, 1, 0, 1000),
(74, 16, 0, NULL, 1000, 1, 0, 1000),
(75, 16, 0, NULL, 1000, 1, 0, 1000),
(76, 16, 0, NULL, 1000, 1, 0, 1000),
(77, 16, 0, NULL, 1000, 1, 0, 1000),
(78, 16, 0, NULL, 1000, 1, 0, 1000),
(79, 16, 0, NULL, 1000, 1, 0, 1000),
(80, 16, 0, NULL, 1000, 1, 0, 1000),
(81, 16, 0, NULL, 1000, 1, 0, 1000),
(82, 16, 0, NULL, 1000, 1, 0, 1000),
(83, 16, 0, NULL, 1000, 1, 0, 1000),
(84, 16, 0, NULL, 1000, 1, 0, 1000),
(85, 16, 0, NULL, 1000, 1, 0, 1000),
(86, 16, 0, NULL, 1000, 1, 0, 1000),
(87, 16, 0, NULL, 1000, 1, 0, 1000),
(88, 16, 0, NULL, 1000, 1, 0, 1000),
(89, 16, 0, NULL, 1000, 1, 0, 1000),
(90, 16, 0, NULL, 1000, 1, 0, 1000),
(91, 16, 0, NULL, 1000, 1, 0, 1000),
(92, 16, 0, NULL, 1000, 1, 0, 1000),
(93, 16, 0, NULL, 1000, 1, 0, 1000),
(94, 16, 0, NULL, 1000, 1, 0, 1000),
(95, 16, 0, NULL, 1000, 1, 0, 1000),
(96, 12, 0, NULL, 78650, 1, 0, 78650),
(97, 14, 0, NULL, 78000, 1, 0, 78000),
(98, 16, 0, NULL, 1000, 1, 0, 1000),
(99, 35, 0, NULL, 1000, 1, 0, 1000),
(100, 35, 0, NULL, 1000, 1, 0, 1000),
(101, 35, 0, NULL, 1000, 1, 0, 1000),
(102, 35, 0, NULL, 1000, 1, 0, 1000),
(103, 18, 0, NULL, 15000, 1, 0, 15000),
(104, 23, 0, NULL, 54900, 1, 0, 54900),
(104, 34, 0, NULL, 100000, 1, 0, 100000),
(105, 24, 0, NULL, 120000, 1, 0, 120000),
(107, 204, 117, '<b>Tamaño:</b> P<br><b>Colores:</b> Gris<br>', 110000, 1, 0, 110000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ped_status`
--

CREATE TABLE `tb_ped_status` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_ped_status`
--

INSERT INTO `tb_ped_status` (`id`, `descripcion`) VALUES
(0, 'Pendiente'),
(1, 'En Revisión'),
(2, 'Pagado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

CREATE TABLE `tb_producto` (
  `id` int(20) NOT NULL,
  `referencia` varchar(20) DEFAULT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `valor_minorista` int(11) DEFAULT NULL,
  `valor_mayorista` int(11) DEFAULT NULL,
  `id_marca` int(11) NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `total_hits` int(11) NOT NULL DEFAULT '0',
  `unique_hits` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`id`, `referencia`, `nombre`, `descripcion`, `valor_minorista`, `valor_mayorista`, `id_marca`, `destaque`, `activo`, `total_hits`, `unique_hits`) VALUES
(85, 'BN199SCD', 'Kepi Aparecida - Bege', '', 160000, 120000, 5, 0, 1, 1, 1),
(25, '9999', 'Kepi Cowboy', 'Quepis Rosa Cowboy', 160000, 120000, 5, 1, 1, 19, 16),
(274, 'CP04', 'Guampa Inoxidable ', 'Guampa Inoxidable grabado a láser personalizado \r\n', 120000, 90000, 9, 0, 1, 0, 0),
(24, '8888', 'Kepi Celeste', 'Quepis celeste con detalles alrededor, logo en frente color negro\r\n', 160000, 120000, 6, 1, 1, 26, 19),
(23, '7777', 'Kepi Rojo', 'Quepis Rojo con logo negro, y malla red en parte trasera', 160000, 120000, 6, 1, 1, 21, 17),
(81, 'BN273SCD', 'Kepi Medalla San Benito - Rojo', '', 160000, 120000, 5, 1, 1, 20, 20),
(22, '6666', 'Kepi Camuflaje', 'Quepis con diseño camuflaje - malla trasera red', 160000, 120000, 5, 1, 1, 13, 13),
(87, 'BN256SCD', 'Kepi - Trator nuevo - Bege e Marom', '', 160000, 120000, 5, 0, 1, 1, 1),
(20, '4444', 'Kepi Pescador Blanco', 'Quepis color blanco con estampa de pescado en la frente', 160000, 120000, 5, 1, 1, 26, 25),
(19, '3333', 'Kepi detalle Cruz', 'Quepis color negro en tela transpirable con detalle en la frente de Cruz en color dorado', 160000, 120000, 7, 1, 1, 45, 41),
(18, '2222', 'Kepi Azul - Logo Rojo', 'Quepis color azul con detalles rojos en el logo, y tela de malla en la parte trasera', 160000, 120000, 5, 1, 1, 45, 22),
(17, '1111', 'Kepi Negro con Detalles', 'Quepis Negro con Detalles en todo el exterior', 160000, 120000, 6, 1, 1, 20, 16),
(271, 'CP01', 'Guampa Inox + bombilla ', 'Guampa de terer inoxidable grabado a láser personalizada ', 160000, 120000, 9, 0, 1, 1, 1),
(272, 'CP02', 'Gampa Inoxidable + bombilla', 'Guampa Inoxidable grabado a láser personalizado \r\n', 160000, 120000, 9, 0, 1, 2, 2),
(273, 'CP03', 'Guampa Inoxidable + bombilla', 'Guampa Inoxidable grabado a láser personalizado \r\nPersonalize como quieres ', 160000, 120000, 9, 0, 1, 1, 1),
(36, 'BN281SCD', 'Kepi SCD Estilizado -Negro ', 'Edt referente.', 160000, 120000, 5, 1, 1, 103, 90),
(286, 'CP11', 'Guampa inoxdable + bombilla ', '', 160000, 120000, 9, 0, 1, 1, 1),
(38, 'BN112SCD', 'KEPI SACUDIDO´S - SUEDE BORDÔ', '', 160000, 120000, 5, 1, 1, 38, 13),
(275, 'CP05', 'Guampa Inoxidable + bombilla', 'Guampa Inoxidable grabado a láser personalizado \r\n', 160000, 120000, 9, 0, 1, 1, 1),
(40, 'BLFS-013', 'Remeras San Benedito ', '', 110000, 149000, 5, 0, 0, 11, 8),
(41, ' BN264SCD', 'Kepis Boi SCD- Rojo', '', 160000, 120000, 5, 0, 1, 5, 5),
(42, ' BN166SCD', 'Kepi Maron- Trator', '', 160000, 120000, 5, 0, 1, 1, 1),
(44, 'BN205INF', 'Kepi Medalla San Benito ', '', 160000, 120000, 5, 0, 1, 6, 2),
(45, 'BN266SCD', 'kepi Boi Estilizado- Veludo Marom ', '', 160000, 120000, 5, 0, 1, 5, 3),
(47, 'BN225SCD', 'Kepi Pescador Camuflado ', '', 160000, 120000, 5, 0, 1, 1, 1),
(48, 'BN188SCD', 'Kepi Cria, Recria e Engorda -Negro', '', 160000, 120000, 5, 0, 1, 2, 2),
(49, ' BN240SCD', 'Kepi Medalla de San Benito - Verde Musgo', '', 160000, 120000, 5, 0, 1, 2, 2),
(50, ' BN164SCD', 'Kepi- Arar, Semear y Cosechar - Branco y Verde', '', 160000, 120000, 5, 0, 1, 2, 2),
(56, 'BN202SCD', 'Kepi Pecaria Lechera- Negro/ Vino ', '', 160000, 120000, 5, 1, 1, 7, 6),
(54, 'BN208SCD', 'Kepi-  Si vas a llorar - Azul /Marrom', '', 160000, 120000, 5, 1, 1, 8, 8),
(55, 'BN291SCD', 'Kepi Camionero - Gris', '', 160000, 120000, 5, 0, 1, 1, 1),
(57, 'BN17BNM', 'kepi -Negro- Bruto Aba Suede', '', 160000, 120000, 10, 0, 1, 3, 3),
(58, 'BN263SCD', 'Kepi - Boi SCD - Negro', '', 160000, 120000, 5, 0, 1, 1, 1),
(61, 'BN47SCD', 'Kepi Trucker Lan Azul y Tela Bege con Detalles Bordado en la parte frontal', '', 160000, 120000, 5, 0, 1, 7, 2),
(62, 'BN237SCD', 'Kepi Medalla de San Benito - Vino ', '', 160000, 120000, 5, 0, 1, 2, 2),
(63, 'BN220SCD', 'Kepi Touro - Vino', '', 160000, 120000, 5, 0, 1, 0, 0),
(64, 'BN234SCD', 'Kepi Vida Sertaneja - Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(66, 'BN177SCD', 'Kepi - Aviador - Azul / Marom', '', 160000, 120000, 5, 0, 1, 3, 3),
(69, 'BN09BNM', 'KEPI Bão Nu Mundo Arame Bege', '', 160000, 120000, 10, 0, 1, 1, 1),
(178, 'BN276SCD', 'Kepi Logo Matelasse - Negro / Bege', '', 160000, 120000, 5, 0, 1, 2, 2),
(86, 'BN217INF', 'Kepi Medalla San Benito - Azul Marino ', '', 160000, 120000, 5, 0, 1, 0, 0),
(76, 'BN123SCD-GG', 'Kepi- Menos Modinha Mais Modão - Tamanho Especial', '', 160000, 120000, 5, 0, 1, 2, 2),
(88, 'BN251SCD', 'Kepi - Boi Estilizado - Gris /Vde Neon', '', 160000, 120000, 5, 0, 1, 3, 3),
(89, 'BN252SCD', 'Kepi Logo - Negro / Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(90, 'BN269SCD', 'Kepi cerado - SCD - Gris / Verde Neon', '', 160000, 120000, 5, 0, 1, 2, 2),
(91, 'BN222SCD', 'Kepi Rodeo - Metelassê Marrom', '', 160000, 120000, 5, 0, 1, 2, 2),
(92, 'BN175SCD', 'Kepi - Cria, Recria e Engorda - Vino', '', 160000, 120000, 5, 0, 1, 2, 2),
(93, 'BN172SCD', 'Kepi- Camionero - Lona', '', 160000, 120000, 5, 0, 1, 2, 2),
(94, 'BN260SCD', 'Kepi - Tambor - Gris e Rosa', '', 160000, 120000, 5, 0, 1, 2, 2),
(95, 'BN47SCD', 'Kepi Trucker Lan Azul e Tela Bege con Detalles Bordado frontal', '', 160000, 120000, 5, 0, 1, 1, 1),
(96, 'BN223SCD', 'Kepi Pescador - Azul Marino', '', 160000, 120000, 5, 0, 1, 1, 1),
(98, 'BN247SCD', 'Kepi- San Jorge - Marino / Laranja', '', 160000, 120000, 5, 0, 1, 1, 1),
(99, 'BN245SCD', 'Kepi - Logomarca - Negro / Tiera', '', 160000, 120000, 5, 0, 1, 0, 0),
(100, 'BN233SCD', 'Kepi Boi Estilizado - Negro y Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(161, 'BN243SCD', 'Kepi- Boi Bco e Naranja - Azul Marino', '', 160000, 120000, 10, 0, 1, 1, 1),
(102, 'BN02BNM', 'Kepi Bão Nu Mundo - Gris e Marom con Aplique en Pastisol', '', 160000, 120000, 10, 0, 1, 1, 1),
(103, 'BN22BNM', 'Kepi Bão Nu Mundo - Bisão - Negro / Etnico', '', 160000, 120000, 10, 0, 1, 3, 3),
(104, 'BN26SCD', 'Kepi Trucker Azul e Jeans De Tela e Detalles Bordados', '', 160000, 120000, 5, 0, 1, 0, 0),
(105, 'BN285SCD', 'Kepi Caballo Deseñado - Naranja', '', 160000, 120000, 5, 0, 1, 1, 1),
(107, 'BN183SCD', 'Kepi Caprinocultor - Marom', '', 160000, 120000, 5, 0, 1, 1, 1),
(108, 'BN180SCD', 'Kepi Muares - Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(109, 'BN242SCD', 'Kepi - Marrom / Natural', '', 160000, 120000, 5, 0, 1, 1, 1),
(110, 'BN12BNM', 'Kepi Bão Nu Mundo -Frente Sublimada y Negro', '', 160000, 120000, 5, 0, 1, 2, 2),
(111, 'BN06BNM', 'Kepi Bão Nu Mundo Jean Blanco y Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(112, 'BN232SCD', 'Kepi Rodeo - Azul Marino', '', 160000, 120000, 5, 0, 1, 0, 0),
(113, 'BN235SCD', 'Kepi Logo - Amarillo ', '', 160000, 120000, 5, 0, 1, 1, 1),
(114, 'BN33SCD', 'Kepi Azul, Blanco y Gris- Con Detalle Silkado', '', 160000, 120000, 5, 0, 1, 1, 1),
(115, 'BN224SCD', 'Kepi Pescador - Gris', '', 160000, 120000, 5, 0, 1, 1, 1),
(116, 'BN161SCD', 'Kepi - Café / Cafeicultor - Juta Bege', '', 160000, 120000, 5, 0, 1, 2, 2),
(117, 'BN201SCD', 'Kepi Aparecida - Blanco', '', 160000, 120000, 5, 0, 1, 1, 1),
(118, 'BN58INF', 'Kepi - Floral - Negro e Blanco Infantil', '', 160000, 120000, 5, 0, 1, 1, 1),
(119, 'BN250SCD', 'Kepi - Boi Estilizado - Negro / Naranja', '', 160000, 120000, 5, 0, 1, 2, 2),
(120, 'BN02INF', 'Kepi Trucker - Bege / Marom - Infantil', '', 160000, 120000, 5, 0, 1, 1, 1),
(121, 'BN257SCD', 'Kepi- Tambor - Pink', '', 160000, 120000, 5, 0, 1, 3, 3),
(122, 'BN252SCD', 'Kepi- Logo - Negro / Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(123, 'BN268SCD', 'Kepi - Etiqueta SCD - Marom / Cortiza', '', 160000, 120000, 5, 0, 1, 2, 2),
(124, 'BN283SCD', 'Kepi Camioneiro - Negro ', '', 160000, 120000, 5, 0, 1, 1, 1),
(125, 'BN262SCD', 'Kepi - Boi SCD - Azul Claro', '', 160000, 120000, 5, 0, 1, 2, 2),
(126, 'BN288SCD', 'Kepi Caballo Deseñado - Gris / Deseño', '', 160000, 120000, 5, 0, 1, 2, 2),
(127, 'BN286SCD', 'Kepi Plantación Huerta - Verde Musgo', '', 160000, 120000, 5, 0, 1, 1, 1),
(128, 'BN284SCD', 'Kepi Pescador de Dourado - Gris', '', 160000, 120000, 5, 0, 1, 0, 0),
(129, 'BN259SCD', 'Kepi - Molinete - Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(130, 'BN26BNM', 'Kepi Bão Nu Mundo - Cactos - Gris', '', 160000, 120000, 10, 0, 1, 1, 1),
(131, 'BN23BNM', 'Kepi Bão Nu Mundo - Texas Cactos - Bege Escuro', '', 160000, 120000, 10, 0, 1, 1, 1),
(132, 'BN253SCD', 'Kepi - Etiqueta - Gris / Naranja', '', 160000, 120000, 5, 0, 1, 1, 1),
(133, 'BN248SCD', 'Kepi - San Jorge - Negro e Marom', '', 160000, 120000, 10, 0, 1, 0, 0),
(134, 'BN249SCD', 'Kepi - San Jorge - Blanco / Negro ', '', 160000, 120000, 5, 0, 1, 2, 2),
(135, 'BN10BNM', 'Kepi Bão Nu Mundo Marrom y Rojo', '', 160000, 120000, 10, 0, 1, 3, 3),
(136, 'BN190SCD', 'KEpi Pequi - Bege / Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(137, 'BN72SCD', 'Kepi - Tira Bordado - Marrón y Paja', '', 160000, 120000, 5, 0, 1, 2, 2),
(138, 'BN16BNM', 'Kepi Bão Nu Mundo Beige y Negro - Suavemente Raso', '', 160000, 120000, 10, 0, 1, 1, 1),
(139, 'BN267SCD', 'Kepi - Boi Estilizado - Blanco/Rojo', '', 160000, 120000, 5, 0, 1, 1, 1),
(141, 'BN13BNM', 'Kepi Bão Nu Mundo Jeans e Beige - Suavemente Raso', '', 160000, 120000, 10, 0, 1, 0, 0),
(142, 'BN229SCD', 'Kepi Viola Caipira - Negro ', '', 160000, 120000, 5, 0, 1, 0, 0),
(143, 'BN203SCD', 'Kepi Muladeiro - Negro ', '', 160000, 120000, 5, 0, 1, 1, 1),
(144, 'BN200SCD', 'Kepi Aparecida - Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(145, 'BN287SCD', 'Kepi SCD Boi - Azul / Naranja', '', 160000, 120000, 5, 0, 1, 0, 0),
(146, 'BN261SCD', 'Kepi - SCD Boi Estilizado - Marino', '', 160000, 120000, 5, 0, 1, 1, 1),
(147, 'BN265SCD', 'Kepi - Pena - Roxo', '', 160000, 120000, 5, 0, 1, 1, 1),
(148, 'BN11BNM', 'Kepi Bão Nu Mundo Rojo Azul e Blanco', '', 160000, 120000, 10, 0, 1, 1, 1),
(149, 'BN189SCD', 'Kepi Caña de Azúcar - Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(150, 'BN07BNM', 'Kepi Bão Nu Mundo - Naranja, Café e Beige con Aplique en Pastisol', '', 160000, 120000, 10, 0, 1, 0, 0),
(151, 'BN290SCD', 'Kepi - Boi SCD - Gris e Naranja', '', 160000, 120000, 5, 0, 1, 0, 0),
(152, 'BN05BNM', 'Kepi Bão Nu Mundo Azul, Rojo e Blanco', '', 160000, 120000, 10, 0, 1, 1, 1),
(153, 'BN24BNM', 'Kepi Bão Nu Mundo - Índio - Vino', '', 160000, 120000, 10, 0, 1, 1, 1),
(154, 'BN20BNM', 'Kepi Bão Nu Mundo - Trucker Black', '', 160000, 120000, 10, 0, 1, 1, 1),
(155, 'BN258SCD', 'Kepi- Pena - Gris Mescla', '', 160000, 120000, 5, 0, 1, 0, 0),
(156, 'BN227SCD', 'Kepi Caballo - Marfim / Rum / Negro', '', 160000, 120000, 10, 0, 1, 1, 1),
(157, 'BN08BNM', 'Kepi Bão Nu Mundo Vino con Aplique en Laser', '', 160000, 120000, 10, 0, 1, 1, 1),
(158, 'BN85SCD-2', 'Kepi - Profición Veterinária - Beige', '', 160000, 120000, 10, 0, 1, 1, 1),
(159, 'BN211SCD', 'Kepi - Molinete - Negro / Gris', '', 160000, 120000, 5, 0, 1, 1, 1),
(160, 'BN282SCD', 'Kepi Lenda del Rodeo - Tiera ', '', 160000, 120000, 5, 0, 1, 2, 2),
(162, 'BN278SCD', 'Kepi- Sacudido´s Arame - Vino', '', 160000, 120000, 5, 0, 1, 0, 0),
(163, 'BN280SCD', 'Kepi Boi Estilizado - Azul/Rojo', '', 160000, 120000, 5, 0, 1, 0, 0),
(164, 'BN272SCD', 'Kepi - Quadrado - Azul / Diseño ', '', 160000, 120000, 5, 0, 1, 1, 1),
(165, 'BN279SCD', 'Kepi Etiqueta SCD - Verde Musgo', '', 160000, 120000, 5, 0, 1, 2, 2),
(166, 'BN197SCD', 'Kepi Touro Estilizado - Naranja', '', 160000, 120000, 5, 0, 1, 1, 1),
(167, 'BN236SCD', 'Kepi Arame - Rojo', '', 160000, 120000, 5, 0, 1, 1, 1),
(168, 'BN162SCD', 'Kepi - Produtor Rural - Marron e Verde', '', 160000, 120000, 10, 0, 1, 2, 2),
(169, 'BN206SCD', 'Kepi Medalla San Bento - Mostarda/Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(170, 'BN198SCD', 'Kepi Aparecida - Negro', '', 160000, 120000, 5, 0, 1, 1, 1),
(171, 'BN219SCD', 'Kepi Medalla de San Benito - Blanco', '', 160000, 120000, 5, 0, 1, 1, 1),
(172, 'BN222SCD', 'Kepi Rodeo - Metelassê Marrom', '', 160000, 120000, 5, 0, 1, 1, 1),
(173, 'BN221SCD', 'Kepi Matelassê - Negro e Amarillo', '', 160000, 120000, 10, 0, 1, 1, 1),
(174, 'BN83SCD', 'Kepi - Profición Agronomia - Café', '', 160000, 120000, 5, 0, 1, 1, 1),
(175, 'BN254SCD', 'Kepi - SCD - Verde / Beige', '', 160000, 120000, 5, 0, 1, 1, 1),
(176, 'BN124SCD', 'Kepi Tereré - Verde e Marrom', '', 160000, 120000, 5, 0, 1, 1, 1),
(177, 'BN149SCD', 'Kepi - Chimarrão - Marrom, Verde e Bege', '', 160000, 120000, 5, 0, 1, 1, 1),
(179, 'BN209SCD', 'Kepi Trucker Texturizado - Negro', '', 160000, 120000, 5, 0, 1, 1, 1),
(180, 'BN195SCD', 'Kepi Trucker - Tiera', '', 160000, 120000, 5, 0, 1, 1, 1),
(181, 'BN01BNMINF', 'Kepi Bão Nu Mundo Infantil - Vermelho, Cru e Azul com Aplique em Pastisol', '', 160000, 120000, 10, 0, 1, 1, 1),
(182, 'BN25BNM', 'Kepi Bão Nu Mundo - Cowboy - Caramelo', '', 160000, 120000, 10, 0, 1, 1, 1),
(183, 'BN264SCD', 'Kepi - Laço Comprido - Suede Gris', '', 160000, 120000, 5, 0, 1, 1, 1),
(184, 'BN238SCD-GG', 'Kepi Medalla San Benito - Juta / Café-Tamaño Especial', '', 160000, 120000, 5, 0, 1, 1, 1),
(185, 'BN04BNM', 'Kepi Bão Nu Mundo - Negro con Aplique en Pastisol', '', 160000, 120000, 10, 0, 1, 2, 2),
(186, 'BN01INF', 'Kepi - Vinoo e Bege - Infantil', '', 160000, 120000, 5, 0, 1, 2, 2),
(187, 'BN184SCD', 'Kepi Touro Estilizado - Suede Chumbo Claro', '', 160000, 120000, 5, 0, 1, 2, 2),
(188, 'BN99SCD', 'Kepi - Prof. Téc. Agropec. - Pto/Verde', '', 160000, 120000, 5, 0, 1, 1, 1),
(189, 'BN40INF', 'Kepi - Trucker - Azul - Infantil', '', 160000, 120000, 5, 0, 1, 1, 1),
(190, 'BN187SCD', 'Kepi Vaquejada - Azul Marino / Vino', '', 160000, 120000, 5, 0, 1, 1, 1),
(191, 'BN77SCD', 'Kepi - Churrasqueiro - Marrom e Bege', '', 160000, 120000, 5, 0, 1, 2, 2),
(192, 'BN174SCD', 'Kepi - Caça - Camuflado', '', 160000, 120000, 5, 0, 1, 1, 1),
(193, 'BN113SCD', 'Kepi - Apl. Plastsol - Suede Azul Claro', '', 160000, 120000, 5, 0, 1, 2, 2),
(194, 'BN90SCD', 'Kepi - Pescador - Bege / Vinho', '', 160000, 120000, 5, 0, 1, 1, 1),
(195, 'BN75SCD', 'Kepi - Detalhe frente - Azul Vazado', '', 160000, 120000, 5, 0, 1, 1, 1),
(196, 'BN186SCD', 'Kepi- Regulador Especial - Negro/Vino', '', 160000, 120000, 5, 0, 1, 2, 2),
(197, 'BN117SCDINF', 'Kepi- Caminhon. Infantil - Marrom e Jeans', '', 160000, 120000, 5, 0, 1, 1, 1),
(198, 'BN176SCD', 'Kepi - Sanfoneiro - Bege', '', 160000, 120000, 5, 0, 1, 1, 1),
(199, 'BN165SCD', 'Kepi - Berranteiro - Verde / Marrom', '', 160000, 120000, 5, 0, 1, 4, 4),
(200, 'BN64SCD', 'Kepi - Aplique Plastisol - Vino', '', 160000, 120000, 5, 0, 1, 2, 2),
(201, 'BN94SCD', 'Kepi - Trator - Amarillo y Negro', '', 160000, 120000, 5, 0, 1, 0, 0),
(202, 'BN274SCD', 'Kepi Medalla San Benito - Caramelo', '', 160000, 120000, 5, 0, 1, 1, 1),
(203, 'BN100SCD', 'Kepi - Trator - Rojo, Azul e Blanco', '', 160000, 120000, 5, 0, 1, 2, 2),
(204, 'CM01EDT', 'Remeras unisex Edt', 'Lanzamientos en remeras Edt del P al GG', 110000, 85000, 9, 1, 1, 71, 25),
(205, 'B1640', 'Kepi Made in Mato Black Icon', '', 160000, 120000, 8, 0, 1, 1, 1),
(206, 'B1625', 'Kepi Made in Mato Custom Negro', '', 160000, 120000, 8, 0, 1, 1, 1),
(207, 'B1768', 'Kepi Made in Mato Snappback Black Icon', '', 160000, 120000, 8, 0, 1, 3, 1),
(208, 'B1938', 'Kepi Trucker X Yellow', '', 160000, 120000, 8, 0, 1, 1, 1),
(209, 'B1728', 'Kepi Trucker Military Negro', '', 160000, 120000, 8, 0, 1, 2, 2),
(210, 'B1766', 'Kepi Trucker Flag', '', 160000, 120000, 8, 0, 1, 1, 1),
(214, 'B1770', 'Kepi Made in Mato Trucker Super Icon Negro', '', 160000, 120000, 8, 0, 1, 1, 1),
(212, 'B1749', 'kepi Trucker Scribble Military ', '', 160000, 120000, 8, 0, 1, 1, 1),
(213, 'B1502', 'Kepi Made In Mato Trucker Rooster', '', 160000, 120000, 8, 0, 1, 1, 1),
(215, 'B1747', 'Kepi Made in Mato Trucker Scribble Black', '', 160000, 120000, 8, 0, 1, 1, 1),
(216, 'B1746', 'Kepi Trucker vintage shield ', '', 160000, 120000, 8, 0, 1, 2, 2),
(217, 'B1664', 'Kepi Made in Mato quarto de milha', '', 160000, 120000, 8, 0, 1, 1, 1),
(218, 'B1736', 'Kepi Mde in Mato Trucker Old Rooster', '', 160000, 120000, 8, 0, 1, 1, 1),
(219, 'B1615', 'Kepi Made in Mato Trucker Black Rooster ', '', 160000, 120000, 8, 0, 1, 1, 1),
(220, 'B1697', 'Kepi Made in Mato Trucker American Rooster', 'Edición Ilimitada ', 160000, 120000, 8, 0, 1, 2, 2),
(221, 'B1767', 'Kepi Snapback American Rooster', '', 160000, 120000, 8, 0, 1, 1, 1),
(222, 'B1719', 'Kepi Made in Mato Trucker expansion black', '', 160000, 120000, 10, 0, 1, 2, 2),
(223, 'B1754', 'Kepi TRUCKER CHESS', '', 160000, 120000, 8, 0, 1, 1, 1),
(224, 'B1757', 'Kepi Trucker Fazendeiro', '', 160000, 120000, 8, 0, 1, 1, 1),
(225, 'B1616', 'Kepi Trucker Shield Red', '', 160000, 120000, 8, 0, 1, 1, 1),
(226, 'B1609', 'kepi Trucker Red Plate', '', 160000, 120000, 8, 0, 1, 3, 3),
(227, 'B1618', 'Kepi Trucker Black Shield ', '', 160000, 120000, 8, 0, 1, 2, 2),
(228, 'B1748', 'Kepi Snapback Scribble Skin ', '', 160000, 120000, 8, 0, 1, 3, 3),
(229, 'B1653', 'Kepi Trucker Manga Larga Machador Brown ', '', 160000, 120000, 8, 0, 1, 1, 1),
(230, 'B1608', 'Kepi Trucker Skin ', '', 160000, 120000, 8, 0, 1, 1, 1),
(231, 'B1752', 'Kepi Snapback logo icon ', '', 160000, 120000, 8, 0, 1, 3, 3),
(232, 'B1687', 'Kepi Trucker Cortica', '', 160000, 120000, 8, 0, 1, 3, 3),
(233, 'B1762', 'Kepi Trucker Under Skin ', '', 160000, 120000, 8, 0, 1, 3, 3),
(234, 'B1778', 'Kepi Trucker Furta Black ', '', 160000, 120000, 8, 0, 1, 3, 3),
(236, 'B1727', 'Kepi Trucker Black Tape ', '', 160000, 120000, 8, 0, 1, 1, 1),
(237, 'B1729', 'Kepi Trucker Brown', '', 160000, 120000, 8, 0, 1, 2, 2),
(238, 'B1610', 'Kepi Trucker Red Rooster ', '', 160000, 120000, 10, 0, 1, 1, 1),
(270, 'BN271SCD', 'Kepi- Boi Sacudido´s - Preto', '', 160000, 120000, 5, 0, 1, 0, 0),
(239, 'BN09', 'KEPI PREMIUM ABA CURVA - JEANS NEGRO', '', 160000, 120000, 6, 0, 1, 0, 0),
(240, 'BN1015', 'KEPI PREMIUM ABA CURVA - JEANS AZUL', '', 160000, 120000, 6, 0, 1, 0, 0),
(241, 'BN264', 'BONÉ ABA CURVA CHORABOY - DESTROYED JEANS ', '', 160000, 120000, 10, 0, 1, 1, 1),
(242, 'BN1016', 'KEPI PREMIUM ABA CURVA - BRILHANTE CHUMBO', '', 160000, 120000, 6, 0, 1, 0, 0),
(243, 'BN31', 'KEPI ABA CURVA - BRILHANTE ', '', 160000, 120000, 6, 0, 1, 2, 2),
(244, 'BN215', 'KEPI ABA CURVA - BRILHANTE ', '', 160000, 120000, 6, 0, 1, 4, 2),
(245, 'BN432', 'KEPI ABA CURVA CHORABOY - ROJO', '', 160000, 120000, 6, 0, 1, 1, 1),
(246, 'BN159', 'KEPI ABA CURVA TRUCKER CHORABOY - ROJO', '', 160000, 120000, 6, 0, 1, 0, 0),
(247, 'VDM53', 'Kepi Aba Curva Trucker - Eu Conheço meu Gado - Preto', '', 160000, 120000, 11, 0, 1, 0, 0),
(248, '867', 'KEPI RUSTIC', '', 160000, 120000, 7, 0, 1, 0, 0),
(249, '873', 'KEPI HORSE FLAG VERDE MUSGO', '', 160000, 120000, 7, 0, 1, 1, 1),
(250, '920', 'KEPI WREN AZUL MARINO', '', 160000, 120000, 7, 0, 1, 0, 0),
(251, '848', 'KEPI HORN AZUL MARINO', '', 160000, 120000, 7, 0, 1, 1, 1),
(252, '819', 'kEPI EXPLORE BF', '', 160000, 120000, 7, 0, 1, 1, 1),
(253, '879', 'KEPI ALAZÃO AZUL MARINHO COM CARAMELO', '', 160000, 120000, 7, 0, 1, 2, 2),
(254, '880', 'KEPI ALAZÃO BRANCO CON ROJO', '', 160000, 120000, 7, 0, 1, 1, 1),
(255, '874', 'KEPI HORSE CON ABA NARANJA ', '', 160000, 120000, 7, 0, 1, 5, 5),
(256, '882', 'KEPI ALAZÃO ROJO', '', 160000, 120000, 7, 0, 1, 3, 3),
(257, '864', 'KEPI VETERINÁRIA BLACK', '', 160000, 120000, 7, 0, 1, 1, 1),
(258, '821', 'KEPI AGRONOMIA NEGRO', '', 160000, 120000, 7, 0, 1, 4, 4),
(259, '921', 'KEPI WREN MESCLA CON NEGRO', '', 160000, 120000, 7, 0, 1, 3, 2),
(260, 'CHC02SCD', 'SOMBREO DE CUERO - NOBUCK MARROM', '', 280000, 210000, 5, 0, 1, 2, 2),
(261, 'CHC01SCD', 'Sombrero De Cuero - Croco Terra', '', 280000, 210000, 5, 0, 1, 3, 2),
(262, 'CHC09SCD', 'SOMBRERO - ESTILO CAMPEIRO - PALHA', '', 190000, 150000, 5, 0, 1, 2, 2),
(263, 'CH01SCD', 'SOMBRERO - ESTILO AMERICANO - PALHA', '', 190000, 150000, 5, 0, 1, 2, 2),
(264, 'CH03SCD', 'SOMBRERO- ESTILO PANTANEIRO - PAJA', '', 190000, 150000, 5, 0, 1, 4, 3),
(265, 'CH02SCD', 'SOMBRERO- ESTILO GOTA CLÁSSICO - PAJA', '', 190000, 120000, 5, 0, 1, 2, 2),
(266, 'CHAP01', 'SOMBRERO DE PAJA PIERSIDE CHORABOY', '', 170000, 130000, 6, 0, 1, 1, 1),
(267, 'CHAP05', 'SOMBRERO DE PAJA FLORAL CHORABOY ', '', 170000, 130000, 6, 0, 1, 2, 2),
(268, 'CHAP02', 'SOMBRERO DE PAJA FLORAL CHORABOY ', '', 170000, 130000, 6, 0, 1, 1, 1),
(269, 'CHAP03', 'SOMBRERO DE PAJA FLORAL CHORABOY ', '', 170000, 130000, 6, 0, 1, 1, 1),
(276, 'CP06', 'Guampa Inoxidable ', 'Guampa Inoxidable grabado a láser personalizado \r\n', 160000, 120000, 9, 0, 1, 1, 1),
(300, 'BN30BNM', 'Kepi Bão Nu Mundo - Cowgirl - Pink', '', 160000, 120000, 10, 0, 1, 1, 1),
(278, 'CP08', 'Guampa inoxidable ', 'Guampa Inoxidable grabado a láser personalizado \r\n', 120000, 90000, 9, 0, 1, 1, 1),
(279, 'CP09', 'Guampa inoxidable ', 'Guampa Inoxidable grabado a láser personalizado \r\n', 120000, 90000, 9, 0, 1, 1, 1),
(280, 'CP10', 'Guampa inoxidable ', 'Guampa Inoxidable grabado a láser personalizado \r\nGuampa personalizada ', 120000, 90000, 9, 0, 1, 1, 1),
(281, 'MT01', 'Matero ', 'Matero grabado a lázer personalizado ', 70000, 50000, 9, 0, 1, 4, 4),
(282, 'MT02', 'Matero ', 'Matero grabado a lázer personalizado ', 70000, 50000, 9, 0, 1, 2, 2),
(283, 'MT03', 'Matero ', 'Matero grabado a lázer personalizado ', 70000, 50000, 9, 0, 1, 2, 2),
(284, 'MT04', 'Matero', 'Matero grabado a lázer personalizado ', 70000, 50000, 9, 0, 1, 2, 2),
(285, 'MT05', 'Matero', 'Matero grabado a lázer personalizado como quieres ', 70000, 50000, 9, 0, 1, 3, 3),
(287, 'CP12', 'Guampa inoxidable + bombilla ', '', 160000, 120000, 9, 0, 1, 1, 1),
(288, 'CP13', 'Guampa inoxidable ', 'Guampa inoxidable grabada a lazer personalizada', 160000, 120000, 9, 0, 1, 8, 8),
(289, 'CP14', 'Guampa inoxidable ', 'Guampa inoxidable rezinada ', 190000, 150000, 9, 0, 1, 8, 8),
(290, 'CP15', 'Guampa inoxidable + bombilla', 'Guampa inoxidable rezinada ', 190000, 150000, 9, 0, 1, 3, 3),
(291, 'CP16', 'Guampa inoxidable + bombilla ', 'Guampa inoxidable rezinada ', 190000, 150000, 9, 0, 1, 5, 5),
(292, 'CP17', 'Guampa inoxidable + bombilla ', 'Guampa inoxidable rezinada ', 190000, 150000, 9, 0, 1, 6, 6),
(293, 'OC265', 'Óculos de Sol ChoraBoy - Masculino', '', 190000, 150000, 6, 0, 1, 3, 3),
(294, 'OC286', 'Óculos de Sol ChoraBoy - Masculino', '', 190000, 150000, 6, 0, 1, 4, 4),
(295, 'OC201', 'Óculos de Sol ChoraBoy - Masculino', '', 190000, 150000, 9, 0, 1, 3, 3),
(296, 'BN65', 'KEPI ABA CURVA CHORABOY - ROSÊ ', '', 160000, 120000, 6, 0, 1, 5, 5),
(297, 'BN1011', 'KEPI ABA CURVA RETRÔ - FERRUGEM ', '', 160000, 120000, 6, 0, 1, 3, 3),
(298, 'BN160', 'KEPI TRUCKER CHORABOY - PRETO E CARAMELO ', '', 160000, 120000, 6, 0, 1, 3, 3),
(299, 'BN70', 'KEPI ABA CURVA CHORABOY - CINZA CLARO ', '', 160000, 120000, 6, 0, 1, 2, 2),
(301, 'BN302SCD', 'Kepi  SCD Trator - Blanco / Marino', '', 160000, 120000, 5, 0, 1, 4, 3),
(303, 'BT003SCD', 'Botina B. Quad. Tradicional-Café / Rosa', '', 420000, 350000, 5, 0, 1, 2, 2),
(304, 'LS01', 'Dec. de Mate ', 'Decoración de mate ', 25000, 12000, 9, 0, 1, 15, 2),
(305, 'LS02', 'Llaveros de Soja ', '', 25000, 15000, 9, 0, 1, 2, 1),
(306, 'LS03', 'Llavero de Maiz ', '', 25000, 15000, 9, 0, 1, 2, 1),
(307, 'LS04', 'Llaveros de peces ', '', 25000, 15000, 9, 0, 1, 1, 1),
(308, 'BA01', 'Billetera Sacudidos ', '', 170000, 120000, 5, 0, 1, 2, 2),
(309, 'BA739', 'Billetera Feminina Couro - 739 -Elefante', '', 230000, 190000, 5, 0, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_atributo`
--

CREATE TABLE `tb_producto_atributo` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_atributo`
--

INSERT INTO `tb_producto_atributo` (`id`, `id_producto`, `id_atributo`, `nombre`, `activo`) VALUES
(7, 303, 8, NULL, 1),
(3, 204, 6, NULL, 1),
(6, 204, 1, NULL, 1),
(8, 304, 1, NULL, 1),
(9, 304, 9, NULL, 1),
(10, 305, 1, NULL, 1),
(11, 306, 1, NULL, 1),
(12, 307, 1, NULL, 1),
(13, 308, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_atr_valor`
--

CREATE TABLE `tb_producto_atr_valor` (
  `id` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `id_atr_valor` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_atr_valor`
--

INSERT INTO `tb_producto_atr_valor` (`id`, `id_atributo`, `id_atr_valor`, `activo`) VALUES
(2, 3, 11, 1),
(6, 6, 15, 1),
(5, 3, 16, 1),
(7, 6, 13, 1),
(8, 3, 17, 1),
(9, 3, 18, 1),
(10, 7, 22, 1),
(11, 8, 15, 1),
(12, 8, 7, 1),
(13, 9, 23, 1),
(14, 9, 24, 1),
(15, 9, 25, 1),
(16, 9, 26, 1),
(17, 9, 27, 1),
(18, 9, 28, 1),
(19, 9, 29, 1),
(20, 9, 30, 1),
(21, 9, 31, 1),
(22, 9, 32, 1),
(23, 10, 2, 1),
(24, 10, 7, 1),
(25, 11, 2, 1),
(26, 11, 7, 1),
(29, 12, 15, 1),
(28, 12, 7, 1),
(30, 13, 34, 1),
(31, 13, 13, 1),
(32, 13, 33, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_categoria`
--

CREATE TABLE `tb_producto_categoria` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_categoria`
--

INSERT INTO `tb_producto_categoria` (`id_producto`, `id_categoria`) VALUES
(17, 115),
(18, 115),
(19, 115),
(20, 115),
(22, 115),
(23, 115),
(24, 115),
(25, 115),
(36, 115),
(38, 115),
(40, 129),
(40, 130),
(41, 115),
(42, 115),
(44, 115),
(45, 115),
(47, 115),
(48, 115),
(49, 115),
(50, 115),
(54, 115),
(55, 115),
(56, 115),
(57, 115),
(58, 115),
(61, 115),
(62, 115),
(63, 115),
(64, 115),
(66, 115),
(69, 115),
(76, 115),
(81, 115),
(85, 115),
(86, 115),
(87, 115),
(88, 115),
(89, 115),
(90, 115),
(91, 115),
(92, 115),
(93, 115),
(94, 115),
(95, 115),
(96, 115),
(98, 115),
(99, 115),
(100, 115),
(102, 115),
(103, 115),
(104, 115),
(105, 115),
(107, 115),
(108, 115),
(109, 115),
(110, 115),
(111, 115),
(112, 115),
(113, 115),
(114, 115),
(115, 115),
(116, 115),
(117, 115),
(118, 115),
(119, 115),
(120, 115),
(121, 115),
(122, 115),
(123, 115),
(124, 115),
(125, 115),
(126, 115),
(127, 115),
(128, 115),
(129, 115),
(130, 115),
(131, 115),
(132, 115),
(133, 115),
(134, 115),
(135, 115),
(136, 115),
(137, 115),
(138, 115),
(139, 115),
(141, 115),
(142, 115),
(143, 115),
(144, 115),
(145, 115),
(146, 115),
(147, 115),
(148, 115),
(149, 115),
(150, 115),
(151, 115),
(152, 115),
(153, 115),
(154, 115),
(155, 115),
(156, 115),
(157, 115),
(158, 115),
(159, 115),
(160, 115),
(161, 115),
(162, 115),
(163, 115),
(164, 115),
(165, 115),
(166, 115),
(167, 115),
(168, 115),
(169, 115),
(170, 115),
(171, 115),
(172, 115),
(173, 115),
(174, 115),
(175, 115),
(176, 115),
(177, 115),
(178, 115),
(179, 115),
(180, 115),
(181, 115),
(182, 115),
(183, 115),
(184, 115),
(185, 115),
(186, 115),
(187, 115),
(188, 115),
(189, 115),
(190, 115),
(191, 115),
(192, 115),
(193, 115),
(194, 115),
(195, 115),
(196, 115),
(197, 115),
(198, 115),
(199, 115),
(200, 115),
(201, 115),
(202, 115),
(203, 115),
(204, 129),
(205, 115),
(206, 115),
(207, 115),
(208, 115),
(209, 115),
(210, 115),
(212, 115),
(213, 115),
(214, 115),
(215, 115),
(216, 115),
(217, 115),
(218, 115),
(219, 115),
(220, 115),
(221, 115),
(222, 115),
(223, 115),
(224, 115),
(225, 115),
(226, 115),
(227, 115),
(228, 115),
(229, 115),
(230, 115),
(231, 115),
(232, 115),
(233, 115),
(234, 115),
(236, 115),
(237, 115),
(238, 115),
(239, 115),
(240, 115),
(241, 115),
(242, 115),
(243, 115),
(244, 115),
(245, 115),
(246, 115),
(247, 115),
(248, 115),
(249, 115),
(250, 115),
(251, 115),
(252, 115),
(253, 115),
(254, 115),
(255, 115),
(256, 115),
(257, 115),
(258, 115),
(259, 115),
(260, 118),
(261, 118),
(262, 118),
(263, 118),
(264, 118),
(265, 118),
(266, 118),
(267, 118),
(268, 118),
(269, 118),
(270, 115),
(271, 121),
(272, 121),
(273, 121),
(274, 121),
(275, 121),
(276, 121),
(278, 121),
(279, 121),
(280, 121),
(281, 119),
(282, 119),
(283, 119),
(284, 119),
(285, 119),
(286, 121),
(287, 121),
(288, 121),
(289, 121),
(290, 121),
(291, 121),
(292, 121),
(293, 127),
(294, 127),
(295, 127),
(296, 115),
(297, 115),
(298, 115),
(299, 115),
(300, 115),
(301, 115),
(303, 132),
(304, 125),
(305, 125),
(306, 125),
(307, 125),
(308, 131),
(309, 131);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_combinacion`
--

CREATE TABLE `tb_producto_combinacion` (
  `id_combinacion` int(11) NOT NULL,
  `id_producto_atr_valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_combinacion`
--

INSERT INTO `tb_producto_combinacion` (`id_combinacion`, `id_producto_atr_valor`) VALUES
(1, 7),
(1, 8),
(2, 5),
(2, 6),
(3, 5),
(3, 7),
(4, 6),
(4, 8),
(5, 2),
(5, 6),
(6, 6),
(6, 9),
(7, 7),
(7, 9),
(8, 10),
(9, 12),
(9, 13),
(10, 11),
(10, 14),
(11, 12),
(11, 15),
(12, 11),
(12, 16),
(13, 12),
(13, 18),
(14, 11),
(14, 17),
(15, 12),
(15, 19),
(16, 11),
(16, 20),
(17, 12),
(17, 21),
(18, 12),
(18, 22),
(19, 23),
(20, 24),
(21, 25),
(22, 28),
(23, 29),
(24, 30),
(25, 31),
(26, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_img`
--

CREATE TABLE `tb_producto_img` (
  `id` int(11) NOT NULL,
  `url` varchar(80) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_img`
--

INSERT INTO `tb_producto_img` (`id`, `url`, `id_producto`, `orden`, `activo`) VALUES
(9, 'cod1-2020-10-08-aire-split.jpg', 1, 1, 1),
(171, 'jbb-30760.jpeg', 85, 5, 1),
(172, 'kepi-aparecida---bege-43449.jpeg', 85, 4, 1),
(173, 'kepi-aparecida---bege-60688.jpeg', 85, 3, 1),
(31, 'cod25-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.27 (2).jpeg', 25, 1, 1),
(942, 'matero--20807.jpeg', 282, 1, 1),
(30, 'cod24-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28.jpeg', 24, 1, 1),
(29, 'cod23-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28 (1).jpeg', 23, 1, 1),
(28, 'cod22-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28 (2).jpeg', 22, 1, 1),
(166, 'saa-17493.jpeg', 81, 4, 1),
(26, 'cod20-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29.jpeg', 20, 1, 1),
(24, 'cod18-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29 (2).jpeg', 18, 1, 1),
(25, 'cod19-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29 (1).jpeg', 19, 1, 1),
(23, 'cod17-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.30.jpeg', 17, 1, 1),
(932, 'gampa-inoxidable--34121.jpeg', 272, 1, 1),
(933, 'guampa-inoxidable--47911.jpeg', 273, 1, 1),
(934, 'guampa-inoxidable--86699.jpeg', 274, 1, 1),
(935, 'guampa-inoxidable-+-bombilla-43961.jpeg', 275, 1, 1),
(936, 'guampa-inoxidable--99779.jpeg', 276, 1, 1),
(974, 'bone-16869.jpeg', 300, 1, 1),
(165, 'saa-94651.jpeg', 81, 5, 1),
(941, 'matero--24450.jpeg', 281, 1, 1),
(940, 'guampa-inoxidable--97286.jpeg', 280, 1, 1),
(931, 'guampa-inox--66579.jpeg', 271, 1, 1),
(938, 'guampa-inoxidable--53402.jpeg', 278, 1, 1),
(939, 'guampa-inoxidable--28766.jpeg', 279, 1, 1),
(44, 'quepis-negro-sacudidos-formt.g-67532.jpeg', 36, 1, 1),
(946, 'guampa-inoxdable--40955.jpeg', 286, 1, 1),
(51, 'quepi-sacudido´s---suede-bordÔ-83928.jpeg', 38, 4, 1),
(462, 'kepi-50549.jpeg', 145, 5, 1),
(947, 'guampa-inoxidable-+-bombilla--16275.jpeg', 287, 1, 1),
(943, 'matero--39175.jpeg', 283, 1, 1),
(53, 'quepi-sacudido´s---suede-bordÔ-75627.jpeg', 38, 3, 1),
(54, 'quepi-sacudido´s---suede-bordÔ-13036.jpeg', 38, 2, 1),
(55, 'quepi-sacudido´s---suede-bordÔ-14509.jpeg', 38, 1, 1),
(56, 'remeras-san-benedito--81430.jpeg', 40, 4, 1),
(57, 'remeras-san-benedito--16239.jpeg', 40, 3, 1),
(58, 'remeras-san-benedito--80472.jpeg', 40, 2, 1),
(59, 'remeras-san-benedito--46655.jpeg', 40, 1, 1),
(60, 'kepis-boi-scd--rojo-86697.jpeg', 41, 5, 1),
(61, 'kepis-boi-scd--rojo-58826.jpeg', 41, 4, 1),
(62, 'kepis-boi-scd--rojo-84824.jpeg', 41, 3, 1),
(63, 'kepis-boi-scd--rojo-33690.jpeg', 41, 2, 1),
(64, 'kepis-boi-scd--rojo-81390.jpeg', 41, 1, 1),
(65, 'kepi-maron--trator-63312.jpeg', 42, 4, 1),
(66, 'kepi-maron--trator-77989.jpeg', 42, 3, 1),
(67, 'kepi-maron--trator-37647.jpeg', 42, 2, 1),
(68, 'kepi-maron--trator-89487.jpeg', 42, 1, 1),
(69, 'kepi-medalla-san-benito--infantil--84019.jpeg', 44, 4, 1),
(70, 'kepi-medalla-san-benito--infantil--25587.jpeg', 44, 3, 1),
(71, 'kepi-medalla-san-benito--infantil--69151.jpeg', 44, 2, 1),
(72, 'kepi-medalla-san-benito--infantil--21744.jpeg', 44, 1, 1),
(110, 'kepi-camionero---gris-45966.jpeg', 55, 4, 1),
(109, 'kepi-camionero---gris-90522.jpeg', 55, 5, 1),
(75, 'kepi-boi-estilizado--veludo-marom--80799.jpeg', 45, 4, 1),
(76, 'kepi-boi-estilizado--veludo-marom--73149.jpeg', 45, 2, 1),
(77, 'kepi-boi-estilizado--veludo-marom--19310.jpeg', 45, 3, 1),
(78, 'kepi-boi-estilizado--veludo-marom--19451.jpeg', 45, 1, 1),
(80, 'kepi-pescador-camuflado--39153.jpeg', 47, 5, 1),
(81, 'kepi-pescador-camuflado--40649.jpeg', 47, 4, 1),
(82, 'kepi-pescador-camuflado--69690.jpeg', 47, 3, 1),
(83, 'kepi-pescador-camuflado--59258.jpeg', 47, 2, 1),
(84, 'kepi-pescador-camuflado--82166.jpeg', 47, 1, 1),
(85, 'kepi-cria,-recria-e-engorda--negro-31504.jpeg', 48, 5, 1),
(86, 'kepi-cria,-recria-e-engorda--negro-19589.jpeg', 48, 4, 1),
(87, 'kepi-cria,-recria-e-engorda--negro-40948.jpeg', 48, 3, 1),
(88, 'kepi-cria,-recria-e-engorda--negro-91944.jpeg', 48, 2, 1),
(89, 'kepi-cria,-recria-e-engorda--negro-14392.png', 48, 1, 1),
(90, 'kepi-medalla-de-san-benito---verde-musgo-14331.jpeg', 49, 5, 1),
(91, 'kepi-medalla-de-san-benito---verde-musgo-36183.jpeg', 49, 4, 1),
(92, 'kepi-medalla-de-san-benito---verde-musgo-21520.jpeg', 49, 3, 1),
(93, 'kepi-medalla-de-san-benito---verde-musgo-88286.jpeg', 49, 2, 1),
(94, 'kepi-medalla-de-san-benito---verde-musgo-48089.jpeg', 49, 1, 1),
(95, 'kepi--arar,-semear-y-cosechar---branco-y-verde-57684.jpeg', 50, 6, 1),
(96, 'kepi--arar,-semear-y-cosechar---branco-y-verde-30095.jpeg', 50, 5, 1),
(97, 'kepi--arar,-semear-y-cosechar---branco-y-verde-11203.jpeg', 50, 4, 1),
(98, 'kepi--arar,-semear-y-cosechar---branco-y-verde-28768.jpeg', 50, 3, 1),
(99, 'kepi--arar,-semear-y-cosechar---branco-y-verde-55688.jpeg', 50, 2, 1),
(100, 'kepi--arar,-semear-y-cosechar---branco-y-verde-47604.jpeg', 50, 1, 1),
(101, 'kepi--arar,-semear-y-cosechar---branco-y-verde-24062.jpeg', 50, 1, 1),
(103, 'hhh-73568.jpeg', 54, 5, 1),
(104, 'hhh-56280.jpeg', 54, 4, 1),
(105, 'hhh-62744.jpeg', 54, 3, 1),
(107, 'hhh-96150.jpeg', 54, 2, 1),
(108, 'hhh-58298.jpeg', 54, 1, 1),
(111, 'kepi-camionero---gris-79699.jpeg', 55, 3, 1),
(112, 'kepi-camionero---gris-21756.jpeg', 55, 2, 1),
(113, 'kepi-camionero---gris-92666.jpeg', 55, 1, 1),
(114, 'kepi-pecaria-lechera-41975.jpeg', 56, 5, 1),
(115, 'kepi-pecaria-lechera-80071.jpeg', 56, 4, 1),
(116, 'kepi-pecaria-lechera-54499.jpeg', 56, 3, 1),
(117, 'kepi-pecaria-lechera-80184.jpeg', 56, 2, 1),
(120, 'kepi-negro-bruto-aba-suede-28650.jpeg', 57, 4, 1),
(119, 'kepi-pecaria-lechera-64306.jpeg', 56, 1, 1),
(121, 'kepi-negro-bruto-aba-suede-91927.jpeg', 57, 3, 1),
(122, 'kepi-negro-bruto-aba-suede-96558.jpeg', 57, 2, 1),
(123, 'kepi-negro-bruto-aba-suede-28445.png', 57, 1, 1),
(124, 'kepi---boi-scd---negro-87117.jpeg', 58, 4, 1),
(125, 'kepi---boi-scd---negro-75353.jpeg', 58, 3, 1),
(126, 'kepi---boi-scd---negro-73440.jpeg', 58, 2, 1),
(127, 'kepi---boi-scd---negro-38942.jpeg', 58, 1, 1),
(128, 'kepi-trucker-lan-azul-e-tela-bege-con-detalles-bordado-en-la-parte-frontal-19955', 61, 5, 1),
(129, 'kepi-trucker-lan-azul-e-tela-bege-con-detalles-bordado-en-la-parte-frontal-81216', 61, 4, 1),
(130, 'kepi-trucker-lan-azul-e-tela-bege-con-detalles-bordado-en-la-parte-frontal-10445', 61, 3, 1),
(131, 'kepi-trucker-lan-azul-y-tela-bege-con-detalles-bordado-en-la-parte-frontal-95989', 61, 6, 1),
(132, 'kepi-medalla-de-san-benito---vino--30086.jpeg', 62, 4, 1),
(133, 'kepi-medalla-de-san-benito---vino--21295.jpeg', 62, 3, 1),
(134, 'kepi-medalla-de-san-benito---vino--45564.jpeg', 62, 2, 1),
(135, 'kepi-medalla-de-san-benito---vino--97869.jpeg', 62, 1, 1),
(136, 'kepi-touro---vino-75629.jpeg', 63, 4, 1),
(137, 'kepi-touro---vino-18931.jpeg', 63, 3, 1),
(138, 'kepi-touro---vino-39340.jpeg', 63, 2, 1),
(139, 'kepi-touro---vino-98090.jpeg', 63, 1, 1),
(140, 'kepi-vida-sertaneja---vino-34895.jpeg', 64, 5, 1),
(141, 'kepi-vida-sertaneja---vino-94879.jpeg', 64, 4, 1),
(142, 'kepi-vida-sertaneja---vino-61823.jpeg', 64, 3, 1),
(144, 'kepi-vida-sertaneja---vino-79156.jpeg', 64, 2, 1),
(145, 'kepi-vida-sertaneja---vino-70604.jpeg', 64, 1, 1),
(147, 'avi-90272.jpeg', 66, 5, 1),
(148, 'avi-64387.jpeg', 66, 4, 1),
(149, 'avi-28035.jpeg', 66, 3, 1),
(150, 'avi-28278.jpeg', 66, 2, 1),
(151, 'avi-99909.jpeg', 66, 1, 1),
(152, 'kepi-bão-nu-mundo-arame-bege-51289.jpeg', 69, 4, 1),
(153, 'kepi-bão-nu-mundo-arame-bege-24336.jpeg', 69, 3, 1),
(154, 'kepi-bão-nu-mundo-arame-bege-39948.jpeg', 69, 2, 1),
(155, 'kepi-bão-nu-mundo-arame-bege-16371.jpeg', 69, 2, 1),
(156, 'kepi-bão-nu-mundo-arame-bege-11651.jpeg', 69, 1, 1),
(157, 'kepi-bão-nu-mundo-arame-bege-13701.jpeg', 69, 5, 1),
(159, 'kjj-70485.jpeg', 76, 5, 1),
(160, 'kjj-16439.jpeg', 76, 4, 1),
(161, 'kjj-93566.jpeg', 76, 3, 1),
(162, 'kjj-67704.jpeg', 76, 2, 1),
(163, 'kjj-81096.jpeg', 76, 1, 1),
(167, 'saa-39464.jpeg', 81, 3, 1),
(168, 'saa-64016.jpeg', 81, 2, 1),
(169, 'saa-83556.jpeg', 81, 1, 1),
(177, 'kepi-21534.jpeg', 86, 5, 1),
(175, 'kepi-aparecida---bege-47930.jpeg', 85, 2, 1),
(176, 'kepi-aparecida---bege-92689.jpeg', 85, 1, 1),
(178, 'kepi-98279.jpeg', 86, 4, 1),
(179, 'kepi-60822.jpeg', 86, 3, 1),
(180, 'kepi-88868.jpeg', 86, 2, 1),
(181, 'kepi-83837.jpeg', 86, 1, 1),
(182, 'kepi-35850.jpeg', 87, 5, 1),
(183, 'kepi-48525.jpeg', 87, 4, 1),
(185, 'kepi-70243.jpeg', 87, 3, 1),
(186, 'kepi-54806.jpeg', 87, 2, 1),
(187, 'kepi-14766.jpeg', 87, 1, 1),
(188, 'kepi-64682.jpeg', 88, 5, 1),
(189, 'kepi-75908.jpeg', 88, 4, 1),
(190, 'kepi-67130.jpeg', 88, 3, 1),
(191, 'kepi-95589.jpeg', 88, 2, 1),
(192, 'kepi-25747.jpeg', 88, 1, 1),
(193, 'kepi-98365.jpeg', 89, 5, 1),
(194, 'kepi-27562.jpeg', 89, 4, 1),
(195, 'kepi-63718.jpeg', 89, 3, 1),
(196, 'kepi-51365.jpeg', 89, 2, 1),
(197, 'kepi-34344.jpeg', 89, 1, 1),
(198, 'kepi-67696.jpeg', 90, 5, 1),
(199, 'kepi-12873.jpeg', 90, 4, 1),
(200, 'kepi-73568.jpeg', 90, 3, 1),
(201, 'kepi-62704.jpeg', 90, 2, 1),
(202, 'kepi-50484.jpeg', 90, 1, 1),
(203, 'kepi-41623.jpeg', 91, 5, 1),
(204, 'kepi-77977.jpeg', 91, 4, 1),
(205, 'kepi-65765.jpeg', 91, 3, 1),
(206, 'kepi-74530.jpeg', 91, 2, 1),
(207, 'kepi-53720.jpeg', 91, 1, 1),
(208, 'kepi-54704.jpeg', 92, 5, 1),
(209, 'kepi-72434.jpeg', 92, 4, 1),
(210, 'kepi-75034.jpeg', 92, 3, 1),
(211, 'kepi-92556.jpeg', 92, 2, 1),
(212, 'kepi-47372.jpeg', 92, 1, 1),
(213, 'kepi-92163.jpeg', 93, 3, 1),
(214, 'kepi-63033.jpeg', 93, 2, 1),
(215, 'kepi-37129.jpeg', 93, 1, 1),
(216, 'kepi-93462.jpeg', 94, 5, 1),
(217, 'kepi-48587.jpeg', 94, 4, 1),
(218, 'kepi-77343.jpeg', 94, 3, 1),
(219, 'kepi-57360.jpeg', 94, 2, 1),
(220, 'kepi-47241.jpeg', 94, 1, 1),
(221, 'kepi-96557.jpeg', 95, 5, 1),
(222, 'kepi-42926.jpeg', 95, 4, 1),
(223, 'kepi-60718.jpeg', 95, 3, 1),
(224, 'kepi-55862.jpeg', 95, 2, 1),
(225, 'kepi-70873.jpeg', 95, 1, 1),
(226, 'kepi-trucker-lan-azul-y-tela-bege-con-detalles-bordado-en-la-parte-frontal-97088', 61, 5, 1),
(228, 'kepi-46619.jpeg', 96, 4, 1),
(229, 'kepi-98926.jpeg', 96, 3, 1),
(230, 'kepi-58096.jpeg', 96, 2, 1),
(231, 'kepi-18485.jpeg', 96, 1, 1),
(232, 'kepi-74511.jpeg', 98, 5, 1),
(233, 'kepi-56578.jpeg', 98, 4, 1),
(234, 'kepi-61685.jpeg', 98, 3, 1),
(235, 'kepi-21215.jpeg', 98, 2, 1),
(236, 'kepi-95322.jpeg', 98, 1, 1),
(237, 'kepi-18143.jpeg', 99, 5, 1),
(238, 'kepi-88778.jpeg', 99, 4, 1),
(239, 'kepi-19577.jpeg', 99, 3, 1),
(240, 'kepi-11300.jpeg', 99, 2, 1),
(241, 'kepi-85179.jpeg', 99, 1, 1),
(242, 'kepi-64744.jpeg', 100, 5, 1),
(243, 'kepi-42890.jpeg', 100, 4, 1),
(244, 'kepi-35832.jpeg', 100, 3, 1),
(245, 'kepi-82073.jpeg', 100, 2, 1),
(246, 'kepi-89022.jpeg', 100, 1, 1),
(545, 'kepi-24908.jpeg', 161, 5, 1),
(546, 'kepi-67244.jpeg', 161, 4, 1),
(547, 'kepi-33354.jpeg', 161, 3, 1),
(251, 'kepi-15066.jpeg', 102, 5, 1),
(252, 'kepi-79252.jpeg', 102, 4, 1),
(253, 'kepi-60500.jpeg', 102, 3, 1),
(254, 'kepi-96217.jpeg', 102, 2, 1),
(255, 'kepi-65971.jpeg', 102, 1, 1),
(256, 'kepi-21827.jpeg', 103, 5, 1),
(257, 'kepi-44764.jpeg', 103, 4, 1),
(258, 'kepi-63576.jpeg', 103, 3, 1),
(259, 'kepi-76438.jpeg', 103, 2, 1),
(260, 'kepi-11116.jpeg', 103, 1, 1),
(261, 'kepi-42312.jpeg', 104, 5, 1),
(262, 'kepi-32150.jpeg', 104, 4, 1),
(263, 'kepi-62464.jpeg', 104, 3, 1),
(264, 'kepi-89906.jpeg', 104, 2, 1),
(265, 'kepi-14327.jpeg', 104, 1, 1),
(266, 'kepi-20689.jpeg', 105, 4, 1),
(267, 'kepi-69272.jpeg', 105, 3, 1),
(268, 'kepi-73934.jpeg', 105, 2, 1),
(269, 'kepi-64239.jpeg', 105, 1, 1),
(926, 'kepi-aba-curva-trucker---eu-conheço-meu-gado---preto-39795.jpeg', 247, 1, 1),
(927, 'kepi-aba-curva-trucker---eu-conheço-meu-gado---preto-42212.jpeg', 247, 1, 1),
(275, 'kepi-95701.jpeg', 107, 5, 1),
(276, 'kepi-67011.jpeg', 107, 4, 1),
(277, 'kepi-63569.jpeg', 107, 3, 1),
(278, 'kepi-24653.jpeg', 107, 2, 1),
(279, 'kepi-20880.jpeg', 107, 1, 1),
(280, 'kepi-37724.jpeg', 108, 5, 1),
(281, 'kepi-96731.jpeg', 108, 4, 1),
(282, 'kepi-73110.jpeg', 108, 3, 1),
(283, 'kepi-80099.jpeg', 108, 2, 1),
(284, 'kepi-84371.jpeg', 108, 1, 1),
(285, 'kepi-94612.jpeg', 109, 5, 1),
(286, 'kepi-62066.jpeg', 109, 4, 1),
(287, 'kepi-67462.jpeg', 109, 4, 1),
(288, 'kepi-42073.jpeg', 109, 3, 1),
(289, 'kepi-61592.jpeg', 109, 2, 1),
(290, 'kepi-62656.jpeg', 109, 1, 1),
(291, 'kepi-58987.jpeg', 110, 5, 1),
(292, 'kepi-10181.jpeg', 110, 4, 1),
(293, 'kepi-67251.jpeg', 110, 3, 1),
(294, 'kepi-58822.jpeg', 110, 2, 1),
(295, 'kepi-88294.jpeg', 110, 1, 1),
(296, 'kepi--50499.jpeg', 111, 5, 1),
(297, 'kepi--69813.jpeg', 111, 4, 1),
(298, 'kepi--36695.jpeg', 111, 3, 1),
(299, 'kepi--73125.jpeg', 111, 2, 1),
(300, 'kepi--60234.jpeg', 111, 1, 1),
(301, 'kepi-22183.jpeg', 112, 5, 1),
(302, 'kepi-46122.jpeg', 112, 4, 1),
(303, 'kepi-24994.jpeg', 112, 3, 1),
(304, 'kepi-69282.jpeg', 112, 2, 1),
(305, 'kepi-90164.jpeg', 112, 1, 1),
(306, 'kepi-22499.jpeg', 113, 5, 1),
(307, 'kepi-45336.jpeg', 113, 4, 1),
(308, 'kepi-69503.jpeg', 113, 3, 1),
(309, 'kepi-98167.jpeg', 113, 2, 1),
(310, 'kepi-32615.jpeg', 113, 1, 1),
(311, 'kepi-48199.jpeg', 114, 5, 1),
(312, 'kepi-27474.jpeg', 114, 4, 1),
(313, 'kepi-32954.jpeg', 114, 3, 1),
(314, 'kepi-79517.jpeg', 114, 2, 1),
(315, 'kepi-30139.jpeg', 114, 1, 1),
(316, 'kepi-73373.jpeg', 115, 5, 1),
(317, 'kepi-30113.jpeg', 115, 4, 1),
(318, 'kepi-62907.jpeg', 115, 3, 1),
(319, 'kepi-76843.jpeg', 115, 2, 1),
(320, 'kepi-48072.jpeg', 115, 1, 1),
(321, 'kepi-96332.jpeg', 116, 5, 1),
(322, 'kepi-69691.jpeg', 116, 4, 1),
(323, 'kepi-64550.jpeg', 116, 3, 1),
(324, 'kepi-78922.jpeg', 116, 2, 1),
(325, 'kepi-11800.jpeg', 116, 1, 1),
(326, 'kepi-76171.jpeg', 117, 5, 1),
(327, 'kepi-86848.jpeg', 117, 4, 1),
(329, 'kepi-42421.jpeg', 117, 3, 1),
(330, 'kepi-66643.jpeg', 117, 2, 1),
(331, 'kepi-76261.jpeg', 117, 1, 1),
(332, 'kepi--51150.jpeg', 118, 5, 1),
(333, 'kepi--76580.jpeg', 118, 4, 1),
(334, 'kepi--12737.jpeg', 118, 3, 1),
(335, 'kepi--95623.jpeg', 118, 2, 1),
(336, 'kepi--79477.jpeg', 118, 1, 1),
(337, 'kepi-91932.jpeg', 120, 5, 1),
(338, 'kepi-22638.jpeg', 120, 4, 1),
(339, 'kepi-24168.jpeg', 120, 3, 1),
(340, 'kepi-43267.jpeg', 120, 2, 1),
(341, 'kepi-76994.jpeg', 120, 1, 1),
(342, 'kepi-11038.jpeg', 121, 6, 1),
(343, 'kepi-77138.jpeg', 121, 5, 1),
(344, 'kepi-58260.jpeg', 121, 4, 1),
(345, 'kepi-25968.jpeg', 121, 3, 1),
(346, 'kepi-82002.jpeg', 121, 2, 1),
(347, 'kepi-75979.jpeg', 121, 1, 1),
(348, 'kepi-89593.jpeg', 119, 4, 1),
(349, 'kepi-30474.jpeg', 119, 3, 1),
(350, 'kepi-88173.jpeg', 119, 2, 1),
(351, 'kepi-42690.jpeg', 119, 1, 1),
(352, 'kepi-21173.jpeg', 122, 5, 1),
(353, 'kepi-88037.jpeg', 122, 4, 1),
(354, 'kepi-55729.jpeg', 122, 3, 1),
(355, 'kepi-48806.jpeg', 122, 2, 1),
(356, 'kepi-50592.jpeg', 122, 1, 1),
(357, 'kepi-23224.jpeg', 123, 5, 1),
(358, 'kepi-91049.jpeg', 123, 4, 1),
(359, 'kepi-89926.jpeg', 123, 3, 1),
(360, 'kepi-94227.jpeg', 123, 2, 1),
(361, 'kepi-38522.jpeg', 123, 1, 1),
(362, 'kepi-69284.jpeg', 124, 5, 1),
(363, 'kepi-75860.jpeg', 124, 4, 1),
(364, 'kepi-22018.jpeg', 124, 3, 1),
(365, 'kepi-26667.jpeg', 124, 2, 1),
(366, 'kepi-60937.jpeg', 124, 1, 1),
(367, 'kepi-42928.jpeg', 125, 4, 1),
(368, 'kepi-93192.jpeg', 125, 3, 1),
(369, 'kepi-15570.jpeg', 125, 2, 1),
(370, 'kepi-32826.jpeg', 125, 1, 1),
(371, 'kepi-32930.jpeg', 126, 5, 1),
(372, 'kepi-86377.jpeg', 126, 4, 1),
(373, 'kepi-21519.jpeg', 126, 3, 1),
(374, 'kepi-13326.jpeg', 126, 2, 1),
(375, 'kepi-95475.jpeg', 126, 1, 1),
(376, 'kepi-96112.jpeg', 127, 5, 1),
(380, 'kepi-51468.jpeg', 127, 2, 1),
(378, 'kepi-13212.jpeg', 127, 4, 1),
(379, 'kepi-65059.jpeg', 127, 3, 1),
(381, 'kepi-55409.jpeg', 127, 1, 1),
(382, 'kepi-28840.jpeg', 128, 5, 1),
(383, 'kepi-98119.jpeg', 128, 4, 1),
(384, 'kepi-36333.jpeg', 128, 3, 1),
(385, 'kepi-18953.jpeg', 128, 2, 1),
(386, 'kepi-52499.jpeg', 128, 1, 1),
(387, 'kepi-17761.jpeg', 129, 5, 1),
(388, 'kepi-27210.jpeg', 129, 4, 1),
(389, 'kepi-84863.jpeg', 129, 3, 1),
(390, 'kepi-84775.jpeg', 129, 2, 1),
(391, 'kepi-40591.jpeg', 129, 1, 1),
(392, 'kepi-87088.jpeg', 130, 5, 1),
(393, 'kepi-39484.jpeg', 130, 4, 1),
(394, 'kepi-86410.jpeg', 130, 3, 1),
(395, 'kepi-40984.jpeg', 130, 2, 1),
(396, 'kepi-97253.jpeg', 130, 1, 1),
(397, 'kepi-67487.jpeg', 131, 4, 1),
(398, 'kepi-39694.jpeg', 131, 3, 1),
(399, 'kepi-80290.jpeg', 131, 2, 1),
(400, 'kepi-84582.jpeg', 131, 1, 1),
(401, 'kepi-69780.jpeg', 132, 5, 1),
(402, 'kepi-90630.jpeg', 132, 4, 1),
(403, 'kepi-50730.jpeg', 132, 3, 1),
(404, 'kepi-44919.jpeg', 132, 2, 1),
(405, 'kepi-64969.jpeg', 132, 1, 1),
(406, 'kepi-86651.jpeg', 133, 5, 1),
(407, 'kepi-72810.jpeg', 133, 4, 1),
(408, 'kepi-53243.jpeg', 133, 3, 1),
(409, 'kepi-14818.jpeg', 133, 2, 1),
(410, 'kepi-49707.jpeg', 133, 1, 1),
(411, 'kepi-42354.jpeg', 134, 5, 1),
(412, 'kepi-28706.jpeg', 134, 4, 1),
(413, 'kepi-12673.jpeg', 134, 3, 1),
(414, 'kepi-17899.jpeg', 134, 2, 1),
(415, 'kepi-97612.jpeg', 134, 1, 1),
(416, 'kepi-76924.jpeg', 135, 4, 1),
(417, 'kepi-82882.jpeg', 135, 3, 1),
(418, 'kepi-82000.jpeg', 135, 5, 1),
(419, 'kepi-96580.jpeg', 135, 2, 1),
(420, 'kepi-92111.jpeg', 135, 1, 1),
(421, 'kepi-35598.jpeg', 136, 5, 1),
(422, 'kepi-13461.jpeg', 136, 4, 1),
(423, 'kepi-80851.jpeg', 136, 3, 1),
(424, 'kepi-80513.jpeg', 136, 2, 1),
(425, 'kepi-80155.jpeg', 136, 1, 1),
(426, 'kepi-88580.jpeg', 137, 6, 1),
(427, 'kepi-35859.jpeg', 137, 5, 1),
(428, 'kepi-27513.jpeg', 137, 4, 1),
(429, 'kepi-43078.jpeg', 137, 3, 1),
(430, 'kepi-22120.jpeg', 137, 2, 1),
(431, 'kepi-14485.jpeg', 137, 1, 1),
(432, 'kepi-10204.jpeg', 138, 5, 1),
(433, 'kepi-69100.jpeg', 138, 4, 1),
(434, 'kepi-87523.jpeg', 138, 3, 1),
(435, 'kepi-41872.jpeg', 138, 2, 1),
(436, 'kepi-54231.jpeg', 138, 1, 1),
(437, 'kepi-73506.jpeg', 139, 5, 1),
(438, 'kepi-92729.jpeg', 139, 4, 1),
(439, 'kepi-21834.jpeg', 139, 3, 1),
(440, 'kepi-44248.jpeg', 139, 2, 1),
(441, 'kepi-58751.jpeg', 139, 1, 1),
(442, 'kepi-42483.jpeg', 141, 5, 1),
(443, 'kepi-84871.jpeg', 141, 4, 1),
(444, 'kepi-12028.jpeg', 141, 3, 1),
(445, 'kepi-50948.jpeg', 141, 2, 1),
(446, 'kepi-22739.jpeg', 141, 1, 1),
(447, 'kepi-72048.jpeg', 142, 5, 1),
(448, 'kepi-12163.jpeg', 142, 4, 1),
(449, 'kepi-15077.jpeg', 142, 3, 1),
(450, 'kepi-58226.jpeg', 142, 2, 1),
(451, 'kepi-52859.jpeg', 142, 1, 1),
(452, 'kepi-43457.jpeg', 143, 5, 1),
(453, 'kepi-87860.jpeg', 143, 4, 1),
(454, 'kepi-23890.jpeg', 143, 3, 1),
(455, 'kepi-35517.jpeg', 143, 2, 1),
(456, 'kepi-51286.jpeg', 143, 1, 1),
(457, 'kepi-43659.jpeg', 144, 5, 1),
(458, 'kepi-15626.jpeg', 144, 4, 1),
(459, 'kepi-36232.jpeg', 144, 3, 1),
(460, 'kepi-49116.jpeg', 144, 2, 1),
(461, 'kepi-99898.jpeg', 144, 1, 1),
(463, 'kepi-92329.jpeg', 145, 4, 1),
(464, 'kepi-22033.jpeg', 145, 3, 1),
(465, 'kepi-57580.jpeg', 145, 2, 1),
(466, 'kepi-32878.jpeg', 145, 1, 1),
(467, 'kepi-53381.jpeg', 146, 4, 1),
(468, 'kepi-48568.jpeg', 146, 3, 1),
(469, 'kepi-26601.jpeg', 146, 2, 1),
(470, 'kepi-37637.jpeg', 146, 1, 1),
(471, 'kepi-44918.jpeg', 147, 4, 1),
(472, 'kepi-31040.jpeg', 147, 3, 1),
(473, 'kepi-38689.jpeg', 147, 2, 1),
(474, 'kepi-72428.jpeg', 147, 2, 1),
(475, 'kepi-16647.jpeg', 147, 1, 1),
(476, 'kepi-79134.jpeg', 147, 1, 1),
(477, 'kepi-48083.jpeg', 148, 5, 1),
(478, 'kepi-32546.jpeg', 148, 4, 1),
(479, 'kepi-31641.jpeg', 148, 4, 1),
(480, 'kepi-18140.jpeg', 148, 4, 1),
(481, 'kepi-15158.jpeg', 148, 3, 1),
(482, 'kepi-33244.jpeg', 148, 2, 1),
(483, 'kepi-15534.jpeg', 148, 2, 1),
(484, 'kepi-44261.jpeg', 148, 1, 1),
(485, 'kepi-43741.jpeg', 149, 5, 1),
(486, 'kepi-17474.jpeg', 149, 4, 1),
(487, 'kepi-23973.jpeg', 149, 3, 1),
(488, 'kepi-26780.jpeg', 149, 2, 1),
(489, 'kepi-60419.jpeg', 149, 1, 1),
(490, 'kepi-25777.jpeg', 150, 5, 1),
(491, 'kepi-46237.jpeg', 150, 4, 1),
(492, 'kepi-83001.jpeg', 150, 3, 1),
(493, 'kepi-54213.jpeg', 150, 2, 1),
(494, 'kepi-81866.jpeg', 150, 1, 1),
(495, 'kepi-10791.jpeg', 150, 1, 1),
(496, 'kepi-81322.jpeg', 151, 4, 1),
(497, 'kepi-85617.jpeg', 151, 3, 1),
(498, 'kepi-52864.jpeg', 151, 2, 1),
(499, 'kepi-61505.jpeg', 151, 1, 1),
(500, 'kepi-91575.jpeg', 152, 5, 1),
(501, 'kepi-71218.jpeg', 152, 4, 1),
(502, 'kepi-80958.jpeg', 152, 3, 1),
(503, 'kepi-28930.jpeg', 152, 2, 1),
(504, 'kepi-71324.jpeg', 152, 1, 1),
(505, 'kepi-48762.jpeg', 153, 5, 1),
(506, 'kepi-46834.jpeg', 153, 4, 1),
(507, 'kepi-59681.jpeg', 153, 3, 1),
(508, 'kepi-74458.jpeg', 153, 2, 1),
(509, 'kepi-11565.jpeg', 153, 1, 1),
(510, 'kepi-14020.jpeg', 154, 5, 1),
(511, 'kepi-68665.jpeg', 154, 4, 1),
(512, 'kepi-19967.jpeg', 154, 3, 1),
(513, 'kepi-18452.jpeg', 154, 2, 1),
(514, 'kepi-68438.jpeg', 154, 1, 1),
(515, 'kepi-44892.jpeg', 155, 5, 1),
(516, 'kepi-42192.jpeg', 155, 4, 1),
(517, 'kepi-24495.jpeg', 155, 3, 1),
(518, 'kepi-62335.jpeg', 155, 2, 1),
(519, 'kepi-74033.jpeg', 155, 1, 1),
(520, 'kepi-99278.jpeg', 156, 5, 1),
(521, 'kepi-80227.jpeg', 156, 4, 1),
(522, 'kepi-26492.jpeg', 156, 3, 1),
(523, 'kepi-37883.jpeg', 156, 2, 1),
(524, 'kepi-21164.jpeg', 156, 1, 1),
(525, 'kepi-78238.jpeg', 157, 4, 1),
(526, 'kepi-72183.jpeg', 157, 3, 1),
(527, 'kepi-81792.jpeg', 157, 2, 1),
(528, 'kepi-75858.jpeg', 157, 1, 1),
(529, 'kepi-18936.jpeg', 158, 5, 1),
(530, 'kepi-74234.jpeg', 158, 4, 1),
(531, 'kepi-62483.jpeg', 158, 3, 1),
(532, 'kepi-64182.jpeg', 158, 2, 1),
(533, 'kepi-72454.jpeg', 158, 1, 1),
(534, 'kepi-55367.jpeg', 159, 5, 1),
(535, 'kepi-48481.jpeg', 159, 4, 1),
(536, 'kepi-61527.jpeg', 159, 3, 1),
(537, 'kepi-78795.jpeg', 159, 2, 1),
(538, 'kepi-67706.jpeg', 159, 1, 1),
(539, 'kepi-70489.jpeg', 160, 5, 1),
(540, 'kepi-89395.jpeg', 160, 4, 1),
(541, 'kepi-18597.jpeg', 160, 3, 1),
(542, 'kepi-23704.jpeg', 160, 2, 1),
(543, 'kepi-10514.jpeg', 160, 1, 1),
(548, 'kepi-23638.jpeg', 161, 2, 1),
(549, 'kepi-88556.jpeg', 161, 1, 1),
(550, 'kepi-53888.jpeg', 162, 2, 1),
(551, 'kepi-30118.jpeg', 162, 1, 1),
(552, 'kepi-39096.jpeg', 163, 5, 1),
(553, 'kepi-19049.jpeg', 163, 4, 1),
(554, 'kepi-74024.jpeg', 163, 3, 1),
(555, 'kepi-89970.jpeg', 163, 2, 1),
(556, 'kepi-74028.jpeg', 163, 1, 1),
(557, 'kepi-75838.jpeg', 164, 5, 1),
(558, 'kepi-25292.jpeg', 164, 4, 1),
(559, 'kepi-45613.jpeg', 164, 3, 1),
(560, 'kepi-42265.jpeg', 164, 2, 1),
(561, 'kepi-25821.png', 164, 1, 1),
(562, 'kepi-38214.jpeg', 165, 5, 1),
(563, 'kepi-77544.jpeg', 165, 4, 1),
(564, 'kepi-21877.jpeg', 165, 3, 1),
(565, 'kepi-91104.jpeg', 165, 2, 1),
(566, 'kepi-90358.jpeg', 165, 1, 1),
(567, 'kepi-67915.jpeg', 166, 5, 1),
(568, 'kepi-87841.jpeg', 166, 4, 1),
(569, 'kepi-15045.jpeg', 166, 3, 1),
(570, 'kepi-67865.jpeg', 166, 2, 1),
(571, 'kepi-95904.jpeg', 166, 2, 1),
(572, 'kepi-55762.jpeg', 166, 1, 1),
(573, 'kepi-53244.jpeg', 167, 4, 1),
(574, 'kepi-53706.jpeg', 167, 3, 1),
(575, 'kepi-56101.jpeg', 167, 2, 1),
(576, 'kepi-11317.jpeg', 167, 1, 1),
(577, 'kepi-95777.jpeg', 167, 1, 1),
(578, 'kepi-12092.jpeg', 168, 5, 1),
(579, 'kepi-26718.jpeg', 168, 4, 1),
(580, 'kepi-63991.jpeg', 168, 3, 1),
(581, 'kepi-22732.jpeg', 168, 2, 1),
(582, 'kepi-17584.jpeg', 168, 1, 1),
(583, 'kepi-52753.jpeg', 169, 5, 1),
(584, 'kepi-27811.jpeg', 169, 4, 1),
(585, 'kepi-78762.jpeg', 169, 3, 1),
(586, 'kepi-13827.jpeg', 169, 2, 1),
(587, 'kepi-45959.jpeg', 169, 1, 1),
(588, 'kepi-29651.jpeg', 169, 1, 1),
(589, 'kepi-46276.jpeg', 170, 5, 1),
(590, 'kepi-82162.jpeg', 170, 4, 1),
(591, 'kepi-81959.jpeg', 170, 3, 1),
(592, 'kepi-40316.jpeg', 170, 2, 1),
(593, 'kepi-45869.jpeg', 170, 1, 1),
(594, 'kepi-54226.jpeg', 171, 5, 1),
(595, 'kepi-52003.jpeg', 171, 4, 1),
(596, 'kepi-40632.jpeg', 171, 3, 1),
(597, 'kepi-50529.jpeg', 171, 2, 1),
(598, 'kepi-18642.jpeg', 171, 1, 1),
(599, 'kepi-43673.jpeg', 172, 5, 1),
(600, 'kepi-23337.jpeg', 172, 4, 1),
(601, 'kepi-44608.jpeg', 172, 3, 1),
(602, 'kepi-74723.jpeg', 172, 2, 1),
(603, 'kepi-32374.jpeg', 172, 1, 1),
(604, 'kpei-62204.jpeg', 173, 3, 1),
(605, 'kpei-84315.jpeg', 173, 2, 1),
(606, 'kpei-13042.jpeg', 173, 1, 1),
(607, 'kepi-23315.jpeg', 174, 5, 1),
(608, 'kepi-67330.jpeg', 174, 4, 1),
(609, 'kepi-26220.jpeg', 174, 3, 1),
(610, 'kepi-44961.jpeg', 174, 2, 1),
(611, 'kepi-72337.jpeg', 174, 1, 1),
(612, 'kepi-44196.jpeg', 175, 4, 1),
(613, 'kepi-99321.jpeg', 175, 3, 1),
(614, 'kepi-98460.jpeg', 175, 2, 1),
(615, 'kepi-71817.jpeg', 175, 1, 1),
(616, 'kepi-61967.jpeg', 176, 5, 1),
(617, 'kepi-73834.jpeg', 176, 4, 1),
(618, 'kepi-23079.jpeg', 176, 3, 1),
(619, 'kepi-76713.jpeg', 176, 2, 1),
(620, 'kepi-67242.jpeg', 176, 1, 1),
(621, 'kepi-94429.jpeg', 177, 5, 1),
(622, 'kepi-83523.jpeg', 177, 4, 1),
(623, 'kepi-48974.jpeg', 177, 3, 1),
(624, 'kepi-20913.jpeg', 177, 2, 1),
(625, 'kepi-83646.jpeg', 177, 1, 1),
(626, 'kepi-43916.jpeg', 178, 4, 1),
(627, 'kepi-64614.jpeg', 178, 3, 1),
(628, 'kepi-56002.jpeg', 178, 2, 1),
(629, 'kepi-18123.jpeg', 178, 1, 1),
(630, 'kepi-13968.jpeg', 179, 5, 1),
(631, 'kepi-64334.jpeg', 179, 4, 1),
(632, 'kepi-60871.jpeg', 179, 3, 1),
(633, 'kepi-59277.jpeg', 179, 2, 1),
(634, 'kepi-50264.jpeg', 179, 1, 1),
(635, 'kepi-13270.jpeg', 180, 5, 1),
(636, 'kepi-96182.jpeg', 180, 4, 1),
(637, 'kepi-78701.jpeg', 180, 3, 1),
(638, 'kepi-14310.jpeg', 180, 2, 1),
(639, 'kepi-41526.jpeg', 180, 1, 1),
(640, 'kepi-28375.jpeg', 181, 4, 1),
(641, 'kepi-53866.jpeg', 181, 3, 1),
(642, 'kepi-91333.jpeg', 181, 2, 1),
(643, 'kepi-45504.jpeg', 181, 1, 1),
(644, 'kepi-30672.jpeg', 182, 5, 1),
(645, 'kepi-32256.jpeg', 182, 4, 1),
(646, 'kepi-26673.jpeg', 182, 3, 1),
(647, 'kepi-86769.jpeg', 182, 2, 1),
(648, 'kepi-14452.jpeg', 182, 1, 1),
(649, 'kepi-16463.jpeg', 183, 5, 1),
(650, 'kepi-96242.jpeg', 183, 4, 1),
(651, 'kepi-12336.jpeg', 183, 3, 1),
(652, 'kepi-72131.jpeg', 183, 2, 1),
(653, 'kepi-97107.jpeg', 183, 1, 1),
(654, 'kepi-67116.jpeg', 184, 5, 1),
(655, 'kepi-17305.jpeg', 184, 4, 1),
(656, 'kepi-71139.jpeg', 184, 3, 1),
(657, 'kepi-72457.jpeg', 184, 2, 1),
(658, 'kepi-95087.jpeg', 184, 1, 1),
(659, 'kpi--92502.jpeg', 185, 5, 1),
(660, 'kpi--71173.jpeg', 185, 4, 1),
(661, 'kpi--88782.jpeg', 185, 3, 1),
(662, 'kpi--80679.jpeg', 185, 2, 1),
(663, 'kpi--17868.jpeg', 185, 1, 1),
(664, 'kepi-38651.jpeg', 186, 5, 1),
(665, 'kepi-27532.jpeg', 186, 4, 1),
(666, 'kepi-19777.jpeg', 186, 3, 1),
(667, 'kepi-84937.jpeg', 186, 2, 1),
(668, 'kepi-64933.jpeg', 186, 1, 1),
(669, 'kepi-41986.jpeg', 187, 5, 1),
(670, 'kepi-37127.jpeg', 187, 4, 1),
(671, 'kepi-57341.jpeg', 187, 3, 1),
(672, 'kepi-35140.jpeg', 187, 2, 1),
(673, 'kepi-78662.jpeg', 187, 1, 1),
(674, 'kepi-28673.jpeg', 188, 5, 1),
(675, 'kepi-72429.jpeg', 188, 4, 1),
(676, 'kepi-47727.jpeg', 188, 3, 1),
(677, 'kepi-85967.jpeg', 188, 2, 1),
(678, 'kepi-61250.jpeg', 188, 1, 1),
(679, 'kepi-46240.jpeg', 190, 5, 1),
(680, 'kepi-17704.jpeg', 190, 4, 1),
(681, 'kepi-71970.jpeg', 190, 3, 1),
(682, 'kepi-54908.jpeg', 190, 2, 1),
(683, 'kepi-87524.jpeg', 190, 1, 1),
(684, 'kepi-41371.jpeg', 191, 5, 1),
(685, 'kepi-94037.jpeg', 191, 4, 1),
(686, 'kepi-99680.jpeg', 191, 3, 1),
(687, 'kepi-82714.jpeg', 191, 2, 1),
(688, 'kepi-42236.jpeg', 191, 1, 1),
(689, 'kepi-33552.jpeg', 192, 5, 1),
(690, 'kepi-95558.jpeg', 192, 4, 1),
(691, 'kepi-85805.jpeg', 192, 3, 1),
(692, 'kepi-56652.jpeg', 192, 2, 1),
(693, 'kepi-98023.jpeg', 192, 1, 1),
(694, 'kepi-76857.jpeg', 193, 5, 1),
(695, 'kepi-77559.jpeg', 193, 4, 1),
(696, 'kepi-16122.jpeg', 193, 3, 1),
(697, 'kepi-27988.jpeg', 193, 2, 1),
(698, 'kepi-79563.jpeg', 193, 1, 1),
(699, 'kepi-47609.jpeg', 189, 5, 1),
(700, 'kepi-57566.jpeg', 189, 4, 1),
(701, 'kepi-21361.jpeg', 189, 3, 1),
(702, 'kepi-92982.jpeg', 189, 2, 1),
(703, 'kepi-16978.jpeg', 189, 1, 1),
(704, 'kepi-83168.jpeg', 194, 5, 1),
(705, 'kepi-35232.jpeg', 194, 4, 1),
(706, 'kepi-14040.jpeg', 194, 3, 1),
(707, 'kepi-73072.jpeg', 194, 2, 1),
(708, 'kepi-18787.jpeg', 194, 1, 1),
(709, 'kepi-55299.jpeg', 195, 5, 1),
(710, 'kepi-65026.jpeg', 195, 4, 1),
(711, 'kepi-29347.jpeg', 195, 3, 1),
(712, 'kepi-20745.jpeg', 195, 2, 1),
(713, 'kepi-32196.jpeg', 195, 1, 1),
(714, 'kepi-20344.jpeg', 196, 4, 1),
(715, 'kepi-74079.jpeg', 196, 3, 1),
(716, 'kepi-13715.jpeg', 196, 2, 1),
(717, 'kepi-27042.jpeg', 196, 1, 1),
(718, 'kepi-79864.jpeg', 197, 5, 1),
(719, 'kepi-95069.jpeg', 197, 4, 1),
(720, 'kepi-86414.jpeg', 197, 3, 1),
(721, 'kepi-41856.jpeg', 197, 2, 1),
(722, 'kepi-17946.jpeg', 197, 1, 1),
(723, 'kepi-46584.jpeg', 198, 5, 1),
(724, 'kepi-74347.jpeg', 198, 4, 1),
(725, 'kepi-53077.jpeg', 198, 3, 1),
(726, 'kepi-35319.jpeg', 198, 2, 1),
(727, 'kepi-12197.jpeg', 198, 1, 1),
(728, 'kepi-54976.jpeg', 199, 5, 1),
(729, 'kepi-82755.jpeg', 199, 4, 1),
(730, 'kepi-98980.jpeg', 199, 3, 1),
(731, 'kepi-54711.jpeg', 199, 2, 1),
(732, 'kepi-49558.jpeg', 199, 1, 1),
(733, 'kepi-73341.jpeg', 200, 5, 1),
(734, 'kepi-96236.jpeg', 200, 4, 1),
(735, 'kepi-94201.jpeg', 200, 3, 1),
(736, 'kepi-30304.jpeg', 200, 2, 1),
(737, 'kepi-88506.jpeg', 200, 1, 1),
(738, 'kepi-67876.jpeg', 201, 5, 1),
(739, 'kepi-59067.jpeg', 201, 4, 1),
(740, 'kepi-90548.jpeg', 201, 3, 1),
(741, 'kepi-94477.jpeg', 201, 2, 1),
(742, 'kepi-81825.jpeg', 201, 1, 1),
(743, 'kepi-87683.jpeg', 202, 5, 1),
(744, 'kepi-96091.jpeg', 202, 4, 1),
(746, 'kepi-59345.jpeg', 202, 3, 1),
(747, 'kepi-80171.jpeg', 202, 2, 1),
(748, 'kepi-11123.jpeg', 202, 1, 1),
(749, 'kepi-76143.jpeg', 203, 5, 1),
(750, 'kepi-17945.jpeg', 203, 4, 1),
(751, 'kepi-70796.jpeg', 203, 3, 1),
(752, 'kepi-91287.jpeg', 203, 2, 1),
(753, 'kepi-71223.jpeg', 203, 1, 1),
(757, 'remeras-unisex-edt-57926.jpeg', 204, 2, 1),
(756, 'remeras-unisex--66623.jpeg', 204, 1, 1),
(758, 'remeras-unisex-edt-40610.jpeg', 204, 3, 1),
(759, 'boné-made-in-mato-black-icon-58781.jpeg', 205, 5, 1),
(760, 'boné-made-in-mato-black-icon-39468.jpeg', 205, 4, 1),
(761, 'kepi-made-in-mato-custom-negro-86129.png', 206, 3, 1),
(762, 'kepi-made-in-mato-custom-negro-20468.jpeg', 206, 2, 1),
(763, 'kepi-made-in-mato-custom-negro-63125.png', 206, 1, 1),
(764, 'kepi-77683.jpeg', 208, 2, 1),
(765, 'kepi-63760.jpeg', 208, 1, 1),
(766, 'kepi-trucker-military-negro-78937.jpeg', 209, 2, 1),
(767, 'kepi-trucker-military-negro-69001.jpeg', 209, 1, 1),
(768, 'kepi-trucker-flag-89019.jpeg', 210, 2, 1),
(769, 'kepi-trucker-flag-40808.jpeg', 210, 1, 1),
(770, 'kepi--70785.jpeg', 212, 3, 1),
(771, 'kepi--12611.jpeg', 212, 2, 1),
(772, 'kepi--39134.jpeg', 212, 1, 1),
(773, 'kepi-trucker-flag-negro-41256.jpeg', 213, 3, 1),
(774, 'kepi-trucker-flag-negro-88440.jpeg', 213, 2, 1),
(775, 'kepi-trucker-flag-negro-52797.jpeg', 213, 1, 1),
(776, 'kepi-made-in-mato-trucker-super-icon-negro-42897.jpeg', 214, 3, 1),
(777, 'kepi-made-in-mato-trucker-super-icon-negro-23325.jpeg', 214, 2, 1),
(778, 'kepi-made-in-mato-trucker-scribble-black-89613.jpeg', 215, 2, 1),
(779, 'kepi-made-in-mato-trucker-scribble-black-12288.jpeg', 215, 1, 1),
(780, 'kepi-made-in-mato-snappback-black-icon-20798.jpeg', 207, 2, 1),
(781, 'kepi-made-in-mato-snappback-black-icon-79821.jpeg', 207, 1, 1),
(782, 'kepi-trucker-vintage-shield--89954.jpeg', 216, 2, 1),
(783, 'kepi-trucker-vintage-shield--64337.jpeg', 216, 1, 1),
(784, 'kepi-made-in-mato-quarto-de-milha-31876.jpeg', 217, 2, 1),
(785, 'kepi-made-in-mato-quarto-de-milha-81545.jpeg', 217, 1, 1),
(786, 'kepi-mde-in-mato-trucker-old-rooster-72379.jpeg', 218, 3, 1),
(787, 'kepi-mde-in-mato-trucker-old-rooster-43674.jpeg', 218, 2, 1),
(788, 'kepi-mde-in-mato-trucker-old-rooster-89925.jpeg', 218, 1, 1),
(789, 'kepi-made-in-mato-trucker-black-rooster--83916.jpeg', 219, 3, 1),
(790, 'kepi-made-in-mato-trucker-black-rooster--53613.png', 219, 2, 1),
(791, 'kepi-made-in-mato-trucker-black-rooster--63416.jpeg', 219, 1, 1),
(792, 'kepi-made-in-mato-trucker-american-rooster-91156.jpeg', 220, 2, 1),
(793, 'kepi-made-in-mato-trucker-american-rooster-76978.jpeg', 220, 1, 1),
(794, 'kepi-13128.jpeg', 221, 2, 1),
(795, 'kepi-45244.jpeg', 221, 1, 1),
(796, 'kepi-made-in-mato-trucker-expansion-black-87585.jpeg', 222, 3, 1),
(797, 'kepi-made-in-mato-trucker-expansion-black-65275.jpeg', 222, 2, 1),
(798, 'kepi-made-in-mato-trucker-expansion-black-38764.jpeg', 222, 1, 1),
(799, 'kepi-trucker-chess-33308.jpeg', 223, 3, 1),
(800, 'kepi-trucker-chess-68567.jpeg', 223, 2, 1),
(801, 'kepi-trucker-chess-26339.jpeg', 223, 1, 1),
(802, 'kepi-trucker-fazendeiro-21406.jpeg', 224, 3, 1),
(803, 'kepi-trucker-fazendeiro-88636.jpeg', 224, 2, 1),
(804, 'kepi-trucker-fazendeiro-32623.jpeg', 224, 1, 1),
(805, 'kepi-trucker-shield-red-44104.jpeg', 225, 4, 1),
(806, 'kepi-trucker-shield-red-83876.jpeg', 225, 3, 1),
(807, 'kepi-trucker-shield-red-13190.jpeg', 225, 2, 1),
(808, 'kepi-trucker-shield-red-42763.jpeg', 225, 1, 1),
(809, 'kepi-trucker-red-plate-36328.jpeg', 226, 3, 1),
(810, 'kepi-trucker-red-plate-46420.jpeg', 226, 2, 1),
(811, 'kepi-trucker-red-plate-60866.jpeg', 226, 1, 1),
(812, 'kepi-trucker-black-shield--20293.jpeg', 227, 3, 1),
(813, 'kepi-trucker-black-shield--73349.png', 227, 2, 1),
(814, 'kepi-trucker-black-shield--48501.jpeg', 227, 1, 1),
(815, 'kepi-snapback-scribble-skin--43543.jpeg', 228, 3, 1),
(816, 'kepi-snapback-scribble-skin--39930.jpeg', 228, 2, 1),
(817, 'kepi-snapback-scribble-skin--85107.jpeg', 228, 1, 1),
(818, 'kepi-trucker-manga-larga-machador-brown--17489.jpeg', 229, 3, 1),
(819, 'kepi-trucker-manga-larga-machador-brown--16391.png', 229, 2, 1),
(820, 'kepi-trucker-manga-larga-machador-brown--33208.jpeg', 229, 1, 1),
(821, 'kepi-trucker-skin--84117.jpeg', 230, 2, 1),
(822, 'kepi-trucker-skin--29763.jpeg', 230, 1, 1),
(823, 'kepi-snapback-logo-icon--59374.jpeg', 231, 1, 1),
(824, 'kepi-snapback-logo-icon--59964.jpeg', 231, 2, 1),
(825, 'kepi-snapback-logo-icon--48388.jpeg', 231, 3, 1),
(826, 'kepi-trucker-cortica-36855.jpeg', 232, 1, 1),
(827, 'no-image.png', 232, 2, 1),
(828, 'no-image.png', 232, 3, 1),
(829, 'kepi-trucker-cortica-93354.jpeg', 232, 4, 1),
(830, 'kepi-trucker-under-skin--36121.jpeg', 233, 1, 1),
(831, 'kepi-trucker-under-skin--20554.jpeg', 233, 2, 1),
(832, 'kepi-trucker-furta-black--19662.jpeg', 234, 1, 1),
(834, 'kepi-trucker-furta-black--57313.jpeg', 234, 2, 1),
(835, 'kepi-trucker-furta-black--71399.jpeg', 234, 3, 1),
(836, 'kepi-trucker-black-tape--56718.jpeg', 236, 1, 1),
(837, 'kepi-trucker-black-tape--96298.jpeg', 236, 2, 1),
(838, 'kepi-trucker-black-tape--84935.jpeg', 236, 3, 1),
(839, 'kepi-trucker-brown-87249.jpeg', 237, 1, 1),
(840, 'kepi-trucker-red-rooster--17417.jpeg', 238, 1, 1),
(841, 'kepi-trucker-red-rooster--55485.jpeg', 238, 2, 1),
(842, 'kepi-44174.jpeg', 239, 1, 1),
(843, 'kepi-99067.jpeg', 239, 2, 1),
(844, 'kepi-95012.jpeg', 240, 1, 1),
(845, 'kepi-44867.jpeg', 240, 2, 1),
(846, 'kepi-35715.jpeg', 240, 3, 1),
(847, 'bonÉ-aba-curva-choraboy---destroyed-jeans--93142.jpeg', 241, 1, 1),
(848, 'bonÉ-aba-curva-choraboy---destroyed-jeans--22276.jpeg', 241, 2, 1),
(849, 'bonÉ-aba-curva-choraboy---destroyed-jeans--83958.jpeg', 241, 2, 1),
(850, 'kepi-61159.jpeg', 242, 1, 1),
(851, 'kepi-98098.jpeg', 242, 2, 1),
(852, 'kepi-67589.jpeg', 242, 3, 1),
(853, 'kepi-aba-curva---brilhante--13240.jpeg', 243, 1, 1),
(854, 'kepi-aba-curva---brilhante--10953.jpeg', 243, 2, 1),
(855, 'kepi-aba-curva---brilhante--29855.jpeg', 243, 3, 1),
(856, 'kepi-25990.jpeg', 244, 1, 1),
(857, 'kepi-60564.jpeg', 244, 2, 1),
(858, 'kepi-76907.jpeg', 244, 3, 1),
(859, 'kepi-aba-curva-choraboy---rojo-84621.jpeg', 245, 1, 1),
(860, 'kepi-aba-curva-choraboy---rojo-22472.jpeg', 245, 2, 1),
(861, 'kepi-53822.jpeg', 246, 1, 1),
(862, 'kepi-46688.jpeg', 246, 2, 1),
(863, 'kepi-65811.jpeg', 246, 3, 1),
(864, 'kepi-rustic-12802.jpeg', 248, 1, 1),
(865, 'kepi-rustic-43404.jpeg', 248, 2, 1),
(866, 'kepi-rustic-87313.jpeg', 248, 3, 1),
(867, 'kepi-horse-flag-verde-musgo-81746.jpeg', 249, 1, 1),
(868, 'kepi-horse-flag-verde-musgo-15593.jpeg', 249, 2, 1),
(869, 'kepi-horse-flag-verde-musgo-83846.jpeg', 249, 3, 1),
(870, 'kepi-wren-azul-marino-72367.jpeg', 250, 1, 1),
(871, 'kepi-wren-azul-marino-14893.jpeg', 250, 2, 1),
(872, 'kepi-wren-azul-marino-62053.jpeg', 250, 3, 1),
(873, 'kepi-horn-azul-marino-72297.jpeg', 251, 1, 1),
(874, 'kepi-horn-azul-marino-10436.jpeg', 251, 2, 1),
(875, 'kepi-horn-azul-marino-20641.jpeg', 251, 3, 1),
(876, 'kepi-explore-bf-45098.jpeg', 252, 1, 1),
(877, 'kepi-explore-bf-44183.jpeg', 252, 2, 1),
(878, 'kepi-explore-bf-34096.jpeg', 252, 3, 1),
(879, 'kepi-alazÃo-azul-marinho-com-caramelo-83843.jpeg', 253, 1, 1),
(880, 'kepi-alazÃo-azul-marinho-com-caramelo-69224.jpeg', 253, 2, 1),
(881, 'kepi-alazÃo-azul-marinho-com-caramelo-13116.jpeg', 253, 3, 1),
(882, 'kepi-alazÃo-branco-con-rojo-92965.jpeg', 254, 1, 1),
(883, 'kepi-alazÃo-branco-con-rojo-55453.jpeg', 254, 2, 1),
(884, 'kepi-alazÃo-branco-con-rojo-63788.jpeg', 254, 3, 1),
(885, 'kepi-horse-con-aba-naranja--58836.jpeg', 255, 1, 1),
(886, 'kepi-horse-con-aba-naranja--66957.jpeg', 255, 2, 1),
(887, 'kepi-horse-con-aba-naranja--12069.jpeg', 255, 3, 1),
(888, 'kepi-33456.jpeg', 256, 1, 1),
(889, 'kepi-34517.jpeg', 256, 2, 1),
(890, 'kepi-58539.jpeg', 256, 3, 1),
(891, 'kepi-veterinÁria-black-22838.jpeg', 257, 1, 1),
(892, 'kepi-veterinÁria-black-73193.jpeg', 257, 2, 1),
(893, 'kepi-veterinÁria-black-12209.jpeg', 257, 3, 1),
(894, 'kepi-agronomia-negro-29221.jpeg', 258, 1, 1),
(895, 'kepi-agronomia-negro-70434.jpeg', 258, 2, 1),
(896, 'kepi-agronomia-negro-41384.jpeg', 258, 3, 1),
(897, 'kepi-wren-mescla-con-negro-56146.jpeg', 259, 1, 1),
(898, 'kepi-wren-mescla-con-negro-26675.jpeg', 259, 2, 1),
(928, 'kepi--boi-sacudido´s---preto-45849.jpeg', 270, 1, 1),
(900, 'sombreo-de-cuero---nobuck-marrom-89762.jpeg', 260, 1, 1),
(901, 'sombreo-de-cuero---nobuck-marrom-86605.jpeg', 260, 2, 1),
(902, 'sombreo-de-cuero---nobuck-marrom-77496.jpeg', 260, 3, 1),
(903, 'sombrero-de-cuero---croco-terra-53270.jpeg', 261, 1, 1),
(904, 'sombrero-de-cuero---croco-terra-10954.jpeg', 261, 2, 1),
(905, 'sombrero-de-cuero---croco-terra-58965.jpeg', 261, 3, 1),
(907, 'sombrero---estilo-campeiro---palha-78375.jpeg', 262, 3, 1),
(908, 'sombrero---estilo-campeiro---palha-45126.jpeg', 262, 2, 1),
(909, 'sombrero---estilo-campeiro---palha-83995.jpeg', 262, 1, 1),
(910, 'sombrero---estilo-americano---palha-10805.jpeg', 263, 1, 1),
(911, 'sombrero---estilo-americano---palha-81985.jpeg', 263, 2, 1),
(912, 'sombrero---estilo-americano---palha-18051.jpeg', 263, 3, 1),
(913, 'sombrero--estilo-pantaneiro---palha-17830.jpeg', 264, 1, 1),
(914, 'sombrero--estilo-pantaneiro---palha-38355.jpeg', 264, 2, 1),
(915, 'sombrero--estilo-pantaneiro---palha-23910.jpeg', 264, 3, 1),
(916, 'sombrero--estilo-pantaneiro---palha-55819.jpeg', 264, 4, 1),
(917, 'sombrero--estilo-pantaneiro---palha-48266.jpeg', 264, 5, 1),
(918, 'sombrero--estilo-gota-clÁssico---paja-43422.jpeg', 265, 1, 1),
(919, 'sombrero--estilo-gota-clÁssico---paja-73226.jpeg', 265, 2, 1),
(920, 'sombrero--estilo-gota-clÁssico---paja-71859.jpeg', 265, 3, 1),
(921, 'sombrero-de-paja-pierside-choraboy-31331.jpeg', 266, 1, 1),
(922, 'sombrero-de-paja-pierside-choraboy-37356.jpeg', 266, 2, 1),
(923, 'sombrero-de-paja-floral-choraboy--54524.jpeg', 267, 1, 1),
(924, 'sombrero-de-paja-floral-choraboy--25757.jpeg', 268, 1, 1),
(925, 'sombrero-de-paja-floral-choraboy--85949.jpeg', 269, 1, 1),
(929, 'kepi--boi-sacudido´s---preto-26197.jpeg', 270, 2, 1),
(930, 'kepi--boi-sacudido´s---preto-12223.jpeg', 270, 3, 1),
(944, 'matero-62373.jpeg', 284, 1, 1),
(945, 'matero-21932.jpeg', 285, 1, 1),
(948, 'guampa-inoxidable--84710.jpeg', 288, 1, 1),
(949, 'guampa-inoxidable--51989.jpeg', 289, 1, 1),
(950, 'guampa-inoxidable--27692.jpeg', 290, 1, 1),
(951, 'guampa-inoxidable-+-bombilla--26560.jpeg', 291, 1, 1),
(952, 'guampa-inoxidable-+-bombilla--55152.jpeg', 292, 1, 1),
(953, 'Óculos-de-sol-choraboy---masculino-72078.jpeg', 293, 3, 1),
(954, 'Óculos-de-sol-choraboy---masculino-65216.jpeg', 293, 2, 1),
(955, 'Óculos-de-sol-choraboy---masculino-50792.jpeg', 293, 1, 1),
(956, 'Óculos-de-sol-choraboy---masculino-82972.jpeg', 294, 3, 1),
(957, 'Óculos-de-sol-choraboy---masculino-35669.jpeg', 294, 2, 1),
(958, 'Óculos-de-sol-choraboy---masculino-48317.jpeg', 294, 1, 1),
(959, 'Óculos-de-sol-choraboy---masculino-99772.jpeg', 295, 1, 1),
(960, 'Óculos-de-sol-choraboy---masculino-12877.jpeg', 295, 2, 1),
(961, 'Óculos-de-sol-choraboy---masculino-16998.jpeg', 295, 3, 1),
(962, 'kepi-aba-curva-choraboy---rosÊ--67458.jpeg', 296, 1, 1),
(963, 'kepi-aba-curva-choraboy---rosÊ--19331.jpeg', 296, 2, 1),
(964, 'kepi-aba-curva-choraboy---rosÊ--66832.jpeg', 296, 3, 1),
(965, 'kepi-aba-curva-choraboy---rosÊ--36932.jpeg', 296, 4, 1),
(966, 'kepi-aba-curva-retrÔ---ferrugem--29389.jpeg', 297, 1, 1),
(967, 'kepi-aba-curva-retrÔ---ferrugem--57819.jpeg', 297, 2, 1),
(968, 'kepi-trucker-choraboy---preto-e-caramelo--22911.jpeg', 298, 1, 1),
(969, 'kepi-trucker-choraboy---preto-e-caramelo--65566.jpeg', 298, 2, 1),
(970, 'kepi-aba-curva-choraboy---cinza-claro--88998.jpeg', 299, 1, 1),
(971, 'kepi-aba-curva-choraboy---cinza-claro--71399.jpeg', 299, 2, 1),
(972, 'kepi-aba-curva-choraboy---cinza-claro--28644.jpeg', 299, 3, 1),
(973, 'kepi-aba-curva-choraboy---cinza-claro--98922.jpeg', 299, 4, 1),
(975, 'bone-32651.jpeg', 301, 1, 1),
(976, 'bone-64908.jpeg', 301, 2, 1),
(977, 'bone-33369.jpeg', 301, 3, 1),
(978, 'bone-19749.jpeg', 301, 4, 1),
(979, 'remeras-unisex-edt-70527.jpeg', 204, 4, 1),
(980, 'remeras-unisex-edt-24430.jpeg', 204, 5, 1),
(981, 'remeras-unisex-edt-24546.jpeg', 204, 6, 1),
(990, 'llaveros--79766.jpeg', 304, 3, 1),
(989, 'llaveros--89446.jpeg', 304, 2, 1),
(988, 'llaveros--45001.jpeg', 304, 1, 1),
(991, 'llaveros--68110.jpeg', 304, 4, 1),
(992, 'llaveros--55082.jpeg', 304, 3, 1),
(993, 'llaveros--78888.jpeg', 305, 1, 1),
(994, 'llavero-de-maiz--65774.jpeg', 306, 1, 1),
(996, 'llaveros-de-peces--26445.jpeg', 307, 1, 1),
(997, 'llaveros-de-peces--76413.jpeg', 307, 2, 1),
(998, 'llaveros-de-peces--67705.jpeg', 307, 3, 1),
(999, 'billetera-sacudidos--64903.jpeg', 308, 1, 1),
(1000, 'billetera-sacudidos--80080.jpeg', 308, 2, 1),
(1001, 'billetera-sacudidos--93600.jpeg', 308, 3, 1),
(1002, 'billetera-sacudidos--68237.jpeg', 308, 4, 1),
(1003, 'billetera-sacudidos--90761.jpeg', 308, 5, 1),
(1004, 'billetera-feminina-couro---739--elefante-50479.jpeg', 309, 1, 1),
(1006, 'billetera-feminina-couro---739--elefante-99101.jpeg', 309, 2, 1),
(1007, 'billetera-feminina-couro---739--elefante-23828.jpeg', 309, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_stock`
--

CREATE TABLE `tb_producto_stock` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_combinacion` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `valor_minorista` int(11) DEFAULT NULL,
  `valor_mayorista` int(11) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_stock`
--

INSERT INTO `tb_producto_stock` (`id`, `id_producto`, `id_combinacion`, `stock`, `valor_minorista`, `valor_mayorista`, `activo`) VALUES
(1, 1, NULL, 10, 1000000, 900000, 1),
(2, 1, NULL, 12, 1000000, 900000, 1),
(40, 178, NULL, 1, 160000, 120000, 1),
(108, 299, NULL, 3, 160000, 120000, 1),
(25, 25, NULL, 100, 65987, 79000, 1),
(24, 24, NULL, 133, 35000, 52000, 1),
(23, 23, NULL, 122, 46000, 54900, 1),
(22, 22, NULL, 156, 33000, 56900, 1),
(42, 205, NULL, 17, 160000, 120000, 1),
(19, 19, NULL, 155, 30000, 56000, 1),
(20, 20, NULL, 154, 45800, 76000, 1),
(112, 18, NULL, 13, 1100, 13000, 1),
(17, 17, NULL, 219, 1000, 1500, 1),
(113, 204, 1, 5, 110000, 85000, 1),
(36, 36, NULL, 3, 180000, 120000, 1),
(107, 296, NULL, 5, 160000, 120000, 1),
(38, 38, NULL, 5, 180000, 120000, 1),
(43, 206, NULL, 4, 160000, 120000, 1),
(44, 209, NULL, 15, 160000, 120000, 1),
(45, 210, NULL, 6, 160000, 120000, 1),
(48, 213, NULL, 9, 160000, 120000, 1),
(47, 212, NULL, 7, 160000, 120000, 1),
(49, 214, NULL, 11, 160000, 120000, 1),
(50, 215, NULL, 16, 160000, 120000, 1),
(51, 207, NULL, 10, 160000, 120000, 1),
(52, 216, NULL, 14, 160000, 120000, 1),
(53, 217, NULL, 20, 160000, 120000, 1),
(54, 218, NULL, 18, 160000, 120000, 1),
(55, 219, NULL, 15, 160000, 120000, 1),
(56, 220, NULL, 26, 160000, 120000, 1),
(57, 221, NULL, 14, 160000, 120000, 1),
(58, 222, NULL, 56, 160000, 120000, 1),
(59, 223, NULL, 35, 160000, 120000, 1),
(60, 224, NULL, 15, 160000, 120000, 1),
(61, 225, NULL, 22, 160000, 120000, 1),
(62, 226, NULL, 8, 160000, 120000, 1),
(63, 227, NULL, 14, 160000, 120000, 1),
(64, 228, NULL, 10, 160000, 120000, 1),
(65, 229, NULL, 5, 160000, 120000, 1),
(66, 230, NULL, 11, 160000, 120000, 1),
(67, 231, NULL, 24, 160000, 120000, 1),
(68, 232, NULL, 11, 160000, 120000, 1),
(69, 233, NULL, 15, 160000, 120000, 1),
(70, 234, NULL, 9, 160000, 120000, 1),
(71, 236, NULL, 8, 160000, 120000, 1),
(72, 237, NULL, 6, 160000, 120000, 1),
(73, 238, NULL, 18, 160000, 120000, 1),
(74, 239, NULL, 2, 160000, 120000, 1),
(75, 240, NULL, 10, 160000, 120000, 1),
(76, 241, NULL, 3, 160000, 120000, 1),
(77, 242, NULL, 2, 160000, 120000, 1),
(78, 243, NULL, 4, 160000, 120000, 1),
(79, 244, NULL, 5, 160000, 120000, 1),
(80, 245, NULL, 1, 160000, 120000, 1),
(81, 246, NULL, 3, NULL, NULL, 1),
(82, 247, NULL, 8, 160000, 120000, 1),
(83, 248, NULL, 3, 160000, 120000, 1),
(84, 249, NULL, 8, 160000, 120000, 1),
(85, 250, NULL, 1, 160000, 120000, 1),
(86, 251, NULL, 2, 160000, 120000, 1),
(87, 252, NULL, 10, 160000, 120000, 1),
(88, 253, NULL, 6, 160000, 120000, 1),
(89, 254, NULL, 2, 160000, 120000, 1),
(90, 255, NULL, 11, 160000, 120000, 1),
(91, 256, NULL, 1, 160000, 120000, 1),
(92, 257, NULL, 5, 160000, 120000, 1),
(93, 258, NULL, 5, 160000, 120000, 1),
(116, 204, 4, 8, 110000, 85000, 1),
(95, 259, NULL, 6, 160000, 120000, 1),
(96, 260, NULL, 4, 280000, 210000, 1),
(97, 261, NULL, 2, 280000, 210000, 1),
(98, 262, NULL, 3, NULL, NULL, 1),
(99, 263, NULL, 10, 190000, 150000, 1),
(100, 264, NULL, 22, 190000, 150000, 1),
(101, 265, NULL, 8, 190000, 120000, 1),
(102, 266, NULL, 3, 190000, 150000, 1),
(103, 267, NULL, 2, 190000, 150000, 1),
(104, 268, NULL, 3, 170000, 130000, 1),
(105, 269, NULL, 3, 170000, 130000, 1),
(106, 270, NULL, 5, 160000, 120000, 1),
(114, 204, 2, 3, 110000, 85000, 1),
(115, 204, 3, 5, 110000, 85000, 1),
(117, 204, 5, 0, 110000, 85000, 1),
(118, 204, 6, 7, 110000, 85000, 1),
(119, 204, 7, 4, 110000, 85000, 1),
(120, 303, 8, 1, 420000, 350000, 1),
(122, 304, 9, 5, 25000, 12000, 1),
(123, 304, 10, 5, 25000, 12000, 1),
(124, 304, 11, 5, 25000, 12000, 1),
(125, 304, 12, 5, 25000, 12000, 1),
(126, 304, 13, 5, 25000, 12000, 1),
(127, 304, 14, 5, 25000, 12000, 1),
(128, 304, 15, 5, 25000, 12000, 1),
(129, 304, 16, 5, 25000, 12000, 1),
(130, 304, 17, 5, 25000, 12000, 1),
(131, 304, 18, 5, 25000, 12000, 1),
(132, 305, 19, 100, 25000, 15000, 1),
(133, 305, 20, 100, 25000, 15000, 1),
(134, 306, 21, 100, 25000, 15000, 1),
(136, 307, 22, 100, 25000, 15000, 1),
(137, 307, 23, 100, 25000, 15000, 1),
(138, 308, 24, 10, 170000, 120000, 1),
(139, 308, 25, 12, 170000, 120000, 1),
(140, 308, 26, 7, 170000, 120000, 1),
(141, 309, NULL, 7, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_revendedor`
--

CREATE TABLE `tb_revendedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_revendedor`
--

INSERT INTO `tb_revendedor` (`id`, `nombre`, `telefono`, `email`, `direccion`, `url`) VALUES
(13, 'Carol', '', '', '', 'no-image.png'),
(14, 'Izaura Machado ', '0981688599', '', 'San Alberto ', 'no-image.png'),
(11, 'Fernanda ', '', '', '', 'no-image.png'),
(12, 'Paulo Torres', '0984640318', '', 'Juan y Oleary ', 'no-image.png'),
(7, 'Milena Adrieli Rambo ', '0983825462', '', 'Santa Rita ', 'milena-rambo--98023.jpeg'),
(10, 'Fernando ', '', '', '', 'no-image.png'),
(9, 'Kaathilin Webler', '0985167154', '', 'Barrio Coperativista Espacio Derma- Santa Rita', 'kaathilin-webler-77191.jpeg'),
(6, 'Angelica Finkler', '0983687157', '', 'Santa Rita ', 'angelica-finkler-88049.jpeg'),
(15, 'Naoma ', '', '', '', 'no-image.png'),
(16, 'Marcos Feiden ', '0986933057', '', 'Gleba 4- Mbaracayu ', 'no-image.png'),
(17, 'Flavio Gomes ', '0983660155', '', 'Procopio- Mbaracayu ', 'no-image.png'),
(18, 'Claudia Milena ', '', '', 'La Paloma ', 'no-image.png'),
(19, 'Fabiola Gamarra ', '', '', 'Caazapa ', 'no-image.png'),
(20, 'Diego Ozuna Dici ', '0971584641', '', 'San Pedro del Ycuamandiyú', 'no-image.png'),
(21, 'Claudio ', '', '', '', 'no-image.png'),
(22, 'Naty ', '', '', '', 'no-image.png'),
(23, 'Aline Opperman ', '0975945742', '', 'Nueva Toledo- Campo 9', 'no-image.png'),
(24, 'Joel Diaz ', '', '', 'Santani ', 'no-image.png'),
(25, 'Mario Ricardo', '', '', '', 'no-image.png'),
(26, 'Alan Henrique ', '', '', '', 'no-image.png'),
(27, 'Larissa Green ', '', '', 'San Alberto ', 'no-image.png'),
(28, 'Marlei ', '', '', 'Santa Rosa ', 'no-image.png'),
(29, 'Didi', '', '', 'Ciudad del Este ', 'no-image.png'),
(30, 'Didi', '', '', 'Ciudad del Este ', 'no-image.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_stock_valor`
--

CREATE TABLE `tb_stock_valor` (
  `id_atr_valor` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_stock_valor`
--

INSERT INTO `tb_stock_valor` (`id_atr_valor`, `id_stock`, `id_producto`) VALUES
(5, 1, 1),
(8, 1, 1),
(1, 2, 1),
(5, 2, 1),
(11, 41, 204),
(2, 51, 207),
(11, 94, 204),
(12, 94, 204);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `password`, `nombre`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario_cliente`
--

CREATE TABLE `tb_usuario_cliente` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verificado` date DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `creado_en` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuario_cliente`
--

INSERT INTO `tb_usuario_cliente` (`id`, `id_cliente`, `email`, `email_verificado`, `contrasena`, `creado_en`) VALUES
(1, 1, 'anacarolinaapv@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2020-10-14'),
(2, 2, 'richardcabrera92@hotmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2020-10-22'),
(3, 3, 'capacitcursoscde@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-22'),
(4, 4, 'joseaguilera1709@gmail.com', NULL, '36237e6873f106a31c77bba81980da3d', '2020-11-12'),
(5, 5, 'joseloaguilerita@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', '2020-11-18'),
(6, 6, 'viawebpy@gmail.com', NULL, '3a7c71f468746d5b41e69c8cd849bbb9', '2020-12-11'),
(7, 7, 'waggamantitus18157413@gmail.com', NULL, 'abb33952068bd969af70a438e3523a08', '2020-12-15'),
(8, 8, 'waggamantitus18157413@gmail.com', NULL, 'abb33952068bd969af70a438e3523a08', '2020-12-15'),
(9, 9, 'carillofrancoise23455645@gmail.com', NULL, 'c8ef502c93f0c318b8ed76b63a768082', '2020-12-20'),
(10, 10, 'carillofrancoise23455645@gmail.com', NULL, 'c8ef502c93f0c318b8ed76b63a768082', '2020-12-20'),
(11, 11, 'Kacie67@gmail.com', NULL, 'a98cba7375d1b2e629f6993bb76f08fc', '2021-01-25'),
(12, 12, 'richardohurley@gmail.com', NULL, 'da7bf105b9c3780b7f612ff62291d895', '2021-01-27'),
(13, 13, 'kdckids1@gmail.com', NULL, '75c4bc710eeb73e36b5228b632967f4d', '2021-02-10'),
(14, 14, 'tm@demosglobal.es', NULL, '1512d58684699ed5c96b331371fbdecf', '2021-02-11'),
(15, 15, 'rollerskater8@hotmail.com', NULL, '1e1064c5443af7ba600130d6d0665934', '2021-02-11'),
(16, 16, 'sofiathoma@hotmail.de', NULL, 'f4324fcbe5c8dde5f49ba5063d910ead', '2021-02-18'),
(17, 17, 'eloisabeatriz14@gmail.com', NULL, 'b43d10109e60bb69f9da2ae431c9c796', '2021-03-01'),
(18, 18, 'kdub0007@gmail.com', NULL, 'a863099b9a6afb49aa4604f3d0b8a10a', '2021-03-02'),
(19, 19, 'janno.jogeva@ut.ee', NULL, '84d2ddb8fcbaa1c981e1492dcfbb3689', '2021-03-10'),
(20, 20, 'nick@elegantthemes.com', NULL, '44526e8a00fd0229738cf34300d713f4', '2021-03-15'),
(21, 21, 'anacarolinaaps@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2021-04-01'),
(22, 22, 'vivianisampaio74@gmail.com', NULL, '286d811f7746548dbd69abc3d8a4d460', '2021-04-05'),
(23, 23, 'capacitcursoscde@gmail.com', NULL, '3a7c71f468746d5b41e69c8cd849bbb9', '2021-04-05'),
(24, 24, 'vivianisampaio74@gmail.com', NULL, '286d811f7746548dbd69abc3d8a4d460', '2021-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `pagado` int(2) NOT NULL DEFAULT '0',
  `forma_pago` varchar(80) NOT NULL DEFAULT '0',
  `fecha_pago` varchar(80) NOT NULL DEFAULT '0',
  `monto` decimal(15,2) DEFAULT NULL,
  `fecha_maxima_pago` varchar(120) DEFAULT NULL,
  `hash_pedido` varchar(255) DEFAULT NULL,
  `numero_pedido` varchar(255) DEFAULT NULL,
  `cancelado` int(2) DEFAULT NULL,
  `forma_pago_identificador` int(2) DEFAULT NULL,
  `compradorId` int(11) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id`, `pagado`, `forma_pago`, `fecha_pago`, `monto`, `fecha_maxima_pago`, `hash_pedido`, `numero_pedido`, `cancelado`, `forma_pago_identificador`, `compradorId`, `created`, `updated`) VALUES
(19, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '307f42c2bc208d42fb6ae8269d89a8738abaa5a59e9eae80a5db5b1786412ad9', NULL, NULL, NULL, 1, '2020-11-04 20:17:47', NULL),
(20, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '8be872ac36842be4654862a16c66b5819eed5ee062dbed2b5319c178ae874a4d', NULL, NULL, NULL, 1, '2020-11-12 15:13:28', NULL),
(21, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '5a27b703750ded6736539f1a3e136119bd4386b83490950b2a0e2dc718dd56a8', NULL, NULL, NULL, 1, '2020-11-12 16:38:20', NULL),
(22, 0, '0', '0', 150000.00, '2020-11-15 19:31:06', 'fe691de035d0ce80acaf43091474da987ee1b1938b72382fbe365ab8f356ec0c', NULL, NULL, NULL, 4, '2020-11-14 16:31:07', NULL),
(23, 0, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-16 15:23:12', NULL),
(24, 0, '0', '0', 100000.00, '2020-11-17 18:23:29', '2fe5fbbed2df4b66086f0c0bdebc61bba5cf45c0e3bc45b95728bcf055a0a794', NULL, NULL, NULL, 4, '2020-11-16 15:23:30', NULL),
(92, 0, '0', '0', 51000.00, '2020-11-24 13:33:41', '27904ada859596a7f548225638accd5e8714d1b5cddb6930ed363c0dfc34bd40', NULL, NULL, NULL, 4, '2020-11-23 10:33:42', NULL),
(93, 0, '0', '0', 1000.00, '2020-11-24 13:34:29', '55bf6d4df012c8191762c0dae0277e29b18502069db3daea89a80a003ebbae09', NULL, NULL, NULL, 4, '2020-11-23 10:34:30', NULL),
(94, 0, 'Aqui Pago', '0', 1000.00, '2020-11-24 14:21:47', '3b573afe310c29603d060e0cac66f8aa12ec85c743d8fdff3d6fb1f75bd85e26', '1153877', 0, 2, 4, '2020-11-23 11:21:47', '0000-00-00 00:00:00'),
(95, 0, '0', '0', 1000.00, '2020-11-24 15:10:12', '6421046a416fa7b48b7f731698ce65ee9a5a4bcd8b50b3a6d3f38db808dfc2b7', NULL, NULL, NULL, 4, '2020-11-23 12:10:12', NULL),
(97, 0, 'Aqui Pago', '0', 128000.00, '2020-11-25 22:17:29', '8f84341275b5f7239379bed1c9e5b972e493f009019921a1cc9f00858439d38d', '1160831', 0, 2, 4, '2020-11-24 19:17:30', '0000-00-00 00:00:00'),
(98, 1, 'Bancard - V2.0', '0', 1000.00, '2020-11-25 22:25:10', '29216b651412750a80b03da6e846a277e2d917d7a013c651975d0cb856b21ce5', '1160844', 0, 16, 4, '2020-11-24 19:25:11', '0000-00-00 00:00:00'),
(99, 1, 'Pago Móvil', '0', 1000.00, '2020-11-28 16:43:42', '567c7d40379f049982082f55b079e456125d3abeaa6660ba6c22851954142766', '1167079', 0, 13, 4, '2020-11-27 16:43:45', '0000-00-00 00:00:00'),
(100, 0, '0', '0', 1000.00, '2020-12-12 10:43:20', '2bad41b6f2a73fc0207dd3822dd1a6876a17d44c76db4c7f3f44885bc1c02a2e', NULL, NULL, NULL, 3, '2020-12-11 10:43:21', NULL),
(101, 0, 'Aqui Pago', '0', 1000.00, '2020-12-12 10:44:48', 'f308c026aa08bd2eb78bcf47cd3df26c3c374815d6910a8180971e228e34632f', '1194453', 0, 2, 3, '2020-12-11 10:44:50', '0000-00-00 00:00:00'),
(102, 0, 'Pago Express', '0', 1000.00, '2020-12-12 10:56:42', '56961373edbc4ced27e590ef1b38796e04c41bb65c247d263a66b41da3081726', '1194463', 0, 3, 3, '2020-12-11 10:56:44', '0000-00-00 00:00:00'),
(103, 1, 'Tigo Money', '0', 15000.00, '2020-12-12 11:08:51', '456860587e73fc17d9f5ec8047165cd559cc61390db6205b3d58a5121858b4ae', '1194499', 0, 10, 6, '2020-12-11 11:08:52', '0000-00-00 00:00:00'),
(104, 0, 'Aqui Pago', '0', 154900.00, '2020-12-18 20:57:43', '26fd17c9e6a04091f6f7657d641ff78c9ee9f17119e3092400ffc6279413c56b', '1205982', 0, 2, 4, '2020-12-17 20:57:46', '0000-00-00 00:00:00'),
(105, 0, '0', '0', 120000.00, '2021-03-17 19:38:32', '873cb0d73ced2e21c15fb982cbdffdf0ea791a27c72f947a7b1b54ca2d3e069d', NULL, NULL, NULL, 4, '2021-03-16 19:38:35', NULL),
(106, 0, '0', '0', 161100.00, '2021-04-02 09:00:45', '5320bb0293a8f4d049884ce61a9d730d645cc403b7b4b9f1c386f43e918efa0c', NULL, NULL, NULL, 21, '2021-04-01 10:00:46', NULL),
(107, 0, 'Procard - Tarjetas de crédito', '0', 110000.00, '2021-04-06 10:03:04', '1902b8ab6b8c63ed7d1234b881de42d8ce8de4f805ec097f7e071aef6297c2c7', '1545846', 0, 1, 17, '2021-04-05 11:03:06', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_atributo`
--
ALTER TABLE `tb_atributo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_atr_valor`
--
ALTER TABLE `tb_atr_valor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ciudad`
--
ALTER TABLE `tb_ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_cli_direccion`
--
ALTER TABLE `tb_cli_direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_met_envio`
--
ALTER TABLE `tb_met_envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_met_pago`
--
ALTER TABLE `tb_met_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ped_detalle`
--
ALTER TABLE `tb_ped_detalle`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`,`id_stock`);

--
-- Indices de la tabla `tb_ped_status`
--
ALTER TABLE `tb_ped_status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_producto_atributo`
--
ALTER TABLE `tb_producto_atributo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_producto_atr_valor`
--
ALTER TABLE `tb_producto_atr_valor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_producto_categoria`
--
ALTER TABLE `tb_producto_categoria`
  ADD PRIMARY KEY (`id_producto`,`id_categoria`);

--
-- Indices de la tabla `tb_producto_combinacion`
--
ALTER TABLE `tb_producto_combinacion`
  ADD PRIMARY KEY (`id_combinacion`,`id_producto_atr_valor`);

--
-- Indices de la tabla `tb_producto_img`
--
ALTER TABLE `tb_producto_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_producto_stock`
--
ALTER TABLE `tb_producto_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_revendedor`
--
ALTER TABLE `tb_revendedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_stock_valor`
--
ALTER TABLE `tb_stock_valor`
  ADD PRIMARY KEY (`id_atr_valor`,`id_stock`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuario_cliente`
--
ALTER TABLE `tb_usuario_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_atributo`
--
ALTER TABLE `tb_atributo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_atr_valor`
--
ALTER TABLE `tb_atr_valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tb_cli_direccion`
--
ALTER TABLE `tb_cli_direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_met_envio`
--
ALTER TABLE `tb_met_envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_met_pago`
--
ALTER TABLE `tb_met_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `tb_ped_status`
--
ALTER TABLE `tb_ped_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT de la tabla `tb_producto_atributo`
--
ALTER TABLE `tb_producto_atributo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_producto_atr_valor`
--
ALTER TABLE `tb_producto_atr_valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tb_producto_img`
--
ALTER TABLE `tb_producto_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT de la tabla `tb_producto_stock`
--
ALTER TABLE `tb_producto_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `tb_revendedor`
--
ALTER TABLE `tb_revendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_usuario_cliente`
--
ALTER TABLE `tb_usuario_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
