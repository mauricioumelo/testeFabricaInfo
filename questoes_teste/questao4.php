<?php
$string = "“FabricaInfo";
function maiusculas($string){
    $lowerCase = strtolower($string);

    $lowerDiff = similar_text($string, $lowerCase);

    echo "Maiusculas: " . (strlen($string) - $lowerDiff);
}

maiusculas($string);