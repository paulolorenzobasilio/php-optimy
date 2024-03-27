-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.36-0ubuntu0.22.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for phptest
DROP DATABASE IF EXISTS `phptest`;
CREATE DATABASE IF NOT EXISTS `phptest` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `phptest`;

-- Dumping structure for table phptest.comment
DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body` mediumtext,
  `created_at` datetime DEFAULT NULL,
  `news_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_id` (`news_id`),
  CONSTRAINT `fk_news_id` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table phptest.comment: ~6 rows (approximately)
INSERT INTO `comment` (`id`, `body`, `created_at`, `news_id`) VALUES
	(1, 'i like this news', '2016-11-30 14:21:23', 1),
	(2, 'i have no opinion about that', '2016-11-30 14:24:08', 1),
	(3, 'are you kidding me ?', '2016-11-30 14:28:06', 1),
	(4, 'this is so true', '2016-11-30 17:21:23', 2),
	(5, 'trolololo', '2016-11-30 17:39:25', 2),
	(6, 'luke i am your father', '2016-11-30 14:34:06', 3);

-- Dumping structure for table phptest.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(511) DEFAULT NULL,
  `body` mediumtext,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table phptest.news: ~3 rows (approximately)
INSERT INTO `news` (`id`, `title`, `body`, `created_at`) VALUES
	(1, 'news 1', 'this is the description of our fist news', '2016-11-30 14:18:23'),
	(2, 'news 2', 'this is the description of our second news', '2016-11-30 14:24:23'),
	(3, 'news 3', 'this is the description of our third news', '2016-12-01 04:33:23');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
