-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 mai 2023 à 08:57
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favori`
--

INSERT INTO `favori` (`id_fav`, `id_rec`, `id_uti`) VALUES
(1, 2, 7),
(3, 1, 7),
(4, 4, 8),
(5, 7, 8),
(6, 5, 11),
(7, 4, 11),
(8, 10, 11),
(9, 10, 7),
(10, 9, 10);

-- --------------------------------------------------------

--
-- Structure de la table `mes_recettes`
--

DROP TABLE IF EXISTS `mes_recettes`;
CREATE TABLE IF NOT EXISTS `mes_recettes` (
  `id_mes` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec` int(11) NOT NULL,
  `id_uti` int(11) NOT NULL,
  PRIMARY KEY (`id_mes`),
  KEY `id_rec` (`id_rec`),
  KEY `id_uti` (`id_uti`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mes_recettes`
--

INSERT INTO `mes_recettes` (`id_mes`, `id_rec`, `id_uti`) VALUES
(1, 2, 7),
(2, 7, 8);

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
  `note` float DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_uti` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rec`),
  KEY `id_uti` (`id_uti`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_rec`, `nom`, `description`, `temps`, `ingredient`, `difficulte`, `cout`, `nbr_pers`, `ustensiles`, `preparation`, `note`, `image`, `id_uti`) VALUES
(1, 'Quiche aux asperges et au saumon', 'La meilleur quiche aux asperges et au saumon que vous goûterai', '1 h 30 min', '300 g de pâte brisée \r\n500 g d\'asperge vertes\r\n25 cl de crème fraîche\r\n1 c.à.s de moutarde\r\nbeurre pour le moule\r\npoivre\r\nsel\r\n150 gde saumon fumé ou 200 g de saumon frais coupé en dés\r\n25 cl de lait\r\n3 oeufs\r\n', 'Facile', 'Moyen', 6, '1 four\r\n1 saladier', 'ÉTAPE 1\r\nFaites cuire la pâte à blanc 10 mn à four chaud.\r\n\r\nÉTAPE 2\r\nPelez les asperges et coupez-les en morceaux. Faites-les cuire dans de l\'eau bouillante salée 15 mn. Egouttez-les sur un papier absorbant.\r\n\r\nÉTAPE 3\r\nGarnissez le fond de tarte précuit avec les asperges et le saumon fumé coupé en lanières.\r\n\r\nÉTAPE 4\r\nDans un saladier, battez ensemble les oeufs, la crème, la moutarde, le lait, du poivre et un peu de sel.\r\n\r\nÉTAPE 5\r\nVersez sur la tarte et laissez cuire 45 mn à four moyen.', 4.5, 'image/quiche-saumon-et-asperges-vertes.jpeg', NULL),
(2, 'Navarin d\'agneau', 'Ce plat est délicieux au printemps, avec de petits légumes nouveaux. Il se fait cuire soit au four dans une cocotte en terre, soit sur le feu dans une cocotte en fonte.', '2 h 20 min', '8 carottes en botte\r\n12 oignons \r\n1/2 l de bouillon\r\n3 c.à.sde gros sel\r\n1 c.à.s de farine (complète ou bise, si possible)\r\n3 c.à.s d\'huile d\'olive\r\n1 bouquet de persil\r\n1 kg d\'épaule d\'agneau\r\n8 navets en bottes\r\n10 pommes de terre moyennes\r\n8 gousses d\'ail frais ou 4 sèches\r\n75 g de double concentré de tomates\r\n1 bouquet garni\r\népices à couscous', 'Facile', 'Moyen', 4, '1 sauteuse\r\n1 pôele\r\n1 Fouet cuisine\r\n1 pinceau\r\n1 cocotte\r\n1 Four\r\n1 Couteau\r\n1 louche\r\n1 Couvercle\r\n1 balance de cuisine\r\n1 plat', 'ÉTAPE 1\r\nFaire revenir l\'agneau dans une sauteuse dans 2 cuillères d\'huile d’olive, ajouter des épices couscous et un peu de sel.\r\n\r\nÉTAPE 2\r\nQuand les morceaux sont dorés, ajouter l’ail écrasé et le concentré de tomates.\r\n\r\nÉTAPE 3\r\nRetirer la viande et la réserver, faire dorer la farine dans le jus et ajouter le bouillon chaud en le fouettant.\r\n\r\nÉTAPE 4\r\nMettre la viande dans cette sauce, qui ne doit pas être trop liquide, en ajoutant le bouquet garni. Faire cuire à feu doux, au four ou dans une cocotte.\r\n\r\nÉTAPE 5\r\nAu bout de 3/4 d’heure, couper les carottes et les navets en deux, les faire sauter avec les oignons dans 1 cuillère d’huile d’olive, avec des épices à couscous et du sel.\r\n\r\nÉTAPE 6\r\nQuand ils sont dorés, les rajouter à la viande et prendre une louche de sauce de cuisson pour déglacer la sauteuse, remettre ce jus dans le plat de cuisson.\r\n\r\nÉTAPE 7\r\nLa sauce ne doit pas être trop liquide et doit juste couvrir les légumes et la viande. Cuire à feu doux pendant 1/2 heure.\r\n\r\nÉTAPE 8\r\nRajouter les pommes de terre coupées en deux si nécessaire, et vérifier l’assaisonnement.\r\n\r\nÉTAPE 9\r\nAu bout de 3/4 d’heure, dégraisser la sauce et servir avec un hachis de persil frais.', 4.8, 'image/navarin_agneau.jpg', NULL),
(3, 'Salade de quinoa aux légumes', 'Une salade saine et délicieuse à base de quinoa et de légumes frais.', '30 min', '200 g de quinoa\r\n1 concombre\r\n2 tomates\r\n1 poivron rouge\r\n1 oignon rouge\r\nJus de 2 citrons\r\n3 cuillères à soupe d\'huile d\'olive\r\nSel\r\nPoivre', 'Facile', 'Abordable', 4, '1 saladier\r\n1 casserole', 'ÉTAPE 1\r\nFaites cuire le quinoa dans une casserole d\'eau bouillante pendant environ 15 minutes. Égouttez et laissez refroidir.\r\n\r\nÉTAPE 2\r\nCoupez le concombre, les tomates et le poivron en petits dés. Émincez l\'oignon rouge.\r\n\r\nÉTAPE 3\r\nDans un saladier, mélangez le quinoa cuit, les légumes coupés, le jus de citron, l\'huile d\'olive, le sel et le poivre.\r\n\r\nÉTAPE 4\r\nLaissez reposer la salade au réfrigérateur pendant au moins 30 minutes avant de servir.', 4.2, 'image/salade-quinoa-legumes.jpeg', NULL),
(4, 'Poulet rôti aux herbes', 'Un délicieux poulet rôti avec une touche d\'herbes aromatiques.', '2 h', '1 poulet entier\r\n2 cuillères à soupe de beurre ramolli\r\n1 bouquet d\'herbes (thym, romarin, persil)\r\nSel\r\nPoivre', 'Moyen', 'Abordable', 4, '1 plat à rôtir\r\n1 pinceau de cuisine', 'ÉTAPE 1\r\nPréchauffez le four à 180°C.\r\n\r\nÉTAPE 2\r\nRincez et séchez le poulet. Badigeonnez-le avec le beurre ramolli sur toute la surface.\r\n\r\nÉTAPE 3\r\nHachez finement les herbes et mélangez-les avec du sel et du poivre. Saupoudrez le poulet de ce mélange.\r\n\r\nÉTAPE 4\r\nPlacez le poulet dans un plat à rôtir et enfournez-le pendant environ 1 heure 30 minutes, en l\'arrosant régulièrement avec le jus de cuisson.\r\n\r\nÉTAPE 5\r\nLaissez reposer le poulet pendant quelques minutes avant de le découper.', 4.5, 'image/poulet-roti-herbes.jpeg', NULL),
(5, 'Pâtes carbonara', 'Un classique de la cuisine italienne : des pâtes crémeuses aux lardons et au fromage.', '20 min', '200 g de spaghetti\r\n150 g de lardons\r\n2 jaunes d\'œufs\r\n50 g de parmesan râpé\r\nSel\r\nPoivre', 'Facile', 'Abordable', 2, '1 casserole\r\n1 poêle', 'ÉTAPE 1\r\nFaites cuire les spaghetti dans une casserole d\'eau bouillante salée selon les instructions sur l\'emballage. Égouttez-les.\r\n\r\nÉTAPE 2\r\nDans une poêle, faites revenir les lardons jusqu\'à ce qu\'ils soient dorés.\r\n\r\nÉTAPE 3\r\nDans un bol, mélangez les jaunes d\'œufs avec le parmesan râpé. Assaisonnez avec du sel et du poivre.\r\n\r\nÉTAPE 4\r\nAjoutez les spaghetti égouttés dans la poêle avec les lardons et versez le mélange d\'œufs et de fromage. Mélangez rapidement pour enrober les pâtes de la sauce.\r\n\r\nÉTAPE 5\r\nServez les pâtes carbonara chaudes avec un peu de parmesan râpé.', 4.7, 'image/pates-carbonara.jpg', NULL),
(6, 'Tarte aux pommes', 'Une tarte classique aux pommes avec une pâte croustillante et une garniture moelleuse.', '1 h', '250 g de farine\r\n125 g de beurre froid\r\n1 pincée de sel\r\n2 cuillères à soupe de sucre\r\n5 pommes\r\n2 cuillères à soupe de confiture d\'abricot\r\nSucre glace (pour saupoudrer)', 'Moyen', 'Abordable', 6, '1 moule à tarte\r\n1 rouleau à pâtisserie\r\n1 pinceau de cuisine', 'ÉTAPE 1\r\nPréparez la pâte en mélangeant la farine, le beurre coupé en dés, le sel et le sucre dans un saladier. Ajoutez un peu d\'eau froide si nécessaire pour former une boule de pâte. Laissez reposer au réfrigérateur pendant 30 minutes.\r\n\r\nÉTAPE 2\r\nPréchauffez le four à 180°C.\r\n\r\nÉTAPE 3\r\nÉpluchez et coupez les pommes en fines tranches.\r\n\r\nÉTAPE 4\r\nÉtalez la pâte sur une surface farinée et placez-la dans un moule à tarte. Piquez le fond avec une fourchette.\r\n\r\nÉTAPE 5\r\nDisposez les tranches de pommes sur la pâte. Badigeonnez-les avec la confiture d\'abricot.\r\n\r\nÉTAPE 6\r\nEnfournez la tarte pendant environ 40 minutes, jusqu\'à ce qu\'elle soit dorée.\r\n\r\nÉTAPE 7\r\nLaissez refroidir légèrement avant de saupoudrer de sucre glace. Servez tiède ou froid.', 4.3, 'image/tarte-aux-pommes.jpeg', NULL),
(7, 'Risotto aux champignons', 'Un délicieux risotto crémeux aux champignons, parfait en plat principal.', '40 min', '300 g de riz arborio\r\n250 g de champignons de Paris\r\n1 oignon\r\n2 gousses d\'ail\r\n1 litre de bouillon de légumes\r\n100 ml de vin blanc\r\n50 g de parmesan râpé\r\n2 cuillères à soupe d\'huile d\'olive\r\nSel\r\nPoivre', 'Moyen', 'Abordable', 4, '1 casserole\r\n1 poêle', 'ÉTAPE 1\r\nDans une casserole, faites chauffer l\'huile d\'olive. Faites revenir l\'oignon et l\'ail hachés jusqu\'à ce qu\'ils soient dorés.\r\n\r\nÉTAPE 2\r\nAjoutez les champignons émincés et laissez cuire pendant quelques minutes.\r\n\r\nÉTAPE 3\r\nAjoutez le riz arborio et remuez pendant une minute pour bien l\'enrober d\'huile.\r\n\r\nÉTAPE 4\r\nVersez le vin blanc et laissez-le s\'évaporer.\r\n\r\nÉTAPE 5\r\nAjoutez le bouillon de légumes chaud, une louche à la fois, en remuant constamment. Attendez que le liquide soit absorbé avant d\'ajouter la louche suivante.\r\n\r\nÉTAPE 6\r\nContinuez à ajouter le bouillon et à remuer pendant environ 20 minutes, jusqu\'à ce que le riz soit tendre mais encore légèrement croquant.\r\n\r\nÉTAPE 7\r\nRetirez la casserole du feu et ajoutez le parmesan râpé. Mélangez jusqu\'à ce qu\'il soit fondu et que le risotto soit crémeux.\r\n\r\nÉTAPE 8\r\nAssaisonnez avec du sel et du poivre selon votre goût. Servez chaud.', 4.6, 'image/risotto-champignons.jpeg', NULL),
(8, 'Gaspacho de tomates', 'Une soupe froide à base de tomates fraîches et de légumes, idéale pour les jours chauds.', '20 min', '1 kg de tomates mûres\r\n1 concombre\r\n1 poivron rouge\r\n1 oignon\r\n2 gousses d\'ail\r\n3 cuillères à soupe d\'huile d\'olive\r\n2 cuillères à soupe de vinaigre de vin\r\nSel\r\nPoivre\r\nCiboulette (pour la garniture)', 'Facile', 'Abordable', 4, '1 mixeur\r\n1 passoire', 'ÉTAPE 1\r\nÉbouillantez les tomates pendant quelques secondes, puis retirez leur peau.\r\n\r\nÉTAPE 2\r\nCoupez les tomates, le concombre, le poivron, l\'oignon et l\'ail en morceaux.\r\n\r\nÉTAPE 3\r\nPlacez tous les légumes dans un mixeur et mixez jusqu\'à obtenir une consistance lisse.\r\n\r\nÉTAPE 4\r\nAjoutez l\'huile d\'olive, le vinaigre de vin, le sel et le poivre. Mixez à nouveau pour bien mélanger les ingrédients.\r\n\r\nÉTAPE 5\r\nPassez le gaspacho au travers d\'une passoire pour éliminer les éventuels morceaux.\r\n\r\nÉTAPE 6\r\nRéfrigérez le gaspacho pendant au moins une heure avant de le servir.\r\n\r\nÉTAPE 7\r\nAu moment de servir, garnissez le gaspacho de ciboulette ciselée. Servez bien frais.', 4.2, 'image/gaspacho-tomates.jpeg', NULL),
(9, 'Salade Niçoise', 'Une salade fraîche et colorée originaire de la région de Nice, en France.', '30 min', '200 g de thon en boîte\r\n200 g de haricots verts\r\n4 tomates\r\n2 œufs\r\n1 poivron rouge\r\n1 oignon rouge\r\n100 g d\'olives noires\r\n4 filets d\'anchois\r\nHuile d\'olive\r\nVinaigre balsamique\r\nSel\r\nPoivre', 'Facile', 'Abordable', 2, '1 saladier\r\n1 casserole', 'ÉTAPE 1\r\nFaites cuire les haricots verts dans de l\'eau bouillante salée pendant environ 5 minutes, puis égouttez-les et passez-les sous l\'eau froide pour arrêter la cuisson.\r\n\r\nÉTAPE 2\r\nFaites cuire les œufs dans une casserole d\'eau bouillante pendant environ 8 minutes. Écalez-les et coupez-les en quartiers.\r\n\r\nÉTAPE 3\r\nCoupez les tomates en quartiers, le poivron en lamelles et l\'oignon en rondelles.\r\n\r\nÉTAPE 4\r\nDans un saladier, disposez les haricots verts, les tomates, le poivron, l\'oignon, les olives et les filets d\'anchois.\r\n\r\nÉTAPE 5\r\nÉmiettez le thon par-dessus la salade et disposez les quartiers d\'œufs sur le dessus.\r\n\r\nÉTAPE 6\r\nAssaisonnez avec de l\'huile d\'olive, du vinaigre balsamique, du sel et du poivre selon votre goût. Mélangez délicatement.\r\n\r\nÉTAPE 7\r\nLaissez reposer au réfrigérateur pendant environ 30 minutes avant de servir.', 4.4, 'image/salade-nicoise.jpeg', NULL),
(10, 'Poulet Tikka Masala', 'Un plat indien savoureux à base de morceaux de poulet marinés dans une sauce crémeuse aux épices.', '1 h 30 min', '500 g de blancs de poulet\r\n2 oignons\r\n2 gousses d\'ail\r\n2 cm de gingembre frais\r\n1 cuillère à soupe de paprika\r\n1 cuillère à soupe de garam masala\r\n1 cuillère à soupe de cumin\r\n1 cuillère à soupe de coriandre en poudre\r\n200 ml de yaourt nature\r\n200 ml de crème fraîche\r\n2 cuillères à soupe d\'huile végétale\r\nSel\r\nPoivre', 'Moyen', 'Abordable', 4, '1 poêle\r\n1 mixeur', 'ÉTAPE 1\r\nCoupez les blancs de poulet en morceaux.\r\n\r\nÉTAPE 2\r\nDans un mixeur, mixez les oignons, l\'ail, le gingembre, le paprika, le garam masala, le cumin, la coriandre en poudre, le yaourt, du sel et du poivre jusqu\'à obtenir une pâte lisse.\r\n\r\nÉTAPE 3\r\nFaites chauffer l\'huile dans une poêle et faites revenir la pâte d\'épices pendant quelques minutes.\r\n\r\nÉTAPE 4\r\nAjoutez les morceaux de poulet et faites-les cuire jusqu\'à ce qu\'ils soient dorés.\r\n\r\nÉTAPE 5\r\nVersez la crème fraîche dans la poêle et mélangez bien. Laissez mijoter à feu doux pendant environ 30 minutes.\r\n\r\nÉTAPE 6\r\nServez le poulet Tikka Masala avec du riz basmati et saupoudrez de coriandre fraîche.', 4.7, 'image/poulet-tikka-masala.jpeg', NULL),
(11, 'Tarte aux fraises', 'Une délicieuse tarte aux fraises avec une croûte croustillante et une crème pâtissière vanillée.', '2 h', '250 g de farine\r\n125 g de beurre\r\n100 g de sucre\r\n2 jaunes d\'œufs\r\n500 g de fraises\r\n500 ml de lait\r\n4 jaunes d\'œufs\r\n100 g de sucre\r\n50 g de maïzena\r\n1 gousse de vanille\r\nSucre glace', 'Difficile', 'Abordable', 6, '1 moule à tarte\r\n1 casserole', 'ÉTAPE 1\r\nPréparez la pâte en mélangeant la farine, le beurre, le sucre et les jaunes d\'œufs dans un saladier. Pétrissez jusqu\'à obtenir une pâte homogène. Réfrigérez pendant 30 minutes.\r\n\r\nÉTAPE 2\r\nPréchauffez le four à 180°C.\r\n\r\nÉTAPE 3\r\nÉtalez la pâte sur un plan de travail fariné et placez-la dans un moule à tarte. Piquez le fond avec une fourchette et enfournez pendant environ 15 minutes, jusqu\'à ce que la croûte soit dorée. Laissez refroidir.\r\n\r\nÉTAPE 4\r\nPendant ce temps, préparez la crème pâtissière en faisant chauffer le lait et la gousse de vanille fendue dans une casserole. Dans un saladier, mélangez les jaunes d\'œufs, le sucre et la maïzena. Versez le lait chaud sur ce mélange en remuant constamment. Reversez le tout dans la casserole et faites cuire à feu doux jusqu\'à épaississement. Laissez refroidir.\r\n\r\nÉTAPE 5\r\nLavez et équeutez les fraises. Coupez-les en deux.\r\n\r\nÉTAPE 6\r\nUne fois la croûte refroidie, étalez la crème pâtissière sur le fond. Disposez les fraises sur le dessus.\r\n\r\nÉTAPE 7\r\nSaupoudrez la tarte de sucre glace avant de servir.', 4.5, 'image/tarte-aux-fraises.jpeg', NULL),
(12, 'Smoothie Vert', 'Un smoothie rafraîchissant et sain à base d\'épinards, de bananes et de jus de citron.', '10 min', '2 poignées d\'épinards frais\r\n2 bananes mûres\r\nLe jus d\'un citron\r\n200 ml d\'eau', 'Facile', 'Abordable', 2, '1 mixeur', 'ÉTAPE 1\r\nRincez les épinards sous l\'eau froide pour les nettoyer.\r\n\r\nÉTAPE 2\r\nÉpluchez les bananes et coupez-les en morceaux.\r\n\r\nÉTAPE 3\r\nDans un mixeur, combinez les épinards, les bananes, le jus de citron et l\'eau.\r\n\r\nÉTAPE 4\r\nMixez le tout jusqu\'à obtenir une consistance lisse et homogène.\r\n\r\nÉTAPE 5\r\nVersez le smoothie dans des verres et servez immédiatement.', 4.6, 'image/smoothie-vert.jpeg', NULL),
(15, 'Tiramisu', 'Un délicieux dessert italien à base de biscuits imbibés de café et de crème mascarpone.', '30min', '200 g de biscuits à la cuillère\r\n3 œufs\r\n250 g de mascarpone\r\n80 g de sucre\r\n1 tasse de café fort\r\nCacao en poudre ', 'Facile', 'Abordable', 4, '1 plat rectangulaire', 'ÉTAPE 1\r\nSéparez les blancs des jaunes d\'œufs. Dans un bol, fouettez les jaunes d\'œufs avec le sucre jusqu\'à ce que le mélange blanchisse.\r\n\r\nÉTAPE 2\r\nAjoutez le mascarpone et mélangez jusqu\'à obtenir une crème lisse et homogène.\r\n\r\nÉTAPE 3\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la crème mascarpone.\r\n\r\nÉTAPE 4\r\nTrempez rapidement les biscuits dans le café et disposez-les dans le plat, en une couche.\r\n\r\nÉTAPE 5\r\nRecouvrez les biscuits de la moitié de la crème mascarpone. Répétez l\'opération avec une deuxième couche de biscuits imbibés de café, puis recouvrez du reste de crème mascarpone.\r\n\r\nÉTAPE 6\r\nSaupoudrez généreusement de cacao en poudre.\r\n\r\nÉTAPE 7\r\nRéfrigérez pendant au moins 4 heures avant de servir.\r\n', NULL, 'image/tiramisu.png', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_uti`, `pseudo`, `mail`, `mdp`) VALUES
(7, 'hugo', 'hugo@mail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'user', 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'michel', 'michel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`id_rec`) REFERENCES `recette` (`id_rec`),
  ADD CONSTRAINT `favori_ibfk_2` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`);

--
-- Contraintes pour la table `mes_recettes`
--
ALTER TABLE `mes_recettes`
  ADD CONSTRAINT `mes_recettes_ibfk_1` FOREIGN KEY (`id_rec`) REFERENCES `recette` (`id_rec`),
  ADD CONSTRAINT `mes_recettes_ibfk_2` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `recette_ibfk_1` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
