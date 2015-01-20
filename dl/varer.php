<?php

require_once 'login.php';
//$db_server = new mysqli($db_hostname, $db_username, $db_password);
//$db_server->connect($db_hostname, $db_username, $db_password, $db_database);
//mysqli_close($db_server);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
    //echo "Forbindelsen er god";
}







//Hent vareid's udfra gruppeid og hvilken side man er på (array)
function get_vareid ($gruppe_nr, $sidetal){

    require 'login.php';
    $db_server = new mysqli($db_hostname, $db_username, $db_password);
    $db_server->connect($db_hostname, $db_username, $db_password, $db_database);
    $id_per_side_start=0;
    $id_per_side_slut = (($sidetal*12)-1);
    
    if($sidetal>1){        
        $id_per_side_start = ($sidetal-1) * 12;
    }    

    $sql = "SELECT  id_vare 
    FROM 
    `gruppe`  AS `gruppe` INNER JOIN 
    `vare_har_gruppe` AS X INNER JOIN 
    `vare`  AS V  
    ON `id_varegruppe` = X.`gruppe_idvaregruppe` AND X.`vare_idvare` = V.`id_vare` 
    WHERE `id_varegruppe` = $gruppe_nr ORDER BY `Prioritet` LIMIT $id_per_side_start , $id_per_side_slut ";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $ids= array_column($row,0);
     mysqli_close($db_server);
     return $ids;
}






// Hent oplysninger til katalog i variant, ud fra vare-id (kun vis=1)
function get_info_catalog ($vare_id){
    require 'login.php';
    $db_server = new mysqli($db_hostname, $db_username, $db_password);
    $db_server->connect($db_hostname, $db_username, $db_password, $db_database);
    
    $sql = "SELECT navn , variant.`pris` , variant.`billede`, variant.`idvare`
            FROM `vare` 
            INNER JOIN `variant` 
            ON vare.`id_vare` = variant.`fidvare`
            WHERE `id_vare` = $vare_id AND variant.`vis`=1";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
    
}
// Dette er go kode
/*
$result = $db_server->query("SELECT id_vare FROM vare order by prioritet limit 5");
for ($prio_array = array (); $row = $result->fetch_assoc(); $prio_array[] = $row);
print_r($prio_array);*/




/*
if($navn) {
	while($row = mysqli_fetch_assoc($navn)) {
		echo $row['txt'] . '<br>';	
	}
}*/

// Til variant
/*$pris = $db_server->query("SELECT `pris` FROM `variant` where idvare = 1")->fetch_object()->pris;
echo " $pris";*/










?>
