<?php
    $prix_table = 150;
    $prix_armoire = 50;
    $nombre = 10;
    $HT = $nombre * $prix_armoire;
    if ($prix_table>$HT) {
        echo "Le prix total pour les ". $nombre ." armoires est de" . $HT ."<br>Le prix de l'armoire(50) est superieur au prix de la table (150)<br>";
    }
     if ($prix_table<$HT) {
        echo "Le prix total pour les". $nombre ." armoires est de" . $HT ."<br>Le prix de l'armoire(50) est inferieur au prix de la table (150)<br>";
    }
    $nb = 3850;
    echo round($nb/3600) . "h:" . round(($nb%3600)/60) . "m:" . $nb%60 . "s";
?>