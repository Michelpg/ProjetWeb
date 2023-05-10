<?php  session_start(); 
$log;
if (isset ($_SESSION['log']))
 $log= $_SESSION['log'];   ?>

<!DOCTYPE html>
<html lang=fr>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
    <?php include('entete.php'); ?>
    <div>
	  <h1>Bienvenue sur Amphore !</h1>
	  <p>Découvrez des recettes délicieuses et simples à réaliser chez vous.</p>
	</div>
    <?php 
    if (!empty($log)) {
    echo"Bonjour ",$log ;}?>
    
    <div class="card text-white bg-primary">
        <img class="card-img-top" src="holder.js/100px180/" alt="Title">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>