<?php

require '../dl/set_vare.php';
require '../dl/gruppe_tjek.php';

if (isset($_POST['vare_til_gruppe'])){
    $vare = $_POST['vare_til_gruppe'];
    $gruppe = $_POST['gruppe_til_vare'];
    forbind_grupper($vare, $gruppe);
}

function forbind_grupper($vare, $gruppe){

if (har_ikke_undergruppe($gruppe)==true)
{
    forbind_vare_med_gruppe($gruppe,$vare);
}
else
{
    echo "Det kan man ikke ";
}
}

function har_ikke_undergruppe($gruppeid){
   $ok=false;
   $id_array=get_gruppe_med_overgruppe($gruppeid);
   if (sizeof($id_array)>0)
   {
       $ok =false;
   }
   else
     $ok=true;
// print_r($id_array);
   return $ok;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

