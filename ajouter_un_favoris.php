
<!DOCTYPE html>
    
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>

<?php

require("formconn.inc.php");
$id_rec=$_SESSION['id_rec'][$i];
$select_query = "SELECT id_fav FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec 
INNER JOIN utilisateur ON favori.id_uti = utilisateur.id_uti  
WHERE recette.id_rec=$id_rec; ";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$user = $res->fetch();
?>
    <body>
    <?php
    if(!$user){ echo "
<form action='insert_favoris.php' method='post'>
  <input type='hidden' name='i' value=".$i.">
  <input type='hidden' name='id_rec' value=".$id_rec.">
  
        <br />
        <input type='submit' name='submit' value='Ajouter' />
    </form>
    " ;}else{ echo "
<button action=''>
<form action='delete_favoris.php' method='post'>
  <input type='hidden' name='i' value=".$i.">
  <input type='hidden' name='id_rec' value=".$id_rec.">
  
        <br />
        <input type='submit' name='submit' value='Supprimer' />
    </form>
    ";}
    ?>
    </body>
</html> 