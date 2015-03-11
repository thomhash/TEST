<?php
require '../dl/Mikkel_test.php';
function hent_maerker(){
   $id_array=get_maerker();
   // print_r($id_array);
   return $id_array;
}
function hent_varefarve(){
   $id_array=get_varefarve();
   // print_r($id_array);
   return $id_array;
}
function hent_stoerrelser(){
   $id_array=get_alle_stoerrelser();
   // print_r($id_array);
   return $id_array;
}
function hent_alle_grupper(){
   $id_array=get_grupper();
   // print_r($id_array);
   return $id_array;
}
function hent_vare(){
   $id_array=get_vare();
   // print_r($id_array);
   return $id_array;
}

function hent_billede(){
   $id_array=get_billede();
   // print_r($id_array);
   return $id_array;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

