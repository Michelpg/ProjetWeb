<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['recherche']= $_POST['recherche'];
$recherche= $_SESSION['recherche'];
$select_query = "SELECT * FROM recette WHERE nom='%$recherche%' OR temps='%$recherche%' OR ingrédient='%$recherche%' OR difficulté='%$recherche%' OR coût='%$recherche%' OR nbr_pers='%$recherche%' OR Ustensiles='%$recherche%' OR Préparation='%$recherche%';";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);

$_SESSION['$recette_complette'] = $res->fetch();
header('location:recherche_recette.php');
?>