<?php 
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    <title>Mes recettes favorites</title>
    </head>
    <body>
    

    <div style = "margin-top: 50px;">
<?php
require("formconn.inc.php");

$select_query = "SELECT recette.nom, recette.description, recette.image FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec;";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$recettes_favorites = $res->fetchAll();

$_SESSION['recettes_favorites'] = $recettes_favorites;
?>


<body>
    <h1>Mes recettes favorites</h1>
<?php include('entete.php'); ?>
    <?php foreach ($_SESSION['recettes_favorites'] as $recette) : ?>
        <h2><?php echo $recette['nom']; ?></h2>
        <img src="<?php echo $recette['image']; ?>" alt="<?php echo $recette['nom']; ?>" />
        <p><?php echo $recette['description']; ?></p>
    <?php endforeach; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
