<?php
$tab = array(0, 0, 0, 0, 0);
function suitehihi($tab){
    $cle=0;
    for ($i=0; $i < sizeof($tab)-1; $i++) { 
        if ($tab[$i]%2 == 0){
            $val = $i;
        }
    }
    if ($tab[$val+2]%2 != 0 || $tab[$val+1]%2 != 0){
        return TRUE;
    }
    return FALSE;
}
function suitehaha($tab){
    while(!suitehihi($tab)){
        $tab[] = random_int(1, 100);
        $tab[] = random_int(1, 100);
        $tab[] = random_int(1, 100);
        $tab[] = random_int(1, 100);
        $tab[] = random_int(1, 100);
    }
    return TRUE;
}
print_r(suitehaha($tab))
?>