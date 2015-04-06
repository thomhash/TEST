<?php
require '../dl/opret_kunde_dl.php';
require '../PHPMailer-master/send_mail.php';
ob_start();
$mail = $_GET['email'];
$nyhed = $_GET['nyhed'];

$bruger = check_kunde_mail_nyhed($mail);
if (empty($bruger))
{
    $id = opret_nyhed($mail,0);
    $kode = $id*2;
    send_email("Nyhedsmail", email_tekst($mail,$kode), $mail, "Kunde"); 
    header('Location:../vl/tilmelding_nyhedsbrev.php');
    ob_flush();
}
else
{   
    if ($bruger[0][1]==0){
        
    set_nyhedsmail_kunde($mail,1);
    
    header('Location:../vl/nyhedsmail.php?tilmeld=0');
    ob_flush();
    echo "Er nu tilmeldt nyhedsbrev";
    
    }
    else{
    header('Location:../vl/nyhedsmail.php?tilmeld=1');
    ob_flush();
    }
}

function email_tekst($mail,$kode)
{
    $tekst = "Kære Kunde <br><br> Tak fordi at du har tilmeldt dig vores nyhedbrev. <br><br> For at bekræfte din tilmelding tryk på dette link: <a href=www.webshopgenerator.dk/vl/nyhedsmail.php?mail=$mail&kode=$kode> Aktiver nyhedsbrev  </a> <br>Venlig hilsen webshopgenerator<br> ";
    return $tekst;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

