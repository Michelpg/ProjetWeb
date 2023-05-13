<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['log']= $_POST['pseudo'];
$_SESSION['mdp']=$_POST['mdp'];
$_SESSION['mail']=$_POST['mail'];

$log= $_SESSION['log'];
$mdp= $_SESSION['mdp'];
$mail= $_SESSION['mail'];
$mdp=md5($mdp);
$select_query = "INSERT INTO `utilisateur` (`pseudo`, `mail`, `mdp`) VALUES ('$log', '$mail', '$mdp');";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);

$user = $res->fetch();
session_unset(); 
session_destroy(); 
header('location:form_auth.php');
?>