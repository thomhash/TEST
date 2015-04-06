<?php
// Lavet af Mikkel 
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
?>

