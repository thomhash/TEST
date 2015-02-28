<?php
if ($_SESSION["logget_ind_kunde"] != "ja"){
$_SESSION["login_besked"] = "OBS: Denne side du prøver at tilgå kræver login";    
header("location:login_kunde.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

