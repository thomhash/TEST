<?php
require_once '../dl/varer.php';
function hent_gruppe_maerker($gruppenr){
    $maerker=  get_gruppe_maerker($gruppenr);
    
    return $maerker;
}

function hent_gruppe_stoerrelser($gruppenr){
    $stoerrelser=  get_gruppe_stoerrelser($gruppenr);
    
    return $stoerrelser;
}

function hent_gruppe_farver($gruppenr){
    $farver=  get_gruppe_farver($gruppenr);
    
    return $farver  ;
}



?>