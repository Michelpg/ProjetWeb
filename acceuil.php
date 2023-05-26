<?php session_start();

if (isset($_SESSION['log'])) {
  $log = $_SESSION['log'];
  $mdp = $_SESSION['mdp'];
  $id_user=$_SESSION['user'];

  session_unset();

  $_SESSION['user']=$id_user;
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

      echo "

      <div class='row' style='padding-bottom: 10px;'>
      
      
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
      ";
    }
  }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>