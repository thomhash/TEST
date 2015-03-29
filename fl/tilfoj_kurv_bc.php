<?php ob_start();
if(session_id() == '') {
    session_start();
}
require '../fl/get_lager.php';
require_once 'tjek_mobile_browser.php';

$vare_antal_nu =0;

if (isset($_POST['variant_id'])){
    $vare_id = $_POST['variant_id']; 
   
}

if (isset($_POST['variant_antal'])){
    $vare_antal_tilfoj = $_POST['variant_antal']; 
  
}

if (isset($_POST['rediger'])){
  $antal_tilfoj = $_POST['rediger'];
    
}


if(isset($_SESSION['kurv'][$vare_id])){
    $vare_antal_nu = $_SESSION["kurv"][$vare_id];
 }
 
tjek_lager($vare_id,$vare_antal_tilfoj+$vare_antal_nu);

function tjek_lager($id_variant,$antal)
{    ob_start();
    $lager_for_id = hent_lager_id($id_variant)[0];
    echo "lager";
    echo $lager_for_id[0];
    if($lager_for_id[0] >= $antal){
        $_SESSION["kurv"][$id_variant] = $antal;
        if(mobile_browser()==true){header('Location:../vl/frame_indkoebskurv_mobile.php');
        ob_flush();
        }
        else{header('Location:../vl/frame_indkoebskurv.php');
        ob_flush();
        }
    }
    else
    {
      
       if(mobile_browser()==true){header('Location:../vl/frame_indkoebskurv_mobile.php?lager=nej');
       ob_flush();
       } 
       else {header('Location:../vl/frame_indkoebskurv.php?lager=nej'); 
       ob_flush();
       }
        
        ?> 



<?php
    }
}





$antal_vare=0;

$antal_vare_2 = array_sum($_SESSION["kurv"]); 

foreach($_SESSION["kurv"] as $id=>$value){
    $antal_vare += $value;
    }

 
echo "Antal vare i kurven:"; 
 echo $antal_vare_2;  

print_r($_SESSION["kurv"]);

 if ($_POST['rediger']=="Slet"){
    $_SESSION["kurv"][$vare_id] = 0;
    
    }


// header('Location:../vl/frame_indkoebskurv.php');
ob_flush();
die();
//session_destroy();
/* 
foreach($_SESSION as $key => $value) {
    echo  'Current session variable' . $key . ' is: ' . $value . '<br />';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

