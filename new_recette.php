<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_POST['nom'];
$_POST['des'];
$_POST['tps'];
$_POST['ing'];
$_POST['diff'];
$_POST['cout'];
$_POST['nbr'];
$_POST['rec'];
$_POST['us'];
$_POST['img'];


$select_query = "INSERT INTO `utilisateur` (`pseudo`, `mail`, `mdp`) VALUES ('$log', '$mail', '$mdp');";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);

$user = $res->fetch();
session_unset(); 
session_destroy(); 
header('location:form_auth.php');
?>