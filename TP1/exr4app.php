<?php
//commentaire sur une ligne
/* commentaire sur plusieurs lignes */
echo "Bonjours tout le monde <br>";
echo 'texte statique <br>';
echo "chaque instruction "." se termine par; <br>";
$tva = 0.206;
$prix = 150;
$nombre = 10;
$HT = $nombre * $prix;
$TTC = $HT * (1 + $tva);
echo "Le prix total est de : ".$TTC."€";

?>
