-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Septembre 2016 à 10:51
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=101 ;

--
-- Contenu de la table `caddy`
--

INSERT INTO `caddy` (`id_caddy`, `id_user`, `full_price`, `date`, `status`) VALUES
(2, 0, 0, '0000-00-00 00:00:00', 0),
(3, 0, 0, '0000-00-00 00:00:00', 0),
(4, 0, 0, '0000-00-00 00:00:00', 0),
(5, 0, 0, '0000-00-00 00:00:00', 0),
(6, 0, 0, '0000-00-00 00:00:00', 0),
(7, 0, 0, '0000-00-00 00:00:00', 0),
(8, 0, 0, '0000-00-00 00:00:00', 0),
(9, 0, 0, '0000-00-00 00:00:00', 0),
(10, 0, 0, '0000-00-00 00:00:00', 0),
(11, 0, 0, '0000-00-00 00:00:00', 0),
(12, 0, 0, '0000-00-00 00:00:00', 0),
(13, 0, 0, '0000-00-00 00:00:00', 0),
(14, 0, 0, '0000-00-00 00:00:00', 0),
(15, 0, 0, '0000-00-00 00:00:00', 0),
(16, 0, 0, '0000-00-00 00:00:00', 0),
(17, 0, 0, '0000-00-00 00:00:00', 0),
(18, 0, 0, '0000-00-00 00:00:00', 0),
(19, 0, 0, '0000-00-00 00:00:00', 0),
(20, 0, 0, '0000-00-00 00:00:00', 0),
(21, 0, 0, '0000-00-00 00:00:00', 0),
(22, 0, 0, '0000-00-00 00:00:00', 0),
(23, 0, 0, '0000-00-00 00:00:00', 0),
(24, 0, 0, '0000-00-00 00:00:00', 0),
(25, 0, 0, '0000-00-00 00:00:00', 0),
(26, 0, 0, '0000-00-00 00:00:00', 0),
(27, 0, 0, '0000-00-00 00:00:00', 0),
(28, 0, 0, '0000-00-00 00:00:00', 0),
(29, 0, 0, '0000-00-00 00:00:00', 0),
(30, 0, 0, '0000-00-00 00:00:00', 0),
(31, 0, 0, '0000-00-00 00:00:00', 0),
(32, 0, 0, '0000-00-00 00:00:00', 0),
(33, 0, 0, '0000-00-00 00:00:00', 0),
(34, 0, 0, '0000-00-00 00:00:00', 0),
(35, 0, 0, '0000-00-00 00:00:00', 0),
(36, 0, 0, '0000-00-00 00:00:00', 0),
(37, 0, 0, '0000-00-00 00:00:00', 0),
(38, 0, 0, '0000-00-00 00:00:00', 0),
(39, 0, 0, '0000-00-00 00:00:00', 0),
(40, 0, 0, '0000-00-00 00:00:00', 0),
(41, 0, 0, '0000-00-00 00:00:00', 0),
(42, 0, 0, '0000-00-00 00:00:00', 0),
(43, 0, 0, '0000-00-00 00:00:00', 0),
(44, 0, 0, '0000-00-00 00:00:00', 0),
(45, 0, 0, '0000-00-00 00:00:00', 0),
(46, 0, 0, '0000-00-00 00:00:00', 0),
(47, 0, 0, '0000-00-00 00:00:00', 0),
(48, 0, 0, '0000-00-00 00:00:00', 0),
(49, 0, 0, '0000-00-00 00:00:00', 0),
(50, 0, 0, '0000-00-00 00:00:00', 0),
(51, 0, 0, '0000-00-00 00:00:00', 0),
(52, 0, 0, '0000-00-00 00:00:00', 0),
(53, 0, 0, '0000-00-00 00:00:00', 0),
(54, 0, 0, '0000-00-00 00:00:00', 0),
(55, 0, 0, '0000-00-00 00:00:00', 0),
(56, 0, 0, '0000-00-00 00:00:00', 0),
(57, 0, 0, '0000-00-00 00:00:00', 0),
(58, 0, 0, '0000-00-00 00:00:00', 0),
(59, 0, 0, '0000-00-00 00:00:00', 0),
(60, 0, 0, '0000-00-00 00:00:00', 0),
(61, 0, 0, '0000-00-00 00:00:00', 0),
(62, 0, 0, '0000-00-00 00:00:00', 0),
(63, 0, 0, '0000-00-00 00:00:00', 0),
(64, 0, 0, '0000-00-00 00:00:00', 0),
(65, 0, 0, '0000-00-00 00:00:00', 0),
(66, 0, 0, '0000-00-00 00:00:00', 0),
(67, 0, 0, '0000-00-00 00:00:00', 0),
(68, 0, 0, '0000-00-00 00:00:00', 0),
(69, 0, 0, '0000-00-00 00:00:00', 0),
(70, 0, 0, '0000-00-00 00:00:00', 0),
(71, 0, 0, '0000-00-00 00:00:00', 0),
(72, 0, 0, '0000-00-00 00:00:00', 0),
(73, 0, 0, '0000-00-00 00:00:00', 0),
(74, 0, 0, '0000-00-00 00:00:00', 0),
(75, 0, 0, '0000-00-00 00:00:00', 0),
(76, 0, 0, '0000-00-00 00:00:00', 0),
(77, 0, 0, '0000-00-00 00:00:00', 0),
(78, 0, 0, '0000-00-00 00:00:00', 0),
(79, 0, 0, '0000-00-00 00:00:00', 0),
(80, 0, 0, '0000-00-00 00:00:00', 0),
(81, 0, 0, '0000-00-00 00:00:00', 0),
(82, 0, 0, '0000-00-00 00:00:00', 0),
(83, 0, 0, '0000-00-00 00:00:00', 0),
(84, 0, 0, '0000-00-00 00:00:00', 0),
(85, 0, 0, '0000-00-00 00:00:00', 0),
(86, 0, 0, '0000-00-00 00:00:00', 0),
(87, 0, 0, '0000-00-00 00:00:00', 0),
(88, 0, 0, '0000-00-00 00:00:00', 0),
(89, 0, 0, '0000-00-00 00:00:00', 0),
(90, 0, 0, '0000-00-00 00:00:00', 0),
(91, 0, 0, '0000-00-00 00:00:00', 0),
(92, 0, 0, '0000-00-00 00:00:00', 0),
(93, 0, 0, '0000-00-00 00:00:00', 0),
(94, 0, 0, '0000-00-00 00:00:00', 0),
(95, 0, 0, '0000-00-00 00:00:00', 0),
(96, 0, 0, '0000-00-00 00:00:00', 0),
(97, 0, 0, '0000-00-00 00:00:00', 0),
(98, 0, 0, '0000-00-00 00:00:00', 0),
(99, 0, 0, '0000-00-00 00:00:00', 0),
(100, 0, 0, '0000-00-00 00:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=119 ;

--
-- Contenu de la table `producer`
--

INSERT INTO `producer` (`id_producer`, `society`, `password`, `mail`, `address`, `siret`) VALUES
(1, 'toto', 'toto', 'toto', 'toto', 'toto'),
(2, 'toto', 'toto', 'toto', 'toto', 'toto'),
(3, 'toto', 'toto', 'toto', 'toto', 'toto'),
(4, 'toto', 'toto', 'toto', 'toto', 'toto'),
(5, 'toto', 'toto', 'toto', 'toto', 'toto'),
(6, 'toto', 'toto', 'toto', 'toto', 'toto'),
(7, 'toto', 'toto', 'toto', 'toto', 'toto'),
(8, 'toto', 'toto', 'toto', 'toto', 'toto'),
(9, 'toto', 'toto', 'toto', 'toto', 'toto'),
(10, 'toto', 'toto', 'toto', 'toto', 'toto'),
(11, 'toto', 'toto', 'toto', 'toto', 'toto'),
(12, 'toto', 'toto', 'toto', 'toto', 'toto'),
(13, 'toto', 'toto', 'toto', 'toto', 'toto'),
(14, 'toto', 'toto', 'toto', 'toto', 'toto'),
(15, 'toto', 'toto', 'toto', 'toto', 'toto'),
(16, 'toto', 'toto', 'toto', 'toto', 'toto'),
(17, 'toto', 'toto', 'toto', 'toto', 'toto'),
(18, 'toto', 'toto', 'toto', 'toto', 'toto'),
(19, 'toto', 'toto', 'toto', 'toto', 'toto'),
(20, 'toto', 'toto', 'toto', 'toto', 'toto'),
(21, 'toto', 'toto', 'toto', 'toto', 'toto'),
(22, 'toto', 'toto', 'toto', 'toto', 'toto'),
(23, 'toto', 'toto', 'toto', 'toto', 'toto'),
(24, 'toto', 'toto', 'toto', 'toto', 'toto'),
(25, 'toto', 'toto', 'toto', 'toto', 'toto'),
(26, 'toto', 'toto', 'toto', 'toto', 'toto'),
(27, 'toto', 'toto', 'toto', 'toto', 'toto'),
(28, 'toto', 'toto', 'toto', 'toto', 'toto'),
(29, 'toto', 'toto', 'toto', 'toto', 'toto'),
(30, 'toto', 'toto', 'toto', 'toto', 'toto'),
(31, 'toto', 'toto', 'toto', 'toto', 'toto'),
(32, 'toto', 'toto', 'toto', 'toto', 'toto'),
(33, 'toto', 'toto', 'toto', 'toto', 'toto'),
(34, 'toto', 'toto', 'toto', 'toto', 'toto'),
(35, 'toto', 'toto', 'toto', 'toto', 'toto'),
(36, 'toto', 'toto', 'toto', 'toto', 'toto'),
(37, 'toto', 'toto', 'toto', 'toto', 'toto'),
(38, 'toto', 'toto', 'toto', 'toto', 'toto'),
(39, 'toto', 'toto', 'toto', 'toto', 'toto'),
(40, 'toto', 'toto', 'toto', 'toto', 'toto'),
(41, 'toto', 'toto', 'toto', 'toto', 'toto'),
(42, 'toto', 'toto', 'toto', 'toto', 'toto'),
(43, 'toto', 'toto', 'toto', 'toto', 'toto'),
(44, 'toto', 'toto', 'toto', 'toto', 'toto'),
(45, 'toto', 'toto', 'toto', 'toto', 'toto'),
(46, 'toto', 'toto', 'toto', 'toto', 'toto'),
(47, 'toto', 'toto', 'toto', 'toto', 'toto'),
(48, 'toto', 'toto', 'toto', 'toto', 'toto'),
(49, 'toto', 'toto', 'toto', 'toto', 'toto'),
(50, 'toto', 'toto', 'toto', 'toto', 'toto'),
(51, 'toto', 'toto', 'toto', 'toto', 'toto'),
(52, 'toto', 'toto', 'toto', 'toto', 'toto'),
(53, 'toto', 'toto', 'toto', 'toto', 'toto'),
(54, 'toto', 'toto', 'toto', 'toto', 'toto'),
(55, 'toto', 'toto', 'toto', 'toto', 'toto'),
(56, 'toto', 'toto', 'toto', 'toto', 'toto'),
(57, 'toto', 'toto', 'toto', 'toto', 'toto'),
(58, 'toto', 'toto', 'toto', 'toto', 'toto'),
(59, 'toto', 'toto', 'toto', 'toto', 'toto'),
(60, 'toto', 'toto', 'toto', 'toto', 'toto'),
(61, 'toto', 'toto', 'toto', 'toto', 'toto'),
(62, 'toto', 'toto', 'toto', 'toto', 'toto'),
(63, 'toto', 'toto', 'toto', 'toto', 'toto'),
(64, 'toto', 'toto', 'toto', 'toto', 'toto'),
(65, 'toto', 'toto', 'toto', 'toto', 'toto'),
(66, 'toto', 'toto', 'toto', 'toto', 'toto'),
(67, 'toto', 'toto', 'toto', 'toto', 'toto'),
(68, 'toto', 'toto', 'toto', 'toto', 'toto'),
(69, 'toto', 'toto', 'toto', 'toto', 'toto'),
(70, 'toto', 'toto', 'toto', 'toto', 'toto'),
(71, 'toto', 'toto', 'toto', 'toto', 'toto'),
(72, 'toto', 'toto', 'toto', 'toto', 'toto'),
(73, 'toto', 'toto', 'toto', 'toto', 'toto'),
(74, 'toto', 'toto', 'toto', 'toto', 'toto'),
(75, 'toto', 'toto', 'toto', 'toto', 'toto'),
(76, 'toto', 'toto', 'toto', 'toto', 'toto'),
(77, 'toto', 'toto', 'toto', 'toto', 'toto'),
(78, 'toto', 'toto', 'toto', 'toto', 'toto'),
(79, 'toto', 'toto', 'toto', 'toto', 'toto'),
(80, 'toto', 'toto', 'toto', 'toto', 'toto'),
(81, 'toto', 'toto', 'toto', 'toto', 'toto'),
(82, 'toto', 'toto', 'toto', 'toto', 'toto'),
(83, 'toto', 'toto', 'toto', 'toto', 'toto'),
(84, 'toto', 'toto', 'toto', 'toto', 'toto'),
(85, 'toto', 'toto', 'toto', 'toto', 'toto'),
(86, 'toto', 'toto', 'toto', 'toto', 'toto'),
(87, 'toto', 'toto', 'toto', 'toto', 'toto'),
(88, 'toto', 'toto', 'toto', 'toto', 'toto'),
(89, 'toto', 'toto', 'toto', 'toto', 'toto'),
(90, 'toto', 'toto', 'toto', 'toto', 'toto'),
(91, 'toto', 'toto', 'toto', 'toto', 'toto'),
(92, 'toto', 'toto', 'toto', 'toto', 'toto'),
(93, 'toto', 'toto', 'toto', 'toto', 'toto'),
(94, 'toto', 'toto', 'toto', 'toto', 'toto'),
(95, 'toto', 'toto', 'toto', 'toto', 'toto'),
(96, 'toto', 'toto', 'toto', 'toto', 'toto'),
(97, 'toto', 'toto', 'toto', 'toto', 'toto'),
(98, 'toto', 'toto', 'toto', 'toto', 'toto'),
(99, 'toto', 'toto', 'toto', 'toto', 'toto'),
(100, 'toto', 'toto', 'toto', 'toto', 'toto'),
(101, 'toto', 'toto', 'toto', 'toto', 'toto'),
(102, 'toto', 'toto', 'toto', 'toto', 'toto'),
(103, 'toto', 'toto', 'toto', 'toto', 'toto'),
(104, 'toto', 'toto', 'toto', 'toto', 'toto'),
(105, 'toto', 'toto', 'toto', 'toto', 'toto'),
(106, 'toto', 'toto', 'toto', 'toto', 'toto'),
(107, 'toto', 'toto', 'toto', 'toto', 'toto'),
(108, 'toto', 'toto', 'toto', 'toto', 'toto'),
(109, 'toto', 'toto', 'toto', 'toto', 'toto'),
(110, 'toto', 'toto', 'toto', 'toto', 'toto'),
(111, 'toto', 'toto', 'toto', 'toto', 'toto'),
(112, 'toto', 'toto', 'toto', 'toto', 'toto'),
(113, 'toto', 'toto', 'toto', 'toto', 'toto'),
(114, 'toto', 'toto', 'toto', 'toto', 'toto'),
(115, 'toto', 'toto', 'toto', 'toto', 'toto'),
(116, 'toto', 'toto', 'toto', 'toto', 'toto'),
(117, 'toto', 'toto', 'toto', 'toto', 'toto'),
(118, 'a', 'b', 'a@a.a', 'a', 'a');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id_product`, `name`, `price_buy`, `margin_sale`, `price_sell`, `description`, `stock`, `image`, `id_producer`, `id_category`) VALUES
(11, 'dzadzaazd', 123, 123, 123, 'dazdzadza', 123, '1', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=147 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `name`, `firstname`, `mail`, `address`, `phone`, `password`, `admin`) VALUES
(1, 'White', 'Asher', 'facilisis.Suspendisse@ornareegestasligula.ca', '357-634 Nullam Avenue', '04 22 35 33 46', 'ultrices iaculis odio. Nam interdum', 0),
(2, 'Conrad', 'Cherokee', 'lacinia.Sed@arcuSed.ca', 'Ap #764-2588 Nunc Rd.', '03 58 62 09 89', 'amet orci. Ut sagittis lobortis', 0),
(3, 'Patton', 'Quyn', 'commodo@lobortisultrices.org', 'P.O. Box 243, 5254 Non Rd.', '07 30 43 15 35', 'magnis dis parturient montes, nascetur', 0),
(4, 'Copeland', 'Xaviera', 'laoreet.lectus.quis@ategestasa.ca', '706-1177 Ante Rd.', '07 92 83 19 69', 'porttitor tellus non magna. Nam', 0),
(5, 'Blackwell', 'Ina', 'Aliquam.tincidunt@pede.com', 'P.O. Box 340, 8437 Ligula. Ave', '07 32 06 16 83', 'luctus et ultrices posuere cubilia', 0),
(6, 'Vargas', 'Mufutau', 'nulla.Donec.non@mauris.edu', 'Ap #889-9818 Mi Road', '07 25 68 19 62', 'in magna. Phasellus dolor elit,', 0),
(7, 'Mcintosh', 'Xyla', 'nisi.nibh.lacinia@Aliquamadipiscing.ca', '230-6567 Felis Ave', '04 08 98 95 25', 'erat nonummy ultricies ornare, elit', 0),
(8, 'Vance', 'Teagan', 'Sed.nulla.ante@consectetuercursuset.org', '941-4211 Nullam St.', '04 86 26 93 51', 'semper, dui lectus rutrum urna,', 0),
(9, 'Collier', 'Gage', 'Aliquam.gravida.mauris@rutrumurna.com', 'P.O. Box 444, 1600 Sit Road', '04 32 38 34 97', 'cubilia Curae Phasellus ornare. Fusce', 0),
(10, 'Griffin', 'George', 'egestas@vitae.net', 'P.O. Box 653, 587 Quis St.', '04 40 61 01 02', 'sapien. Nunc pulvinar arcu et', 0),
(11, 'Potter', 'Xena', 'fermentum@Cumsociisnatoque.co.uk', 'Ap #573-8781 In, Av.', '01 52 52 18 25', 'nascetur ridiculus mus. Proin vel', 0),
(12, 'Huber', 'Noah', 'elementum.sem.vitae@lacusMaurisnon.ca', 'P.O. Box 923, 9734 Gravida Road', '05 14 36 52 83', 'tempor augue ac ipsum. Phasellus', 0),
(13, 'Mann', 'Castor', 'ipsum.nunc.id@cursus.co.uk', 'Ap #856-6907 Molestie Ave', '02 36 97 34 62', 'habitant morbi tristique senectus et', 0),
(14, 'Bird', 'Zenia', 'et@Utsagittislobortis.com', '7769 Sagittis. St.', '06 78 37 61 67', 'tempus, lorem fringilla ornare placerat,', 0),
(15, 'Knox', 'Kalia', 'ornare@etrutrumeu.co.uk', '227-8793 Aliquet, Road', '04 00 58 12 77', 'tincidunt tempus risus. Donec egestas.', 0),
(16, 'Dillard', 'Leila', 'ac.eleifend.vitae@Nullamvitae.co.uk', 'P.O. Box 936, 9334 Ornare, Rd.', '07 03 56 14 37', 'Morbi vehicula. Pellentesque tincidunt tempus', 0),
(17, 'Carrillo', 'Yasir', 'Fusce@ligulatortordictum.edu', '409-3276 Tincidunt St.', '02 65 28 74 83', 'nulla at sem molestie sodales.', 0),
(18, 'Cain', 'Claudia', 'scelerisque.sed@conguea.com', '2261 Donec Rd.', '07 56 44 20 24', 'nonummy ut, molestie in, tempus', 0),
(19, 'Avery', 'Jeanette', 'Sed.diam@aduiCras.edu', '587-9891 Eleifend. Rd.', '02 20 48 28 67', 'quis urna. Nunc quis arcu', 0),
(20, 'Mejia', 'Oprah', 'lorem.tristique@nec.co.uk', '9099 Vivamus Av.', '09 11 85 34 79', 'quam. Curabitur vel lectus. Cum', 0),
(21, 'Middleton', 'Portia', 'erat.semper.rutrum@nascetur.org', 'P.O. Box 699, 3389 Ut Rd.', '08 85 98 68 30', 'lacinia mattis. Integer eu lacus.', 0),
(22, 'Yang', 'Ronan', 'imperdiet.ornare@ullamcorperDuis.ca', '818-8988 Varius. St.', '03 18 52 62 85', 'est. Nunc ullamcorper, velit in', 0),
(23, 'Dickson', 'Malcolm', 'interdum@nibh.com', 'P.O. Box 863, 273 Luctus. Ave', '04 67 43 00 74', 'egestas a, scelerisque sed, sapien.', 0),
(24, 'Mcintyre', 'Nigel', 'rutrum@eu.com', 'Ap #674-1437 Nascetur Av.', '06 93 95 79 58', 'arcu vel quam dignissim pharetra.', 0),
(25, 'Howell', 'Mannix', 'Donec.dignissim@hendrerit.co.uk', '5573 Lectus Av.', '03 73 22 61 38', 'ridiculus mus. Aenean eget magna.', 0),
(26, 'Owens', 'Aaron', 'sodales.Mauris.blandit@pedesagittis.edu', 'P.O. Box 232, 130 Ipsum Avenue', '06 85 27 14 46', 'ullamcorper magna. Sed eu eros.', 0),
(27, 'Hyde', 'Nola', 'nisi.magna.sed@rhoncus.net', 'P.O. Box 425, 9772 Odio Street', '01 39 45 24 72', 'id, blandit at, nisi. Cum', 0),
(28, 'Davenport', 'Ross', 'Cras@Donectempus.co.uk', '1902 Primis Street', '08 40 14 56 53', 'risus. Donec egestas. Duis ac', 0),
(29, 'Gibson', 'Tallulah', 'Quisque@ut.ca', '683 Integer Rd.', '06 43 44 06 39', 'scelerisque neque. Nullam nisl. Maecenas', 0),
(30, 'Moss', 'Elaine', 'purus@ametmassa.org', '6255 Feugiat Rd.', '08 13 04 80 60', 'Maecenas libero est, congue a,', 0),
(31, 'Winters', 'Cole', 'enim.Etiam.imperdiet@acmi.net', '721-4519 Maecenas Road', '07 10 90 13 05', 'odio vel est tempor bibendum.', 0),
(32, 'Stanley', 'Illana', 'vehicula.et.rutrum@Nunc.org', 'Ap #849-7575 Fusce Ave', '09 11 30 34 57', 'eu tellus eu augue porttitor', 0),
(33, 'Rose', 'Audrey', 'feugiat@luctusetultrices.org', '2816 Ullamcorper Rd.', '03 07 67 13 03', 'Vestibulum ante ipsum primis in', 0),
(34, 'Pruitt', 'Sonia', 'neque.et@vitaevelit.co.uk', '4622 Tellus Av.', '07 13 76 56 34', 'quis diam luctus lobortis. Class', 0),
(35, 'Meyers', 'Kai', 'Vivamus@non.net', 'Ap #138-6582 Tincidunt Road', '04 73 11 71 64', 'Nunc mauris elit, dictum eu,', 0),
(36, 'Soto', 'Kieran', 'euismod.et.commodo@dolorelit.ca', '4425 Nibh St.', '07 96 08 34 04', 'Integer urna. Vivamus molestie dapibus', 0),
(37, 'Byers', 'Shad', 'ligula.Nullam@dolordapibus.edu', '4704 Dis Rd.', '06 98 46 69 30', 'adipiscing fringilla, porttitor vulputate, posuere', 0),
(38, 'Bray', 'Katell', 'cursus.luctus@Suspendissetristiqueneque.co.uk', 'P.O. Box 488, 457 Purus Av.', '08 44 81 63 82', 'dignissim. Maecenas ornare egestas ligula.', 0),
(39, 'Mccall', 'Adara', 'litora@ut.edu', '433-5523 Non Rd.', '02 70 98 44 02', 'eros nec tellus. Nunc lectus', 0),
(40, 'Castaneda', 'Moses', 'eget.magna.Suspendisse@egestasurna.co.uk', '3016 Scelerisque St.', '04 36 79 51 75', 'Phasellus libero mauris, aliquam eu,', 0),
(41, 'Owens', 'Veda', 'tellus.justo@egestasAliquamfringilla.org', '776-4272 Nec, Rd.', '03 08 29 43 80', 'torquent per conubia nostra, per', 0),
(42, 'Craft', 'Indigo', 'magna@adipiscingligula.ca', 'P.O. Box 332, 9521 Lorem, Rd.', '08 31 89 62 51', 'nunc interdum feugiat. Sed nec', 0),
(43, 'Perry', 'Orla', 'parturient.montes@euismod.co.uk', 'Ap #301-9178 Metus St.', '07 02 20 01 73', 'hendrerit. Donec porttitor tellus non', 0),
(44, 'Whitley', 'Ronan', 'tempus.scelerisque@magnis.com', 'P.O. Box 746, 9476 Mi Street', '08 39 92 04 45', 'cursus purus. Nullam scelerisque neque', 0),
(45, 'Osborne', 'Jasmine', 'parturient@eliterat.edu', '427-222 Dapibus Av.', '01 45 26 89 44', 'imperdiet non, vestibulum nec, euismod', 0),
(46, 'Valentine', 'Kendall', 'semper@Nam.net', '291-7313 Lectus St.', '04 59 95 62 61', 'Nunc commodo auctor velit. Aliquam', 0),
(47, 'Barrera', 'Indira', 'Duis.volutpat.nunc@leo.org', 'Ap #613-354 Diam Road', '04 97 98 97 85', 'dui. Fusce diam nunc, ullamcorper', 0),
(48, 'Erickson', 'Wallace', 'felis.orci@penatibuset.ca', 'Ap #354-6213 Nec, Av.', '01 46 98 27 20', 'lacus, varius et, euismod et,', 0),
(49, 'Rodriquez', 'Nayda', 'massa.Mauris@elementum.org', '303-5078 Leo, Road', '07 33 29 86 50', 'Maecenas malesuada fringilla est. Mauris', 0),
(50, 'Langley', 'Zia', 'malesuada@Integersemelit.edu', 'P.O. Box 144, 4952 Convallis Av.', '01 80 62 96 39', 'sodales elit erat vitae risus.', 0),
(51, 'Pierce', 'Nehru', 'feugiat.non@Vestibulum.edu', 'P.O. Box 725, 4505 Ligula St.', '07 11 77 71 18', 'risus. Nunc ac sem ut', 0),
(52, 'Allen', 'Zane', 'et.netus@dictumaugue.org', 'P.O. Box 514, 3902 Euismod Rd.', '01 34 94 56 14', 'orci sem eget massa. Suspendisse', 0),
(53, 'Vincent', 'Pamela', 'morbi.tristique@loremtristique.edu', '4717 Nulla Rd.', '02 11 28 88 29', 'porta elit, a feugiat tellus', 0),
(54, 'Hubbard', 'Virginia', 'mauris.ipsum.porta@sitametluctus.ca', '6981 Per Avenue', '02 82 39 92 74', 'aliquam eros turpis non enim.', 0),
(55, 'Dunlap', 'Madeline', 'turpis.egestas@sociisnatoque.co.uk', 'P.O. Box 164, 2703 Tellus St.', '05 98 90 21 39', 'Donec nibh enim, gravida sit', 0),
(56, 'May', 'Bianca', 'porta@orcitincidunt.edu', 'Ap #757-3741 Sodales Av.', '07 70 96 09 28', 'diam nunc, ullamcorper eu, euismod', 0),
(57, 'Townsend', 'Jessica', 'lorem.vehicula@at.org', '6847 Consequat Avenue', '03 57 62 95 53', 'sit amet ornare lectus justo', 0),
(58, 'Barrera', 'Joshua', 'et.rutrum@nonummyutmolestie.edu', 'P.O. Box 741, 1118 Ac Road', '03 60 14 90 34', 'ac mattis velit justo nec', 0),
(59, 'Watson', 'Honorato', 'egestas.Aliquam.fringilla@pedeac.ca', '5797 Nunc. Street', '05 42 52 05 07', 'tristique pharetra. Quisque ac libero', 0),
(60, 'Lucas', 'Barrett', 'dis@anteNunc.org', 'P.O. Box 758, 6352 Sed Ave', '09 89 55 92 90', 'iaculis nec, eleifend non, dapibus', 0),
(61, 'Cline', 'Jenna', 'enim.Sed@acsemut.net', '618-9384 Sit Ave', '06 61 99 69 32', 'condimentum. Donec at arcu. Vestibulum', 0),
(62, 'Pennington', 'Noelani', 'posuere.vulputate.lacus@montesnasceturridiculus.edu', '672-9975 Lobortis Street', '01 32 34 03 58', 'sem magna nec quam. Curabitur', 0),
(63, 'Singleton', 'Barbara', 'vestibulum@sapiengravidanon.net', '3238 Quis St.', '04 51 93 72 16', 'tempus non, lacinia at, iaculis', 0),
(64, 'Houston', 'Mari', 'vitae@Nunc.net', '350-6796 Scelerisque Street', '01 84 36 40 85', 'blandit congue. In scelerisque scelerisque', 0),
(65, 'Wilkerson', 'Vanna', 'sit@a.net', 'P.O. Box 784, 4125 Quisque Avenue', '01 87 44 67 72', 'non arcu. Vivamus sit amet', 0),
(66, 'Stafford', 'Cora', 'enim.Suspendisse.aliquet@ridiculusmusProin.ca', '9051 Aliquam Avenue', '02 14 18 34 36', 'Proin non massa non ante', 0),
(67, 'Willis', 'Althea', 'sit.amet.orci@Vivamussit.net', '9525 Maecenas Rd.', '03 07 56 77 06', 'molestie tellus. Aenean egestas hendrerit', 0),
(68, 'Harrell', 'Zena', 'rutrum.lorem@dolorvitae.co.uk', '7433 Vulputate Ave', '02 17 82 19 55', 'mauris ipsum porta elit, a', 0),
(69, 'Walters', 'Cody', 'semper.dui.lectus@malesuada.ca', 'Ap #607-4788 Mauris Rd.', '05 02 76 60 86', 'Nullam feugiat placerat velit. Quisque', 0),
(70, 'Chapman', 'Lucas', 'a@et.edu', 'Ap #907-7569 Sapien. Rd.', '04 97 68 62 19', 'Curae Phasellus ornare. Fusce mollis.', 0),
(71, 'Knox', 'Claudia', 'hendrerit.Donec@ullamcorpermagna.net', 'Ap #470-9529 Condimentum Rd.', '01 14 55 71 64', 'est ac facilisis facilisis, magna', 0),
(72, 'Langley', 'Zephr', 'aliquet@adipiscing.edu', '877-2867 Aenean St.', '01 32 97 87 71', 'et, commodo at, libero. Morbi', 0),
(73, 'Johns', 'Karleigh', 'Sed.eu@acnullaIn.ca', '4917 Cum Road', '03 77 44 52 06', 'adipiscing non, luctus sit amet,', 0),
(74, 'Smith', 'Fulton', 'ipsum.dolor.sit@arcuSed.net', 'Ap #364-6173 Litora Road', '09 92 63 47 01', 'dignissim lacus. Aliquam rutrum lorem', 0),
(75, 'Dillard', 'Igor', 'dolor.Quisque.tincidunt@vestibulumnec.ca', 'P.O. Box 724, 8573 Neque. St.', '01 12 59 67 08', 'amet ornare lectus justo eu', 0),
(76, 'Harris', 'Taylor', 'aliquet@vulputate.com', '7019 Metus Road', '09 72 57 02 63', 'Donec tempor, est ac mattis', 0),
(77, 'Howard', 'Illiana', 'mi.fringilla@consectetueripsum.edu', '6877 Nulla. Rd.', '06 15 38 07 61', 'eros non enim commodo hendrerit.', 0),
(78, 'Valentine', 'Ryder', 'Etiam@posuereat.org', '9088 A Street', '03 49 68 39 86', 'In condimentum. Donec at arcu.', 0),
(79, 'English', 'Eric', 'blandit.viverra.Donec@erat.edu', '3117 Nibh Av.', '03 48 61 31 91', 'egestas a, dui. Cras pellentesque.', 0),
(80, 'Odonnell', 'Basil', 'sit.amet@imperdieteratnonummy.net', 'P.O. Box 424, 8759 Aliquet, Ave', '07 65 91 40 89', 'nunc interdum feugiat. Sed nec', 0),
(81, 'Gentry', 'Timothy', 'sit.amet.dapibus@etcommodoat.co.uk', '9004 Lobortis, Avenue', '08 93 37 97 21', 'vel arcu eu odio tristique', 0),
(82, 'Mcpherson', 'Otto', 'justo@sitametante.org', '439-7518 Semper Av.', '02 47 34 83 48', 'fringilla. Donec feugiat metus sit', 0),
(83, 'Calderon', 'Charde', 'eros.non.enim@ante.ca', 'Ap #899-5038 Tristique Rd.', '09 32 37 96 71', 'ligula elit, pretium et, rutrum', 0),
(84, 'Booth', 'Lesley', 'Nunc.commodo.auctor@eutemporerat.org', 'P.O. Box 995, 900 Cursus Avenue', '04 70 80 74 32', 'placerat, augue. Sed molestie. Sed', 0),
(85, 'Farmer', 'Sasha', 'tempus.risus.Donec@mipede.net', 'P.O. Box 232, 979 Taciti Avenue', '09 94 06 19 40', 'sed orci lobortis augue scelerisque', 0),
(86, 'Lloyd', 'Omar', 'Quisque.libero.lacus@ante.org', '183-3444 Lacus Av.', '02 63 23 02 29', 'ornare. In faucibus. Morbi vehicula.', 0),
(87, 'Vaughan', 'Uta', 'et.rutrum.non@lacus.ca', '607-6785 Facilisis, Av.', '09 34 26 17 03', 'nisl sem, consequat nec, mollis', 0),
(88, 'Mosley', 'Florence', 'dapibus@orci.net', '7015 Lacinia St.', '03 82 40 97 64', 'ornare. In faucibus. Morbi vehicula.', 0),
(89, 'Bradshaw', 'Sylvester', 'eget.venenatis.a@Integervulputate.net', 'P.O. Box 448, 1322 Mattis Street', '08 38 15 06 94', 'orci sem eget massa. Suspendisse', 0),
(90, 'Contreras', 'Daniel', 'ut.sem@posuereat.co.uk', 'P.O. Box 954, 7150 Dapibus Rd.', '09 79 79 92 70', 'Integer in magna. Phasellus dolor', 0),
(91, 'Koch', 'Casey', 'libero.Proin@magnisdisparturient.ca', '400-7665 Vestibulum Ave', '05 55 70 13 46', 'ut aliquam iaculis, lacus pede', 0),
(92, 'Mcguire', 'Joel', 'nulla.magna@dictum.net', '275-7728 Integer Road', '06 09 10 44 09', 'turpis vitae purus gravida sagittis.', 0),
(93, 'Schmidt', 'Illana', 'urna.Ut@nisisem.org', '2357 Vitae St.', '09 69 13 46 42', 'velit eget laoreet posuere, enim', 0),
(94, 'Ferrell', 'Mallory', 'a.feugiat.tellus@Aliquam.co.uk', '672-4037 Eget Street', '07 24 34 50 98', 'sem eget massa. Suspendisse eleifend.', 0),
(95, 'Kirkland', 'Kasimir', 'eu@at.com', '253-2575 Proin Ave', '08 19 52 17 49', 'lacinia vitae, sodales at, velit.', 0),
(96, 'Gibson', 'Silas', 'est@tellus.ca', 'P.O. Box 700, 9564 Sem St.', '08 57 95 16 17', 'auctor, nunc nulla vulputate dui,', 0),
(97, 'Preston', 'Casey', 'libero.Proin.sed@euismodindolor.co.uk', 'Ap #911-4225 Pretium St.', '01 07 38 39 42', 'Mauris vel turpis. Aliquam adipiscing', 0),
(98, 'Lindsey', 'Sybill', 'tellus.Phasellus@interdumSedauctor.com', 'Ap #166-7125 Turpis. Rd.', '03 32 98 26 96', 'egestas a, dui. Cras pellentesque.', 0),
(99, 'Byers', 'Hoyt', 'rutrum@nuncsed.org', 'P.O. Box 139, 8223 Ipsum Av.', '09 73 52 22 32', 'in magna. Phasellus dolor elit,', 0),
(100, 'Floyd', 'Myra', 'auctor.ullamcorper@nibhlaciniaorci.org', '681-2297 Justo. Avenue', '08 11 80 46 62', 'et arcu imperdiet ullamcorper. Duis', 0),
(101, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(102, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(103, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(104, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(105, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(106, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(107, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(108, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(109, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(110, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(111, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(112, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(113, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(114, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(115, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(116, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(117, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(118, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(119, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(120, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(121, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(122, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(123, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(124, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(125, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(126, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(127, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(128, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(129, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(130, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(131, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(132, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(133, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(134, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(135, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(136, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(137, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(138, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(139, 'toto', 'toto', 'toto', 'toto', 'toto', 'toto', 0),
(140, 'a', 'a', 'a@a.a', 'a', 'a', ';', 0),
(141, 'a', 'a', 'a@a.a', 'a', 'a', ';', 0),
(142, 'a', 'a', 'a@a.a', 'a', 'a', ';', 0),
(143, 'a', 'a', 'a@a.a', 'a', 'a', ';', 0),
(144, 'admin', 'a', 'a@a.a', 'a', 'a', ';', 0),
(145, 'admin', 'a', 'a@a.a', 'a', 'a', ';', 0),
(146, 'admin', 'a', 'a@a.a', 'a', 'a', ';', 0);

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
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_caddy`) REFERENCES `caddy` (`id_caddy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_author`) REFERENCES `caddy` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id_producer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rel_caddy_product`
--
ALTER TABLE `rel_caddy_product`
  ADD CONSTRAINT `rel_caddy_product_ibfk_1` FOREIGN KEY (`id_caddy`) REFERENCES `caddy` (`id_caddy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_caddy_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;