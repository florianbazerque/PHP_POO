-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 déc. 2017 à 16:32
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `attendees`
--

DROP TABLE IF EXISTS `attendees`;
CREATE TABLE IF NOT EXISTS `attendees` (
  `id_meeting` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  KEY `id_meeting` (`id_meeting`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attendees`
--

INSERT INTO `attendees` (`id_meeting`, `id_user`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `communities`
--

DROP TABLE IF EXISTS `communities`;
CREATE TABLE IF NOT EXISTS `communities` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `communities`
--

INSERT INTO `communities` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'HTML');

-- --------------------------------------------------------

--
-- Structure de la table `lecturers`
--

DROP TABLE IF EXISTS `lecturers`;
CREATE TABLE IF NOT EXISTS `lecturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lecturers`
--

INSERT INTO `lecturers` (`id`, `firstname`, `lastname`) VALUES
(1, 'John', 'Doe');

-- --------------------------------------------------------

--
-- Structure de la table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `community_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `community_id` (`community_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `meetings`
--

INSERT INTO `meetings` (`id`, `title`, `description`, `date_start`, `date_end`, `community_id`) VALUES
(1, 'Meeting 1', 'Premier meeting', '2017-12-15 00:00:00', '2017-12-22 00:00:00', 1),
(2, 'Meeting 2', 'Deuxième meeting', '2017-12-16 00:00:00', '2017-12-18 00:00:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `organizers`
--

DROP TABLE IF EXISTS `organizers`;
CREATE TABLE IF NOT EXISTS `organizers` (
  `id_organizer` int(5) NOT NULL,
  `id_meeting` int(5) NOT NULL,
  KEY `id_organizer` (`id_organizer`),
  KEY `id_meeting` (`id_meeting`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `organizers`
--

INSERT INTO `organizers` (`id_organizer`, `id_meeting`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Jean'),
(2, 'Jacques');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
