<?php
$select_query = "INSERT INTO `favoris` (`id_rec`, `id_uti`) VALUES ('$res[id_rec]', '$mdp');";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
?>