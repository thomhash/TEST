<?php

require '../dl/get_bestillinger.php';
function hent_ordre_ikke_begyndt(){
   $id_array=get_ordre_ikke_begyndt();
   // print_r($id_array);
   return $id_array;
}

function hent_ordre_information($id){
   $id_array=get_vareinformation_fra_ordre_id($id);
   // print_r($id_array);
   return $id_array;
}

function hent_enkelt_id_ordre_information($id){
   $id_array=get_vareinformation_fra_ordre_id_enkelt($id);
   // print_r($id_array);
   return $id_array;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

