<?php session_start(); ?>
<?php

require("formconn.inc.php");
$_SESSION['log']= $_POST['pseudo'];
$_SESSION['mdp']=$_POST['mdp'];
$log= $_SESSION['log'];
$mdp= $_SESSION['mdp'];
$select_query = "SELECT * FROM utilisateur WHERE pseudo='$log';";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);

$user = $res->fetch();

if ($user) {
    
    $pass = $user['mdp'];
    
    if ($pass===md5($mdp)) {
        echo "Authentification réussi";
        header('location:acceuil.php');
    } else {
        echo "mot de passe non valide";
        session_unset(); 
        session_destroy();
        header('location:form_auth.php');
    }
} else {
    echo "login non valide";
    session_unset(); 
    session_destroy();
    header('location:form_auth.php');
}
?>