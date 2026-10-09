<?php
$nbre = 5;
function sum($nbre){
    $sum=0;
    for ($i=1; $i < $nbre+1; $i++) { 
        $sum = $sum + $i;
    }
    return $sum;
    }
echo "la somme des entiers entre 1 et ". $nbre ." est ". sum($nbre) ."<br>";

function sommeDiviseursStricts($nbre){
    $somme = 0;
    for ($i = 1; $i < $nbre; $i++) {
        if ($nbre % $i == 0) {
            $somme = $somme + $i;
        }
    }
    return $somme;
}

$n = 1000;
for ($x = 1; $x <= $n; $x++) {
    if (sommeDiviseursStricts($x) == $x){
        echo "le nombre ". $x ." est un nombre parfait <br>";
    }
}

?>
