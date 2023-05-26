<?php session_start(); 
require("formconn.inc.php");
$i=$_POST['i'];
$id_user=$_SESSION['user'];
$id_rec=$_POST['id_rec'];
$select_query = "DELETE FROM favori WHERE `favori`.`id_rec` = '$id_rec' AND favori.id_uti='$id_user';";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
echo "<form id='redirectForm' method='post' action='affichage_details_recette.php'>
        <input type='hidden' name='i' value='" . $i . "'>
      </form>";
echo "<script>document.getElementById('redirectForm').submit();</script>";
?>