<?php
require '../dl/set_ordre.php';
require '../fl/get_dato.php';
ob_start();
if (isset($_POST['type_pak'])){
    if ($_POST['type_pak'] == "start"){
        start_ordre($_POST['ordre_id'],get_dato());
        header('Location:../vl/tjek_ordre.php?type=1');
        ob_flush();
    }
    if ($_POST['type_pak'] == "slut"){
        afslut_ordre($_POST['ordre_id'],get_dato());
        header('Location:../vl/tjek_ordre.php?type=2');
        ob_flush();
    }
 
}