<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulaire de saisie de login et de mot de passe</title>
    <style type="text/css">
        body {
            font-family: Verdana, Helvetica, Arial, sans-serif;
        }
    </style>
</head>

<body>
<?php include('entete.php'); ?>
    <h1>Formulaire de saisie de login et de mot de passe</h1>

    <form action="connexion.php" method="post">
        <table>
            <tr>
                <td><label for="pseudo">Pseudo</label></td>
                <td><input type="text" name="pseudo" /></td>
            </tr>
            <tr>
                <td><label for="mdp">Mot de passe</label></td>
                <td><input type="password" name="mdp" /></td>
            </tr>
        </table>
        <br />
        <input type="reset" name="reset" value="Effacer" />
        <input type="submit" name="submit" value="Valider" />
        <input type="button" onclick=window.location.href='deco.php' name="submit" value="S'inscrire" />
    </form>

</body>

</html>