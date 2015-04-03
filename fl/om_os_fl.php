<?php
function hent_virksomhedsinfo(){
require_once '../dl/get_virksomhed_dl.php';
$info=  get_virksomhed_dinformation();

return $info;}
?>