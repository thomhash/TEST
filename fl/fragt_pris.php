<?php


require '../dl/get_virksomhed_dl.php';

function hent_fragtpris($total){
    $fragt_pris = 0;
   $id_array=get_virksomhed_dinformation()[0];
     
   if($id_array[8]<=$total){
       $fragt_pris = 0;
   }
    else if ($total == 0){
       $fragt_pris = 0;
   }
   else
   {
       $fragt_pris = $id_array[7];
   }
   
   return $fragt_pris;
}

function hent_gratis_fragtpris(){
    $fragt_pris = 0;
   $id_array=get_virksomhed_dinformation()[0];
  
   return $id_array[8];
}
function hent_alm_fragtpris(){
    $fragt_pris = 0;
   $id_array=get_virksomhed_dinformation()[0];
  
   return $id_array[7];
}