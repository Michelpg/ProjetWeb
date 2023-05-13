<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['recherche']= $_POST['recherche'];
$recherche= $_SESSION['recherche'];
$select_query = "SELECT * FROM recette WHERE nom LIKE'%$recherche%' OR description LIKE'%recherche%' OR temps LIKE'%$recherche%' OR ingredient LIKE'%$recherche%' OR difficulte LIKE'%$recherche%' OR cout LIKE'%$recherche%' OR nbr_pers LIKE'%$recherche%' OR ustensiles LIKE'%$recherche%' OR preparation LIKE'%$recherche%';";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$recette_bdd = $res->fetch();
$_SESSION['nom_recette'] = $recette_bdd['nom'];
$_SESSION['description_recette'] = $recette_bdd['description'];
$_SESSION['ingredient_recette'] = $recette_bdd['ingredient'];
$_SESSION['difficulte_recette'] = $recette_bdd['difficulte'];
$_SESSION['cout_recette'] = $recette_bdd['cout'];
$_SESSION['nbr_pers_recette'] = $recette_bdd['nbr_pers'];
$_SESSION['ustensiles_recette'] = $recette_bdd['ustensiles'];
$_SESSION['preparation_recette'] = $recette_bdd['preparation'];
$_SESSION['image_recette'] = $recette_bdd['image'];

header('location:recherche_recette.php');
?>