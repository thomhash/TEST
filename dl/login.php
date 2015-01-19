<?php
$db_hostname = 'localhost';
$db_database = 'webshop';
$db_username = 'root';
$db_password = '';

$db_server = new mysqli($db_hostname, $db_username, $db_password);
$db_server->connect($db_hostname, $db_username, $db_password, $db_database);



?>

