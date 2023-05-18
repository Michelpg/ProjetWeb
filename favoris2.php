<?php 
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php include('entete.php'); ?>

    <div style = "margin-top: 50px;">
<?php
require("formconn.inc.php");

$select_query = "SELECT recette.nom, recette.description, recette.image FROM favori INNER JOIN recette ON favori.id_rec = recette.id_rec;";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
$recettes_favorites = $res->fetchAll();

// Stocker les recettes favorites dans des variables de session
$_SESSION['recettes_favorites'] = $recettes_favorites;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mes recettes favorites</title>
</head>
<body>
    <h1>Mes recettes favorites</h1>

    <?php foreach ($_SESSION['recettes_favorites'] as $recette) : ?>
        <h2><?php echo $recette['nom']; ?></h2>
        <img src="<?php echo $recette['image']; ?>" alt="<?php echo $recette['nom']; ?>" />
        <p><?php echo $recette['description']; ?></p>
    <?php endforeach; ?>
</body>
</html>
