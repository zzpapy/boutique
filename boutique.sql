-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 07 Septembre 2016 à 11:15
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `caddy`
--

CREATE TABLE IF NOT EXISTS `caddy` (
  `id_caddy` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `full_price` float NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_caddy`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `title`) VALUES
(1, 'fruits'),
(2, 'légumes'),
(3, 'viandes');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_caddy` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_caddy` (`id_caddy`),
  KEY `id_author` (`id_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `producer`
--

CREATE TABLE IF NOT EXISTS `producer` (
  `id_producer` int(11) NOT NULL AUTO_INCREMENT,
  `society` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(511) COLLATE utf8_bin NOT NULL,
  `siret` varchar(63) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_producer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `price_buy` int(11) NOT NULL,
  `margin_sale` int(11) NOT NULL,
  `price_sell` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_producer` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_producer` (`id_producer`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rel_caddy_product`
--

CREATE TABLE IF NOT EXISTS `rel_caddy_product` (
  `id_caddy` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id_caddy`,`id_product`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(63) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(511) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` tinyint(3) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `caddy`
--
ALTER TABLE `caddy`
  ADD CONSTRAINT `caddy_ibfk_1` FOREIGN KEY (`id_caddy`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_author`) REFERENCES `caddy` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_caddy`) REFERENCES `caddy` (`id_caddy`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `rel_caddy_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id_producer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rel_caddy_product`
--
ALTER TABLE `rel_caddy_product`
  ADD CONSTRAINT `rel_caddy_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_caddy_product_ibfk_1` FOREIGN KEY (`id_caddy`) REFERENCES `caddy` (`id_caddy`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
