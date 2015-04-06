<?php 
// Lavet af Thomas
require '../fl/admin_fl.php';
$mails=  hent_nyhedsmails();
$keys = array_keys($mails);
$last_key = end($keys);

// Henter alle mails hvos nyhedsbrev er sat til 1. 
foreach ($mails as $key => $value) {
    
    echo $mails[$key][0];
  // Komma skal sættes efter den sidste mail, men efter alle de andre  
    if($last_key==$key){}
    else{echo ",";}
}

?>