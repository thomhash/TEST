<?php
require '../dl/opret_kunde_dl.php';
require '../dl/get_kunde.php';

if (isset($_GET['kode'])){
$mail = $_GET['mail'];
$kode = $_GET['kode'];
$kunde = get_kunde_nyhed_id($mail, $kode/2);

if (empty($kunde ))
{
  ?><h1> OBS: Fejl</h1><?php
}
else
{
   set_nyhedsmail_kunde($mail,1);
   ?><h1> Du er nu tilmeldt nyhedsbrevet</h1> <?php
}
}
else if (isset($_GET['tilmeld'])){
    if($_GET['tilmeld']=="0"){
    ?><h1> Du er nu tilmeldt nyhedsbrevet</h1> <?php
    
    }
 else {
        ?><h1> Du er allerede tilmeldt nyhedsbrevet</h1> <?php
    }
}