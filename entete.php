<?php 
$log;
if (isset ($_SESSION['log']))
 $log= $_SESSION['log'];   ?>
<html>
    <head>
        
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
   .card img {
  width: 300px; 
  height: 200px; 
  object-fit: cover; 
}
</style>
    </head>
    <body>
    <div style="height : 100px; display:flex;text-align:right;">
        <div>
            <h1>Bienvenue <?php if (!empty($log)) {echo $log;} ?> sur Amphore !</h1>
	        <p>Découvrez des recettes délicieuses et simples à réaliser chez vous.</p>
        </div>
        <div style="width:fit-content;">
            <img src="image_amphore_3.png" style=" max-width: 100%; max-height: 100%; float:right;">
        </div>
	</div>
    
    <div>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black;">
            <a class="navbar-brand" href="#">Amphore</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="acceuil.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <?php if (empty($log)) {echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='form_auth.php'>Se connecter</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='form_Inscription.php'>S'inscrire</a>
                    </li>
                    ";}?>
                    <?php if (!empty($log)) {echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='deco.php'>Deconexion</a>
                    </li>
                     <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='dropdownId' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Mon compte</a>
                        <div class='dropdown-menu' aria-labelledby='dropdownId'>
                            <a class='dropdown-item' href='favoris.php'>Favoris</a>
                            <a class='dropdown-item' href='#'>Mes recettes</a>
                            <a class='dropdown-item' href='nouvelle_recette.php'>Nouvelles recettes</a>
                        </div>
                    </li>";}?>
                </ul>
                <form action="recherche.php" class="d-flex my-2 my-lg-0" method="post">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" name="recherche">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
          
    </body>
</html>
