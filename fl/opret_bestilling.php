<?php
require '../dl/opret_ordre.php';
require '../dl/get_kunde.php';
require '../dl/get_lager.php';
require '../dl/get_vare.php';
session_start();

function opret_ordre(){
  $mail =$_GET["email"]; 
  
  
  $id_ordre = opret_ordre_d($mail);
  $vare = $_SESSION["kurv"]; 
  
  foreach($vare as $id=>$antal){
      if ($antal>0){
         
      $pris = get_pris_fra_variant_id($id)[0];
      
      opret_ordre_har_vare($id_ordre,$antal,$id,$pris[0]);
      
      }
     }
   
    $kundeinfo = get_kunde_info_id($mail);
    echo $kundeinfo[0][1];
    print_r($kundeinfo);
   
    

    opret_faktura($id_ordre,$kundeinfo[0][0],$kundeinfo[0][1],$kundeinfo[0][2],$kundeinfo[0][3],$kundeinfo[0][4],$kundeinfo[0][5]);   
 
      
     // skal bruges -->     header('Location:../vl/kassen_trin_4.php');
     
 }
 
 if (tjek_lager() == true)
 {
     opret_ordre();
     header('Location:../vl/kassen_trin_4.php');
 }
 else 
 {
     header('Location:../vl/kassen_trin_3.php?');
 }

 function tjek_lager()
 {
     $ok = true;
     foreach($vare as $id=>$antal){
     $lager=get_lager_variant($id);
     if ($lager<$antal)
     {
        $ok = false;
     }
     }
   
     return $ok;
 }