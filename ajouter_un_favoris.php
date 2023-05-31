
<!DOCTYPE html>
    
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="">
    </head>

<?php

require("formconn.inc.php");
$id_rec=$_SESSION['id_rec'][$i];
$id_user=$_SESSION['user'];
$select_query = "SELECT id_fav FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec 
INNER JOIN utilisateur ON favori.id_uti = utilisateur.id_uti  
WHERE recette.id_rec=$id_rec AND favori.id_uti='$id_user';";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$user = $res->fetch();
?>
    <body>
    <?php
    if(!$user){ echo "
  <a href='insert_favoris.php?i=".$i."&amp;id_rec=".$id_rec."'><i class='bi bi-bookmark-plus'></i></a>
    " ;}else{ echo "
         <a href='delete_favoris.php?i=".$i."&amp;id_rec=".$id_rec."'><i class='bi bi-bookmark-heart-fill'></i></a>
    ";}
    ?>
  
    </body>
</html> 