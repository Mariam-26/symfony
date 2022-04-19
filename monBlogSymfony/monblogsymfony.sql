-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 19 avr. 2022 à 06:01
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
-- Base de données : `monblogsymfony`
--
CREATE DATABASE IF NOT EXISTS `monblogsymfony` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `monblogsymfony`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `created_at`, `author`) VALUES
(1, 'Les serpents', 'Il existe plus de 2700 espèces de serpents, répartis sur le globe dans les régions chaudes et tempérées.\r\nComme les serpents sont des animaux à sang froid, leur métabolisme ralenti quand leur température descend trop.\r\n\r\nLa première chose à remarquer, c\'est que les serpents n\'ont pas de membres, ou pattes, pour se déplacer. Ils se déplacent donc pas des mouvements oscillatoires de leur corps, ou en accordéon, utilisant leurs larges écailles ventrales pour s\'aider.\r\n\r\nLes oreilles, orifices et tympans sont inexistants, comme chez certains autres reptiles, et ils utilisent donc les vibrations du sol et de l\'air pour détecter les animaux qui peuvent s\'approcher de lui.\r\n\r\nLa peau de serpent est recouverte d\'écailles, habituellement plus larges sur le ventre. Elles sont alternées sur le dos, mais sont plus larges et successives sur le ventre. Le nombre d\'écailles dans une rangée dépend de l\'espèce de serpent et de la grosseur des écailles, variant de 13 à 150 par rangée. Le nombre peut être constant en diminuant de grosseur, ou varier en nombre pour diminuer vers la queue qui est plus petite. Les serpents muent afin de remplacer périodiquement leur peau.', 'https://cdn.pixabay.com/photo/2014/11/23/21/22/snake-543243__340.jpg', '2022-04-18 23:42:43', 'Mariam ouédraogo'),
(2, 'Les serpents', 'Il existe plus de 2700 espèces de serpents, répartis sur le globe dans les régions chaudes et tempérées.\r\nComme les serpents sont des animaux à sang froid, leur métabolisme ralenti quand leur température descend trop.\r\n\r\nLa première chose à remarquer, c\'est que les serpents n\'ont pas de membres, ou pattes, pour se déplacer. Ils se déplacent donc pas des mouvements oscillatoires de leur corps, ou en accordéon, utilisant leurs larges écailles ventrales pour s\'aider.\r\n\r\nLes oreilles, orifices et tympans sont inexistants, comme chez certains autres reptiles, et ils utilisent donc les vibrations du sol et de l\'air pour détecter les animaux qui peuvent s\'approcher de lui.\r\n\r\nLa peau de serpent est recouverte d\'écailles, habituellement plus larges sur le ventre. Elles sont alternées sur le dos, mais sont plus larges et successives sur le ventre. Le nombre d\'écailles dans une rangée dépend de l\'espèce de serpent et de la grosseur des écailles, variant de 13 à 150 par rangée. Le nombre peut être constant en diminuant de grosseur, ou varier en nombre pour diminuer vers la queue qui est plus petite. Les serpents muent afin de remplacer périodiquement leur peau.', 'https://cdn.pixabay.com/photo/2014/11/23/21/22/snake-543243__340.jpg', '2022-04-18 23:42:43', 'Mariam Ouédraogo'),
(3, 'Les serpents', 'Il existe plus de 2700 espèces de serpents, répartis sur le globe dans les régions chaudes et tempérées.\r\nComme les serpents sont des animaux à sang froid, leur métabolisme ralenti quand leur température descend trop.\r\n\r\nLa première chose à remarquer, c\'est que les serpents n\'ont pas de membres, ou pattes, pour se déplacer. Ils se déplacent donc pas des mouvements oscillatoires de leur corps, ou en accordéon, utilisant leurs larges écailles ventrales pour s\'aider.\r\n\r\nLes oreilles, orifices et tympans sont inexistants, comme chez certains autres reptiles, et ils utilisent donc les vibrations du sol et de l\'air pour détecter les animaux qui peuvent s\'approcher de lui.\r\n\r\nLa peau de serpent est recouverte d\'écailles, habituellement plus larges sur le ventre. Elles sont alternées sur le dos, mais sont plus larges et successives sur le ventre. Le nombre d\'écailles dans une rangée dépend de l\'espèce de serpent et de la grosseur des écailles, variant de 13 à 150 par rangée. Le nombre peut être constant en diminuant de grosseur, ou varier en nombre pour diminuer vers la queue qui est plus petite. Les serpents muent afin de remplacer périodiquement leur peau.', 'https://cdn.pixabay.com/photo/2014/11/23/21/22/snake-543243__340.jpg', '2022-04-18 23:42:43', 'Mariam Ouédraog'),
(4, 'Les serpents', 'Il existe plus de 2700 espèces de serpents, répartis sur le globe dans les régions chaudes et tempérées.\r\nComme les serpents sont des animaux à sang froid, leur métabolisme ralenti quand leur température descend trop.\r\n\r\nLa première chose à remarquer, c\'est que les serpents n\'ont pas de membres, ou pattes, pour se déplacer. Ils se déplacent donc pas des mouvements oscillatoires de leur corps, ou en accordéon, utilisant leurs larges écailles ventrales pour s\'aider.\r\n\r\nLes oreilles, orifices et tympans sont inexistants, comme chez certains autres reptiles, et ils utilisent donc les vibrations du sol et de l\'air pour détecter les animaux qui peuvent s\'approcher de lui.\r\n\r\nLa peau de serpent est recouverte d\'écailles, habituellement plus larges sur le ventre. Elles sont alternées sur le dos, mais sont plus larges et successives sur le ventre. Le nombre d\'écailles dans une rangée dépend de l\'espèce de serpent et de la grosseur des écailles, variant de 13 à 150 par rangée. Le nombre peut être constant en diminuant de grosseur, ou varier en nombre pour diminuer vers la queue qui est plus petite. Les serpents muent afin de remplacer périodiquement leur peau.', 'https://cdn.pixabay.com/photo/2014/11/23/21/22/snake-543243__340.jpg', '2022-04-18 23:42:43', 'Mariam Ouédraogo');

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
('DoctrineMigrations\\Version20220418213601', '2022-04-18 21:36:17', 89);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
