<?php session_start(); 
require("formconn.inc.php");
$i=$_GET['i'];
$id_rec=$_GET['id_rec'];
$id_user=$_SESSION['user'];
$select_query = "INSERT INTO `favori` (`id_rec`, `id_uti`) VALUES ('$id_rec', '$id_user');";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
echo "<form id='redirectForm' method='post' action='affichage_details_recette.php'>
        <input type='hidden' name='i' value='". $i ."'>
      </form>";
echo "<script>document.getElementById('redirectForm').submit();</script>";
?>