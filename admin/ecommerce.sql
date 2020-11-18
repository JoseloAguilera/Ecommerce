-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Nov-2020 às 01:52
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atributo`
--

DROP TABLE IF EXISTS `tb_atributo`;
CREATE TABLE IF NOT EXISTS `tb_atributo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_atributo`
--

INSERT INTO `tb_atributo` (`id`, `nombre`, `activo`) VALUES
(1, 'Colores', 1),
(3, 'Medida', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atr_valor`
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
-- Extraindo dados da tabela `tb_atr_valor`
--

INSERT INTO `tb_atr_valor` (`id`, `id_atributo`, `nombre`, `activo`) VALUES
(1, 1, 'Azul', 1),
(2, 1, 'Amarillo', 1),
(8, 1, 'Blanco', 1),
(7, 1, 'Rojo', 1),
(5, 3, '10 cm x 15 cm', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_banner`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `img`, `text_alt`, `url`, `orden`, `posicion`, `activo`) VALUES
(3, 'banner-2020-11-11-jpeg', 'Bienvenido a nuestra tienda', 'categorie.php?cat=127', 1, 0, 1),
(7, 'banner-2020-11-11-07-56-01-jpeg', 'Quepis Choraboy', '', 1, 1, 1),
(4, 'banner-2020-11-11-05-34-32-jpeg', 'Nuestros Sombreros', 'categorie.php?cat=117', 2, 0, 1),
(10, 'banner-2020-11-11-10-25-41-png', '', '', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
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
-- Extraindo dados da tabela `tb_categoria`
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
-- Estrutura da tabela `tb_ciudad`
--

DROP TABLE IF EXISTS `tb_ciudad`;
CREATE TABLE IF NOT EXISTS `tb_ciudad` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_ciudad`
--

INSERT INTO `tb_ciudad` (`id`, `nombre`, `id_departamento`) VALUES
(1, 'CDE', 1),
(2, 'HERNANDARIAS', 1),
(3, 'ASUNCION', 2),
(1, 'CDE', 1),
(2, 'HERNANDARIAS', 1),
(3, 'ASUNCION', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

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

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nombre`, `apellido`, `ruc`, `documento`, `razon_social`, `mayorista`, `telefono`, `email`) VALUES
(1, 'Ana Carolina', 'de Vernazza', 'RUC', '2498760', 'Mario Vernazza', 0, '0983781248', 'anacarolinaapv@gmail.com'),
(2, 'Juan', 'richard', NULL, NULL, NULL, 0, NULL, NULL),
(3, 'Juan Richard', 'CABRERA', 'CI', '4402658', 'CAPACIT', 1, '09826371278', 'capacitcursoscde@gmail.com'),
(4, 'José', 'Aguilera', '59715570', '5971557', 'José Aguilera', 0, '973 118404', 'joseaguilera1709@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cli_direccion`
--

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

--
-- Extraindo dados da tabela `tb_cli_direccion`
--

INSERT INTO `tb_cli_direccion` (`id`, `id_cliente`, `calle`, `ciudad`, `departamento`, `referencia`, `favorito`) VALUES
(5, 3, 'Avda. San Blas. Km 3 y medio', '3', '2', 'cerca de mi vecino', 1),
(6, 1, 'Calle Las Orquideas con Los Lapachos', '1', '1', 'Casa de esquina', 1),
(7, 4, '', 'NULL', 'NULL', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_departamento`
--

DROP TABLE IF EXISTS `tb_departamento`;
CREATE TABLE IF NOT EXISTS `tb_departamento` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_departamento`
--

INSERT INTO `tb_departamento` (`id`, `nombre`) VALUES
(1, 'Alto Parana'),
(2, 'Central'),
(1, 'Alto Parana'),
(2, 'Central');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_marca`
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
-- Extraindo dados da tabela `tb_marca`
--

INSERT INTO `tb_marca` (`id`, `nombre`, `url`, `activo`) VALUES
(2, 'Tokyo', 'Tokyo.png-2020-09-19', 1),
(4, 'JBL', 'jbl-logo.jpg-2020-09-19', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_met_envio`
--

DROP TABLE IF EXISTS `tb_met_envio`;
CREATE TABLE IF NOT EXISTS `tb_met_envio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  `costo` double DEFAULT 0,
  `default` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_met_envio`
--

INSERT INTO `tb_met_envio` (`id`, `descripcion`, `costo`, `default`) VALUES
(1, 'AEX', 45000, 1),
(2, 'Retirar en la Tienda', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_met_envio_costo`
--

DROP TABLE IF EXISTS `tb_met_envio_costo`;
CREATE TABLE IF NOT EXISTS `tb_met_envio_costo` (
  `id` int(11) DEFAULT NULL,
  `id_met_envio` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `tiempo_entrega` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_met_envio_costo`
--

INSERT INTO `tb_met_envio_costo` (`id`, `id_met_envio`, `id_ciudad`, `precio`, `tiempo_entrega`) VALUES
(1, 1, 1, 50000, '48hs'),
(2, 1, 2, 60000, '24hs'),
(1, 1, 1, 50000, '48hs'),
(2, 1, 2, 60000, '24hs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_met_pago`
--

DROP TABLE IF EXISTS `tb_met_pago`;
CREATE TABLE IF NOT EXISTS `tb_met_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  `default` int(11) DEFAULT NULL,
  `instrucciones` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_met_pago`
--

INSERT INTO `tb_met_pago` (`id`, `descripcion`, `default`, `instrucciones`) VALUES
(1, 'TARJETA / PAGO EXPRESS / PAGOPAR', 1, NULL),
(2, 'GIROS TIGO', NULL, 'Luego de la compra podes realizar el giro al 0983 112 965 y enviar el comprobante al mismo numero');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pais`
--

DROP TABLE IF EXISTS `tb_pais`;
CREATE TABLE IF NOT EXISTS `tb_pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

DROP TABLE IF EXISTS `tb_pedido`;
CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `id_met_pago` int(11) NOT NULL,
  `id_met_envio` int(11) NOT NULL,
  `id_cli_direccion` int(11) NOT NULL DEFAULT 1,
  `total` double NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `total_envio` double DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id`, `fecha`, `id_cliente`, `id_met_pago`, `id_met_envio`, `id_cli_direccion`, `total`, `id_factura`, `observacion`, `total_envio`, `status`) VALUES
(1, '2020-11-15 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(2, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(3, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(4, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(5, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(6, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(7, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(8, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(9, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(10, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(11, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(12, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(13, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(14, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(15, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(16, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(17, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(18, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(19, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(20, '2020-11-08 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(21, '2020-11-05 00:00:00', 3, 1, 2, 1, 4402658, NULL, '376000', 0, 0),
(22, '2020-11-02 00:00:00', 3, 1, 2, 1, 4402658, NULL, '528000', 0, 0),
(23, '2020-11-02 00:00:00', 3, 0, 1, 2, 4402658, NULL, '1088000', 0, 0),
(24, '2020-11-02 00:00:00', 3, 0, 2, 1, 4402658, NULL, '1098000', 0, 0),
(25, '2020-11-02 00:00:00', 3, 1, 0, 1, 4402658, NULL, '978000', 0, 0),
(26, '2020-11-02 00:00:00', 3, 2, 1, 1, 4402658, NULL, '978000', 0, 1),
(27, '2020-11-02 00:00:00', 3, 1, 1, 1, 978000, NULL, '', 50000, 0),
(28, '2020-11-02 00:00:00', 3, 2, 2, 1, 978000, NULL, '', 0, 0),
(29, '2020-11-02 00:00:00', 3, 1, 1, 1, 978000, NULL, 'quiero rapido', 50000, 0),
(30, '2020-11-02 00:00:00', 3, 2, 2, 0, 78650, NULL, '', 0, 0),
(31, '2020-11-02 00:00:00', 3, 1, 1, 0, 78650, NULL, '', 80000, 0),
(32, '2020-11-02 00:00:00', 3, 2, 1, 0, 115780, NULL, '', 50000, 0),
(33, '2020-11-02 00:00:00', 3, 2, 1, 0, 404070, NULL, 'urgente', 45000, 1),
(34, '2020-11-02 00:00:00', 1, 1, 1, 1, 76000, NULL, 'Tocar el Timbre', 0, 0),
(35, '2020-10-29 00:00:00', 1, 2, 1, 1, 326800, NULL, '', 50000, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ped_detalle`
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

--
-- Extraindo dados da tabela `tb_ped_detalle`
--

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
(35, 6, 250000, 1, 0, 250000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ped_status`
--

DROP TABLE IF EXISTS `tb_ped_status`;
CREATE TABLE IF NOT EXISTS `tb_ped_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_ped_status`
--

INSERT INTO `tb_ped_status` (`id`, `descripcion`) VALUES
(0, 'Pendiente'),
(1, 'En Revisión'),
(2, 'Aprobado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_producto`
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
  `total_hits` int(11) NOT NULL,
  `unique_hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_producto`
--

INSERT INTO `tb_producto` (`id`, `referencia`, `nombre`, `descripcion`, `valor_minorista`, `valor_mayorista`, `id_marca`, `destaque`, `activo`, `total_hits`, `unique_hits`) VALUES
(4, '12345', 'Cuchillo Criolla', 'Cuchillo filoso de la marca Criolla', 30000, 20000, 4, 1, 1, 2, 1),
(5, '12', 'Cuchillo Rodeio Negro', 'Cuchilo color negro, rodeio, personalizable', 500000, 340000, 4, 0, 1, 0, 0),
(6, '13', 'Conj, Rodeio Cuchillo + Afilador', 'Conjunto de cuchilo + afilador, rodeio con mango de madera y estuche de cuero marrón', 250000, 134000, 4, 1, 1, 0, 0),
(7, '14', 'Quepis blanco Choraboy', 'Quepis color blanco, en tela de algodon ', 80000, 50000, 4, 0, 1, 0, 0),
(8, '15', 'Quepis ChoraBoy Rosa ', 'Quepis ChoraBoy Rosa Tamaño XL', 76800, 56000, 4, 1, 1, 0, 0),
(9, '16', 'Quepis Choraboy con Bordado de Rosa', 'Quepis Choraboy Blanco con Bordado de Rosa en color negro', 99000, 56789, 4, 1, 1, 0, 0),
(10, '17', 'Quepis Gallo Negro + Marrón ', 'Quepis Gallo Negro + Marrón con logo en cuerina y parte de atrás en malla agujereada', 88700, 56789, 4, 1, 1, 0, 0),
(11, '18', 'Quepis Made in Mato Negro', 'Quepis Made in Mato Negro de tela con logo en  color blanco', 57890, 33555, 4, 1, 1, 0, 0),
(12, '19', 'Quepis Made in Mato Negro + Marron 4x4', 'Quepis Made in Mato Negro Frente + Marrón Atrás con logo 4x4 ', 78650, 500000, 4, 1, 1, 0, 0),
(13, '20', 'Medalla de Oro Maiz y Soja', 'Medalla en forma de Maiz y Soja en oro de 18K', 100000, 78900, 4, 1, 1, 0, 0),
(14, '21', 'Quepis Choraboy Naranja', 'Quepis Choraboy Naranja con Logo en color negro, rasgado al frente', 109000, 78000, 4, 1, 1, 0, 0),
(15, '22', 'Quepis Chora Boy Celeste', 'Quepis Chora Boy Celeste con logo letras bordado en rectángulo negro ', 76000, 45000, 4, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_producto_atributo`
--

DROP TABLE IF EXISTS `tb_producto_atributo`;
CREATE TABLE IF NOT EXISTS `tb_producto_atributo` (
  `id_producto` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_atributo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_producto_atributo`
--

INSERT INTO `tb_producto_atributo` (`id_producto`, `id_atributo`) VALUES
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_producto_categoria`
--

DROP TABLE IF EXISTS `tb_producto_categoria`;
CREATE TABLE IF NOT EXISTS `tb_producto_categoria` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_producto_categoria`
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
-- Estrutura da tabela `tb_producto_img`
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
-- Extraindo dados da tabela `tb_producto_img`
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
-- Estrutura da tabela `tb_producto_stock`
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
-- Extraindo dados da tabela `tb_producto_stock`
--

INSERT INTO `tb_producto_stock` (`id`, `id_producto`, `stock`, `valor_minorista`, `valor_mayorista`, `activo`) VALUES
(4, 4, 0, 30000, 20000, 1),
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
-- Estrutura da tabela `tb_stock_valor`
--

DROP TABLE IF EXISTS `tb_stock_valor`;
CREATE TABLE IF NOT EXISTS `tb_stock_valor` (
  `id_atr_valor` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_atr_valor`,`id_stock`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_stock_valor`
--

INSERT INTO `tb_stock_valor` (`id_atr_valor`, `id_stock`, `id_producto`) VALUES
(5, 1, 1),
(8, 1, 1),
(1, 2, 1),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `password`, `nombre`, `tipo`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', 0),
(6, 'ana', 'e10adc3949ba59abbe56e057f20f883e', 'Ana Carolina', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_cliente`
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario_cliente`
--

INSERT INTO `tb_usuario_cliente` (`id`, `id_cliente`, `email`, `email_verificado`, `contrasena`, `creado_en`) VALUES
(1, 1, 'anacarolinaapv@gmail.com', NULL, '9e32b70e18928d1dcbd73a8f4c8e119f', '2020-10-14'),
(2, 2, 'richardcabrera92@hotmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2020-10-22'),
(3, 3, 'capacitcursoscde@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-22'),
(4, 4, 'joseaguilera1709@gmail.com', NULL, '36237e6873f106a31c77bba81980da3d', '2020-11-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0,
  `totalMonto` decimal(15,2) DEFAULT NULL,
  `hash_pedido` varchar(255) DEFAULT NULL,
  `maxDateForPayment` varchar(120) DEFAULT NULL,
  `compradorId` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `transactions`
--

INSERT INTO `transactions` (`id`, `estado`, `totalMonto`, `hash_pedido`, `maxDateForPayment`, `compradorId`, `descripcion`, `created`) VALUES
(19, 0, '20000.00', '307f42c2bc208d42fb6ae8269d89a8738abaa5a59e9eae80a5db5b1786412ad9', '2020-12-12 14:14:48', 1, 'hola', '2020-11-04 20:17:47'),
(20, 0, '20000.00', '8be872ac36842be4654862a16c66b5819eed5ee062dbed2b5319c178ae874a4d', '2020-12-12 14:14:48', 1, 'hola', '2020-11-12 15:13:28'),
(21, 0, '20000.00', '5a27b703750ded6736539f1a3e136119bd4386b83490950b2a0e2dc718dd56a8', '2020-12-12 14:14:48', 1, 'hola', '2020-11-12 16:38:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
