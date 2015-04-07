<?php ob_start();
if(session_id() == '') {
    session_start();
}
// Lavet af Mikkel 

require '../fl/get_lager.php';
require '../dl/kurv.php';
require_once 'tjek_mobile_browser.php';

$vare_antal_nu =0;
if (isset($_POST['variant_id'])){
    $vare_id = $_POST['variant_id'];
}
if (isset($_GET['variant_id'])){
    $vare_id = $_GET['variant_id'];
}

if (isset($_POST['rediger_fra'])){
    if (($_POST['rediger_fra']) == "enkelt_vare")
    {
        tjek_lager($vare_id,$_POST['rediger']);
    }
    else if (($_POST['rediger_fra']) === "kurv")
    {
        if (($_POST['rediger'])=="slet")
        {
            slet($_GET['variant_id']);
        }
        else{
            echo "kommer her ind";  
            $tilfoj =($_POST['rediger']);
            if($tilfoj<0){
                $_SESSION["kurv"][$vare_id] = $tilfoj+$_SESSION["kurv"][$vare_id];
                gem_kurv();
                if(mobile_browser()){
                    header('Location:../vl/frame_indkoebskurv_mobile.php');
                ob_flush();
                }
                else {
                header('Location:../vl/frame_indkoebskurv.php');
                ob_flush();
                }
            }
            else if ($tilfoj>0)
            {
                
                tjek_lager($vare_id,$tilfoj+$vare_antal_nu);
            }
        }
    }
}

function slet($id){
    echo "sletter";
    $_SESSION["kurv"][$id] = 0;
    gem_kurv();
    if(mobile_browser()){ 
        header('Location:../vl/frame_indkoebskurv_mobile.php');
        ob_flush();
    }
    else {header('Location:../vl/frame_indkoebskurv.php');
    ob_flush();
    }
}

function tjek_lager($id_variant,$antal)
{    ob_start();
    $lager_for_id = hent_lager_id($id_variant)[0];
    echo "lager";
    echo $lager_for_id[0];
    echo $antal;
    if($lager_for_id[0] >= $antal+$_SESSION["kurv"][$id_variant]){
        $_SESSION["kurv"][$id_variant] = $antal+$_SESSION["kurv"][$id_variant];
        gem_kurv();
        if(mobile_browser()){
           header('Location:../vl/frame_indkoebskurv_mobile.php');
        ob_flush(); 
            
        }
        else{
        header('Location:../vl/frame_indkoebskurv.php');
        ob_flush();
        
        }
    }
    else
    {   if(mobile_browser()){
        header('Location:../vl/frame_indkoebskurv_mobile.php?lager=nej');
        ob_flush();
        
    }
        else{
        header('Location:../vl/frame_indkoebskurv.php?lager=nej');
        ob_flush();
        
        }
    }
}


function gem_kurv(){
    echo "test2";
    if(isset($_SESSION["bruger_id"])){
        
       $vare = $_SESSION["kurv"];
       $id_kunde = $_SESSION["bruger_id"];
       slet_kurv_kunde_dl($id_kunde);
        foreach($vare as $id=>$antal){
            echo "DEN VIL GEMME KRV ";
            
        if ($antal>0){
          fyld_kurv_dl($id, $id_kunde, $antal);   
           
      }
   
     }
   
    }
}