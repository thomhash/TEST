<?php

require '../dl/get_kunde.php';
function hent_kunde($id){
   $id_array=get_kunde_info_id($id);
   // print_r($id_array);
   return $id_array;
}
function hent_kunde_kurv($id){
   $id_array=get_kurv_fra_mail($id);
   // print_r($id_array);
   return $id_array;
}