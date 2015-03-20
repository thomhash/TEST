<?php
ob_start();
require '../dl/login_tjek.php';
require '../fl/set_bruger.php';
require_once 'tjek_mobile_browser.php';
$mail=$_GET["mail"];
$pass=$_GET["pass"];

$kode_db=login_kunde($mail);

if (empty($kode_db[0][0])){
   if(mobile_browser()==true){header('Location:../vl/frame_login_mobile.php?forkert_mail=' .$mail);
   ob_flush();}
    else {header('Location:../vl/frame_login.php?forkert_mail=' .$mail);
        ob_flush();}
}
else {
    if (password_verify($pass, $kode_db[0][0])) {
        set_bruger($mail);
        if(mobile_browser()==true){header('Location:../vl/frame_frontpage_mobile.php?');
        ob_flush();}
        else{header('Location:../vl/frame_kunde_menu.php?');
            ob_flush();}
    } else {
        if(mobile_browser()==true){header('Location:../vl/frame_login_mobile.php?forkert_kode=1');
        ob_flush();}
        else{header('Location:../vl/frame_login.php?forkert_kode=1');
            ob_flush();}
}}
?>
