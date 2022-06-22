-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 13:46
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
-- Base de données : `dbkenza`
--

-- --------------------------------------------------------

--
-- Structure de la table `ft_table`
--

CREATE TABLE `ft_table` (
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL DEFAULT 'toto',
  `groupe` enum('staff','student','other') DEFAULT 'other',
  `date_de_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ft_table`
--

INSERT INTO `ft_table` (`id`, `login`, `groupe`, `date_de_creation`) VALUES
(1, 'loki', 'staff', '2013-05-01'),
(2, 'scadoux', 'student', '2014-01-01'),
(3, 'chap', 'staff', '2011-04-27'),
(4, 'bambou', 'staff', '2014-03-01'),
(5, 'fantomet', 'staff', '2010-04-03'),
(6, 'ait', 'other', '1971-11-03'),
(7, 'arbona', 'other', '1976-09-06'),
(8, 'belanyi', 'other', '1932-11-11'),
(9, 'bouamar', 'other', '1985-10-15'),
(10, 'dang', 'other', '1943-12-03'),
(11, 'glachant', 'other', '1935-01-27'),
(12, 'lamory', 'other', '1949-03-08'),
(13, 'lienhart', 'other', '1935-04-15'),
(14, 'michaux', 'other', '1943-05-26'),
(15, 'renault', 'other', '1960-04-29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ft_table`
--
ALTER TABLE `ft_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ft_table`
--
ALTER TABLE `ft_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
