-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2021 at 03:30 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `IdAvis` int NOT NULL,
  `TypeAvis` varchar(255) DEFAULT NULL,
  `NbreEtoiles` int NOT NULL,
  `IdClient` int NOT NULL,
  PRIMARY KEY (`IdAvis`),
  KEY `fk_client` (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

DROP TABLE IF EXISTS `catagories`;
CREATE TABLE IF NOT EXISTS `catagories` (
  `IdCatagorie` int NOT NULL,
  `NomCatagorie` varchar(50) DEFAULT NULL,
  `DescriptionCatagorie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCatagorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `IdCommande` int NOT NULL,
  `QuantiteCommande` int NOT NULL,
  `IdClient` int NOT NULL,
  `IdLivreur` int NOT NULL,
  `Remarque` varchar(255) NOT NULL,
  PRIMARY KEY (`IdCommande`),
  KEY `fk_client` (`IdClient`),
  KEY `fk_livreur` (`IdLivreur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `IdCommentaire` int NOT NULL,
  `IdClient` int NOT NULL,
  `Texte` varchar(255) DEFAULT NULL,
  KEY `fk_client` (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livraisons`
--

DROP TABLE IF EXISTS `livraisons`;
CREATE TABLE IF NOT EXISTS `livraisons` (
  `IdLivraison` int NOT NULL,
  `IdLivreur` int NOT NULL,
  `IdCommande` int NOT NULL,
  `DateLivraison` date DEFAULT NULL,
  PRIMARY KEY (`IdLivraison`),
  KEY `fk_livreur` (`IdLivreur`),
  KEY `fk_commande` (`IdCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdPRoduit` int NOT NULL,
  `PrixProduit` float NOT NULL,
  `DescreptionProduit` varchar(255) DEFAULT NULL,
  `DesignationProduit` varchar(255) NOT NULL,
  `IdCatagorie` int NOT NULL,
  PRIMARY KEY (`IdPRoduit`),
  KEY `fk_produit` (`IdCatagorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `IdReservation` int NOT NULL,
  `IdRestaurant` int NOT NULL,
  `IdClient` int NOT NULL,
  `DateReservation` date DEFAULT NULL,
  `heureReservation` time DEFAULT NULL,
  `Effectif` int NOT NULL,
  PRIMARY KEY (`IdReservation`),
  KEY `fk_client` (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `IdRestaurant` int NOT NULL,
  `NomRestaurant` varchar(255) DEFAULT NULL,
  `AdresseRestaurant` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdRestaurant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(33, 'mohsen', 'gmohsen', 'gmohsen6@gmail.com', 'c0302cb832da4f325c45949db17f3f98386a305d', '12345678', 3, 0, '2021-04-27 22:33:12', '2021-04-27 22:33:12'),
(39, 'aa', 'aaa', 'aaa@gmail.xom', '4a0cde71aee7158542d013fc0c9f5acfc735c612', '222', 2, 0, '2021-05-15 12:27:59', '2021-05-15 12:27:59'),
(40, 'ali', 'ben Salem', 'ben@gmail.com', '6be712a6e73d979726c02a308b3457f9f5cf148e', '7777', 3, 0, '2021-05-15 13:30:15', '2021-05-15 13:30:15'),
(29, 'Amine', 'BEN', 'gharbiamin2018@gmail.com', '82e19fa12aab7cfc718a002fc82c0f074bf070e7', '98417237', 3, 1, '2021-04-26 22:57:45', '2021-04-26 22:57:45'),
(38, 'aliii', 'brahima', 'brahima@ttt.tt', '123456', '6456', 3, 0, '2021-05-13 10:32:55', '2021-05-13 10:32:55'),
(31, 'mohsena', 'moh', 'gmohsen61@gmail.com', 'd52b958b59e0bbc5856a5660b7d86989b7a18d00', '98417237', 3, 0, '2021-04-27 16:05:47', '2021-04-27 16:05:47'),
(32, 'Amin', 'AMG9980', 'gharbiamine2018@gmail.com', '400130cd068047bf36b0ba330b6d2dc761f2cef2', '92775101', 1, 0, '2021-04-27 21:17:41', '2021-04-27 21:17:41'),
(41, 'Mohsen', 'BEN', 'ffg.ggt@fgg.fr', '4a0cde71aee7158542d013fc0c9f5acfc735c612', '65423388', 3, 1, '2021-05-15 15:55:11', '2021-05-15 15:55:11');
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint DEFAULT NULL,
  `isActive` tinyint DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
