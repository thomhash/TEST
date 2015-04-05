<?php

require '../dl/kurv.php';
function slet_kurv_kunde($id_kunde){
   $id_array= slet_kurv_kunde_dl($id_kunde);
     return $id_array;
}
function fyld_kurv($f_id_variant,$f_id_kunde,$antal){
   $id_array= fyld_kurv_dl($f_id_variant,$f_id_kunde,$antal);
   return $id_array;
}