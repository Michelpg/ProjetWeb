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
    <div class="jumbotron">
	  <h1 class="display-4">Bienvenue sur Amphore !</h1>
	  <p class="lead">Découvrez des recettes délicieuses et simples à réaliser chez vous.</p>

	</div>
    <?php 
    if (!empty($log)) {
    echo"Bonjour ",$log ;}?>
    </body>
</html>