-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.53 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for food
CREATE DATABASE IF NOT EXISTS `food` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `food`;

-- Dumping structure for table food.food
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `sum` float DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `time_order` datetime DEFAULT NULL,
  `time_deliver` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Dumping data for table food.food: ~16 rows (approximately)
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` (`id`, `description`, `sum`, `name`, `phone`, `adress`, `comment`, `status`, `time_order`, `time_deliver`) VALUES
	(1, 'пицца с тестом - 1 шт;\r\nпицца с колбасой - 2 шт;\r\nсоус томатный - 10шт;\r\nНапиток coca-cola 0.5л - 2шт;', 1125, 'Андрей', '+1312412', 'Широкая 20, а. Кв-19', 'Побыстрее пожалуйста', 'новый', '2018-09-28 21:34:49', '2018-09-28 23:48:54'),
	(86, '1 Пицца Мексика 500; 1 Напиток Sprite 70; 1 Соус Кисло-сладкий 40; ', 610, 'Азаров Андрей Евгеньевич', '4123423', 'Советская 79432', NULL, NULL, NULL, NULL),
	(87, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; ', 2700, '', '', '', NULL, NULL, NULL, NULL),
	(88, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Мексика 500; ', 2750, '', '', '', NULL, NULL, NULL, NULL),
	(89, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Италия 550; ', 1900, '', '', '', NULL, NULL, NULL, NULL),
	(90, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Африка 500; 1 Пицца Грузия 600; 1 Пицца Венгрия 700; 1 Пицца Швеция 550; 1 Пицца Венгрия 700; 1 Пицца Венгрия 700; 1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; 1 Пицца Болгария 600; 1 Пицца Африка 500; 1 Пицца Швеция 550; 1 Пицца Венгрия 700; 1 Пицца Грузия 600; 1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; 1 Пицца Болгария 600; 1 Напиток Coca-cola 70; 1 Напиток Sprite 70; 1 Напиток Fanta 70; 1 Напиток Вода 70; 1 Соус Барбекю 30; 1 Соус Кисло-сладкий 30; 1 Соус Сырный 30; 1 Соус Чесночный 30; 1 Напиток Вода 70; 1 Пицца Грузия 600; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Напиток Coca-cola 70; 1 Напиток Sprite 70; 1 Соус Барбекю 30; 1 Соус Кисло-сладкий 30; ', 1150, 'Азаров Андрей Евгеньевич', '4123423', 'Советская 79', NULL, NULL, NULL, NULL),
	(91, '1 Пицца Россия 450; 1 Напиток Coca-cola 70; 1 Соус Барбекю 30; ', 550, '', '', '', NULL, NULL, NULL, NULL),
	(92, '1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; 1 Пицца Болгария 600; ', 2100, '', '', '', NULL, NULL, NULL, NULL),
	(93, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; ', 5850, '', '', '', NULL, NULL, NULL, NULL),
	(94, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; ', 5850, '', '', '', NULL, NULL, NULL, NULL),
	(95, '1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; ', 1500, '', '', '', NULL, NULL, NULL, NULL),
	(96, '1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; ', 1500, '', '', '', NULL, NULL, NULL, NULL),
	(97, '1 Пицца Россия 450; 1 Пицца Мексика 500; 1 Пицца Италия 550; ', 1500, '', '', '', NULL, NULL, NULL, NULL),
	(98, '1 Пицца Мексика 500; 1 Пицца Мексика 500; ', 1000, '', '', '', NULL, NULL, NULL, NULL),
	(99, '1 Пицца Россия 450; 1 Пицца Россия 450; 1 Пицца Россия 450; 1 Соус Кисло-сладкий 30; 1 Напиток Fanta 70; ', 1450, 'Азаров Андрей Евгеньевич', '4123423', 'Советская 79432', NULL, NULL, NULL, NULL),
	(100, '', 0, '<?php echo "11111111111111111111111111111111"; ?>', '', '', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;

-- Dumping structure for table food.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table food.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
	(1, 'admin', 'admin', '21232F297A57A5A743894A0E4A801FC3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
