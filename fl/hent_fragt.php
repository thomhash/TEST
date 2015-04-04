<?php

require '../dl/get_lager.php';
function hent_fragt(){
   $fragt=get_fragt();
   // print_r($id_array);
   return $fragt;
}