<?php session_start(); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
      $targetDir = "image/"; // Répertoire de destination pour enregistrer l'image
      $targetFile = $targetDir . basename($_FILES["image"]["name"]);
      $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  
      // Vérifier si le fichier est une image
      $validExtensions = array("jpg", "jpeg", "png", "gif");
      if (in_array($imageFileType, $validExtensions)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
          echo "L'image a été téléchargée avec succès.";
        } else {
          echo "Une erreur s'est produite lors du téléchargement de l'image.";
        }
      } else {
        echo "Seules les images au format JPG, JPEG, PNG et GIF sont autorisées.";
      }
    } else {
      echo "Aucune image n'a été sélectionnée ou une erreur s'est produite lors du téléchargement.";
    }
  }
require("formconn.inc.php");


$nom=$_POST['nom'];
$des=$_POST['des'];
$tps=$_POST['tps'];
$ing=$_POST['ing'];
$diff=$_POST['diff'];
$cout=$_POST['cout'];
$nbr=$_POST['nbr'];
$ustensil=$_POST['us'];
$rec=$_POST['rec'];


$select_query = "INSERT INTO `recette` (`nom`, `description`, `temps`, `ingredient`, `difficulte`, `cout`, `nbr_pers`, `ustensiles`, `preparation`,`image`) VALUES
('$nom', '$des', '$tps', '$ing', '$diff', '$cout', $nbr, '$ustensil', '$rec', '$targetFile')";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);

$user = $res->fetch();
 
header('location:acceuil.php');
?>