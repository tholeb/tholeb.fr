-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Avril 2020 à 18:39
-- Version du serveur :  10.3.22-MariaDB-0ubuntu0.19.10.1
-- Version de PHP :  7.3.11-0ubuntu0.19.10.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tholeb.fr`
--

-- --------------------------------------------------------

--
-- Structure de la table `image_showcase`
--

CREATE TABLE `image_showcase` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image_showcase`
--

INSERT INTO `image_showcase` (`id`, `image`, `image_name`, `image_desc`) VALUES
(1, 'vlife.png', 'VLife Logo', 'Le logo de mon propre serveur'),
(2, 'tholeb_triangle.png', 'My vaporwave logo', 'Mon logo mais dans un style \"Vaporwave\"'),
(3, 'tholeb.png', 'tholeb', 'Mon logo'),
(4, 'beesight.png', 'BeeSight\'s Logo', 'Le logo de mon projet de fin d\'année'),
(5, 'badnight.png', 'Badnight\'s Logo', 'Le logo d\'un vieux serveur');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `mastery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `object`, `mastery`) VALUES
(1, 'HTML', '2'),
(2, 'CSS', '1'),
(5, 'Javascript', '0'),
(6, 'PHP', '1'),
(7, 'MySQL', '1'),
(8, 'Linux', '0'),
(9, 'MaterializeCSS', '2'),
(10, 'Jquery Datatables', '1'),
(11, 'HighCharts', '1'),
(12, 'Lua', '0'),
(13, 'Python (Django)', '0'),
(14, 'Photoshop', '2');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image_showcase`
--
ALTER TABLE `image_showcase`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `object` (`object`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image_showcase`
--
ALTER TABLE `image_showcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
