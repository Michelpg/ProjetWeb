-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 13 mai 2023 à 19:46
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
  PRIMARY KEY (`id_fav`),
  KEY `id_rec` (`id_rec`),
  KEY `id_uti` (`id_uti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `temps` varchar(50) NOT NULL,
  `ingredient` varchar(300) NOT NULL,
  `difficulte` varchar(50) NOT NULL,
  `cout` varchar(50) NOT NULL,
  `nbr_pers` int(11) NOT NULL,
  `ustensiles` varchar(100) NOT NULL,
  `preparation` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rec`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_rec`, `nom`, `description`, `temps`, `ingredient`, `difficulte`, `cout`, `nbr_pers`, `ustensiles`, `preparation`, `image`) VALUES
(1, 'Quiche aux asperges et au saumon', 'Quiche aux asperges et au saumon', '1 h 30 min', '300 g de pâte brisée \r\n500 g d\'asperge vertes\r\n25 cl de crème fraîche\r\n1 c.à.s de moutarde\r\nbeurre pour le moule\r\npoivre\r\nsel\r\n150 gde saumon fumé ou 200 g de saumon frais coupé en dés\r\n25 cl de lait\r\n3 oeufs\r\n', 'Facile', 'Moyen', 6, '1 four\r\n1 saladier', 'ÉTAPE 1\r\nFaites cuire la pâte à blanc 10 mn à four chaud.\r\n\r\nÉTAPE 2\r\nPelez les asperges et coupez-les en morceaux. Faites-les cuire dans de l\'eau bouillante salée 15 mn. Egouttez-les sur un papier absorbant.\r\n\r\nÉTAPE 3\r\nGarnissez le fond de tarte précuit avec les asperges et le saumon fumé coupé en lanières.\r\n\r\nÉTAPE 4\r\nDans un saladier, battez ensemble les oeufs, la crème, la moutarde, le lait, du poivre et un peu de sel.\r\n\r\nÉTAPE 5\r\nVersez sur la tarte et laissez cuire 45 mn à four moyen.', '');

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
(7, 'hugo', 'hugo@mail.com', '81dc9bdb52d04dc20036dbd8313ed055');

/* mot de passe de hugo : 1234
*/ 
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`id_rec`) REFERENCES `recette` (`id_rec`),
  ADD CONSTRAINT `favori_ibfk_2` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
