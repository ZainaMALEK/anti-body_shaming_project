-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 06 avr. 2018 à 09:57
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `body_shaming_forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Témoignages'),
(2, 'Confiance en soi'),
(3, 'Recettes de Laura'),
(4, 'Entrainements de Yohan'),
(5, 'Dessins de Amine');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `f_topics`
--

CREATE TABLE `f_topics` (
  `id` int(11) NOT NULL,
  `id_createur` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `sujet` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `notif_creator` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_topics`
--

INSERT INTO `f_topics` (`id`, `id_createur`, `id_categorie`, `sujet`, `contenu`, `created_at`, `updated_at`, `deleted_at`, `notif_creator`) VALUES
(6, 1, 2, 'Laura', 'oeufs frais', '2018-03-14 15:30:35', '2018-03-16 14:12:51', NULL, 1),
(7, 1, 1, 'milka', 'chocolat', '2018-03-14 16:04:42', '2018-03-16 14:12:51', NULL, 0),
(8, 3, NULL, 'Hamine', 'Je dessine trop bien Zainouche', '2018-03-15 15:51:50', '2018-03-16 14:12:51', NULL, 0),
(9, 2, 5, 'hiiiiiiipo', 'hiiiiiiiiiiipo', '2018-03-15 22:01:32', '2018-03-16 14:12:51', NULL, 1),
(10, NULL, NULL, 'Jeudi', 'testtest', '2018-03-29 11:36:19', '2018-03-29 11:36:19', NULL, 1),
(11, NULL, NULL, 'Leila', 'test test', '2018-03-30 12:10:37', '2018-03-30 12:10:37', NULL, 0),
(12, NULL, NULL, 'Zaina', 'test zaina', '2018-03-30 12:11:39', '2018-03-30 12:11:39', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'zaina', 'malek.zaina@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'yoyo', 'yoyo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(3, 'amimar', 'archi@yahoo.fr', '42b265391509873a4a84d5827d5e4ca01606a5bf'),
(5, 'Leilouche', 'leilouche@gmail.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077'),
(6, 'Leilouche', 'leilouche@gmail.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077'),
(10, 'monpapa', 'monpapa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(11, 'marinette', 'marinette@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(12, 'margo', 'margo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(13, 'minou', 'minou@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_topics`
--
ALTER TABLE `f_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_createur` (`id_createur`),
  ADD KEY `id_createur_2` (`id_createur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `f_topics`
--
ALTER TABLE `f_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `f_topics`
--
ALTER TABLE `f_topics`
  ADD CONSTRAINT `f_topics_ibfk_1` FOREIGN KEY (`id_createur`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
