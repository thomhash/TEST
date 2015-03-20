<?php
session_start(); 
if (isset($_SESSION["logget_ind"])){
        
if ($_SESSION["logget_ind"] != "ja"){
$_SESSION["login_besked"] = "OBS: Denne side du prøver at tilgå kræver login";    
header("location:frame_login.php");
}
}
else{
    header("location:frame_login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

