<?php  session_start(); 
?>
<?php include('entete.php'); ?>
<h1>Formulaire d'inscription</h1>

<form action="inscription.php" method="post">
    
    <table>
        <tr>
            <td><label for="pseudo">Pseudo</label></td>
            <td><input type="text" name="pseudo" /></td>
        </tr>
        <tr>
            <td><label for="mdp">mail</label></td>
            <td><input type="text" name="mdp" /></td>
        </tr>
        <tr>
            <td><label for="mdp">Mot de passe</label></td>
            <td><input type="password" name="mdp" /></td>
        </tr>
    </table>
    <br />
    <input type="reset" name="reset" value="Effacer" />
    <input type="submit" name="submit" value="Valider" />
</form>
<?php
header('location:acceuil.php');
?>