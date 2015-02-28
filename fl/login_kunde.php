<?php
require '../dl/login_tjek.php';
session_start();

$brugernavn = $_POST['brugernavn'];
$kode = $_POST['kode'];
$tjek = login_tjek_kunde($brugernavn,$kode);

if ($tjek == 0)
{
    //echo "Du er ikke logget ind";
    $_SESSION["logget_ind_kunde"] = "nej";
    $_SESSION["login_besked"] = "Forkert brugernavn eller kode";
    header("location:../vl/s_login.php");
    
    
}
else{
    //echo "TILLYKKE! du er ikke logget ind";
    
    $_SESSION["logget_ind_kunde"] = "ja";
    header("location:../vl/vis_maerker.php");
    
}
echo $tjek;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

