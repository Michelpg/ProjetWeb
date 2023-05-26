<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
        .img {
            width: 500px; 
            height: 400px; 
            object-fit: cover; 
        }
            </style>
    </head>
    <body>
        <?php 
        session_start(); 
        include('entete.php'); 
        $i=$_POST['i'];
        ?>

        <!-- Div titre et image -->
        <div style="text-align:center ; margin-bottom :100px ;"> 
        <h1> <?php echo $_SESSION['nom'][$i] ?> <?php include('ajouter_un_favoris.php') ?></h1>
        
        <img class="img" src="<?php echo $_SESSION['image'][$i] ?>">
        
        </div>
        
        <!-- Div description de la recette -->
        <div style="text-align:center ; margin-bottom :50px ;">
            <h4> <?php echo $_SESSION['description'][$i] ?> </h4>
        </div>

        
        <!-- Div instructions et ingrédients de la recette -->
        <div style="text-align:center ; margin-bottom :50px ;">
            <h4>  Ingredients : </h4>
            <h5> <?php echo $_SESSION['ingredient'][$i] ?> </h5>

            <h4>  ustensiles : </h4>
            <h5> <?php echo $_SESSION['ustensiles'][$i] ?> </h5>

            <h4>  Temps : </h4>
            <h5> <?php echo $_SESSION['temps'][$i] ?> </h5>

            <h4>  Nombre de personne : </h4>
            <h5> <?php echo $_SESSION['nbr_pers'][$i] ?> </h5>

            <h4>  Difficulte : </h4>
            <h5> <?php echo $_SESSION['difficulte'][$i] ?> </h5>

            <h4>  Cout : </h4>
            <h5> <?php echo $_SESSION['cout'][$i] ?> </h5>

            <h4>  Preparation : </h4>
            <h5> <?php echo utf8_encode ($_SESSION['preparation'][$i] ) ?>  </h5>

            <h4>  Note : </h4>
            <h5> <?php echo $_SESSION['note'][$i] ?> </h5>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>