-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 25 jan. 2019 à 18:08
-- Version du serveur :  10.2.21-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zahuligs_ben`
--

-- --------------------------------------------------------

--
-- Structure de la table `charttb`
--

CREATE TABLE `charttb` (
  `id` int(11) NOT NULL,
  `mois` varchar(50) NOT NULL,
  `qte` int(11) NOT NULL,
  `an` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `charttb`
--

INSERT INTO `charttb` (`id`, `mois`, `qte`, `an`) VALUES
(1, 'Janvier', 100, '2019'),
(2, 'Fevrier', 75, '2019'),
(3, 'Mars', 50, '2019'),
(4, 'Avril', 20, '2019'),
(5, 'Mai', 45, '2019'),
(6, 'Juin', 120, '2019'),
(7, 'Juillet', 150, '2019'),
(8, 'Aout', 80, '2019'),
(9, 'Septembre', 30, '2019'),
(10, 'Octobre', 30, '2019'),
(11, 'Novembre', 50, '2019'),
(12, 'Decembre', 80, '2019');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `charttb`
--
ALTER TABLE `charttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `charttb`
--
ALTER TABLE `charttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
