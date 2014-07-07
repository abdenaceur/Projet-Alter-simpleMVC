-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 02 Juillet 2014 à 19:19
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `e0588135`
--
CREATE DATABASE IF NOT EXISTS `e0588135` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e0588135`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adminUtilisateur` varchar(50) NOT NULL,
  `adminMdp` varchar(60) NOT NULL,
  PRIMARY KEY (`adminID`),
  UNIQUE KEY `adminID` (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUtilisateur`, `adminMdp`) VALUES
(1, 'superalex33', 'Jackson');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Client_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Client_Nom` varchar(50) NOT NULL,
  `Client_Prenom` varchar(50) NOT NULL,
  `Client_Adresse` varchar(80) NOT NULL,
  `Client_AdresseDeux` varchar(80) NOT NULL,
  `Client_Ville` varchar(30) NOT NULL,
  `Client_Codepostal` varchar(7) NOT NULL,
  `Client_Pays` varchar(20) NOT NULL,
  `Client_Tel` varchar(18) NOT NULL,
  `Client_Email` varchar(50) NOT NULL,
  `Client_NomUtilisateur` varchar(30) NOT NULL,
  `Client_Mdp` varchar(60) NOT NULL,
  `Client_DateEnregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Client_ID`),
  UNIQUE KEY `Client_ID` (`Client_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`Client_ID`, `Client_Nom`, `Client_Prenom`, `Client_Adresse`, `Client_AdresseDeux`, `Client_Ville`, `Client_Codepostal`, `Client_Pays`, `Client_Tel`, `Client_Email`, `Client_NomUtilisateur`, `Client_Mdp`, `Client_DateEnregistrement`) VALUES
(1, 'Joseph', 'Alexandre', '2132 skjkj', '', 'Montreal', 'h2h1s3', 'canada', '221-123-1231', 'superalex33@gmail.com', 'Jackson', 'Jackson', '2014-07-01 17:14:00'),
(2, 'kjhg', 'kjhg', 'kljgh', '', 'kjhg', 'kjgh', 'kjgh', 'kjgh', 'kjgh', 'kjghk', 'jgh', '2014-07-02 15:53:30'),
(3, '', '', '', '', '', '', '', '', '', '', '', '2014-07-02 16:48:56'),
(4, 'kjhg', 'kjhg', 'kljgh', '', 'kjhg', 'kjgh', 'kjgh', 'kjgh', 'kjgh', 'kjghk', 'jgh', '2014-07-02 16:49:00');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `Commande_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Commande_ProduitID` bigint(20) unsigned NOT NULL,
  `Commande_ClientID` int(11) NOT NULL,
  `Commande_TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Commande_ID`),
  UNIQUE KEY `Commande_ID` (`Commande_ID`),
  KEY `Commande_ProduitID` (`Commande_ProduitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE IF NOT EXISTS `inventaire` (
  `Inventaire_IDLot` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Inventaire_ProduitID` bigint(20) unsigned NOT NULL,
  `Inventaire_NbDispo` int(11) NOT NULL,
  PRIMARY KEY (`Inventaire_IDLot`),
  UNIQUE KEY `Inventaire_IDLot` (`Inventaire_IDLot`),
  KEY `Inventaire_ProduitID` (`Inventaire_ProduitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `Produit_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Produit_Nom` varchar(50) NOT NULL,
  `Produit_Code` int(11) NOT NULL,
  `produit_style` char(50) NOT NULL,
  `produit_materiel` char(50) NOT NULL,
  `Produit_Couleur` char(50) NOT NULL,
  `Produit_Description` text NOT NULL,
  `Produit_OS` char(11) NOT NULL,
  `Produit_WaterProof` tinyint(1) NOT NULL,
  `Produit_TouchScreen` tinyint(1) NOT NULL,
  `Produit_ResolutionEcran` varchar(20) NOT NULL,
  `Produit_Microphone` tinyint(1) NOT NULL,
  `Produit_Camera` tinyint(1) NOT NULL,
  `Produit_CameraResolution` varchar(20) NOT NULL,
  `Produit_Hautparleur` tinyint(1) NOT NULL,
  `Produit_Poids` int(11) NOT NULL,
  `Produit_Prix` int(11) NOT NULL,
  `Produit_Longeur` int(11) NOT NULL,
  `Produit_Largeur` int(11) NOT NULL,
  `Produit_Image1` varchar(50) NOT NULL,
  `Produit_Image2` varchar(50) NOT NULL,
  `Produit_Image3` varchar(50) NOT NULL,
  UNIQUE KEY `Produit_ID` (`Produit_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1013 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`Produit_ID`, `Produit_Nom`, `Produit_Code`, `produit_style`, `produit_materiel`, `Produit_Couleur`, `Produit_Description`, `Produit_OS`, `Produit_WaterProof`, `Produit_TouchScreen`, `Produit_ResolutionEcran`, `Produit_Microphone`, `Produit_Camera`, `Produit_CameraResolution`, `Produit_Hautparleur`, `Produit_Poids`, `Produit_Prix`, `Produit_Longeur`, `Produit_Largeur`, `Produit_Image1`, `Produit_Image2`, `Produit_Image3`) VALUES
(1001, 'alter 360', 1001, 'classique', 'cuir', 'gray', 'Curabitur porta mi quam, at suscipit erat elementum eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam quis diam arcu. Fusce nisl nisl, viverra vitae interdum id, facilisis eu sapien. Morbi eget consectetur ligula, in placerat libero.', 'android', 1, 1, '220 x 176', 0, 1, '5.0 mp', 0, 10, 400, 10, 10, 'alter-01-01', 'alter-01-02', 'alter-01-03'),
(1002, 'alter 360 luxor', 1002, 'classique', 'metal', 'noir', 'Sed aliquet ornare mi, vel malesuada justo lobortis laoreet. Maecenas rutrum arcu bibendum, sodales leo sed, commodo elit. Nullam orci nibh, vulputate a lectus quis, elementum molestie tortor.', 'ios', 1, 1, '320 × 320', 0, 0, '', 0, 10, 620, 10, 10, 'alter-02-01', 'alter-02-02', 'alter-02-03'),
(1003, 'alter massi', 1003, 'sportive', 'synthetique', 'noir', 'Semper pretium nisi, ut lobortis odio mattis pharetra. Aliquam rutrum dolor pharetra, commodo enim vel, hendrerit augue. Sed et condimentum ante. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'android', 1, 1, '144 × 168', 1, 1, '5.0 mp', 1, 10, 330, 10, 10, 'alter-03-01', 'alter-03-02', 'alter-03-03'),
(1004, 'alter black', 1004, 'sportive', 'synthetique', 'noir', 'Curabitur porta mi quam, at suscipit erat elementum eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam quis diam arcu. Fusce nisl nisl, viverra vitae interdum id, facilisis eu sapien. Morbi eget consectetur ligula, in placerat libero.', 'ios', 1, 1, '320 × 320', 1, 1, '3.0 mp', 1, 10, 283, 10, 10, 'alter-04-01', 'alter-04-02', 'alter-04-03'),
(1005, 'alter zona', 1005, 'casuel', 'cuir', 'noir', 'Cras aliquam neque quis lectus feugiat, eu tristique nulla bibendum. Proin tristique ac nisl ullamcorper scelerisque. Etiam ac justo viverra tellus fringilla feugiat vel ut purus.', 'ios', 1, 1, '220 x 176', 1, 1, '3.0 mp', 1, 10, 470, 10, 10, 'alter-05-01', 'alter-05-02', 'alter-05-03'),
(1006, 'alter idol', 1006, 'sportive', 'synthetique', 'noir', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris venenatis interdum tortor ac posuere. Cras elementum lectus sit amet libero cursus vehicula. Sed dapibus dictum ipsum ac ornare. ', 'android', 1, 1, '220 x 176', 0, 1, '5.0 mp', 0, 10, 230, 10, 10, 'alter-06-01', 'alter-06-02', 'alter-06-03'),
(1007, 'alter summo', 1007, 'casuel', 'synthetique', 'noir', 'Cras aliquam neque quis lectus feugiat, eu tristique nulla bibendum. Proin tristique ac nisl ullamcorper scelerisque. Etiam ac justo viverra tellus fringilla feugiat vel ut purus.', 'ios', 1, 1, '220 x 176', 1, 1, '1.9 mp', 1, 10, 530, 10, 10, 'alter-07-01', 'alter-07-02', 'alter-07-03'),
(1008, 'alter paradox', 1008, 'sportive', 'synthetique', 'orange', 'sodales vel lacus eget, elementum porta risus. Donec posuere mi at libero tempus, ac laoreet orci facilisis.', 'ios', 1, 1, '220 x 176', 0, 1, '3.0 mp', 0, 10, 310, 10, 10, 'alter-08-01', 'alter-08-02', 'alter-08-03'),
(1009, 'alter varela', 1009, 'classique', 'metal', 'gray', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris venenatis interdum tortor ac posuere. Cras elementum lectus sit amet libero cursus vehicula. Sed dapibus dictum ipsum ac ornare. ', 'android', 1, 1, '144 × 168', 1, 1, '5.0 mp', 1, 10, 730, 10, 10, 'alter-09-01', 'alter-09-02', 'alter-09-03'),
(1010, 'alter dub', 1010, 'classique', 'metal', 'gray', 'Cras aliquam neque quis lectus feugiat, eu tristique nulla bibendum. Proin tristique ac nisl ullamcorper scelerisque. Etiam ac justo viverra tellus fringilla feugiat vel ut purus.', 'ios', 1, 1, '220 x 176', 0, 1, '3.0 mp', 0, 10, 470, 10, 10, 'alter-10-01', 'alter-10-02', 'alter-10-03'),
(1011, 'alter 11', 1011, 'casuel', 'cuir', 'blanc', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris venenatis interdum tortor ac posuere. Cras elementum lectus sit amet libero cursus vehicula. Sed dapibus dictum ipsum ac ornare. ', 'ios', 1, 1, '320 × 320', 0, 1, '5.0 mp', 0, 1, 1020, 10, 10, 'alter-11-01', 'alter-11-02', 'alter-11-03'),
(1012, 'alter koy', 1012, 'casuel', 'cuir', 'noir', 'Cras aliquam neque quis lectus feugiat, eu tristique nulla bibendum. Proin tristique ac nisl ullamcorper scelerisque. Etiam ac justo viverra tellus fringilla feugiat vel ut purus.', 'android', 1, 1, '144 × 168', 1, 1, '3.0 mp', 1, 10, 450, 10, 10, 'alter-12-01', 'alter-12-02', 'alter-12-03');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `dr` FOREIGN KEY (`Commande_ProduitID`) REFERENCES `produit` (`Produit_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD CONSTRAINT `produit` FOREIGN KEY (`Inventaire_ProduitID`) REFERENCES `produit` (`Produit_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
