-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para colegio
CREATE DATABASE IF NOT EXISTS `colegio` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `colegio`;


-- Volcando estructura para tabla colegio.asignar
CREATE TABLE IF NOT EXISTS `asignar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProfesor` int(11) DEFAULT NULL,
  `idSalon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profesor` (`idProfesor`),
  KEY `salon` (`idSalon`),
  CONSTRAINT `profesor` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `salon` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla colegio.profesor
CREATE TABLE IF NOT EXISTS `profesor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla colegio.salon
CREATE TABLE IF NOT EXISTS `salon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
