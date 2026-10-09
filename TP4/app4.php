<?php
$nom = "mOeTEz bEn yeMnA";
$adresse = "moetezoffice@gmail.com";
trim($nom);
trim($adresse);
$nom = strtolower($nom);
$nom = strtoupper($nom[0]) . substr($nom, 1, strlen($nom)-1);
for ($i=0; $i < strlen($nom); $i++) { 
    echo $nom[$i] . '<br>';
}
if(strpos($adresse, '@') && strpos($adresse, '.') && filter_var($adresse, FILTER_VALIDATE_EMAIL) != false){
    echo "Valid Email :)))))))";
}
else{
    echo "Invalid Email :((((";
}

?>