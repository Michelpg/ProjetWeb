<?php session_start();?>
<!DOCTYPE html>
<html lang=fr>

<head>
  <title>acceuil</title>
</head>

<body>
  <?php 
  include('entete.php');
  require("formconn.inc.php");

  $sql_recette_du_jour = "SELECT * FROM recette WHERE nom = 'Navarin d'agneau';";

  $sql_recette_populaire = "SELECT * FROM recette WHERE note > 4
  ORDER BY RAND()
  LIMIT 1;";
  $sql_recette_aleatoire= "";  
  
  $row = $pdo->query($sql_recette_du_jour);
  $results = $row->fetchAll(PDO::FETCH_ASSOC);
  if ($results) {
      foreach ($results as $res) {
          $_SESSION['id_rec'][] = $res["id_rec"];
          $_SESSION['nom'][] = $res["nom"];
          $_SESSION['description'][] = $res["description"];
          $_SESSION['temps'][] = $res["temps"];
          $_SESSION['ingredient'][] = $res["ingredient"];
          $_SESSION['difficulte'][] = $res["difficulte"];
          $_SESSION['cout'][] = $res["cout"];
          $_SESSION['nbr_pers'][] = $res["nbr_pers"];
          $_SESSION['ustensiles'][] = $res["ustensiles"];
          $_SESSION['preparation'][] = $res["preparation"];
          $_SESSION['note'][] = $res["note"];
          $_SESSION['image'][] = $res["image"];
      }
  }
  
  $processedIds = array();
  
  if (isset($_SESSION['id_rec']))
  {
      for ($i = 0; $i < count($_SESSION['id_rec']); $i++) 
      {
        $idRec = $_SESSION['id_rec'][$i];
          if (in_array($idRec, $processedIds)) {
              continue; 
          }
          
          $processedIds[] = $idRec;
      }
  }
  ?>





  <div style="margin-top: 50px;">

    <!-- Div des card pour recette du jour, recette la mieux notée, etc  (page d'acceuil) !-->
    <div class="row">
      <div class="col-4">
        <div class="card" style="margin-left: 5px;">
          <div class="card-body">
            <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette du jour</h3>
            <img src="image/tiramisu.png">
            <h3 class="card-title">Recette du jour</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette populaire</h3>
            <img src="image/tiramisu.png">
            <h3 class="card-title">Recette populaire</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style=" margin-right: 5px; ">
          <div class="card-body">
            <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette aléatoire</h3>
            <img src="image/tiramisu.png">
            <h3 class="card-title">Recette akéatoire</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>