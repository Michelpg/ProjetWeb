<?php  session_start(); 

 ?>

<!DOCTYPE html>
<html lang=fr>
    <head>
    <title>acceuil</title>
     </head>
    <body>
    <?php  include('entete.php'); ?>
    
    <h1>Nouvelle recette</h1>

<form action="new_recette.php" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td><label for="Nom">Nom recette</label></td>
            <td><input type="text" name="nom" size="50" maxlength="49" /></td>
        </tr>
        <tr>
            <td><label for="des">Description</label></td>
            <td><textarea maxlength="300" cols="70" rows="5" name="des"></textarea></td>
        </tr>
        <tr>
            <td><label for="tps">Temp de preparation</label></td>
            <td><input type="text" name="tps" size="50" maxlength="5" /></td>
        </tr>
        <tr>
            <td><label for="ing">Ingredient</label></td>
            <td><textarea maxlength="300" cols="70" rows="5" name="ing"></textarea></td>
        </tr>
        <tr>
            <td><label for="diff">Difficulte</label></td>
            <td><input type="text" name="diff" size="50" maxlength="49" /></td>
            <tr>
            <td><label for="cout">Coût</label></td>
            <td><input type="text" name="cout" size="50" maxlength="49" /></td>
        </tr>
        <tr>
            <td><label for="nbr">Nombre de personne</label></td>
            <td><input type="text" name="nbr" size="50" maxlength="2" /></td>
        </tr>
        <tr>
            <td><label for="rec">Recette</label></td>
            <td><textarea maxlength="5000" cols="100" rows="50" name="rec"></textarea></td>
            <tr>
            <td><label for="us">Ustensiles</label></td>
            <td><textarea maxlength="300" cols="70" rows="5" name="us"></textarea></td>
        </tr>
        <tr>
            <td><label for="image">Image</label></td>
            <td><input type="file" name="image" accept="image/*"/></td>
        </tr>
        
    </table>
    <br />
    <input type="reset" name="reset" value="Effacer" />
    <input type="submit" name="submit" value="Valider" />
    
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>