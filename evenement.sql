-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 sep. 2020 à 22:30
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formulaire_events`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `Id` int(11) NOT NULL,
  `Nom_de_lécole` varchar(200) NOT NULL,
  `Nom_de_lévenement` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Categorie` varchar(200) NOT NULL,
  `flyer` text DEFAULT NULL,
  `date_de_lévenement` date NOT NULL,
  `Thème` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`Id`, `Nom_de_lécole`, `Nom_de_lévenement`, `Description`, `Categorie`, `flyer`, `date_de_lévenement`, `Thème`) VALUES
(15, 'ecole des mines', 'journée des olympiade', 'QSX', 'Formation', '514991.png', '2020-07-09', 'FFF'),
(19, 'ecole des mines', 'journée des olympiade', 'QSX', 'Formation', '847913.png', '2020-07-09', 'FFF'),
(20, 'ecole des mines', 'journée des olympiade', 'nsw', 'Workshop', '510244.png', '2020-07-02', 'Scientifiqu'),
(21, 'ecole des mines', 'journée des olympiade', 'nsw', 'Workshop', '556619.png', '2020-07-02', 'Scientifiqu'),
(22, 'ecole des mines', 'journée des olympiade', 'nsw', 'Workshop', '649168.png', '2020-07-02', 'Scientifiqu'),
(23, 'ecole des mines', 'journée des olympiade', 'nsw', 'Workshop', '260199.png', '2020-07-02', 'Scientifiqu'),
(24, 'ecole des mines', 'journée des olympiade', 'nsw', 'Workshop', '281660.png', '2020-07-02', 'Scientifiqu'),
(25, 'Séminaire', '', '', '', '776627.png', '0000-00-00', ''),
(26, 'ecole des mines', 'journée des olympiade', 'llllll', 'Séminaire', '257554.png', '2020-07-30', 'Scientifiqu'),
(27, 'ecole des mines', 'journée des olympiade', 'llllll', 'Séminaire', '470230.png', '2020-07-30', 'Scientifiqu'),
(28, 'ecole des mines', 'journée des olympiade', 'llllll', 'Séminaire', '340618.png', '2020-07-30', 'Scientifiqu'),
(29, 'ecole des mines', 'journée des olympiade', 'llllll', 'Séminaire', '975479.png', '2020-07-30', 'Scientifiqu'),
(30, 'loki', 'njjnk', 'bjh jk', 'Conférence', '157999.png', '2020-08-04', 'Pédagogique'),
(31, 'loki', 'njjnk', 'bjh jk', 'Conférence', '106221.png', '2020-08-04', 'Pédagogique'),
(32, 'loki', 'njjnk', 'bjh jk', 'Conférence', '499598.png', '2020-08-04', 'Pédagogique'),
(33, 'ecole des mines', 'journée des olympiade', 'hhh', 'Forum', '410412.jpg', '2020-08-05', 'Culturelle'),
(34, 'loki', 'njjnk', 'bjh jk', 'Conférence', '42726.png', '2020-08-04', 'Pédagogique'),
(35, 'HHH', 'n', 'kk', 'Séminaire', '649316.png', '2020-08-05', 'Pédagogique'),
(36, 'HHH', 'n', 'kk', 'Séminaire', '953921.png', '2020-08-05', 'Pédagogique'),
(37, 'k', 'l', 'll', 'Open doors', '406777.png', '2020-08-11', 'Sportif'),
(38, 'k', 'l', 'll', 'Open doors', '168933.png', '2020-08-11', 'Sportif'),
(39, 's', 's', 'bjh jk', 'Workshop', '507096.png', '2020-08-24', 'Pédagogique'),
(40, 'ecole des mines', 'ouma ch', 'lllllllllllll', 'Workshop', '936358.png', '2020-09-23', 'Scientifiqu'),
(41, 'o', 'j', 'g', 'Forum', '990230.png', '2020-09-01', 'Sportif'),
(42, 'o', 'b', 'k', 'Forum', '626540.jpg', '2020-09-03', 'Culturelle'),
(43, 'a', 'v', 'z', 'Séminaire', '311665.png', '2020-09-09', 'Scientifiqu'),
(44, 'a', 'v', 'z', 'Séminaire', '539467.png', '2020-09-09', 'Scientifiqu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`Id`);
ALTER TABLE `evenement` ADD FULLTEXT KEY `Description` (`Description`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
