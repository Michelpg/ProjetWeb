<?php  session_start(); 
$log;
if (isset ($_SESSION['log']))
 $log= $_SESSION['log'];   ?>

<!DOCTYPE html>
<html lang=fr>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    </body>
</html>