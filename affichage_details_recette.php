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
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="option_étoiles.css">
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
    $i = $_POST['i'];
    include('entete.php');
    ?>

    <!-- Div titre et image -->
    <div style="text-align:center ; margin-bottom :50px ;">
        <h1> <?php
                echo $_SESSION['nom'][$i];
                if (isset($_SESSION['user'])) {
                    include('ajouter_un_favoris.php');
                }; ?>
        </h1>

        <img class="img" src="<?php echo $_SESSION['image'][$i] ?>">

    </div>


    <div style="text-align:center ; margin-bottom :50px ;">

        <main class="container">
            <h3>Cliquez sur une étoile pour donner une note</h3>
            <div class="stars">
                <i class="star stargrey fas fa-star" data-index="0"></i>
                <i class="star stargrey fas fa-star" data-index="1"></i>
                <i class="star stargrey fas fa-star" data-index="2"></i>
                <i class="star stargrey fas fa-star" data-index="3"></i>
                <i class="star stargrey fas fa-star" data-index="4"></i>
            </div>

            <h4> Note : </h4>
            <h5> <?php echo $_SESSION['note'][$i] ?>/5 </h5>

            <input type="hidden" id="myInteger" value="<?php echo $_SESSION['id_rec']; ?>">

            <?php
            if (isset($_POST['index'])) {
                $nombre_étoiles = $_POST['index'];

                echo $nombre_étoiles;

                $id_rec_requete = $_SESSION['id_rec'][$i];
                $sql_select = "SELECT nombre_avis, note FROM recette WHERE id_rec = $id_rec_requete;";

                $row = $pdo->query($sql_select);
                $results = $row->fetchAll(PDO::FETCH_ASSOC);
                if ($results) {
                    foreach ($results as $res) {
                        $note_globale = $res["note"];
                        $nombre_avis = $res["nombre_avis"];
                    }
                }
                $nombre_avis ++;
                $note = ($note_globale * ($nombre_avis-1) + $nombre_étoiles) / $nombre_avis;
                $sql_update = "UPDATE recette SET note=?, nombre_avis=? WHERE id_rec=?;";
                $pdo->prepare($sql_update)->execute([$note, $nombre_avis, $id_rec_requete]);
            }
            ?>
    </div>

    <!-- Div description de la recette -->
    <div style="text-align:center ; margin-bottom :50px ;">
        <h4> <?php echo $_SESSION['description'][$i] ?> </h4>
    </div>


    <!-- Div instructions et ingrédients de la recette -->
    <div style="text-align:center ; margin-bottom :50px ;">
        <h4> Ingredients : </h4>
        <h5> <?php echo $_SESSION['ingredient'][$i] ?> </h5>

        <h4> ustensiles : </h4>
        <h5> <?php echo $_SESSION['ustensiles'][$i] ?> </h5>

        <h4> Temps : </h4>
        <h5> <?php echo $_SESSION['temps'][$i] ?> </h5>

        <h4> Nombre de personne : </h4>
        <h5> <?php echo $_SESSION['nbr_pers'][$i] ?> </h5>

        <h4> Difficulte : </h4>
        <h5> <?php echo $_SESSION['difficulte'][$i] ?> </h5>

        <h4> Cout : </h4>
        <h5> <?php echo $_SESSION['cout'][$i] ?> </h5>

        <h4> Preparation : </h4>
        <h5> <?php echo ($_SESSION['preparation'][$i]) ?> </h5>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--SCRIPT--------------------------------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="script_étoiles.js"></script>
    <!----------------------------------------------------------------------------->

</body>

</html>