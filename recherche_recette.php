<?php  session_start(); ?>

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
$processedIds = array();

if (isset($_SESSION['id_rec'])){
    for ($i = 0; $i < count($_SESSION['id_rec']); $i++) {
      $idRec = $_SESSION['id_rec'][$i];
        if (in_array($idRec, $processedIds)) {
            continue; 
        }
        
        $processedIds[] = $idRec;
 echo "

<div class='row'>


  <div class='col-4'>
    <div class='card' style = 'margin-left: 5px;'>
      <div class='card-body'>
        <h3 class='card-title' style='border-bottom: 1px solid silver;''>".$_SESSION['nom'][$i]."</h3>
        <form action='affichage_details_recette.php' method='post'>
  <input type='hidden' name='i' value=".$i.">
        <br />
        <input type='image' src='".$_SESSION['image'][$i]."' alt='Bouton d'image' />
    </form>
        <p class='card-text'>".$_SESSION['description'][$i]."</p>
      </div>
    </div>
  </div>
</div>
</div>
";}
 }else {echo "<h1>Pas de recette corespondant a la recherche<h1>";}?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>