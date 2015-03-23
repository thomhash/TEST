<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
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


