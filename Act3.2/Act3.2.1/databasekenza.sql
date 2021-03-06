-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 juin 2022 à 18:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `databasekenza`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `auteur`, `date_publication`) VALUES
(3, 'PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo lorem tortor, vitae luctus nulla porttitor quis. Suspendisse magna sem, dictum sed eleifend a, imperdiet ac est. Integer fringilla, nibh id aliquam convallis, turpis quam interdum felis, quis aliquam neque dui vitae lorem. Duis sodales ligula enim, ac tincidunt lacus commodo ac. Sed porttitor feugiat elit. Mauris a tortor non elit congue luctus. In hac habitasse platea dictumst. Mauris ac pharetra nulla, sed feugiat libero. Ut sed ipsum efficitur, sollicitudin nisl at, luctus nisl.', 'Pascal', '2021-12-09'),
(4, 'React', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo lorem tortor, vitae luctus nulla porttitor quis. Suspendisse magna sem, dictum sed eleifend a, imperdiet ac est. Integer fringilla, nibh id aliquam convallis, turpis quam interdum felis, quis aliquam neque dui vitae lorem. Duis sodales ligula enim, ac tincidunt lacus commodo ac. Sed porttitor feugiat elit. Mauris a tortor non elit congue luctus. In hac habitasse platea dictumst. Mauris ac pharetra nulla, sed feugiat libero. Ut sed ipsum efficitur, sollicitudin nisl at, luctus nisl.', 'Mark', '2020-02-14'),
(6, 'JavaScript', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Aron Ramsdale', '2021-07-25'),
(9, 'nouveau', 'uuuuuuuu', 'gffgfg', '2022-05-30'),
(10, 'Java', 's a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Mikel Arteta', '2022-06-01'),
(11, 'titre1', 'bonjour', 'k', '2022-05-30'),
(12, 'Nec article', 'ceci est le texte du nouveau article', 'kenza', '2022-06-22'),
(13, 'test', 'ceci est un test', 'kenza', '2021-12-09'),
(14, 'essai', 'texte de lessai manuel', 'kenza', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `commentaires` text NOT NULL,
  `visiteur` varchar(255) NOT NULL,
  `date_comm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaires`, `visiteur`, `date_comm`) VALUES
(1, '', '', '0000-00-00'),
(2, 'hello world', 'senda', '2022-06-06'),
(3, 'ffff', 'sasa', '2022-06-06'),
(4, 'dddddd', 'dd', '2022-05-30'),
(5, 'aaaaa', 'aa', '2022-06-06'),
(6, 'sss', 'ss', '2022-05-30'),
(7, 'gg', 'p', '2022-05-30'),
(8, 'h', 'b', '2022-06-06'),
(9, 'aa', 'a', '2022-05-12'),
(10, 'a', 'b', '2022-06-07');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `auteur`, `date_publication`, `article_id`) VALUES
(1, 'Trés bon article.', 'Pascal', '2022-06-07', 10),
(2, 'Pas mal', 'Samuel', '2022-06-07', 3),
(3, 'Bien', 'Mohamed', '2022-06-07', 10),
(4, 'Rania', '7elwa', '2022-06-07', 10),
(5, 'Excellent', 'Habib', '2022-06-07', 6),
(0, 'tres interessant ', 'lina', '2022-06-23', 12),
(2022, 'kenza', 'ARTICLE SUR PHP TRES INTERESSANT', '0000-00-00', 3),
(2022, 'kenza', 'ARTICLE REACT INTERESSANT', '0000-00-00', 4),
(2022, 'kenza', 'bien', '0000-00-00', 12),
(2022, 'kenza', 'tres interessant cet article', '0000-00-00', 13),
(2022, 'kenza', 'tres interessant cet article', '0000-00-00', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
