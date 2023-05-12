-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 mai 2023 à 09:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `favori`
--

DROP TABLE IF EXISTS `favori`;
CREATE TABLE IF NOT EXISTS `favori` (
  `id_fav` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec` int(11) NOT NULL,
  `id_uti` int(11) NOT NULL,
  PRIMARY KEY (`id_fav`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `temps` varchar(50) NOT NULL,
  `ingrédient` varchar(100) NOT NULL,
  `difficulté` varchar(50) NOT NULL,
  `coût` varchar(50) NOT NULL,
  `nbr_pers` int(11) NOT NULL,
  `Ustensiles` varchar(100) NOT NULL,
  `Préparation` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_uti` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_uti`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_uti`, `pseudo`, `mail`, `mdp`) VALUES
(1, 'Keller', 'abc@iq.com', 'azerty'),
(2, 'CORNU', 'lea@cronu.com', 'qwerty'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'hugo', 'hugo@mail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
