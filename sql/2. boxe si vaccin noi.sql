-- --------------------------------------------------------
-- Host:                         148.251.75.181
-- Server version:               5.5.68-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cloudvet_db
CREATE DATABASE IF NOT EXISTS `cloudvet_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cloudvet_db`;

-- Dumping structure for table cloudvet_db.boxe
CREATE TABLE IF NOT EXISTS `boxe` (
  `id_boxa` int(11) NOT NULL AUTO_INCREMENT,
  `boxa_nume` tinytext,
  `boxa_locatie` varchar(150) DEFAULT NULL,
  `boxa_istoric` text NOT NULL,
  PRIMARY KEY (`id_boxa`),
  KEY `id_boxa` (`id_boxa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table cloudvet_db.boxe: ~1 rows (approximately)
INSERT INTO `boxe` (`id_boxa`, `boxa_nume`, `boxa_locatie`, `boxa_istoric`) VALUES
	(1, NULL, NULL, '2023-03-03 - A intrat cainele cu CIP:123123213\r\n2023-04-03 - A intrat cainele cu CIP:3123123');

-- Dumping structure for table cloudvet_db.dogs
CREATE TABLE IF NOT EXISTS `dogs` (
  `NrCrt` int(11) NOT NULL AUTO_INCREMENT,
  `DataNastere` date DEFAULT NULL,
  `Talie` varchar(150) DEFAULT NULL,
  `Caracter` varchar(150) DEFAULT NULL,
  `DataIntrareAdapost` date DEFAULT NULL,
  `Deces` date DEFAULT NULL,
  `IesireAdapost` date DEFAULT NULL,
  `NrCip` varchar(150) DEFAULT NULL,
  `NrBoxa` varchar(150) DEFAULT NULL,
  `NumeApartinator` text,
  `TelefonApartinator` varchar(150) DEFAULT NULL,
  `DataAdaugarii` date DEFAULT NULL,
  PRIMARY KEY (`NrCrt`),
  KEY `NrCrt` (`NrCrt`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cloudvet_db.dogs: ~4 rows (approximately)
INSERT INTO `dogs` (`NrCrt`, `DataNastere`, `Talie`, `Caracter`, `DataIntrareAdapost`, `Deces`, `IesireAdapost`, `NrCip`, `NrBoxa`, `NumeApartinator`, `TelefonApartinator`, `DataAdaugarii`) VALUES
	(1, '2023-01-05', 'Mica', 'Agresiv', '2023-03-23', '2023-03-20', '2023-03-10', '1223', '123wa', 'Andrei', '0078289', '2023-03-22'),
	(2, '2022-03-15', NULL, NULL, '2023-03-16', NULL, '2022-03-16', '666', 'AR345', 'Catalina', '00876645', '2023-03-22'),
	(4, '2023-03-04', NULL, NULL, NULL, NULL, NULL, '123', '', 'Cristi', '0050509493', '2023-01-22'),
	(5, '2023-03-22', NULL, NULL, '2023-03-11', NULL, NULL, 'asdasdasd', NULL, 'dasd', 'asdas', '2022-12-22');

-- Dumping structure for table cloudvet_db.dogs_vaccinuri
CREATE TABLE IF NOT EXISTS `dogs_vaccinuri` (
  `id_vaccin` int(11) NOT NULL AUTO_INCREMENT,
  `id_caine` int(11) DEFAULT NULL,
  `tip_vaccin` tinytext,
  `data_vaccin` date DEFAULT NULL,
  PRIMARY KEY (`id_vaccin`),
  KEY `id_vaccin` (`id_vaccin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table cloudvet_db.dogs_vaccinuri: ~2 rows (approximately)
INSERT INTO `dogs_vaccinuri` (`id_vaccin`, `id_caine`, `tip_vaccin`, `data_vaccin`) VALUES
	(1, 1, 'Antirabic 1', '2023-03-23'),
	(3, 1, 'Antirabic 123', '2023-04-03');

-- Dumping structure for table cloudvet_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_password` text NOT NULL,
  `user_nume` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `status` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cloudvet_db.users: ~4 rows (approximately)
INSERT INTO `users` (`id_user`, `user_password`, `user_nume`, `user_email`, `status`) VALUES
	(4, '2b45d0582e0844c45d18d22862c9aa03e41039e596c532fb90ac8db8853b18b0', 'Vlad Miu', 'test@test.com', 'admin'),
	(15, '8c38d75d1c5a49b8a7c85f43d1ae0b2792cf1ecdcd611d9ea71b69768062b8a1', 'Vlad', 'miuvlad62@gmail.com', 'admin'),
	(18, '55f21d511679980c0698acb6cbf160191d7966ed1e4ddf51da0de4c23c355d64', 'test1', 'test1@test1.com', 'pesant1'),
	(19, 'ac3e0409e5cd26ff1b45dece910bd08e32f02deb599d69eed30003172db5faa8', 'test2', 'test2@test2.com', 'pesant2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
