<?php

require '../dl/get_lager.php';
function hent_lager(){
   $id_array=get_lager();
   // print_r($id_array);
   return $id_array;
}
function hent_lager_id($id){
$id_array=get_lager_variant($id);
return $id_array;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

