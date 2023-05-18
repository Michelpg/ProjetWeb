<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['favoris']= $_POST['favoris'];
$favoris= $_SESSION['favoris'];
if ($favoris!=''){
    if ($favoris!=' '){
$select_query = "SELECT recette.nom, recette.description, recette.image FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec;";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$recette_bdd = $res->fetch();

$_SESSION['nom_recette'] = $recette_bdd['nom'];
$_SESSION['description_recette'] = $recette_bdd['description'];
$_SESSION['image_recette'] = $recette_bdd['image'];
}else {
    unset($_SESSION['nom_recette']); }

}else{
    unset($_SESSION['nom_recette']); }

header('location:recherche_favoris.php');
?>