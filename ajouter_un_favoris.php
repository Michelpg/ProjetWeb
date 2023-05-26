
<!DOCTYPE html>
    
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>

<?php

require("formconn.inc.php");
$res["id_rec"]=$_SESSION['id_rec'][$i];
$id_user=$_SESSION['user'];
$select_query = "SELECT id_fav FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec 
INNER JOIN utilisateur ON favori.id_uti = utilisateur.id_uti  
WHERE recette.id_rec=$res[id_rec]; ";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$user = $res->fetch();
?>
    <body>
    <?php
    if(!$user){ echo "
    <button action='include('insert_favoris.php')'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-plus' viewBox='0 0 16 16'>
  <path d='M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z'/>
  <path d='M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z'/>
</svg>
</button>
    " ;}else{ echo "
<button action='include('delete_favoris.php')'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16'>
  <path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
</svg>
</button>
    ";}
    ?>
    </body>
</html> 