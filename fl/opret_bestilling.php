<?php
require '../dl/opret_ordre.php';
require '../dl/get_kunde.php';
require '../dl/get_lager.php';
require '../dl/ret_lager.php';
require '../dl/get_vare.php';
//require '../vl/send_faktura.php';
require '../PHPMailer_5.2.4/send_mail.php';
session_start();
$vare = $_SESSION["kurv"]; 


function opret_ordre(){
  $mail =$_GET["email"]; 
  
  
  $id_ordre = opret_ordre_d($mail,date("Y m d H:i"));
  $vare = $_SESSION["kurv"]; 
  
  foreach($vare as $id=>$antal){
      if ($antal>0){
         
      $pris = get_pris_fra_variant_id($id)[0];
      
      opret_ordre_har_vare($id_ordre,$antal,$id,$pris[0]);
      ret_lager(-$antal,$id);
      
      
      }
      kurv_tom();
     }
   
    $kundeinfo = get_kunde_info_id($mail);
    echo $kundeinfo[0][1];
    print_r($kundeinfo);
   
    

    opret_faktura($id_ordre,$kundeinfo[0][0],$kundeinfo[0][1],$kundeinfo[0][2],$kundeinfo[0][3],$kundeinfo[0][4],$kundeinfo[0][5],date("Y m d H:i"));   
 
    send_mail_f("Faktura", email_tekst($kundeinfo), $kundeinfo[0][6], $kundeinfo[0][0]);  
     // skal bruges -->     header('Location:../vl/kassen_trin_4.php');
     
 }
 
 if (tjek_lager($vare) == true)
 {
     opret_ordre();
     kurv_tom();
   // header('Location:../vl/kassen_trin_4.php');
 }
 else 
 {
     header('Location:../vl/kassen_trin_3.php?');
 }

 function tjek_lager($vare)
 {
     $ok = true;
     $test;
        
     foreach($vare as $id=>$antal){
     $lager=get_lager_variant($id);
     echo "lager"+print_r($lager)+"id:"+print_r($id)+"antal:"+print_r($antal);
     if ($lager<$antal)
     {
        $test[$id] = false;
     }
     else{
     $test[$id] = true;
             
     }
     echo "test:";
     print_r($test);
     }
   
     return $test;
 }
 
 function ret_lager($antal,$id){
     
   $antal_nu = get_lager_variant($id);
   $ny_lager = $antal+$antal_nu[0][0];
   edit_lager($ny_lager,$id);
 }
 function kurv_tom(){
     unset($_SESSION["kurv"]);
   
 }

 function email_tekst($kundeinfo){
     
     $tekst = "Kære " .$kundeinfo[0][0]. "<br> Tak for din bestilling. Varen bliver sendt hurtigst muligt.<br>";
     
     return $tekst;
 }