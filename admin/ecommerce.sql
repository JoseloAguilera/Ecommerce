-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-10-2020 a las 00:09:06
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

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
-- Estructura de tabla para la tabla `tb_atributo`
--

DROP TABLE IF EXISTS `tb_atributo`;
CREATE TABLE IF NOT EXISTS `tb_atributo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_atributo`
--

INSERT INTO `tb_atributo` (`id`, `nombre`, `activo`) VALUES
(1, 'Colores', 1),
(3, 'Medida', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_atr_valor`
--

DROP TABLE IF EXISTS `tb_atr_valor`;
CREATE TABLE IF NOT EXISTS `tb_atr_valor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_atributo` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_atr_valor`
--

INSERT INTO `tb_atr_valor` (`id`, `id_atributo`, `nombre`, `activo`) VALUES
(1, 1, 'Azul', 1),
(2, 1, 'Amarillo', 1),
(8, 1, 'Blanco', 1),
(7, 1, 'Rojo', 1),
(5, 3, '10 cm x 15 cm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_banner`
--

DROP TABLE IF EXISTS `tb_banner`;
CREATE TABLE IF NOT EXISTS `tb_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `text_alt` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `img`, `text_alt`, `url`, `orden`, `activo`) VALUES
(3, 'banner-2020-10-14-59a0369461ad3_thumb900.jpg', 'Bienvenido a nuestra tienda', '', 1, 1),
(4, 'banner-2020-10-14-banner_marcas_aire_acondicionado_h2.jpg', 'Nuestras Marcas de Aire Acondicionado', 'categorie.php?cat=21', 2, 1),
(5, 'banner-2020-10-14-jbl-bluetooth-wireless-banner-4.jpg', 'Nuevos Auriculares JBL', 'product.php?id=2', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `menu` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `nombre`, `id_padre`, `menu`, `activo`) VALUES
(127, 'Oculos', NULL, 1, 1),
(122, 'Cuchillos', 121, 1, 1),
(123, 'Conjunto', 121, 0, 1),
(124, 'Canivete', NULL, 1, 1),
(125, 'Joyas', NULL, 1, 1),
(126, 'Medallas', 125, 1, 1),
(121, 'Utensilios', NULL, 0, 1),
(120, 'Bombillas', 118, 1, 1),
(119, 'Guampas', 118, 1, 1),
(118, 'Personalizados', NULL, 0, 1),
(117, 'Sombreros', 115, 1, 1),
(116, 'Quepis', 115, 1, 1),
(115, 'Gorros', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `tipo_documento` varchar(20) DEFAULT NULL COMMENT 'RUC, RG, CI',
  `nro_documento` int(11) DEFAULT NULL,
  `razon_social` varchar(80) DEFAULT NULL,
  `mayorista` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nombre`, `apellido`, `tipo_documento`, `nro_documento`, `razon_social`, `mayorista`) VALUES
(1, 'Ana', 'Carolina', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cli_contacto`
--

DROP TABLE IF EXISTS `tb_cli_contacto`;
CREATE TABLE IF NOT EXISTS `tb_cli_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `tipo` varchar(5) NOT NULL COMMENT 'cel/tel/email',
  `contacto` varchar(80) NOT NULL,
  `favorito` tinyint(1) NOT NULL COMMENT '0 -> no 1 -> sí',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cli_contacto`
--

INSERT INTO `tb_cli_contacto` (`id`, `id_cliente`, `tipo`, `contacto`, `favorito`) VALUES
(1, 1, 'email', 'anacarolinaapv@gmail.com', 1),
(2, 1, 'cel', '0983 781 248', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cli_direccion`
--

DROP TABLE IF EXISTS `tb_cli_direccion`;
CREATE TABLE IF NOT EXISTS `tb_cli_direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `provincia` varchar(80) NOT NULL,
  `favorito` tinyint(1) NOT NULL COMMENT '0 -> no 1 -> sí',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marca`
--

DROP TABLE IF EXISTS `tb_marca`;
CREATE TABLE IF NOT EXISTS `tb_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `url` varchar(80) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_marca`
--

INSERT INTO `tb_marca` (`id`, `nombre`, `url`, `activo`) VALUES
(2, 'Tokyo', 'Tokyo.png-2020-09-19', 1),
(4, 'JBL', 'jbl-logo.jpg-2020-09-19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_met_envio`
--

DROP TABLE IF EXISTS `tb_met_envio`;
CREATE TABLE IF NOT EXISTS `tb_met_envio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_met_pago`
--

DROP TABLE IF EXISTS `tb_met_pago`;
CREATE TABLE IF NOT EXISTS `tb_met_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedido`
--

DROP TABLE IF EXISTS `tb_pedido`;
CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_met_pago` int(11) NOT NULL,
  `id_met_envio` int(11) NOT NULL,
  `id_cli_direccion` int(11) NOT NULL,
  `total` double NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ped_detalle`
--

DROP TABLE IF EXISTS `tb_ped_detalle`;
CREATE TABLE IF NOT EXISTS `tb_ped_detalle` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valor_unitario` double NOT NULL,
  `ctd` int(11) NOT NULL,
  `descuento` double DEFAULT NULL,
  `valor_total` double NOT NULL,
  PRIMARY KEY (`id_pedido`,`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

DROP TABLE IF EXISTS `tb_producto`;
CREATE TABLE IF NOT EXISTS `tb_producto` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(20) DEFAULT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `valor_minorista` int(11) DEFAULT NULL,
  `valor_mayorista` int(11) DEFAULT NULL,
  `id_marca` int(11) NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`id`, `referencia`, `nombre`, `descripcion`, `valor_minorista`, `valor_mayorista`, `id_marca`, `destaque`, `activo`) VALUES
(4, '12345', 'Cuchillo Criolla', 'Cuchillo filoso de la marca Criolla', 30000, 20000, 4, 1, 1),
(5, '12', 'Cuchillo Rodeio Negro', 'Cuchilo color negro, rodeio, personalizable', 500000, 340000, 4, 0, 1),
(6, '13', 'Conj, Rodeio Cuchillo + Afilador', 'Conjunto de cuchilo + afilador, rodeio con mango de madera y estuche de cuero marrón', 250000, 134000, 4, 1, 1),
(7, '14', 'Quepis blanco Choraboy', 'Quepis color blanco, en tela de algodon ', 80000, 50000, 4, 0, 1),
(8, '15', 'Quepis ChoraBoy Rosa ', 'Quepis ChoraBoy Rosa Tamaño XL', 76800, 56000, 4, 1, 1),
(9, '16', 'Quepis Choraboy con Bordado de Rosa', 'Quepis Choraboy Blanco con Bordado de Rosa en color negro', 99000, 56789, 4, 1, 1),
(10, '17', 'Quepis Gallo Negro + Marrón ', 'Quepis Gallo Negro + Marrón con logo en cuerina y parte de atrás en malla agujereada', 88700, 56789, 4, 1, 1),
(11, '18', 'Quepis Made in Mato Negro', 'Quepis Made in Mato Negro de tela con logo en  color blanco', 57890, 33555, 4, 1, 1),
(12, '19', 'Quepis Made in Mato Negro + Marron 4x4', 'Quepis Made in Mato Negro Frente + Marrón Atrás con logo 4x4 ', 78650, 500000, 4, 1, 1),
(13, '20', 'Medalla de Oro Maiz y Soja', 'Medalla en forma de Maiz y Soja en oro de 18K', 100000, 78900, 4, 1, 1),
(14, '21', 'Quepis Choraboy Naranja', 'Quepis Choraboy Naranja con Logo en color negro, rasgado al frente', 109000, 78000, 4, 1, 1),
(15, '22', 'Quepis Chora Boy Celeste', 'Quepis Chora Boy Celeste con logo letras bordado en rectángulo negro ', 76000, 45000, 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_atributo`
--

DROP TABLE IF EXISTS `tb_producto_atributo`;
CREATE TABLE IF NOT EXISTS `tb_producto_atributo` (
  `id_producto` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_atributo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_atributo`
--

INSERT INTO `tb_producto_atributo` (`id_producto`, `id_atributo`) VALUES
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_categoria`
--

DROP TABLE IF EXISTS `tb_producto_categoria`;
CREATE TABLE IF NOT EXISTS `tb_producto_categoria` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_categoria`
--

INSERT INTO `tb_producto_categoria` (`id_producto`, `id_categoria`) VALUES
(4, 118),
(4, 121),
(4, 122),
(5, 118),
(5, 121),
(5, 122),
(6, 118),
(6, 121),
(6, 122),
(6, 123),
(7, 115),
(7, 116),
(8, 115),
(8, 116),
(9, 115),
(9, 116),
(10, 115),
(10, 116),
(11, 115),
(11, 116),
(12, 115),
(12, 116),
(13, 125),
(13, 126),
(14, 115),
(14, 116),
(15, 115),
(15, 116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_img`
--

DROP TABLE IF EXISTS `tb_producto_img`;
CREATE TABLE IF NOT EXISTS `tb_producto_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(80) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_img`
--

INSERT INTO `tb_producto_img` (`id`, `url`, `id_producto`, `orden`, `activo`) VALUES
(9, 'cod1-2020-10-08-aire-split.jpg', 1, 1, 1),
(11, 'cod4-2020-10-15-294d6510-e91d-42ea-844b-d4585b8b5696.jpg', 4, 1, 1),
(12, 'cod5-2020-10-15-6c463152-ff32-4dda-a8e5-edc7abb06dd7.jpg', 5, 1, 1),
(13, 'cod6-2020-10-15-6d4da8f8-5e8b-435e-b993-89a649a8a466.jpg', 6, 1, 1),
(14, 'cod7-2020-10-15-dfdaf1c2-b0a6-4525-951a-29cd87e6760a.jpg', 7, 1, 1),
(15, 'cod8-2020-10-16-3a480051-6c0b-473a-be05-f3e6fa76c87a.jpg', 8, 1, 1),
(16, 'cod9-2020-10-16-f1f7e916-42da-4d2f-a0f0-6af141806379.jpg', 9, 1, 1),
(17, 'cod10-2020-10-16-e21d1dbb-ef7b-48e2-828b-65436505b275.jpg', 10, 1, 1),
(18, 'cod11-2020-10-16-bcb0cdfd-4555-4c4a-b350-59ee72c894bb.jpg', 11, 1, 1),
(19, 'cod12-2020-10-16-b373cab3-a3c0-4ef8-833b-65ea64ad494b.jpg', 12, 1, 1),
(20, 'cod13-2020-10-16-99b302fd-2e15-42e0-8099-6fbbdf6af8c5.jpg', 13, 1, 1),
(21, 'cod14-2020-10-16-eb2cf728-0aaa-4bca-85f5-492d7041a019.jpg', 14, 1, 1),
(22, 'cod15-2020-10-16-2f47b40c-cfe4-44cc-92bc-970fd587e5bf.jpg', 15, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto_stock`
--

DROP TABLE IF EXISTS `tb_producto_stock`;
CREATE TABLE IF NOT EXISTS `tb_producto_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `valor_minorista` int(11) DEFAULT NULL,
  `valor_mayorista` int(11) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto_stock`
--

INSERT INTO `tb_producto_stock` (`id`, `id_producto`, `stock`, `valor_minorista`, `valor_mayorista`, `activo`) VALUES
(1, 1, 10, 1000000, 900000, 1),
(2, 1, 12, 1000000, 900000, 1),
(4, 4, 20, 30000, 20000, 1),
(5, 5, 39, 500000, 340000, 1),
(6, 6, 90, 250000, 134000, 1),
(7, 7, 900, 80000, 50000, 1),
(8, 8, 33, 76800, 56000, 1),
(9, 9, 99, 99000, 56789, 1),
(10, 10, 999, 88700, 56789, 1),
(11, 11, 154, 57890, 33555, 1),
(12, 12, 19, 78650, 500000, 1),
(13, 13, 72, 100000, 78900, 1),
(14, 14, 45, 109000, 78000, 1),
(15, 15, 43, 76000, 45000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_stock_valor`
--

DROP TABLE IF EXISTS `tb_stock_valor`;
CREATE TABLE IF NOT EXISTS `tb_stock_valor` (
  `id_atr_valor` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_atr_valor`,`id_stock`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_stock_valor`
--

INSERT INTO `tb_stock_valor` (`id_atr_valor`, `id_stock`, `id_producto`) VALUES
(5, 1, 1),
(8, 1, 1),
(1, 2, 1),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `password`, `nombre`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario_cliente`
--

DROP TABLE IF EXISTS `tb_usuario_cliente`;
CREATE TABLE IF NOT EXISTS `tb_usuario_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verificado` date DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `creado_en` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuario_cliente`
--

INSERT INTO `tb_usuario_cliente` (`id`, `id_cliente`, `email`, `email_verificado`, `contrasena`, `creado_en`) VALUES
(1, 1, 'anacarolinaapv@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2020-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL,
  `typeOrder` varchar(120) DEFAULT NULL,
  `totalAmount` decimal(15,2) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `maxDateForPayment` varchar(120) DEFAULT NULL,
  `buyerId` int(11) DEFAULT NULL,
  `orderItems` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
