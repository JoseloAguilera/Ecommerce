-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecommerce`;

-- Volcando estructura para tabla ecommerce.tb_atributo
CREATE TABLE IF NOT EXISTS `tb_atributo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_atributo: 2 rows
/*!40000 ALTER TABLE `tb_atributo` DISABLE KEYS */;
INSERT INTO `tb_atributo` (`id`, `nombre`, `activo`) VALUES
	(1, 'Colores', 1),
	(3, 'Medida', 1);
/*!40000 ALTER TABLE `tb_atributo` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_atr_valor
CREATE TABLE IF NOT EXISTS `tb_atr_valor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_atributo` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_atr_valor: 5 rows
/*!40000 ALTER TABLE `tb_atr_valor` DISABLE KEYS */;
INSERT INTO `tb_atr_valor` (`id`, `id_atributo`, `nombre`, `activo`) VALUES
	(1, 1, 'Azul', 1),
	(2, 1, 'Amarillo', 1),
	(8, 1, 'Blanco', 1),
	(7, 1, 'Rojo', 1),
	(5, 3, '10 cm x 15 cm', 1);
/*!40000 ALTER TABLE `tb_atr_valor` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_banner
CREATE TABLE IF NOT EXISTS `tb_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `text_alt` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `posicion` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_banner: 6 rows
/*!40000 ALTER TABLE `tb_banner` DISABLE KEYS */;
INSERT INTO `tb_banner` (`id`, `img`, `text_alt`, `url`, `orden`, `posicion`, `activo`) VALUES
	(3, 'banner-2020-11-11-jpeg', 'Bienvenido a nuestra tienda', 'categorie.php?cat=127', 1, 0, 0),
	(7, 'banner-2020-11-11-07-56-01-jpeg', 'Quepis Choraboy', '', 1, 1, 1),
	(4, 'banner-2020-11-11-05-34-32-jpeg', 'Nuestros Sombreros', 'categorie.php?cat=117', 2, 0, 1),
	(10, 'banner-2020-11-11-10-25-41-png', '', '', 2, 1, 1),
	(11, 'banner-2020-12-15-11-49-51.jpeg', '', '', 1, 0, 1),
	(12, 'banner-2020-12-18-12-09-21.jpeg', 'Banner pequeno', '', 1, 2, 1);
/*!40000 ALTER TABLE `tb_banner` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_categoria
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `menu` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `url` varchar(80) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_categoria: 14 rows
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
INSERT INTO `tb_categoria` (`id`, `nombre`, `id_padre`, `menu`, `activo`, `url`) VALUES
	(127, 'Oculos', NULL, 1, 1, 'oculos-74543.jpeg'),
	(122, 'Cuchillos', 121, 0, 1, ''),
	(123, 'Conjunto', 121, 0, 1, ''),
	(124, 'Canivete', NULL, 1, 1, 'canivete-59585.jpeg'),
	(125, 'Joyas', NULL, 1, 1, 'joyas-31218.jpeg'),
	(126, 'Medallas', 125, 0, 1, ''),
	(121, 'Utensilios', NULL, 0, 1, ''),
	(120, 'Bombillas', 118, 1, 1, 'bombillas-74886.jpeg'),
	(119, 'Guampas', 118, 1, 1, 'guampas-92910.jpeg'),
	(118, 'Personalizados', NULL, 1, 1, ''),
	(117, 'Sombreros', 115, 0, 0, ''),
	(116, 'Quepis', 115, 0, 0, 'quepis-30599.jpeg'),
	(115, 'Gorros', NULL, 1, 1, 'gorros-31011.png'),
	(128, 'Termos', 118, 1, 1, 'termos-23046.jpeg');
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ciudad
CREATE TABLE IF NOT EXISTS `tb_ciudad` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_ciudad: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ciudad` DISABLE KEYS */;
INSERT INTO `tb_ciudad` (`id`, `nombre`, `id_departamento`) VALUES
	(1, 'CDE', 1),
	(2, 'HERNANDARIAS', 1),
	(3, 'ASUNCION', 2);
/*!40000 ALTER TABLE `tb_ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_cliente
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `ruc` varchar(20) DEFAULT NULL COMMENT 'RUC, RG, CI',
  `documento` varchar(50) DEFAULT NULL,
  `razon_social` varchar(80) DEFAULT NULL,
  `mayorista` tinyint(1) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_cliente: 5 rows
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` (`id`, `nombre`, `apellido`, `ruc`, `documento`, `razon_social`, `mayorista`, `telefono`, `email`) VALUES
	(1, 'Ana Carolina', 'de Vernazza', 'RUC', '2498760', 'Mario Vernazza', 0, '0983781248', 'anacarolinaapv@gmail.com'),
	(2, 'Juan', 'richard', NULL, NULL, NULL, 0, NULL, NULL),
	(3, 'Juan Richard', 'CABRERA', 'CI', '4402658', 'CAPACIT', 1, '09826371278', 'capacitcursoscde@gmail.com'),
	(4, 'José', 'Aguilera', '5971557-0', '5971557', 'José Aguilera', 1, '973 118404', 'joseaguilera1709@gmail.com'),
	(5, 'Jose ', 'Minorista', NULL, NULL, NULL, 0, NULL, NULL);
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_cli_direccion
CREATE TABLE IF NOT EXISTS `tb_cli_direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `departamento` varchar(80) NOT NULL,
  `referencia` varchar(80) DEFAULT NULL,
  `favorito` tinyint(1) NOT NULL COMMENT '0 -> no 1 -> sí',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_cli_direccion: 3 rows
/*!40000 ALTER TABLE `tb_cli_direccion` DISABLE KEYS */;
INSERT INTO `tb_cli_direccion` (`id`, `id_cliente`, `calle`, `ciudad`, `departamento`, `referencia`, `favorito`) VALUES
	(5, 3, 'Avda. San Blas. Km 3 y medio', '3', '2', 'cerca de mi vecino', 1),
	(6, 1, 'Calle Las Orquideas con Los Lapachos', '1', '1', 'Casa de esquina', 1),
	(7, 4, 'Av. Blas Garay', '1', '1', 'Mi casa', 1);
/*!40000 ALTER TABLE `tb_cli_direccion` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_departamento
CREATE TABLE IF NOT EXISTS `tb_departamento` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_departamento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_departamento` DISABLE KEYS */;
INSERT INTO `tb_departamento` (`id`, `nombre`) VALUES
	(1, 'Alto Parana'),
	(2, 'Central');
/*!40000 ALTER TABLE `tb_departamento` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_marca
CREATE TABLE IF NOT EXISTS `tb_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `url` varchar(80) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_marca: 6 rows
/*!40000 ALTER TABLE `tb_marca` DISABLE KEYS */;
INSERT INTO `tb_marca` (`id`, `nombre`, `url`, `activo`) VALUES
	(2, 'Tokyo', 'Tokyo.png-2020-09-19', 1),
	(4, 'JBL', 'jbl-logo.jpg-2020-09-19', 1),
	(5, 'Sacudidos', 'no-image.png', 1),
	(6, 'Choraboy', 'no-image.png', 1),
	(7, 'Desconocida', 'no-image.png', 1),
	(8, 'Personalizado', 'no-image.png', 1);
/*!40000 ALTER TABLE `tb_marca` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_met_envio
CREATE TABLE IF NOT EXISTS `tb_met_envio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  `costo` double DEFAULT '0',
  `default` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_met_envio: 2 rows
/*!40000 ALTER TABLE `tb_met_envio` DISABLE KEYS */;
INSERT INTO `tb_met_envio` (`id`, `descripcion`, `costo`, `default`) VALUES
	(1, 'AEX', 45000, 1),
	(2, 'Retirar en la Tienda', 0, 0);
/*!40000 ALTER TABLE `tb_met_envio` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_met_envio_costo
CREATE TABLE IF NOT EXISTS `tb_met_envio_costo` (
  `id` int(11) DEFAULT NULL,
  `id_met_envio` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `tiempo_entrega` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_met_envio_costo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_met_envio_costo` DISABLE KEYS */;
INSERT INTO `tb_met_envio_costo` (`id`, `id_met_envio`, `id_ciudad`, `precio`, `tiempo_entrega`) VALUES
	(1, 1, 1, 50000, '48hs'),
	(2, 1, 2, 60000, '24hs');
/*!40000 ALTER TABLE `tb_met_envio_costo` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_met_pago
CREATE TABLE IF NOT EXISTS `tb_met_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  `default` int(11) DEFAULT NULL,
  `instrucciones` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_met_pago: 2 rows
/*!40000 ALTER TABLE `tb_met_pago` DISABLE KEYS */;
INSERT INTO `tb_met_pago` (`id`, `descripcion`, `default`, `instrucciones`) VALUES
	(1, 'TARJETA / PAGO EXPRESS / PAGOPAR', 1, NULL),
	(2, 'GIROS TIGO', NULL, 'Luego de la compra podes realizar el giro al 0983 112 965 y enviar el comprobante al mismo numero');
/*!40000 ALTER TABLE `tb_met_pago` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_pais
CREATE TABLE IF NOT EXISTS `tb_pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_pais: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_pais` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pais` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_pedido
CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cliente` int(11) NOT NULL,
  `id_met_pago` int(11) NOT NULL,
  `id_met_envio` int(11) NOT NULL,
  `id_cli_direccion` int(11) NOT NULL DEFAULT '1',
  `total` double NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `total_envio` double DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_pedido: 79 rows
/*!40000 ALTER TABLE `tb_pedido` DISABLE KEYS */;
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
	(52, '2020-11-14 16:31:06', 4, 1, 1, 1, 100000, NULL, '', 50000, 0),
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
	(98, '2020-11-24 19:25:10', 4, 1, 2, 1, 1000, NULL, '', 0, 0),
	(99, '2020-11-27 16:43:42', 4, 1, 2, 1, 1000, NULL, 'Llamar para entrega', 0, 0);
/*!40000 ALTER TABLE `tb_pedido` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ped_detalle
CREATE TABLE IF NOT EXISTS `tb_ped_detalle` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valor_unitario` double NOT NULL,
  `ctd` int(11) NOT NULL,
  `descuento` double DEFAULT NULL,
  `valor_total` double NOT NULL,
  PRIMARY KEY (`id_pedido`,`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_ped_detalle: 89 rows
/*!40000 ALTER TABLE `tb_ped_detalle` DISABLE KEYS */;
INSERT INTO `tb_ped_detalle` (`id_pedido`, `id_producto`, `valor_unitario`, `ctd`, `descuento`, `valor_total`) VALUES
	(21, 15, 76000, 1, 0, 76000),
	(21, 6, 250000, 1, 0, 250000),
	(22, 15, 76000, 3, 0, 228000),
	(22, 6, 250000, 1, 0, 250000),
	(23, 15, 76000, 3, 0, 228000),
	(23, 6, 250000, 3, 0, 750000),
	(24, 15, 76000, 3, 0, 228000),
	(24, 6, 250000, 3, 0, 750000),
	(25, 15, 76000, 3, 0, 228000),
	(25, 6, 250000, 3, 0, 750000),
	(26, 15, 76000, 3, 0, 228000),
	(26, 6, 250000, 3, 0, 750000),
	(27, 15, 76000, 3, 0, 228000),
	(27, 6, 250000, 3, 0, 750000),
	(28, 15, 76000, 3, 0, 228000),
	(28, 6, 250000, 3, 0, 750000),
	(29, 15, 76000, 3, 0, 228000),
	(29, 6, 250000, 3, 0, 750000),
	(30, 12, 78650, 1, 0, 78650),
	(31, 12, 78650, 1, 0, 78650),
	(32, 11, 57890, 2, 0, 115780),
	(33, 11, 57890, 3, 0, 173670),
	(33, 8, 76800, 3, 0, 230400),
	(34, 15, 76000, 1, NULL, 76000),
	(35, 8, 76800, 1, 0, 76800),
	(35, 6, 250000, 1, 0, 250000),
	(37, 8, 76800, 1, 0, 76800),
	(38, 8, 76800, 1, 0, 76800),
	(39, 8, 76800, 1, 0, 76800),
	(40, 8, 76800, 1, 0, 76800),
	(41, 8, 76800, 1, 0, 76800),
	(42, 8, 76800, 1, 0, 76800),
	(43, 8, 76800, 1, 0, 76800),
	(44, 8, 76800, 1, 0, 76800),
	(45, 8, 76800, 1, 0, 76800),
	(46, 8, 76800, 1, 0, 76800),
	(47, 8, 76800, 1, 0, 76800),
	(48, 8, 76800, 1, 0, 76800),
	(49, 13, 100000, 1, 0, 100000),
	(50, 13, 100000, 1, 0, 100000),
	(51, 13, 100000, 1, 0, 100000),
	(52, 13, 100000, 1, 0, 100000),
	(53, 13, 100000, 1, 0, 100000),
	(54, 13, 100000, 1, 0, 100000),
	(55, 13, 100000, 1, 0, 100000),
	(56, 6, 134000, 1, 0, 134000),
	(57, 16, 1500, 1, 0, 1500),
	(58, 16, 1500, 1, 0, 1500),
	(59, 16, 1500, 1, 0, 1500),
	(60, 16, 1500, 1, 0, 1500),
	(61, 16, 1500, 1, 0, 1500),
	(62, 16, 1000, 1, 0, 1000),
	(63, 16, 1000, 1, 0, 1000),
	(64, 16, 1000, 1, 0, 1000),
	(65, 16, 1000, 1, 0, 1000),
	(66, 16, 1000, 1, 0, 1000),
	(67, 16, 1000, 1, 0, 1000),
	(68, 16, 1000, 1, 0, 1000),
	(69, 16, 1000, 1, 0, 1000),
	(70, 16, 1000, 1, 0, 1000),
	(71, 16, 1000, 1, 0, 1000),
	(72, 16, 1000, 1, 0, 1000),
	(73, 16, 1000, 1, 0, 1000),
	(74, 16, 1000, 1, 0, 1000),
	(75, 16, 1000, 1, 0, 1000),
	(76, 16, 1000, 1, 0, 1000),
	(77, 16, 1000, 1, 0, 1000),
	(78, 16, 1000, 1, 0, 1000),
	(79, 16, 1000, 1, 0, 1000),
	(80, 16, 1000, 1, 0, 1000),
	(81, 16, 1000, 1, 0, 1000),
	(82, 16, 1000, 1, 0, 1000),
	(83, 16, 1000, 1, 0, 1000),
	(84, 16, 1000, 1, 0, 1000),
	(85, 16, 1000, 1, 0, 1000),
	(86, 16, 1000, 1, 0, 1000),
	(87, 16, 1000, 1, 0, 1000),
	(88, 16, 1000, 1, 0, 1000),
	(89, 16, 1000, 1, 0, 1000),
	(90, 16, 1000, 1, 0, 1000),
	(91, 16, 1000, 1, 0, 1000),
	(92, 16, 1000, 1, 0, 1000),
	(93, 16, 1000, 1, 0, 1000),
	(94, 16, 1000, 1, 0, 1000),
	(95, 16, 1000, 1, 0, 1000),
	(96, 12, 78650, 1, 0, 78650),
	(97, 14, 78000, 1, 0, 78000),
	(98, 16, 1000, 1, 0, 1000),
	(99, 35, 1000, 1, 0, 1000);
/*!40000 ALTER TABLE `tb_ped_detalle` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ped_status
CREATE TABLE IF NOT EXISTS `tb_ped_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_ped_status: 4 rows
/*!40000 ALTER TABLE `tb_ped_status` DISABLE KEYS */;
INSERT INTO `tb_ped_status` (`id`, `descripcion`) VALUES
	(0, 'Pendiente'),
	(1, 'En Revisión'),
	(2, 'Pagado'),
	(3, 'Finalizado');
/*!40000 ALTER TABLE `tb_ped_status` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto
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
  `total_hits` int(11) NOT NULL DEFAULT '0',
  `unique_hits` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto: 19 rows
/*!40000 ALTER TABLE `tb_producto` DISABLE KEYS */;
INSERT INTO `tb_producto` (`id`, `referencia`, `nombre`, `descripcion`, `valor_minorista`, `valor_mayorista`, `id_marca`, `destaque`, `activo`, `total_hits`, `unique_hits`) VALUES
	(28, '1012', 'Guampa Acrílico + Bombilla', 'Guampa de Acrílico color blanco + bombilla', 87000, 100000, 7, 1, 1, 11, 5),
	(27, '1011', 'Kit 3 Navajas', 'Kit de 3 Navajas', 123000, 175000, 7, 1, 1, 4, 4),
	(25, '9999', 'Quepis Cowboy', 'Quepis Rosa Cowboy', 65987, 79000, 5, 1, 1, 4, 4),
	(26, '1010', 'Guampa + Bombilla ', 'Guampa + Bombilla persinalizada con estampa', 130000, 150000, 8, 1, 1, 3, 3),
	(24, '8888', 'Quepis Celeste', 'Quepis celeste con detalles alrededor, logo en frente color negro\r\n', 35000, 52000, 6, 1, 1, 7, 5),
	(23, '7777', 'Quepis Rojo', 'Quepis Rojo con logo negro, y malla red en parte trasera', 46000, 54900, 6, 1, 1, 6, 4),
	(22, '6666', 'Quepis Camuflaje', 'Quepis con diseño camuflaje - malla trasera red', 33000, 56900, 5, 1, 1, 7, 7),
	(21, '5555', 'Combo de 3 Quepis', 'Combo de 3 queps Square, color blanco, negro y blanco+negro', 143000, 198000, 6, 1, 1, 3, 3),
	(20, '4444', 'Quepis Pescador Blanco', 'Quepis color blanco con estampa de pescado en la frente', 45800, 76000, 5, 1, 1, 6, 5),
	(19, '3333', 'Quepis detalle Cruz', 'Quepis color negro en tela transpirable con detalle en la frente de Cruz en color dorado', 30000, 56000, 7, 1, 1, 4, 4),
	(18, '2222', 'Quepis Azul - Logo Rojo', 'Quepis color azul con detalles rojos en el logo, y tela de malla en la parte trasera', 1100, 13000, 5, 1, 1, 3, 3),
	(17, '1111', 'Quepis Negro con Detalles', 'Quepis Negro con Detalles en todo el exterior', 1000, 1500, 6, 1, 1, 3, 3),
	(29, '1013', 'Terere Resinado', 'Bombilla', 35000, 53000, 7, 1, 1, 4, 4),
	(30, '1014', 'Guampa Metal Cuadrada Personalizada', 'Guampa', 33000, 55000, 8, 1, 1, 4, 4),
	(31, '1015', 'Guampa Mate Personalizada', 'Guampa para Mate de madera con grabado personalizado', 24000, 37500, 8, 1, 1, 5, 5),
	(32, '1016', 'Termo Forrado completo + Guampa', 'Termo Forrado Cuerpo + Tapa + Guampa', 130000, 170000, 7, 1, 1, 3, 3),
	(33, '1017', 'Termo Forrado solo Cuerpo + Guampa', 'Termo Forrado solamente en el cuerpo, la tapa sin forro + Guampa', 100000, 150000, 8, 1, 1, 3, 3),
	(34, '1018', 'Sombrero de Paja', 'Sombrero de Paja lanzamiento ', 67000, 100000, 5, 1, 1, 4, 4),
	(35, '2211', 'Teste', 'aasdasas', 1500, 1000, 7, 1, 1, 10, 5);
/*!40000 ALTER TABLE `tb_producto` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_atributo
CREATE TABLE IF NOT EXISTS `tb_producto_atributo` (
  `id_producto` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_atributo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_atributo: 2 rows
/*!40000 ALTER TABLE `tb_producto_atributo` DISABLE KEYS */;
INSERT INTO `tb_producto_atributo` (`id_producto`, `id_atributo`) VALUES
	(1, 1),
	(1, 3);
/*!40000 ALTER TABLE `tb_producto_atributo` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_categoria
CREATE TABLE IF NOT EXISTS `tb_producto_categoria` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_categoria: 44 rows
/*!40000 ALTER TABLE `tb_producto_categoria` DISABLE KEYS */;
INSERT INTO `tb_producto_categoria` (`id_producto`, `id_categoria`) VALUES
	(17, 115),
	(17, 116),
	(18, 115),
	(18, 116),
	(19, 115),
	(19, 116),
	(20, 115),
	(20, 116),
	(21, 115),
	(21, 116),
	(22, 115),
	(22, 116),
	(23, 115),
	(23, 116),
	(24, 115),
	(24, 116),
	(25, 115),
	(25, 116),
	(26, 118),
	(26, 119),
	(26, 120),
	(27, 121),
	(27, 122),
	(28, 118),
	(28, 119),
	(28, 120),
	(29, 118),
	(29, 120),
	(30, 118),
	(30, 119),
	(31, 118),
	(31, 119),
	(32, 118),
	(32, 121),
	(32, 123),
	(32, 128),
	(33, 118),
	(33, 121),
	(33, 123),
	(33, 128),
	(34, 115),
	(34, 117),
	(35, 121),
	(35, 123);
/*!40000 ALTER TABLE `tb_producto_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_img
CREATE TABLE IF NOT EXISTS `tb_producto_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(80) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_img: 22 rows
/*!40000 ALTER TABLE `tb_producto_img` DISABLE KEYS */;
INSERT INTO `tb_producto_img` (`id`, `url`, `id_producto`, `orden`, `activo`) VALUES
	(9, 'cod1-2020-10-08-aire-split.jpg', 1, 1, 1),
	(34, 'cod27-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.26 (2).jpeg', 27, 2, 1),
	(33, 'cod27-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.27.jpeg', 27, 1, 1),
	(31, 'cod25-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.27 (2).jpeg', 25, 1, 1),
	(32, 'cod26-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.27 (1).jpeg', 26, 1, 1),
	(30, 'cod24-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28.jpeg', 24, 1, 1),
	(29, 'cod23-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28 (1).jpeg', 23, 1, 1),
	(28, 'cod22-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28 (2).jpeg', 22, 1, 1),
	(27, 'cod21-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.28 (3).jpeg', 21, 1, 1),
	(26, 'cod20-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29.jpeg', 20, 1, 1),
	(24, 'cod18-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29 (2).jpeg', 18, 1, 1),
	(25, 'cod19-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.29 (1).jpeg', 19, 1, 1),
	(23, 'cod17-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.30.jpeg', 17, 1, 1),
	(35, 'cod28-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.26 (1).jpeg', 28, 1, 1),
	(36, 'cod29-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.25 (2).jpeg', 29, 1, 1),
	(37, 'cod30-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.23.jpeg', 30, 1, 1),
	(38, 'cod31-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.21.jpeg', 31, 1, 1),
	(39, 'cod31-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.20 (2).jpeg', 31, 2, 1),
	(40, 'cod32-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.21 (2).jpeg', 32, 1, 1),
	(41, 'cod33-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.21 (1).jpeg', 33, 1, 1),
	(42, 'cod34-2020-11-25-WhatsApp Image 2020-11-24 at 16.43.18.jpeg', 34, 1, 1),
	(43, 'no-image.png', 35, 1, 1);
/*!40000 ALTER TABLE `tb_producto_img` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_stock
CREATE TABLE IF NOT EXISTS `tb_producto_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `valor_minorista` int(11) DEFAULT NULL,
  `valor_mayorista` int(11) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_stock: 21 rows
/*!40000 ALTER TABLE `tb_producto_stock` DISABLE KEYS */;
INSERT INTO `tb_producto_stock` (`id`, `id_producto`, `stock`, `valor_minorista`, `valor_mayorista`, `activo`) VALUES
	(1, 1, 10, 1000000, 900000, 1),
	(2, 1, 12, 1000000, 900000, 1),
	(28, 28, 12, 97000, 100000, 1),
	(27, 27, 14, 123000, 175000, 1),
	(26, 26, 10, 130000, 150000, 1),
	(29, 29, 18, 35000, 53000, 1),
	(25, 25, 100, 65987, 79000, 1),
	(24, 24, 134, 35000, 52000, 1),
	(23, 23, 122, 46000, 54900, 1),
	(22, 22, 156, 33000, 56900, 1),
	(21, 21, 123, 143000, 198000, 1),
	(19, 19, 155, 30000, 56000, 1),
	(20, 20, 154, 45800, 76000, 1),
	(18, 18, 13, 1100, 13000, 1),
	(17, 17, 100, 1000, 1500, 1),
	(30, 30, 15, 33000, 55000, 1),
	(31, 31, 10, 24000, 37500, 1),
	(32, 32, 12, 130000, 170000, 1),
	(33, 33, 8, 100000, 150000, 1),
	(34, 34, 18, 67000, 100000, 1),
	(35, 35, 12, 1000, 1500, 1);
/*!40000 ALTER TABLE `tb_producto_stock` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_stock_valor
CREATE TABLE IF NOT EXISTS `tb_stock_valor` (
  `id_atr_valor` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_atr_valor`,`id_stock`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_stock_valor: 4 rows
/*!40000 ALTER TABLE `tb_stock_valor` DISABLE KEYS */;
INSERT INTO `tb_stock_valor` (`id_atr_valor`, `id_stock`, `id_producto`) VALUES
	(5, 1, 1),
	(8, 1, 1),
	(1, 2, 1),
	(5, 2, 1);
/*!40000 ALTER TABLE `tb_stock_valor` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_usuario: 1 rows
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id`, `usuario`, `password`, `nombre`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_usuario_cliente
CREATE TABLE IF NOT EXISTS `tb_usuario_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verificado` date DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `creado_en` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_usuario_cliente: 5 rows
/*!40000 ALTER TABLE `tb_usuario_cliente` DISABLE KEYS */;
INSERT INTO `tb_usuario_cliente` (`id`, `id_cliente`, `email`, `email_verificado`, `contrasena`, `creado_en`) VALUES
	(1, 1, 'anacarolinaapv@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2020-10-14'),
	(2, 2, 'richardcabrera92@hotmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2020-10-22'),
	(3, 3, 'capacitcursoscde@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-22'),
	(4, 4, 'joseaguilera1709@gmail.com', NULL, '36237e6873f106a31c77bba81980da3d', '2020-11-12'),
	(5, 5, 'joseloaguilerita@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', '2020-11-18');
/*!40000 ALTER TABLE `tb_usuario_cliente` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
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
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.transactions: 13 rows
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
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
	(99, 0, 'Pago Express', '0', 1000.00, '2020-11-28 16:43:42', '567c7d40379f049982082f55b079e456125d3abeaa6660ba6c22851954142766', '1167079', 0, 3, 4, '2020-11-27 16:43:45', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
