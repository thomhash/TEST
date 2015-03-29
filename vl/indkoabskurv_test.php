<?php

if(session_id() == '') {
    session_start();
}

$id = 4;
$id2 = 4;
$name = 'Navn';
$name2 = 'Navn2';
$quantity = 1;

if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}

$_SESSION['cart_items'][$id]=$name;
$_SESSION['cart_items'][$id2]=$name2;




print_r($_SESSION);

?>

