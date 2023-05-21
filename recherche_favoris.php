<?php session_start(); 
$log = $_SESSION['log'];
$mdp = $_SESSION['mdp'];

session_unset();

$_SESSION['log'] = $log;
$_SESSION['mdp'] = $mdp;
?>
<?php
$sql = "SELECT * FROM recette ;";

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
}
else{
    unset($_SESSION['favori']); }
header('location:favoris.php');