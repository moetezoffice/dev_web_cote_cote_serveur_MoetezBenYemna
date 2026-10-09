<?php
function factoriel($n){
    $s = $n;
    for ($i=1; $i < $n; $i++) { 
        $s = $s * $i;
    }
return $s;
}
$res = factoriel(3);
echo $res . '<br>';
function cardinal($n, $p){
    return factoriel($n)/(factoriel($p)*factoriel($n-$p));
}
$res2 = cardinal(5, 2);
echo $res2 . '<br>';
function minMax($t){
    $max = 0;
    $indexofmax = 0;
    $min = 0;
    $indexofmin = 0 ;
    for ($i=0; $i < sizeof($t)-1; $i++) { 
        if($max<$t[$i]){
            $max = $t[$i];
            $indexofmax = $i;
        }
        if ($min>$t[$i]) {
            $min = $t[$i];
            $indexofmin = $i;
        }
    }
    return [$indexofmax, $indexofmin];

}
$res3 = minMax([2, 0, 3, 5]);
print_r($res3);
echo '<br>';
function permuter(&$a, &$b){
    $rev = $a;
    $a = $b;
    $b = $rev;
    return TRUE;
}
$a= 4;
$b =5;
$res4 = permuter($a, $b);
if ($res4){
    echo "permutte avec succees";
}

?>