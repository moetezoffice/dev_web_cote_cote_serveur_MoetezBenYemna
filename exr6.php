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
for ($x = 1; $x < 1000; $x++) {
    if (sum($x) == $x){
        echo "le nombre ". $x ." est un nombre parfait <br>";
    }
}

?>