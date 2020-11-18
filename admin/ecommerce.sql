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
DROP TABLE IF EXISTS `tb_atributo`;
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
DROP TABLE IF EXISTS `tb_atr_valor`;
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
DROP TABLE IF EXISTS `tb_banner`;
CREATE TABLE IF NOT EXISTS `tb_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `text_alt` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `posicion` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_banner: 4 rows
/*!40000 ALTER TABLE `tb_banner` DISABLE KEYS */;
INSERT INTO `tb_banner` (`id`, `img`, `text_alt`, `url`, `orden`, `posicion`, `activo`) VALUES
	(3, 'banner-2020-11-11-jpeg', 'Bienvenido a nuestra tienda', 'categorie.php?cat=127', 1, 0, 0),
	(7, 'banner-2020-11-11-07-56-01-jpeg', 'Quepis Choraboy', '', 1, 1, 1),
	(4, 'banner-2020-11-11-05-34-32-jpeg', 'Nuestros Sombreros', 'categorie.php?cat=117', 2, 0, 1),
	(10, 'banner-2020-11-11-10-25-41-png', '', '', 2, 1, 1);
/*!40000 ALTER TABLE `tb_banner` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_categoria
DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `menu` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_categoria: 13 rows
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ciudad
DROP TABLE IF EXISTS `tb_ciudad`;
CREATE TABLE IF NOT EXISTS `tb_ciudad` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_ciudad: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ciudad` DISABLE KEYS */;
INSERT INTO `tb_ciudad` (`id`, `nombre`, `id_departamento`) VALUES
	(1, 'CDE', 1),
	(2, 'HERNANDARIAS', 1),
	(3, 'ASUNCION', 2),
	(1, 'CDE', 1),
	(2, 'HERNANDARIAS', 1),
	(3, 'ASUNCION', 2);
/*!40000 ALTER TABLE `tb_ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_cliente
DROP TABLE IF EXISTS `tb_cliente`;
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_cliente: 4 rows
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` (`id`, `nombre`, `apellido`, `ruc`, `documento`, `razon_social`, `mayorista`, `telefono`, `email`) VALUES
	(1, 'Ana Carolina', 'de Vernazza', 'RUC', '2498760', 'Mario Vernazza', 0, '0983781248', 'anacarolinaapv@gmail.com'),
	(2, 'Juan', 'richard', NULL, NULL, NULL, 0, NULL, NULL),
	(3, 'Juan Richard', 'CABRERA', 'CI', '4402658', 'CAPACIT', 1, '09826371278', 'capacitcursoscde@gmail.com'),
	(4, 'José', 'Aguilera', '5971557-0', '5971557', 'José Aguilera', 0, '973 118404', 'joseaguilera1709@gmail.com');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_cli_direccion
DROP TABLE IF EXISTS `tb_cli_direccion`;
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
DROP TABLE IF EXISTS `tb_departamento`;
CREATE TABLE IF NOT EXISTS `tb_departamento` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_departamento: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_departamento` DISABLE KEYS */;
INSERT INTO `tb_departamento` (`id`, `nombre`) VALUES
	(1, 'Alto Parana'),
	(2, 'Central'),
	(1, 'Alto Parana'),
	(2, 'Central');
/*!40000 ALTER TABLE `tb_departamento` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_marca
DROP TABLE IF EXISTS `tb_marca`;
CREATE TABLE IF NOT EXISTS `tb_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `url` varchar(80) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_marca: 2 rows
/*!40000 ALTER TABLE `tb_marca` DISABLE KEYS */;
INSERT INTO `tb_marca` (`id`, `nombre`, `url`, `activo`) VALUES
	(2, 'Tokyo', 'Tokyo.png-2020-09-19', 1),
	(4, 'JBL', 'jbl-logo.jpg-2020-09-19', 1);
/*!40000 ALTER TABLE `tb_marca` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_met_envio
DROP TABLE IF EXISTS `tb_met_envio`;
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
DROP TABLE IF EXISTS `tb_met_envio_costo`;
CREATE TABLE IF NOT EXISTS `tb_met_envio_costo` (
  `id` int(11) DEFAULT NULL,
  `id_met_envio` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `tiempo_entrega` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_met_envio_costo: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_met_envio_costo` DISABLE KEYS */;
INSERT INTO `tb_met_envio_costo` (`id`, `id_met_envio`, `id_ciudad`, `precio`, `tiempo_entrega`) VALUES
	(1, 1, 1, 50000, '48hs'),
	(2, 1, 2, 60000, '24hs'),
	(1, 1, 1, 50000, '48hs'),
	(2, 1, 2, 60000, '24hs');
/*!40000 ALTER TABLE `tb_met_envio_costo` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_met_pago
DROP TABLE IF EXISTS `tb_met_pago`;
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
DROP TABLE IF EXISTS `tb_pais`;
CREATE TABLE IF NOT EXISTS `tb_pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_pais: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_pais` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pais` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_pedido
DROP TABLE IF EXISTS `tb_pedido`;
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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_pedido: 35 rows
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
	(43, '2020-11-14 16:16:24', 4, 1, 1, 1, 76800, NULL, '', 50000, 0);
/*!40000 ALTER TABLE `tb_pedido` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ped_detalle
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

-- Volcando datos para la tabla ecommerce.tb_ped_detalle: 45 rows
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
	(55, 13, 100000, 1, 0, 100000);
/*!40000 ALTER TABLE `tb_ped_detalle` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_ped_status
DROP TABLE IF EXISTS `tb_ped_status`;
CREATE TABLE IF NOT EXISTS `tb_ped_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_ped_status: 3 rows
/*!40000 ALTER TABLE `tb_ped_status` DISABLE KEYS */;
INSERT INTO `tb_ped_status` (`id`, `descripcion`) VALUES
	(0, 'Pendiente'),
	(1, 'En Revisión'),
	(2, 'Aprobado');
/*!40000 ALTER TABLE `tb_ped_status` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto
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

-- Volcando datos para la tabla ecommerce.tb_producto: 12 rows
/*!40000 ALTER TABLE `tb_producto` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_producto` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_atributo
DROP TABLE IF EXISTS `tb_producto_atributo`;
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
DROP TABLE IF EXISTS `tb_producto_categoria`;
CREATE TABLE IF NOT EXISTS `tb_producto_categoria` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_categoria: 28 rows
/*!40000 ALTER TABLE `tb_producto_categoria` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_producto_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_img
DROP TABLE IF EXISTS `tb_producto_img`;
CREATE TABLE IF NOT EXISTS `tb_producto_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(80) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_producto_img: 13 rows
/*!40000 ALTER TABLE `tb_producto_img` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_producto_img` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_producto_stock
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

-- Volcando datos para la tabla ecommerce.tb_producto_stock: 14 rows
/*!40000 ALTER TABLE `tb_producto_stock` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_producto_stock` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.tb_stock_valor
DROP TABLE IF EXISTS `tb_stock_valor`;
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
DROP TABLE IF EXISTS `tb_usuario`;
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
DROP TABLE IF EXISTS `tb_usuario_cliente`;
CREATE TABLE IF NOT EXISTS `tb_usuario_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verificado` date DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `creado_en` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.tb_usuario_cliente: 4 rows
/*!40000 ALTER TABLE `tb_usuario_cliente` DISABLE KEYS */;
INSERT INTO `tb_usuario_cliente` (`id`, `id_cliente`, `email`, `email_verificado`, `contrasena`, `creado_en`) VALUES
	(1, 1, 'anacarolinaapv@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2020-10-14'),
	(2, 2, 'richardcabrera92@hotmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2020-10-22'),
	(3, 3, 'capacitcursoscde@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-22'),
	(4, 4, 'joseaguilera1709@gmail.com', NULL, '36237e6873f106a31c77bba81980da3d', '2020-11-12');
/*!40000 ALTER TABLE `tb_usuario_cliente` ENABLE KEYS */;

-- Volcando estructura para tabla ecommerce.transactions
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL,
  `id_pedido_local` int(20) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ecommerce.transactions: 6 rows
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `id_pedido_local`, `pagado`, `forma_pago`, `fecha_pago`, `monto`, `fecha_maxima_pago`, `hash_pedido`, `numero_pedido`, `cancelado`, `forma_pago_identificador`, `compradorId`, `created`) VALUES
	(19, 0, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '307f42c2bc208d42fb6ae8269d89a8738abaa5a59e9eae80a5db5b1786412ad9', NULL, NULL, NULL, 1, '2020-11-04 20:17:47'),
	(20, 0, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '8be872ac36842be4654862a16c66b5819eed5ee062dbed2b5319c178ae874a4d', NULL, NULL, NULL, 1, '2020-11-12 15:13:28'),
	(21, 0, 0, '0', '0', 20000.00, '2020-12-12 14:14:48', '5a27b703750ded6736539f1a3e136119bd4386b83490950b2a0e2dc718dd56a8', NULL, NULL, NULL, 1, '2020-11-12 16:38:20'),
	(22, 0, 0, '0', '0', 150000.00, '2020-11-15 19:31:06', 'fe691de035d0ce80acaf43091474da987ee1b1938b72382fbe365ab8f356ec0c', NULL, NULL, NULL, 4, '2020-11-14 16:31:07'),
	(23, NULL, 0, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-16 15:23:12'),
	(24, 55, 0, '0', '0', 100000.00, '2020-11-17 18:23:29', '2fe5fbbed2df4b66086f0c0bdebc61bba5cf45c0e3bc45b95728bcf055a0a794', NULL, NULL, NULL, 4, '2020-11-16 15:23:30');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
