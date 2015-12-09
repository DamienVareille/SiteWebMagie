-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Décembre 2015 à 22:46
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `damienvareille.com`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(30) NOT NULL,
  `prenom_admin` varchar(30) NOT NULL,
  `login_admin` varchar(20) NOT NULL,
  `pwd_admin` varchar(200) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `login_admin`, `pwd_admin`) VALUES
(1, 'Vareille', 'Damien', 'DamienVareille', '3f7b0ee45bda90dd5e2a2649552da7d4');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre_news` varchar(100) NOT NULL,
  `date_news` date NOT NULL,
  `description_news` text NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `titre_news`, `date_news`, `description_news`) VALUES
(1, 'Les premières répétitions du spectacle ', '2015-11-09', 'Les répétitions du spectacle "Comme par hasard ?" ont débuté !\r\n\r\nVous pourrez suivre le déroulement de notre travaille sur les réseaux sociaux et sur le site.\r\n\r\nLa première du spectacle sera présentée en février 2016.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `lien_photo` varchar(80) NOT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `spectacle`
--

CREATE TABLE IF NOT EXISTS `spectacle` (
  `id_spectacle` int(11) NOT NULL AUTO_INCREMENT,
  `titre_spectacle` varchar(30) NOT NULL,
  `note_haut_spectacle` varchar(50) DEFAULT NULL,
  `note_bas_spectacle` varchar(250) DEFAULT NULL,
  `description` text NOT NULL,
  `image_spectacle` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_spectacle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `spectacle`
--

INSERT INTO `spectacle` (`id_spectacle`, `titre_spectacle`, `note_haut_spectacle`, `note_bas_spectacle`, `description`, `image_spectacle`) VALUES
(7, 'Comme par hasard ? ', 'Sortie prévue dans quelques mois', 'Bande annonce à venir... ', ' Il s''agit du prochain spectacle sur scène, encore en préparation.\r\n\r\nDans ce spectacle, Damien jouera le personnage de Sherlock Holmes, en imaginant sa vie avant de commencer les enquêtes criminelles. Vous participerez à des expériences intéractives, notamment à l''aide d''une mystérieuse machine qu''il construit...\r\n\r\nLe thème abordé est celui du hasard, comment celui-ci agit dans le monde dans lequel nous vivons. ', 'cph.png'),
(5, 'Intuition ', 'Joué en février 2013', '~~', 'Son premier spectacle de mentalisme sur scène.', 'intuition.jpg'),
(6, 'Evolution ', 'Joué en septembre 2013', '<a href="https://www.youtube.com/watch?v=Sr2onUCK1F0">Bande annonce</a>', 'Deuxième spectacle sur scène de Damien Vareille\r\n\r\nDans ce spectacle, Damien retrace toutes les étapes de la vie par le biais d''expériences de mentalisme. Ces étapes passent par la naissance, les études, le travail, etc... Durée : 2h00. Voir la bande-annonce du spectacle : ', 'evolution.png');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `lien_video` varchar(200) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `objet` varchar(25) NOT NULL,
  `message` varchar(700) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
