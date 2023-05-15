<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['favoris']= $_POST['favoris'];
$favoris= $_SESSION['favoris'];
if ($favoris!=''){
    if ($favoris!=' '){
$select_query = "SELECT * FROM favori;";
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
}else {
    unset($_SESSION['nom_recette']); }

}else{
    unset($_SESSION['nom_recette']); }

header('location:recherche_recette.php');
?>