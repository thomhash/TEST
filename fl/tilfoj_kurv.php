<?php
session_start();

$vare_id = $_POST['variant_id']; 
$vare_antal_tilfoj = $_POST['variant_antal']; 
if (isset($_POST['slet_vare'])){
    $_SESSION["kurv"][$vare_id] = 0;
};
$vare_antal_nu = 0;
if(isset($_SESSION['kurv'][$vare_id])){
    $vare_antal_nu = $_SESSION["kurv"][$vare_id];
}

$_SESSION["kurv"][$vare_id] = $vare_antal_tilfoj+$vare_antal_nu;

$antal_vare=0;

$antal_vare_2 = array_sum($_SESSION["kurv"]); 

foreach($_SESSION["kurv"] as $id=>$value){
    $antal_vare += $value;
    }

 
echo "Antal vare i kurven:"; 
 echo $antal_vare_2;  

print_r($_SESSION["kurv"]);

/* 
foreach($_SESSION as $key => $value) {
    echo  'Current session variable' . $key . ' is: ' . $value . '<br />';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

