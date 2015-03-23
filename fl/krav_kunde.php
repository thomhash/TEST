<?php
session_start(); 
if (isset($_SESSION["logget_ind"])){
        
if ($_SESSION["logget_ind_kunde"] != "ja"){
$_SESSION["login_besked"] = "OBS: Denne side du prøver at tilgå kræver login";    
header("location:frame_login.php");
}
}
else{
    header("location:frame_login.php");
}

