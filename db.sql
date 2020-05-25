-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sihat
CREATE DATABASE IF NOT EXISTS `sihat` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sihat`;

-- Dumping structure for table sihat.foods
CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `calorie` float(10,2) DEFAULT NULL,
  `sugar` float(10,2) DEFAULT NULL,
  `protein` float(10,2) DEFAULT NULL,
  `cholesterol` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sihat.foods: ~0 rows (approximately)
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;

-- Dumping structure for table sihat.meals
CREATE TABLE IF NOT EXISTS `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `meal_type` int(11) NOT NULL DEFAULT '0',
  `meal_type_alt` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `ttl_calorie` float(10,2) DEFAULT '0.00',
  `ttl_cholesterol` float(10,2) DEFAULT '0.00',
  `ttl_protein` float(10,2) DEFAULT '0.00',
  `ttl_sugar` float(10,2) DEFAULT '0.00',
  `date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sihat.meals: ~0 rows (approximately)
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;

-- Dumping structure for table sihat.meal_has_food
CREATE TABLE IF NOT EXISTS `meal_has_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sihat.meal_has_food: ~0 rows (approximately)
/*!40000 ALTER TABLE `meal_has_food` DISABLE KEYS */;
/*!40000 ALTER TABLE `meal_has_food` ENABLE KEYS */;

-- Dumping structure for table sihat.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `activation_code` varchar(50) DEFAULT '',
  `street` varchar(50) DEFAULT '',
  `city` varchar(50) DEFAULT '',
  `poscode` varchar(50) DEFAULT '',
  `state` varchar(50) DEFAULT '',
  `countrry` varchar(50) DEFAULT '',
  `is_admin` smallint(6) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sihat.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `dob`, `activation_code`, `street`, `city`, `poscode`, `state`, `countrry`, `is_admin`, `created_at`) VALUES
	(1, 'nan_s96@yahoo.com', '$2y$10$UhIczoUhNVNkBsPK3uETR.0EHBQPBdOQiI5c7hhyhCic3/EcJdXYe', 'ABDUL HANNAN', '1996-05-25', '', '', '', '', '', '', 1, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
