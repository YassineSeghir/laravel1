-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 mars 2019 à 11:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `order`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(250) NOT NULL,
  `STREET2` varchar(250) DEFAULT NULL,
  `POSTCODE` int(11) UNSIGNED NOT NULL,
  `CITY` varchar(250) NOT NULL,
  `COUNTRY` varchar(20) NOT NULL,
  `ID_CUSTOMER` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index custom` (`ID_CUSTOMER`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id`, `street`, `STREET2`, `POSTCODE`, `CITY`, `COUNTRY`, `ID_CUSTOMER`) VALUES
(1, '180 Rue de la République', 'Allée A3', 38000, 'Echirolles', 'FRANCE', 5),
(3, 'Rue de la Paix', NULL, 38000, 'GRENOBLE', 'France', 1),
(4, 'Avenue Victor Hugo', 'Allée B4', 38800, 'Pont de Claix', 'FRANCE', 3),
(5, 'Place de la Mairie', '', 69000, 'Lyon', 'FRANCE', 2),
(6, 'Cours Jean Jaurès', NULL, 38100, 'GRENOBLE', 'France', 2),
(7, 'Place Notre Dame', NULL, 38000, 'GRENOBLE', 'France', 3),
(8, '2 Rue de la Mairie', 'Impasse Matignon', 38000, 'Villard de Lans', 'France', 4),
(9, 'Allée des Alpes', NULL, 38000, 'GRENOBLE', 'France', 4);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` mediumint(11) UNSIGNED NOT NULL,
  `weight` int(11) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index cat` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `price`, `weight`, `stock`, `id_cat`) VALUES
(5, 'Confiture de figues', 'Délicieuses figues fermentées, cuites dans du vin durant 48 heures. A tester absolument.', 1215, 200, 58, 1),
(6, 'Confiture d\'abricots', 'Abricots aux rhums des îles Kerguelen, une merveille de goût.', 230, 300, 12, 3),
(7, 'Confiture aux fruits des bois', 'On nous recommande de manger tous les jours des fruits rouges ! Voilà qui sera fait avec cette confiture succulente, finement aromatisée au Jack Daniel\'s.', 210, 350, 0, 1),
(9, 'Gelée de gnôle', 'De la gnôle et du sucre ! Du bonheur !', 250, 230, 123, 4),
(10, 'Confiture de pamplemousse', 'A découvrir absolument. Un Pamplemousse mariné 6 semaines dans du vin blanc de Savoie. Acidulée et pétillante cette confiture est idéale au petit déjeuner. ', 320, 450, 0, 2),
(11, 'Confiture de prunes', 'Prunes ramassées à maturité. Aromatisées subtilement arrosées de vodka.', 2500, 123, 12, 1),
(12, 'Confiture de tomates vertes', 'Un classique de la cuisine cajun cuit dans du Southern Comfort, cette confiture aiguisera vos papilles lors d\'un dîner en amoureux.  ', 8521, 85, 0, 1),
(13, 'L\'absinthe', 'Un grand retour dans notre boutique, la confiture à l\'absinthe du Canada. Forte, verte et tendre. ', 250, 123, 10, 1),
(14, 'Gelée de Cognac', 'Et si l\'envie d\'un XO vous prenait de bon matin ? ', 850, 540, 2, 1),
(15, 'Coffret du voyageur', 'Pour amener avec vous vos produits préférés. Choisissez ce coffret en cuir vegan sécurisé et discret. ', 9800, 400, 10, 1),
(16, 'Spécial coktails', 'Un échantillon de tous nos produits pour vos soirées les plus folles !', 1000, 3000, 20, 1),
(17, 'Gelée de VODKA', 'Dans la série des classiques, une confiture de vodka bison. A tester cet hivers !', 500, 10, 1, 1),
(18, 'Confiture à la bière light', 'Tout spécialement pour vous qui êtes au régime mais qui aimez les bonnes choses ....', 400, 5287, 1, 3),
(19, 'Gelée de Guiness', 'Dans la série des classiques qui nourrissent bien !', 964, 750, 1, 3),
(20, 'Confiture de Kronembourg', 'Encore un classique spécial Gilets Jaunes. Parce que tout le monde à le droit à la qualité. ', 1000, 1, 1230, 3),
(21, 'Pâtes de fruits à la Tequila', 'AïeAïeAïe ! Voilà qui fera chanter les goûters de vos enfants !', 474, 1513, 20, 1),
(22, 'Confiture de Gin', 'Encore un classique de notre boutique, efficace et authentique. A manger le matin, le midi et le soir. ', 807, 123, 52, 1),
(23, 'La Confiture Matignon', 'Spécialement composée par le chef étoilé Jacques DUPONT sur demande du président Emmanuel BENALLA. Une gelée de fayots arrosée de vipérine. ', 9874, 120, 0, 1),
(24, 'Gelée de kanterbrau', 'Elle a fait chanter Renaud et la ligue communiste révolutionnaire. On la retrouve dans notre gelée spéciale anniversaire de l\'indépendance du Guatemala. ', 8501, 123, 14, 3);

-- --------------------------------------------------------

--
-- Structure de la table `asso_article_img`
--

DROP TABLE IF EXISTS `asso_article_img`;
CREATE TABLE IF NOT EXISTS `asso_article_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `asso_article_img`
--

INSERT INTO `asso_article_img` (`id`, `id_article`, `id_image`) VALUES
(1, 5, 1),
(2, 6, 1),
(3, 7, 1),
(4, 9, 1),
(5, 10, 2),
(6, 11, 3),
(7, 12, 3),
(8, 13, 4),
(9, 14, 3),
(10, 15, 4),
(11, 16, 3),
(12, 17, 3),
(13, 18, 2),
(14, 19, 4),
(15, 21, 1),
(16, 22, 3),
(17, 23, 3),
(18, 24, 2);

-- --------------------------------------------------------

--
-- Structure de la table `asso_promo_article`
--

DROP TABLE IF EXISTS `asso_promo_article`;
CREATE TABLE IF NOT EXISTS `asso_promo_article` (
  `ID_PROMOARTICLE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROMO` int(11) NOT NULL,
  `ID_ARTICLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_PROMOARTICLE`),
  KEY `Index promo` (`ID_PROMO`),
  KEY `Index article` (`ID_ARTICLE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `asso_promo_article`
--

INSERT INTO `asso_promo_article` (`ID_PROMOARTICLE`, `ID_PROMO`, `ID_ARTICLE`) VALUES
(1, 2, 5),
(2, 1, 6),
(3, 2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Alcool forts'),
(2, 'Vins'),
(3, 'Bières'),
(4, 'Vins cuits');

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `ID_COMMAND` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CUSTOMER` int(11) NOT NULL,
  `ID_DELIVERY_ADD` int(11) NOT NULL,
  `ID_INVOICE_ADDRESS` int(11) NOT NULL,
  `DATE` datetime NOT NULL,
  PRIMARY KEY (`ID_COMMAND`),
  KEY `Index delivery address` (`ID_DELIVERY_ADD`),
  KEY `Index invoice address` (`ID_INVOICE_ADDRESS`),
  KEY `Index_custom` (`ID_CUSTOMER`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`ID_COMMAND`, `ID_CUSTOMER`, `ID_DELIVERY_ADD`, `ID_INVOICE_ADDRESS`, `DATE`) VALUES
(1, 2, 4, 3, '2019-02-07 00:00:00'),
(2, 5, 3, 1, '2019-02-06 00:00:00'),
(3, 3, 8, 3, '2019-02-01 00:00:00'),
(4, 2, 9, 9, '2019-02-03 00:00:00'),
(5, 3, 8, 8, '2019-02-01 00:00:00'),
(20, 5, 1, 7, '2019-02-01 00:00:00'),
(21, 1, 3, 3, '2019-02-05 00:00:00'),
(22, 1, 8, 7, '2019-01-01 00:00:00'),
(23, 2, 6, 6, '2019-01-02 00:00:00'),
(24, 3, 9, 8, '2019-01-09 00:00:00'),
(25, 4, 8, 8, '2019-01-14 00:00:00'),
(26, 5, 8, 5, '2019-01-06 00:00:00'),
(27, 4, 6, 6, '2019-02-08 02:20:00'),
(30, 3, 4, 4, '2019-02-08 10:00:00'),
(31, 4, 1, 8, '2019-02-08 11:10:21'),
(32, 2, 1, 1, '2019-02-07 00:00:00'),
(33, 3, 9, 5, '2019-02-07 00:00:00'),
(34, 5, 4, 6, '2019-02-06 00:00:00'),
(35, 5, 4, 6, '2019-02-06 00:00:00'),
(36, 4, 6, 5, '2019-01-22 00:00:00'),
(37, 2, 1, 9, '2019-01-23 00:00:00'),
(38, 1, 8, 8, '2019-02-08 15:29:00'),
(39, 1, 8, 8, '2019-02-08 16:14:00');

-- --------------------------------------------------------

--
-- Structure de la table `command_line`
--

DROP TABLE IF EXISTS `command_line`;
CREATE TABLE IF NOT EXISTS `command_line` (
  `ID_COM_LINE` int(11) NOT NULL AUTO_INCREMENT,
  `QTY` int(11) NOT NULL,
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_COMMAND` int(11) NOT NULL,
  PRIMARY KEY (`ID_COM_LINE`),
  KEY `Index command` (`ID_COMMAND`),
  KEY `ID_ARTICLE` (`ID_ARTICLE`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `command_line`
--

INSERT INTO `command_line` (`ID_COM_LINE`, `QTY`, `ID_ARTICLE`, `ID_COMMAND`) VALUES
(1, 2, 7, 1),
(2, 3, 5, 1),
(3, 2, 13, 1),
(4, 1, 15, 1),
(5, 1, 6, 2),
(6, 2, 7, 2),
(7, 45, 24, 2),
(8, 1, 15, 3),
(9, 1, 7, 3),
(10, 3, 6, 3),
(11, 4, 13, 3),
(12, 45, 24, 4),
(13, 35, 20, 4),
(14, 2, 23, 5),
(15, 12, 15, 5),
(16, 1, 14, 5),
(17, 4, 10, 5),
(18, 3, 22, 20),
(19, 5, 13, 21),
(20, 7, 6, 21),
(21, 7, 12, 21),
(22, 7, 22, 21),
(23, 7, 23, 21),
(26, 1, 19, 22),
(27, 1, 11, 22),
(28, 4, 7, 23),
(29, 2, 18, 23),
(30, 3, 21, 23),
(31, 1, 21, 23),
(32, 2, 5, 24),
(33, 7, 11, 25),
(34, 20, 17, 26),
(35, 7, 16, 27),
(36, 2, 20, 30),
(37, 35, 23, 30),
(38, 10, 12, 32),
(39, 35, 17, 35),
(40, 4, 9, 36),
(41, 7, 19, 36),
(42, 2, 22, 35),
(43, 35, 21, 36),
(44, 3, 24, 37),
(45, 7, 9, 37),
(46, 2, 13, 37),
(47, 1, 14, 37),
(48, 123, 18, 37),
(49, 35, 5, 37),
(50, 2, 16, 33),
(51, 2, 7, 34),
(52, 2, 15, 39),
(53, 1, 15, 39);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `ID_CUSTOMER` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(45) NOT NULL,
  `FIRST_NAME` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_CUSTOMER`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`ID_CUSTOMER`, `NAME`, `FIRST_NAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'CHARLES', 'Brigitte', 'bc@gmail.com', '20152015'),
(2, 'DOE', 'John', 'john_doe]gmail.com', '123'),
(3, 'DOE', 'Jane', 'jane@gmail.com', '123'),
(4, 'UNTEL', 'paul', 'paul@gmail.com', '123'),
(5, 'LONDRES', 'Lucius', 'lucius@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgURL` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `imgURL`) VALUES
(1, 'confiture-de-figues.jpg'),
(2, 'confiture-de-figues.jpg'),
(3, 'confiture-de-figues.jpg'),
(4, 'confiture-de-figues.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `ID_PROMO` int(11) NOT NULL AUTO_INCREMENT,
  `START` date NOT NULL,
  `END` date NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `TYPE` int(11) UNSIGNED NOT NULL,
  `VALUE` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`ID_PROMO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`ID_PROMO`, `START`, `END`, `NAME`, `TYPE`, `VALUE`) VALUES
(1, '2019-02-07', '2019-03-06', 'Saint Valentin', 1, 15),
(2, '2019-02-07', '2019-03-06', 'Saint Patrick', 0, 25);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `Index custom` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `customer` (`ID_CUSTOMER`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Index cat` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `asso_promo_article`
--
ALTER TABLE `asso_promo_article`
  ADD CONSTRAINT `Index article` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `Index promo` FOREIGN KEY (`ID_PROMO`) REFERENCES `promo` (`ID_PROMO`);

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `Index customer` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `customer` (`ID_CUSTOMER`),
  ADD CONSTRAINT `Index delivery address` FOREIGN KEY (`ID_DELIVERY_ADD`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `Index invoice address` FOREIGN KEY (`ID_INVOICE_ADDRESS`) REFERENCES `address` (`id`);

--
-- Contraintes pour la table `command_line`
--
ALTER TABLE `command_line`
  ADD CONSTRAINT `Index command` FOREIGN KEY (`ID_COMMAND`) REFERENCES `command` (`ID_COMMAND`),
  ADD CONSTRAINT `command_line_ibfk_1` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
