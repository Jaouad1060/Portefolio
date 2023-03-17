-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 16 mars 2023 à 13:50
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ti3`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `message`, `date`) VALUES
(1, 'dfsf', 'gfhgf@gmail.xn--com-5na', 'sdfds', '2023-03-15'),
(2, 'dfsf', 'gfhgf@gmail.xn--com-5na', 'sdfds', '2023-03-15'),
(3, 'dfsf', 'gfhgf@gmail.xn--com-5na', 'sdfds', '2023-03-15'),
(4, 'dfsf', 'gfhgf@gmail.xn--com-5na', 'sdfds', '2023-03-15'),
(5, 'ghgfh', 'ghfgh@gffd.com', 'ezfe', '2023-03-15'),
(6, 'kkhjkhjk', 'jhjkhjkj@gbhgf.com', 'fgrezgreg', '2023-03-15'),
(7, 'bgfhg', 'gfhgf@gmail.xn--comh-mra', 'hgfhgfhf', '2023-03-16');

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` text NOT NULL,
  `Description D` text NOT NULL,
  `Image` text NOT NULL,
  `Url` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

DROP TABLE IF EXISTS `travaux`;
CREATE TABLE IF NOT EXISTS `travaux` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` text NOT NULL,
  `Description D` text NOT NULL,
  `Image` text NOT NULL,
  `Url` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `Login` text NOT NULL,
  `Paswoord` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
