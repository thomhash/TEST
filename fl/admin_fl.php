<?php
function hent_nyhedsmails(){
require '../dl/admin_dl.php';

$mails=  get_nyheds_mails();

return $mails;
}

?>
