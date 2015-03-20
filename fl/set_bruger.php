<?php
require '../dl/get_kunde.php';
//require '../fl/get_kunde.php';
//require '../dl/get_kurv.php';
session_start();


function set_bruger($mail)
{
    
    $id_kunde = get_kunde_id_fra_mail($mail)[0];
    
    $kurv = get_kurv_fra_id($id_kunde[0]);
    print_r($kurv);
    $rn = 0;
    foreach ($kurv as $id) {
        $_SESSION["kurv"][$kurv[$rn][0]] = $kurv[$rn][1];
        $rn++; 
}
 
   $_SESSION["logget_ind"] = "ja";
   $_SESSION["bruger_id"] = $id_kunde; 
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

