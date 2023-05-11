<?php  session_start(); 

 ?>

<!DOCTYPE html>
<html lang=fr>
    <head>
    <title>acceuil</title>
     </head>
    <body>
    <?php  include('entete.php'); ?>
    


    <div style = "margin-top: 50px;">

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