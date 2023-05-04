<?php  session_start(); 
?>
<?php

$log = $_SESSION['uname'];
$mdp = $_SESSION['mdp'];

session_unset(); 
session_destroy(); 
header('location:acceuil.php');
?>