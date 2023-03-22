-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
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


-- Dumping database structure for vlad_test
CREATE DATABASE IF NOT EXISTS `vlad_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `vlad_test`;

-- Dumping structure for table vlad_test.dogs
CREATE TABLE IF NOT EXISTS `dogs` (
  `NrCrt` int(11) NOT NULL AUTO_INCREMENT,
  `DataNastere` date DEFAULT NULL,
  `DataIntrareAdapost` date DEFAULT NULL,
  `VaccinareAntiRabica` date DEFAULT NULL,
  `VaccinarePolivalenta` date DEFAULT NULL,
  `DeparazitareInterna` date DEFAULT NULL,
  `DeparazitareExterna` date DEFAULT NULL,
  `Deces` date DEFAULT NULL,
  `IesireAdapost` date DEFAULT NULL,
  `NrCip` varchar(150) DEFAULT NULL,
  `NrBoxa` varchar(150) DEFAULT NULL,
  `NumeApartinator` text DEFAULT NULL,
  `TelefonApartinator` varchar(150) DEFAULT NULL,
  `DataAdaugarii` date DEFAULT NULL,
  PRIMARY KEY (`NrCrt`),
  KEY `NrCrt` (`NrCrt`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table vlad_test.dogs: ~4 rows (approximately)
INSERT INTO `dogs` (`NrCrt`, `DataNastere`, `DataIntrareAdapost`, `VaccinareAntiRabica`, `VaccinarePolivalenta`, `DeparazitareInterna`, `DeparazitareExterna`, `Deces`, `IesireAdapost`, `NrCip`, `NrBoxa`, `NumeApartinator`, `TelefonApartinator`, `DataAdaugarii`) VALUES
	(1, '2023-03-15', '2023-03-23', '2023-03-09', '2023-03-16', '2023-03-30', '2023-03-22', '2023-03-20', '2023-03-10', '1223', '123wa', 'Andrei', '0078289', '2023-03-22'),
	(2, '2022-03-15', '2023-03-16', NULL, NULL, NULL, NULL, NULL, '2022-03-16', '666', 'AR345', 'Catalina', '00876645', '2023-03-22'),
	(4, '2023-03-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '', 'Cristi', '0050509493', '2023-01-22'),
	(5, '2023-03-22', '2023-03-11', NULL, NULL, NULL, NULL, NULL, NULL, 'asdasdasd', NULL, 'dasd', 'asdas', '2022-12-22');

-- Dumping structure for table vlad_test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_password` text NOT NULL,
  `user_nume` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table vlad_test.users: ~1 rows (approximately)
INSERT INTO `users` (`id_user`, `user_password`, `user_nume`, `user_email`) VALUES
	(4, '2b45d0582e0844c45d18d22862c9aa03e41039e596c532fb90ac8db8853b18b0', 'Vlad Miu', 'test@test.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
