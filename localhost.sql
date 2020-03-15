-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 jan. 2020 à 20:20
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `localhost`
--

-- --------------------------------------------------------

--
-- Structure de la table `changelogs`
--

CREATE TABLE `changelogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `release_title` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `version` varchar(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content_md` text NOT NULL,
  `content_html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `changelogs`
--

INSERT INTO `changelogs` (`id`, `image`, `release_title`, `releasedate`, `version`, `type`, `content_md`, `content_html`) VALUES
(1, '', 'MàJ globale', '2019-12-30', '1.0', 'server', 'Mise à jour sur le global', 'Mise à jour sur le global'),
(2, 'https://static.mmzstatic.com/wp-content/uploads/2017/02/meme-fevrier-2017.jpg', 'MàJ illégale', '2020-01-02', '1.3', 'server', 'mise à jour sur l\'illégal!! Attention pleins de nouveautés, après, je sais pas quoi dire tuwa c\'est juste pour combler le texte et faire des tests, j\'en ai besoin, je suis le meilleurs tsé, oui je me suce la bite et alors ? tu as un pb ? tchoin va! Pardon, dsl frr me suis emporté mais en meme temps tu soules a tjr critikai...', 'mise à jour sur l\'illégal!! Attention pleins de nouveautés, après, je sais pas quoi dire tuwa c\'est juste pour combler le texte et faire des tests, j\'en ai besoin, je suis le meilleurs tsé, oui je me suce la bite et alors ? tu as un pb ? tchoin va! Pardon, dsl frr me suis emporté mais en meme temps tu soules a tjr critikai...'),
(3, '', 'MàJ police', '2020-01-01', '1.2', 'server', '**oui**', '<b>oui</b>'),
(4, '', 'MàJ légal', '2019-12-31', '1.1', 'server', '**non**', '<b>non</b>'),
(5, '', 'MàJ légal', '2019-12-31', '1.1', 'server', '**non**', '<b>non</b>'),
(6, '', 'MàJ police', '2020-01-01', '1.2', 'website', '**oui**', '<b>oui</b>'),
(7, '', 'MàJ légal', '2019-12-31', '1.1', 'website', '**non**', '<b>non</b>'),
(8, '', 'MàJ légal', '2019-12-31', '1.1', 'website', '**non**', '<b>non</b>'),
(9, '', 'MàJ police', '2020-01-01', '1.2', 'server', '**oui**', '<b>oui</b>'),
(10, '', 'MàJ légal', '2019-12-31', '1.1', 'website', '**non**', '<b>non</b>');

-- --------------------------------------------------------

--
-- Structure de la table `maze_customers`
--

CREATE TABLE `maze_customers` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maze_hire`
--

CREATE TABLE `maze_hire` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `phone` int(255) NOT NULL,
  `driverlicense` varchar(255) NOT NULL,
  `weaponlicense` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maze_rdv`
--

CREATE TABLE `maze_rdv` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `police_bdd`
--

CREATE TABLE `police_bdd` (
  `id` int(11) NOT NULL,
  `DateTimestamp` date NOT NULL,
  `CreationTimestamp` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `organisation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offense` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `police_bdd`
--

INSERT INTO `police_bdd` (`id`, `DateTimestamp`, `CreationTimestamp`, `status`, `organisation`, `agent`, `suspect`, `offense`, `bills`, `other`) VALUES
(70, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(71, '0000-00-00', '17:27:46', 0, 'bcso', 'Chris Kyle', 'Jack Silva', 'Evasion de détenu?', '100000', '2h'),
(72, '0000-00-00', '21:20:43', 0, 'bcso', 'Chris Kyle', 'Léo', '', '72000', ''),
(73, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(74, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(75, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(76, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(77, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(78, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(79, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(80, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(81, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(82, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(83, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(84, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(85, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(86, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(87, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(88, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(89, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(90, '0000-00-00', '17:27:46', 0, 'bcso', 'Chris Kyle', 'Jack Silva', 'Evasion de détenu?', '100000', '2h'),
(91, '0000-00-00', '21:20:43', 0, 'bcso', 'Chris Kyle', 'Léo', '', '72000', ''),
(92, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(93, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(94, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(95, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(96, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(97, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(98, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(99, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(100, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(101, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(102, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(103, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(104, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(105, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(106, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(107, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(108, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(109, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(110, '0000-00-00', '17:27:46', 0, 'bcso', 'Chris Kyle', 'Jack Silva', 'Evasion de détenu?', '100000', '2h'),
(111, '0000-00-00', '21:20:43', 0, 'bcso', 'Chris Kyle', 'Léo', '', '72000', ''),
(112, '0000-00-00', '17:27:46', 0, 'bcso', 'Chris Kyle', 'Jack Silva', 'Evasion de détenu?', '100000', '2h'),
(113, '0000-00-00', '21:20:43', 0, 'bcso', 'Chris Kyle', 'Léo', '', '72000', ''),
(114, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(115, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(116, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(117, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(118, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(119, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(120, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(121, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(122, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(123, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(124, '0000-00-00', '17:27:36', 0, 'lspd', 'Chris Kyle', 'Jack Silva', 'tsé😍', '100000', '2h'),
(125, '0000-00-00', '17:27:46', 0, 'bcso', 'Chris Kyle', 'Jack Silva', 'Evasion de détenu?', '100000', '2h'),
(126, '0000-00-00', '00:00:00', 0, '', '', '', '', '', ''),
(127, '0000-00-00', '00:00:00', 0, 'lspd', '', '', '', '', ''),
(128, '0000-00-00', '00:00:00', 0, 'lspd', '', '', '', '', ''),
(129, '0000-00-00', '00:00:00', 0, '', '', '', '', '', ''),
(130, '0000-00-00', '00:00:00', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `police_candid`
--

CREATE TABLE `police_candid` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `phone` int(255) NOT NULL,
  `driverlicense` varchar(255) NOT NULL,
  `weaponlicense` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `police_complaint`
--

CREATE TABLE `police_complaint` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `organisation` varchar(20) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `object` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_complaint`
--

INSERT INTO `police_complaint` (`id`, `CreationTimestamp`, `organisation`, `agent`, `object`, `name`, `link`, `state`) VALUES
(11, '2019-08-21 16:41:00', 'bcso', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(12, '2019-08-21 17:12:02', 'bcso', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(13, '2019-08-21 16:41:00', 'lspd', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(14, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(15, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(16, '2019-08-21 16:41:00', 'lspd', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(17, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(18, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(19, '2019-08-21 16:41:00', 'bcso', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(20, '2019-08-21 17:12:02', 'bcso', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(21, '2019-08-21 16:41:00', 'lspd', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(22, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(23, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(24, '2019-08-21 16:41:00', 'lspd', 'Chris Kyle', 'Braquage', 'John Kyle', 'https://docs.google.com/document/d/1uTc9WTgRhqDdE8wjxEYvdoS8X6UDyCmH3Hi5FyNmmBg/edit?usp=sharing', 0),
(25, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(26, '2019-08-21 17:12:02', 'lspd', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 1),
(27, '2019-08-21 17:12:02', 'bcso', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 0),
(28, '2019-08-21 17:12:02', 'bcso', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 0),
(29, '2019-08-21 17:12:02', 'bcso', 'Chris Kyle', 'Constat', 'Jean Michel', 'lol', 0);

-- --------------------------------------------------------

--
-- Structure de la table `police_convocations`
--

CREATE TABLE `police_convocations` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `agent` varchar(255) NOT NULL,
  `convoque` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `done` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_convocations`
--

INSERT INTO `police_convocations` (`id`, `CreationTimestamp`, `agent`, `convoque`, `reason`, `done`) VALUES
(1, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(2, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(3, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(4, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(5, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(6, '0000-00-00', 'Chris Kyle', 'John Kyle', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp qdqjdl kqndl qd qsjd qpsjd oqsdo qsopijd pqsd qpkisj dfjh^goriz o^nhcvz eoif  zeoborzebv poub zpb vzbu vzonv ôzen sdnblnqf lqnv nlvqnsldnv vnq svl nl', 0),
(7, '2019-02-28', 'Chris Kyles', 'John Kyles', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0),
(8, '2019-01-27', 'Jean Lassale', 'Ta mère', 'Parce que c\'est un fdp j\'ai juré go le convoqué ce fdp', 0);

-- --------------------------------------------------------

--
-- Structure de la table `police_daymessage`
--

CREATE TABLE `police_daymessage` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_daymessage`
--

INSERT INTO `police_daymessage` (`id`, `type`, `message`) VALUES
(1, 'lspd', 'message de la lspd'),
(2, 'bcso', 'message du Bcso'),
(5, 'lspd', 'Attention a jean daniel c\'est un connard il a des flingues !'),
(14, 'LSPD', 'Attention a jean daniel c\'est un connard il a des flingues ! 2'),
(15, 'LSPD', 'Je fais un test'),
(16, 'LSPD', 'Je fais un test'),
(17, 'LSPD', 'Je fais un test'),
(18, 'LSPD', 'Oui oui oui'),
(19, 'LSPD', 'Oui oui oui2'),
(20, 'LSPD', 'zizi');

-- --------------------------------------------------------

--
-- Structure de la table `police_licences`
--

CREATE TABLE `police_licences` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `agent` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `level` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_licences`
--

INSERT INTO `police_licences` (`id`, `CreationTimestamp`, `agent`, `name`, `grade`, `level`) VALUES
(1, '2019-07-26', '', '', '../20qsdqsd', ''),
(2, '2019-07-26', '', '', '20/20', '');

-- --------------------------------------------------------

--
-- Structure de la table `police_meetings`
--

CREATE TABLE `police_meetings` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` date NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `police_plates`
--

CREATE TABLE `police_plates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `police_report`
--

CREATE TABLE `police_report` (
  `id` int(11) NOT NULL,
  `organisation` varchar(25) NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_report`
--

INSERT INTO `police_report` (`id`, `organisation`, `CreationTimestamp`, `name`, `suspect`, `object`, `link`) VALUES
(17, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', '', 'Traffic de drogues', 'https://docs.google.com/document/d/1a_UFAY3ljWgk3ynhmRA8ykuyMo1sc7nidOxCOdB30oA/edit?usp=sharing'),
(18, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(19, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(20, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(21, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(22, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(23, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(24, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(25, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(26, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(27, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(28, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(29, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(30, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(31, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(32, 'lspd', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(33, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', '', 'Traffic de drogues', 'https://docs.google.com/document/d/1a_UFAY3ljWgk3ynhmRA8ykuyMo1sc7nidOxCOdB30oA/edit?usp=sharing'),
(34, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(35, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(36, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', ''),
(37, 'bcso', '2019-08-21 16:02:53', 'Chris Kyle', 'Jean Charle\r\n', 'Traffic de drogues', '');

-- --------------------------------------------------------

--
-- Structure de la table `police_wanted`
--

CREATE TABLE `police_wanted` (
  `id` int(11) NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `police_wanted`
--

INSERT INTO `police_wanted` (`id`, `CreationTimestamp`, `name`, `reason`, `image`) VALUES
(1, '0000-00-00 00:00:00', 'Jean Michel', 'Vente de geudro tawu', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png'),
(2, '0000-00-00 00:00:00', 'Jean Michel', 'Vente de geudro tawu', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png'),
(3, '0000-00-00 00:00:00', 'Jean Michel', 'Vente de geudro tawu', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png'),
(4, '0000-00-00 00:00:00', 'Jean Michel', 'Vente de geudro tawu', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png');

-- --------------------------------------------------------

--
-- Structure de la table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `testimony`
--

INSERT INTO `testimony` (`id`, `name`, `description`, `image`) VALUES
(1, 'testholeb', 'oui', 'https://cdn.discordapp.com/avatars/259056305187192833/d238319380550e6687e25fed91302f98.png?size=128'),
(2, 'Lh_lawlietest', 'non', 'https://cdn.discordapp.com/avatars/281074550261940224/faab7f6d226ff7cbf36ca26637e3aa6f.png?size=128'),
(3, 'testholeb', 'Jean', 'https://cdn.discordapp.com/avatars/259056305187192833/d238319380550e6687e25fed91302f98.png?size=128'),
(4, 'Lh_lawlietest', 'Michel', 'https://cdn.discordapp.com/avatars/281074550261940224/faab7f6d226ff7cbf36ca26637e3aa6f.png?size=128');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `steamid` varchar(255) NOT NULL,
  `steamname` varchar(255) NOT NULL,
  `steamurl` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `dcid` bigint(20) NOT NULL,
  `dcusrname` varchar(255) NOT NULL,
  `dcemail` varchar(255) NOT NULL,
  `dcavatarid` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `steamid`, `steamname`, `steamurl`, `avatar`, `dcid`, `dcusrname`, `dcemail`, `dcavatarid`, `ip`, `token`, `admin`) VALUES
(27, '76561198095981948', 'tholeb', 'https://steamcommunity.com/id/tholeb/', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/cc/cc2308ae5cb41a21ad0a71626be504d6612d9e2f_full.jpg', 259056305187192833, 'tholeb', 'thomasleb.49@gmail.com', 'd238319380550e6687e25fed91302f98', '::1', '0c58eaf4931f32ee768160087138e988807f778ddfbd4775e26dbf6f0e968963', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `changelogs`
--
ALTER TABLE `changelogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maze_customers`
--
ALTER TABLE `maze_customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maze_hire`
--
ALTER TABLE `maze_hire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maze_rdv`
--
ALTER TABLE `maze_rdv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_bdd`
--
ALTER TABLE `police_bdd`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_candid`
--
ALTER TABLE `police_candid`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_complaint`
--
ALTER TABLE `police_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_convocations`
--
ALTER TABLE `police_convocations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_daymessage`
--
ALTER TABLE `police_daymessage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_licences`
--
ALTER TABLE `police_licences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_meetings`
--
ALTER TABLE `police_meetings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_plates`
--
ALTER TABLE `police_plates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_report`
--
ALTER TABLE `police_report`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `police_wanted`
--
ALTER TABLE `police_wanted`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `steamid` (`steamid`),
  ADD UNIQUE KEY `dcid` (`dcid`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `changelogs`
--
ALTER TABLE `changelogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `maze_customers`
--
ALTER TABLE `maze_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `maze_hire`
--
ALTER TABLE `maze_hire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `maze_rdv`
--
ALTER TABLE `maze_rdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `police_bdd`
--
ALTER TABLE `police_bdd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT pour la table `police_candid`
--
ALTER TABLE `police_candid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `police_complaint`
--
ALTER TABLE `police_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `police_convocations`
--
ALTER TABLE `police_convocations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `police_daymessage`
--
ALTER TABLE `police_daymessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `police_licences`
--
ALTER TABLE `police_licences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `police_meetings`
--
ALTER TABLE `police_meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `police_plates`
--
ALTER TABLE `police_plates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `police_report`
--
ALTER TABLE `police_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `police_wanted`
--
ALTER TABLE `police_wanted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
