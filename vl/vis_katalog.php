<?php

require '../fl/opretkatalog.php';

//Test variable
$gruppenr = 2;
$side =1;

$infomation= hent_vare_katalog($gruppenr,$side); 

print_r($infomation);


?>