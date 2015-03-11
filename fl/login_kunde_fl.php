<?php
ob_start();
require '../dl/login_tjek.php';
$mail=$_GET["mail"];
$pass=$_GET["pass"];

$kode_db=login_kunde($mail);

if (empty($kode_db[0][0])){
   header('Location:..\vl\frame_login.php?forkert_mail=' .$mail);
   ob_flush();
}
else {
    if (password_verify($pass, $kode_db[0][0])) {
        header('Location:..\vl\frame_frontpage.php?');
        ob_flush();
    } else {
        header('Location:..\vl\frame_login.php?forkert_kode=1');
        ob_flush();
}}
?>
