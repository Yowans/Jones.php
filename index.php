<?php

function writeSecretSentence(string $str1, string $str2) : string
{
    return "$str1 s'incline face à $str2";
}

$animaux = array("le panda", "le chien", "le singe");
$choses = array("la lune", "le soleil", "l'orage");

foreach($animaux as $animal) {
    foreach($choses as $chose) {
        echo writeSecretSentence($animal, $chose) . '<br>';
    }
}