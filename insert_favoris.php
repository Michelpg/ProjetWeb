<?php
$select_query = "INSERT INTO `favoris` (`id_rec`, `id_uti`) VALUES ('$res[id_rec]', '$id_use');";
$res = $pdo->query($select_query);
$res->setFetchMode(PDO::FETCH_ASSOC);
?>