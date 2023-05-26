<?php session_start();

if (isset($_SESSION['log'])) {
  $log = $_SESSION['log'];
  $mdp = $_SESSION['mdp'];

  session_unset();

  $_SESSION['log'] = $log;
  $_SESSION['mdp'] = $mdp;
}
?>
<!DOCTYPE html>
<html lang=fr>

<head>
  <title>acceuil</title>
  <meta charset="utf-8">
</head>

<body>
  <?php
  include('entete.php');
  require("formconn.inc.php");

  $sql_recette_du_jour = "SELECT * FROM recette WHERE nom = 'Tarte aux pommes';";
  $sql_recette_populaire = "SELECT * FROM recette WHERE note>4 
  ORDER BY RAND() 
  LIMIT 1;";
  $sql_recette_aleatoire = "SELECT * FROM recette
  ORDER BY RAND()
  LIMIT 1;";

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

  $row = $pdo->query($sql_recette_populaire);
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
  $row = $pdo->query($sql_recette_aleatoire);
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

  if (isset($_SESSION['id_rec'])) {
    for ($i = 0; $i < count($_SESSION['id_rec']); $i++) {
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
            <img src="<?php echo $_SESSION['image'][0] ?>">
            <h3 class="card-title"><?php echo $_SESSION['nom'][0] ?></h3>
            <p class="card-text"><?php echo $_SESSION['description'][0] ?></p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette populaire</h3>
            <img src="<?php echo $_SESSION['image'][1] ?> ">
            <h3 class="card-title"><?php echo $_SESSION['nom'][1] ?></h3>
            <p class="card-text"><?php echo $_SESSION['description'][1] ?></p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style=" margin-right: 5px; ">
          <div class="card-body">
            <h3 class="card-title" style="border-bottom: 1px solid silver;">Recette aléatoire</h3>
            <img src="<?php echo $_SESSION['image'][2] ?>">
            <h3 class="card-title"><?php echo $_SESSION['description'][2] ?></h3>
            <p class="card-text"><?php echo $_SESSION['description'][2] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>