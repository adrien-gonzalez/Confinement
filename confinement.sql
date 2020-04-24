-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 avr. 2020 à 12:52
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `confinement`
--
CREATE DATABASE IF NOT EXISTS `confinement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `confinement`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `type_aide` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT DELAYED INTO `annonces` (`id`, `id_utilisateur`, `type_aide`, `description`) VALUES
(3, 7, 'course', 'Disponible pour faire vos courses'),
(10, 7, 'conversation', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT DELAYED INTO `messages` (`id`, `author`, `content`, `created_at`) VALUES
(1, 'Firefou', 'Salut', '2020-04-24 14:51:36');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `arrondissement` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT DELAYED INTO `utilisateurs` (`id`, `login`, `nom`, `prenom`, `email`, `arrondissement`, `password`) VALUES
(7, 'Firefou', 'Gonzalez', 'Adrien', 'adrien1361@hotmail.fr', 13001, '$2y$12$BRrsPfOBakJlQuq4AzcFVuoLVVa0WLqjD/j5PqKCn5IEKzhCTvnOy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
