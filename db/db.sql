-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.36 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para crud_productos
CREATE DATABASE IF NOT EXISTS `crud_productos` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `crud_productos`;

-- Volcando estructura para tabla crud_productos.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crud_productos.products: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`id`, `name`, `price`, `description`) VALUES
	(1, 'Aceite x 1000', 1000.00, 'Aceite oleopalma x 1000'),
	(2, 'Test', 5000.00, 'sdsd'),
	(3, 'prueba', 8000.00, 'jbsjhd'),
	(4, 'Prueba otra', 5000.00, 'dfdf');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
