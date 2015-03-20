<?php

require '../dl/get_virksomhed_dl.php';
function hent_fragt_pris(){
   $id_array=get_ordre_ikke_begyndt();
   // print_r($id_array);
   return $id_array;
}

