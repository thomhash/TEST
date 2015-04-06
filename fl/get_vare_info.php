<?php
// Lavet af Mikkel 
require '../dl/get_vare_info.php';
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

function hent_type_beskrivelser(){
   $id_array=get_type_beskrivelser();
   // print_r($id_array);
   return $id_array;
}

function hent_type_tekst($id){
   $id_array=get_type_tekst($id);
   // print_r($id_array);
   return $id_array;
}
function hent_type_tekst2($id){
   $id_array=get_type_tekst2($id);
   // print_r($id_array);
   return $id_array;
}

function hent_vare_navn_fra_id($id){
   $id_array=get_vare_navn_fra_vare_id($id);
   // print_r($id_array);
   return $id_array;
}

function hent_id_type_fra_variant($id){
   $id_array=get_id_type_fra_variant($id);
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