<?php
echo "hej";
require_once 'login.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);

if(!$db_server) die("Unable to connect to MySQO: " .  mysql_error());
else{
    echo "Forbindelsen er god";
}


?>
