<?php
require '../dl/set_ordre.php';
require '../fl/get_dato.php';
if (isset($_POST['type_pak'])){
    if ($_POST['type_pak'] == "start"){
        start_ordre($_POST['ordre_id'],get_dato());
        header('Location:../vl/tjek_ordre.php?type=1');
    }
    if ($_POST['type_pak'] == "slut"){
        afslut_ordre($_POST['ordre_id'],get_dato());
        header('Location:../vl/tjek_ordre.php?type=2');
    }
 
}