<?php  session_start(); ?>
<?php
if (isset ($_SESSION['nom_recette'])){
$image=$_SESSION['image_recette'];
$Nom=$_SESSION['nom_recette'];
$description=$_SESSION['description_recette'];}
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

<!-- Div des card pour recette du jour, recette la mieux notée, etc  (page d'acceuil) !-->
<?php if (empty($Nom)) {echo "
<div class='row'>
  <div class='col-4'>
    <div class='card' style = 'margin-left: 5px;'>
      <div class='card-body'>
        <h3 class='card-title' style='border-bottom: 1px solid silver;''>$Nom</h3>
        <img src=' $image'>
        <p class='card-text'>$description</p>
      </div>
    </div>
  </div>
</div>
</div>
";}?>
<?php if (!empty($Nom)) {echo "<h1>Pas encore de favoris<h1>";}?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>