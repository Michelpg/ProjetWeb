-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 mai 2023 à 13:50
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
  `ingredient` text NOT NULL,
  `difficulte` varchar(50) NOT NULL,
  `cout` varchar(50) NOT NULL,
  `nbr_pers` int(11) NOT NULL,
  `ustensiles` text NOT NULL,
  `preparation` text NOT NULL,
  `note` float NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rec`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_rec`, `nom`, `description`, `temps`, `ingredient`, `difficulte`, `cout`, `nbr_pers`, `ustensiles`, `preparation`, `note`, `image`) VALUES
(1, 'Quiche aux asperges et au saumon', 'La meilleur quiche aux asperges et au saumon que vous goûterai', '1 h 30 min', '300 g de pâte brisée \r\n500 g d\'asperge vertes\r\n25 cl de crème fraîche\r\n1 c.à.s de moutarde\r\nbeurre pour le moule\r\npoivre\r\nsel\r\n150 gde saumon fumé ou 200 g de saumon frais coupé en dés\r\n25 cl de lait\r\n3 oeufs\r\n', 'Facile', 'Moyen', 6, '1 four\r\n1 saladier', 'ÉTAPE 1\r\nFaites cuire la pâte à blanc 10 mn à four chaud.\r\n\r\nÉTAPE 2\r\nPelez les asperges et coupez-les en morceaux. Faites-les cuire dans de l\'eau bouillante salée 15 mn. Egouttez-les sur un papier absorbant.\r\n\r\nÉTAPE 3\r\nGarnissez le fond de tarte précuit avec les asperges et le saumon fumé coupé en lanières.\r\n\r\nÉTAPE 4\r\nDans un saladier, battez ensemble les oeufs, la crème, la moutarde, le lait, du poivre et un peu de sel.\r\n\r\nÉTAPE 5\r\nVersez sur la tarte et laissez cuire 45 mn à four moyen.', 4.5, 'quiche-saumon-et-asperges-vertes.jpeg'),
(2, 'Navarin d\'agneau', 'Ce plat est délicieux au printemps, avec de petits légumes nouveaux. Il se fait cuire soit au four dans une cocotte en terre, soit sur le feu dans une cocotte en fonte.', '2 h 20 min', '8 carottes en botte\r\n12 oignons \r\n1/2 l de bouillon\r\n3 c.à.sde gros sel\r\n1 c.à.s de farine (complète ou bise, si possible)\r\n3 c.à.s d\'huile d\'olive\r\n1 bouquet de persil\r\n1 kg d\'épaule d\'agneau\r\n8 navets en bottes\r\n10 pommes de terre moyennes\r\n8 gousses d\'ail frais ou 4 sèches\r\n75 g de double concentré de tomates\r\n1 bouquet garni\r\népices à couscous', 'Facile', 'Moyen', 4, '1 sauteuse\r\n1 pôele\r\n1 Fouet cuisine\r\n1 pinceau\r\n1 cocotte\r\n1 Four\r\n1 Couteau\r\n1 louche\r\n1 Couvercle\r\n1 balance de cuisine\r\n1 plat', 'ÉTAPE 1\r\nFaire revenir l\'agneau dans une sauteuse dans 2 cuillères d\'huile d’olive, ajouter des épices couscous et un peu de sel.\r\n\r\nÉTAPE 2\r\nQuand les morceaux sont dorés, ajouter l’ail écrasé et le concentré de tomates.\r\n\r\nÉTAPE 3\r\nRetirer la viande et la réserver, faire dorer la farine dans le jus et ajouter le bouillon chaud en le fouettant.\r\n\r\nÉTAPE 4\r\nMettre la viande dans cette sauce, qui ne doit pas être trop liquide, en ajoutant le bouquet garni. Faire cuire à feu doux, au four ou dans une cocotte.\r\n\r\nÉTAPE 5\r\nAu bout de 3/4 d’heure, couper les carottes et les navets en deux, les faire sauter avec les oignons dans 1 cuillère d’huile d’olive, avec des épices à couscous et du sel.\r\n\r\nÉTAPE 6\r\nQuand ils sont dorés, les rajouter à la viande et prendre une louche de sauce de cuisson pour déglacer la sauteuse, remettre ce jus dans le plat de cuisson.\r\n\r\nÉTAPE 7\r\nLa sauce ne doit pas être trop liquide et doit juste couvrir les légumes et la viande. Cuire à feu doux pendant 1/2 heure.\r\n\r\nÉTAPE 8\r\nRajouter les pommes de terre coupées en deux si nécessaire, et vérifier l’assaisonnement.\r\n\r\nÉTAPE 9\r\nAu bout de 3/4 d’heure, dégraisser la sauce et servir avec un hachis de persil frais.', 4.8, 'Navarin_d\'agneau.jpg');

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
