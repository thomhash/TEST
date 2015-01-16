<?php
echo "hej";
require_once 'login.php';
$db_server = new mysqli($db_hostname, $db_username, $db_password);
$db_server->connect($db_hostname, $db_username, $db_password, $db_database);


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
    echo "Forbindelsen er god";
}

// Info fra varevariant til visning af katalog
//$pris = $db_server->query("SELECT `id_vare` FROM `vare` order by 'prioritet' limit 5")->fetch_object()->id_vare;

$result = $db_server->query("SELECT id_vare FROM vare order by prioritet limit 5");
for ($prio_array = array (); $row = $result->fetch_assoc(); $prio_array[] = $row);
print_r($prio_array);




/*
if($navn) {
	while($row = mysqli_fetch_assoc($navn)) {
		echo $row['txt'] . '<br>';	
	}
}*/

// Til variant
/*$pris = $db_server->query("SELECT `pris` FROM `variant` where idvare = 1")->fetch_object()->pris;
echo " $pris";*/






echo "hej";



?>
