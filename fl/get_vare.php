<?php

require '../dl/get_vare.php';
function get_vare_info_f($id){
   $id_array=get_vare_info_d($id);
   // print_r($id_array);
   return $id_array;
}

function get_vare_beskrivelse_vare_f($id_variant){
   $id_vare=get_vareid_fra_variant_d($id_variant); 
   $id_array=get_vare_beskrivelse_vare_d($id_vare[0][0]);
   // print_r($id_array);
   return $id_array;
}

function get_vare_navn_f($id_variant){
    $id_vare=get_vareid_fra_variant_d($id_variant); 
   $id_array=get_vare_navn_d($id_vare[0][0]);
   // print_r($id_array);
   return $id_array;
}
function get_vare_prioritet_f($id_variant){
    $id_vare=get_vareid_fra_variant_d($id_variant); 
   $id_array=get_vare_prioritet_d($id_vare[0][0]);
   // print_r($id_array);
   return $id_array;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

