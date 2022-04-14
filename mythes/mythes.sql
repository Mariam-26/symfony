-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 avr. 2022 à 03:52
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mythes`
--
CREATE DATABASE IF NOT EXISTS `mythes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mythes`;

-- --------------------------------------------------------

--
-- Structure de la table `creature`
--

CREATE TABLE `creature` (
  `id` int(11) NOT NULL,
  `type_creature_id` int(11) NOT NULL,
  `nom_creature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_origine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_origine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille_cm` int(11) NOT NULL,
  `esperance` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `creature_pouvoir_creature`
--

CREATE TABLE `creature_pouvoir_creature` (
  `creature_id` int(11) NOT NULL,
  `pouvoir_creature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220412101943', '2022-04-12 10:22:06', 103),
('DoctrineMigrations\\Version20220412110104', '2022-04-12 11:01:48', 449);

-- --------------------------------------------------------

--
-- Structure de la table `pouvoir_creature`
--

CREATE TABLE `pouvoir_creature` (
  `id` int(11) NOT NULL,
  `pouvoir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_creature`
--

CREATE TABLE `type_creature` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `creature`
--
ALTER TABLE `creature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2A6C6AF4448367D9` (`type_creature_id`);

--
-- Index pour la table `creature_pouvoir_creature`
--
ALTER TABLE `creature_pouvoir_creature`
  ADD PRIMARY KEY (`creature_id`,`pouvoir_creature_id`),
  ADD KEY `IDX_E16B1B17F9AB048` (`creature_id`),
  ADD KEY `IDX_E16B1B176BF80762` (`pouvoir_creature_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `pouvoir_creature`
--
ALTER TABLE `pouvoir_creature`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_creature`
--
ALTER TABLE `type_creature`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `creature`
--
ALTER TABLE `creature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pouvoir_creature`
--
ALTER TABLE `pouvoir_creature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_creature`
--
ALTER TABLE `type_creature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `creature`
--
ALTER TABLE `creature`
  ADD CONSTRAINT `FK_2A6C6AF4448367D9` FOREIGN KEY (`type_creature_id`) REFERENCES `type_creature` (`id`);

--
-- Contraintes pour la table `creature_pouvoir_creature`
--
ALTER TABLE `creature_pouvoir_creature`
  ADD CONSTRAINT `FK_E16B1B176BF80762` FOREIGN KEY (`pouvoir_creature_id`) REFERENCES `pouvoir_creature` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E16B1B17F9AB048` FOREIGN KEY (`creature_id`) REFERENCES `creature` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
