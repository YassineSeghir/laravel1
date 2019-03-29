-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 29 mars 2019 à 10:26
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
-- Base de données :  `confitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `street2` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `zipcode` int(11) UNSIGNED DEFAULT NULL,
  `city` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id`, `street`, `street2`, `zipcode`, `city`, `country`, `id_user`) VALUES
(1, '180 Rue de la Republique', '', 38000, 'Echirolles', 'FRANCE', 1),
(3, 'Rue de la Paix', '', 38000, 'GRENOBLE', 'France', 3),
(4, 'Avenue Victor Hugo', '', 38800, 'Pont de Claix', 'FRANCE', 5),
(5, 'Place de la Mairie', '', 69000, 'Lyon', 'FRANCE', 6),
(6, 'Cours Jean Jaures', '', 38100, 'GRENOBLE', 'France', 7),
(7, 'Place Notre Dame', '', 38000, 'GRENOBLE', 'France', 7),
(8, '2 Rue de la Mairie', '', 38000, 'Villard de Lans', 'France', 8),
(9, 'Allee des Alpes', '', 38000, 'GRENOBLE', 'France', 8);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Vins'),
(4, 'Vins cuits'),
(5, 'vodka');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgURL` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `imgURL`) VALUES
(1, 'images/confiture-de-figues.jpg'),
(2, 'images/confiture-de-figues.jpg'),
(3, 'images/confiture-de-figues.jpg'),
(4, 'images/confiture-de-figues.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_delivery_adress` int(11) NOT NULL,
  `id_invoice_adress` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('validated','send','delivered','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index delivery address` (`id_delivery_adress`),
  KEY `Index invoice address` (`id_invoice_adress`) USING BTREE,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_delivery_adress`, `id_invoice_adress`, `date`, `status`) VALUES
(1, 6, 4, 3, '2019-01-01 00:00:00', NULL),
(2, 7, 3, 1, '2019-02-06 00:00:00', NULL),
(3, 8, 8, 3, '2019-02-01 00:00:00', NULL),
(4, 1, 9, 9, '2019-02-03 00:00:00', NULL),
(5, 3, 8, 8, '2019-02-01 00:00:00', NULL),
(20, 5, 1, 7, '2019-02-01 00:00:00', NULL),
(21, 6, 3, 3, '2019-02-05 00:00:00', NULL),
(22, 6, 8, 7, '2019-01-01 00:00:00', NULL),
(23, 7, 6, 6, '2019-01-02 00:00:00', NULL),
(24, 7, 9, 8, '2019-01-09 00:00:00', NULL),
(25, 8, 8, 8, '2019-01-14 00:00:00', NULL),
(26, 8, 8, 5, '2019-01-06 00:00:00', NULL),
(27, 6, 6, 6, '2019-02-08 02:20:00', NULL),
(30, 6, 4, 4, '2019-02-08 10:00:00', NULL),
(31, 6, 1, 8, '2019-02-08 11:10:21', NULL),
(32, 7, 1, 1, '2019-02-07 00:00:00', NULL),
(33, 7, 9, 5, '2019-02-07 00:00:00', NULL),
(34, 7, 4, 6, '2019-02-06 00:00:00', NULL),
(35, 8, 4, 6, '2019-02-06 00:00:00', NULL),
(36, 8, 6, 5, '2019-01-22 00:00:00', NULL),
(37, 1, 1, 9, '2019-01-23 00:00:00', NULL),
(38, 6, 8, 8, '2019-02-08 15:29:00', NULL),
(39, 7, 8, 8, '2019-02-08 16:14:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`) USING BTREE,
  KEY `id_order` (`id_order`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`id`, `qty`, `id_product`, `id_order`) VALUES
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
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` mediumint(11) UNSIGNED NOT NULL,
  `weight` int(11) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL,
  `isInCatalog` tinyint(1) NOT NULL DEFAULT '1',
  `id_category` int(11) DEFAULT NULL,
  `id_image` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index cat` (`id_category`),
  KEY `id_images` (`id_image`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `weight`, `stock`, `isInCatalog`, `id_category`, `id_image`, `created_at`, `updated_at`) VALUES
(5, 'Confiture de figues', 'Délicieuses figues fermentées, cuites dans du vin durant 48 heures. A tester absolument.', 1215, 200, 58, 0, NULL, 1, NULL, NULL),
(6, 'Confiture d\'abricots', 'Abricots aux rhums des îles Kerguelen, une merveille de goût.', 230, 300, 12, 0, NULL, 2, NULL, NULL),
(7, 'Confiture aux fruits des bois', 'On nous recommande de manger tous les jours des fruits rouges ! Voilà qui sera fait avec cette confiture succulente, finement aromatisée au Jack Daniel\'s.', 210, 35, 100, 1, NULL, 3, NULL, NULL),
(9, 'Gelée de gnôle', 'De la gnôle et du sucre ! Du bonheur !', 250, 230, 123, 1, 4, 4, NULL, NULL),
(10, 'Confiture de pamplemousse', 'A découvrir absolument. Un Pamplemousse mariné 6 semaines dans du vin blanc de Savoie. Acidulée et pétillante cette confiture est idéale au petit déjeuner. ', 320, 450, 100, 1, 2, 1, NULL, NULL),
(11, 'Confiture de prunes', 'Prunes ramassées à maturité. Aromatisées subtilement arrosées de vodka.', 2500, 123, 12, 1, NULL, 2, NULL, NULL),
(12, 'Confiture de tomates vertes', 'Un classique de la cuisine cajun cuit dans du Southern Comfort, cette confiture aiguisera vos papilles lors d\'un dîner en amoureux.  ', 8521, 85, 30, 1, NULL, 3, NULL, NULL),
(13, 'L\'absinthe', 'Un grand retour dans notre boutique, la confiture à l\'absinthe du Canada. Forte, verte et tendre. ', 250, 123, 10, 1, NULL, 4, NULL, NULL),
(14, 'Gelée de Cognac', 'Et si l\'envie d\'un XO vous prenait de bon matin ? ', 850, 540, 2, 1, NULL, 1, NULL, NULL),
(15, 'Coffret du voyageur', 'Pour amener avec vous vos produits préférés. Choisissez ce coffret en cuir vegan sécurisé et discret.', 9800, 4000, 10, 0, NULL, 1, NULL, NULL),
(16, 'Spécial coktails', 'Un échantillon de tous nos produits pour vos soirées les plus folles !', 1000, 3000, 20, 1, NULL, 3, NULL, NULL),
(17, 'Gelée de VODKA', 'Dans la série des classiques, une confiture de vodka bison. A tester cet hivers !', 500, 10, 100, 1, NULL, 4, NULL, NULL),
(18, 'Confiture à la bière light', 'Tout spécialement pour vous qui êtes au régime mais qui aimez les bonnes choses ....', 400, 4283, 10, 1, NULL, 2, NULL, NULL),
(19, 'Gelée de Guiness', 'Dans la série des classiques qui nourrissent bien !', 964, 750, 10, 1, NULL, 2, NULL, NULL),
(20, 'Confiture de Kronembourg', 'Encore un classique spécial Gilets Jaunes. Parce que tout le monde à le droit à la qualité.', 110, 1, 100, 1, NULL, 1, NULL, NULL),
(21, 'Pâtes de fruits à la Tequila', 'AïeAïeAïe ! Voilà qui fera chanter les goûters de vos enfants !', 474, 1513, 20, 1, NULL, 4, NULL, NULL),
(22, 'Confiture de Gin', 'Encore un classique de notre boutique, efficace et authentique. A manger le matin, le midi et le soir. ', 807, 123, 52, 1, NULL, 1, NULL, NULL),
(23, 'La Confiture Matignon', 'Spécialement composée par le chef étoilé Jacques DUPONT sur demande du président Emmanuel BENALLA. Une gelée de fayots arrosée de vipérine. ', 9874, 120, 56, 0, NULL, 2, NULL, NULL),
(24, 'Gelée de kanterbrau', 'Elle a fait chanter Renaud et la ligue communiste révolutionnaire. On la retrouve dans notre gelée spéciale anniversaire de l\'indépendance du Guatemala. ', 8501, 123, 14, 1, NULL, 3, NULL, NULL),
(26, 'aaaaaaaaaaaaaaaa', 'aaaaaaaa              une brève description de votre produit', 100, 1000, 1, 0, 5, 4, NULL, NULL),
(28, '122/*-+', 'jhdsfh                            une brève description de votre produit', 10, 10, 10, 0, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product_promo`
--

DROP TABLE IF EXISTS `product_promo`;
CREATE TABLE IF NOT EXISTS `product_promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index promo` (`id_promo`),
  KEY `Index article` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_promo`
--

INSERT INTO `product_promo` (`id`, `id_promo`, `id_product`) VALUES
(1, 2, 5),
(2, 1, 6),
(3, 2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type` int(11) UNSIGNED NOT NULL,
  `value` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promos`
--

INSERT INTO `promos` (`id`, `date_start`, `date_end`, `name`, `type`, `value`) VALUES
(1, '2019-02-07', '2019-03-06', 'Saint Valentin', 1, 15),
(2, '2019-02-07', '2019-03-06', 'Saint Patrick', 0, 25);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(120) CHARACTER SET utf8mb4 DEFAULT NULL,
  `first_name` varchar(120) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `name`, `last_name`, `first_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'richardweber', 'weber', 'richard', 'richard.weber@le-campus-numerique.fr', NULL, '$2y$10$9a3wHhTQNg6HN/sXal9boeYaeOIDasD50A9Qqf95dbqb6fTEY8.Gm', 'E8AfYQtaGdL2VhkYRvnD8iic4l28DJyZ3WmDdUfKr60Vu2hnAiTFUnUkiY7B', '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(3, 1, 'cbrigitte', 'charles', 'brigitte', 'bcharles@uni.org', NULL, '', NULL, '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(5, 1, 'yas', 'ben allal seghir', 'yassine', 'yassine@uni.org', NULL, '', NULL, '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(6, 0, 'mich', 'Dupondt', 'Michael', 'mich@uni.org', NULL, '', NULL, '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(7, 0, 'caty', 'Dupont', 'Catherine', 'caty@uni.org', NULL, '', NULL, '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(8, 0, 'john', 'Doe', 'John', 'john@uni.org', NULL, '', NULL, '2019-03-26 23:00:00', '2019-03-26 23:00:00'),
(9, 0, 'alf', NULL, NULL, 'alf@example.fr', NULL, '$2y$10$AkXopx6Tf3NW267jxXR3rejyWlH1fKiGVck2MjUrqK5JQMyHZ7S5m', 'LTeWaOQpN8028fBG8HcKnaXZo8kPUIPTZZOtLEMoID5uuqia6xIeNDazBWmF', '2019-03-27 09:51:20', '2019-03-27 09:51:20'),
(11, 1, 'testadmin', NULL, NULL, 'testadmin@uni.org', NULL, '$2y$10$ZuYJbKG06MwOdVPMHyJEjuOh6q8ORKAaGxkJgnk87inhWMJoOjMTq', '4XceFd5yt4xcOav6W9RHi9nEp90S2Mxc8mMXHrKpxIqQVPW7n4IWV8OySLZs', '2019-03-27 13:53:05', '2019-03-27 13:53:05'),
(12, 0, 'alex', NULL, NULL, 'test@test.fr', NULL, '$2y$10$4BXqQjGMQoQZ23U7cbXdueHHxK9R.8Fr9WQZdNa6aLzYtLoDhQlvW', '3ngrhy3UcmfwWpveUyzOXeHBXr8Nt5xOY8R8pHlW4INjVhIBQBULTNB32WO8', '2019-03-29 07:37:51', '2019-03-29 07:37:51');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Index delivery address` FOREIGN KEY (`id_delivery_adress`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `Index invoice address` FOREIGN KEY (`id_invoice_adress`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `Index command` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Index cat` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`);

--
-- Contraintes pour la table `product_promo`
--
ALTER TABLE `product_promo`
  ADD CONSTRAINT `Index article` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `Index promo` FOREIGN KEY (`id_promo`) REFERENCES `promos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
