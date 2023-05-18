<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php include('entete.php'); 
        
        //requete SQL
        $requete_desc = "SELECT description FROM recette WHERE nom ='Navarin d'agneau'";
        $res = $pdo->query($requete_desc);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $recette_bdd = $res->fetch();

        $description_recette = $recette_bdd['description'];
        $description_recette = $recette_bdd['description'];
        ?>

        <!-- Div titre et image -->
        <div style="text-align:center ; margin-bottom :10px ;"> 
        <h1> Tiramisu (titre ici)</h1>
        <img src="tiramisu.png">
        </div>
        
        <!-- Div texte de la recette -->
        <div style="text-align:center ; margin-bottom :10px ;">

            <h6> <?php echo $description_recette ?> </h6>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>