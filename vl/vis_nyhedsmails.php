<?php
require '../fl/admin_fl.php';
$mails=  hent_nyhedsmails();
$keys = array_keys($mails);
$last_key = end($keys);

foreach ($mails as $key => $value) {
    
    echo $mails[$key][0];
    if($last_key==$key){}
    else{echo ",";}
}

?>


