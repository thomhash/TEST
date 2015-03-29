<?php ob_start();
session_start();
require '../fl/get_lager.php';

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
                header('Location:../vl/frame_indkoebskurv.php');
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
    header('Location:../vl/frame_indkoebskurv.php');
}

function tjek_lager($id_variant,$antal)
{    ob_start();
    $lager_for_id = hent_lager_id($id_variant)[0];
    echo "lager";
    echo $lager_for_id[0];
    echo $antal;
    if($lager_for_id[0] >= $antal+$_SESSION["kurv"][$id_variant]){
        $_SESSION["kurv"][$id_variant] = $antal+$_SESSION["kurv"][$id_variant];
        header('Location:../vl/frame_indkoebskurv.php');
        ob_flush();
    }
    else
    {
       echo "test";
        header('Location:../vl/frame_indkoebskurv.php?lager=nej');
        ob_flush();
    }
}
