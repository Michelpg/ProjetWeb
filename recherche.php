<?php session_start(); 
$log = $_SESSION['log'];
$mdp = $_SESSION['mdp'];

session_unset();

$_SESSION['log'] = $log;
$_SESSION['mdp'] = $mdp;
?>
<?php
require("formconn.inc.php");
$_SESSION['recherche']= $_POST['recherche'];
$recherche= $_SESSION['recherche'];
if ($recherche!=''){
    if ($recherche!=' '){
$sql = "SELECT * FROM recette WHERE nom LIKE'%$recherche%' OR description LIKE'%recherche%' OR temps LIKE'%$recherche%' OR ingredient LIKE'%$recherche%' OR difficulte LIKE'%$recherche%' OR cout LIKE'%$recherche%' OR nbr_pers LIKE'%$recherche%' OR ustensiles LIKE'%$recherche%' OR preparation LIKE'%$recherche%';";
$row = $pdo->query($sql);
$results = $row->fetchAll(PDO::FETCH_ASSOC);

if ($results) {
    foreach ($results as $res) {
        $_SESSION['id_rec'][] = $res["id_rec"];
        $_SESSION['nom'][] = $res["nom"];
        $_SESSION['description'][] = $res["description"];
        $_SESSION['temps'][] = $res["temps"];
        $_SESSION['ingredient'][] = $res["ingredient"];
        $_SESSION['difficulte'][] = $res["difficulte"];
        $_SESSION['cout'][] = $res["cout"];
        $_SESSION['nbr_pers'][] = $res["nbr_pers"];
        $_SESSION['ustensiles'][] = $res["ustensiles"];
        $_SESSION['preparation'][] = $res["preparation"];
        $_SESSION['note'][] = $res["note"];
        $_SESSION['image'][] = $res["image"];
        
    }
} else {
    echo "Aucun résultat trouvé.";
}
}else {
    unset($_SESSION['nom_recette']); }

}else{
    unset($_SESSION['nom_recette']); }
header('location:recherche_recette.php');

?>