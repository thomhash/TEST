<?php
if(session_id() == '') {
    session_start();
}
require '../dl/opret_ordre.php';
require '../dl/get_kunde.php';
require '../dl/get_lager.php';
require '../dl/ret_lager.php';
require '../dl/get_vare.php';
require '../dl/get_bestillinger.php';
require '../dl/get_virksomhed_dl.php';
//require '../vl/send_faktura.php';
require '../PHPMailer-master/send_mail.php';
ob_start();
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
 
    send_mail_f("Faktura", email_tekst($kundeinfo,$id_ordre), $kundeinfo[0][6], $kundeinfo[0][0]);  
     header('Location:../vl/kassen_trin_4.php');
     ob_flush();
 }
 
 if (tjek_lager($vare) == true)
 {
     opret_ordre();
     kurv_tom();
     header('Location:../vl/kassen_trin_4.php');
     ob_flush();
 }
 else 
 {
     header('Location:../vl/kassen_trin_3.php?');
     ob_flush();
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

 function email_tekst($kundeinfo,$id_ordre){
    $vare = get_vareinformation_fra_ordre_id($id_ordre);
    $virksomhed = get_virksomhed_dinformation();

     $tekst = "Kære " .$kundeinfo[0][0]. " " .$kundeinfo[0][1]."<br> Tak for din bestilling. "
             . "Varen bliver sendt hurtigst muligt.<br><br>"
    . "Til: <br>"  
    .$kundeinfo[0][0].
   " "
   .$kundeinfo[0][1].
    "<br>"
    .$kundeinfo[0][2].
    "<br>"
        .$kundeinfo[0][3].
    "<br>"
    .$kundeinfo[0][4].
    "<br><br>Du har bestilt følgende vare:"
    . "<br>";
    foreach ($vare as $key => $value) {
         $tekst.="<br>".$vare[$key][1]." stk. ".$vare[$key][2]."  ".$vare[$key][3]." Pris:".$vare[$key][6]. " kr.";
         
        }
    $tekst.="<br><br> Med venlig hilsen " .$virksomhed[0][1];    
     return $tekst;
 }
