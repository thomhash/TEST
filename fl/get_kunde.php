<?php

require '../dl/get_kunde.php';
function hent_kunde($id){
   $id_array=get_kunde_info_id($id);
   // print_r($id_array);
   return $id_array;
}
/* 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

