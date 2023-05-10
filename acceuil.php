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
    <?php // include('entete.php'); ?>
    <div style="height : 100px; display:flex">
        <div>
            <h1>Bienvenue sur Amphore !</h1>
	        <p>Découvrez des recettes délicieuses et simples à réaliser chez vous.</p>
        </div>
        <div style="width:fit-content;">
            <img src="image_amphore_3.png" style=" max-width: 100%; max-height: 100%; float:right;">
        </div>
	    </div>
    <?php 
    if (!empty($log)) {
    echo"Bonjour ",$log ;}?>
    
    <div>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>


    <div>

        <!-- Div des card pour recette du jour, recette la mieux notée, etc  (page d'acceuil) !-->
        <div class="row">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette du jour</h3>
                <img src="tiramisu.png">
                <h3 class="card-title">Recette du jour</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette populaire</h3>
                <img src="tiramisu.png">
                <h3 class="card-title">Recette populaire</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette notée récemment</h3>
                <img src="tiramisu.png">
                <h3 class="card-title">Recette notée récemment</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>