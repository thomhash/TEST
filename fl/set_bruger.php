<?php

// Lavet af Mikkel 
//Sætter de nødvendige informationer om kunden efter login
require '../dl/get_kunde.php';
if (session_id() == '') {
    session_start();
}

function set_bruger($mail) {
    $id_kunde = get_kunde_id_fra_mail($mail);
    $kurv = get_kurv_fra_id($id_kunde);
    $rn = 0;
    
    foreach ($kurv as $id) {
        $_SESSION["kurv"][$kurv[$rn][0]] = $kurv[$rn][1];
        $rn++;
    }
    $_SESSION["logget_ind_kunde"] = "ja";
    $_SESSION["bruger_id"] = $id_kunde;
}

?>