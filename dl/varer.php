<?php

require_once 'login.php';
require_once '..\parametre.php';
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
    $id_per_side_start=0;
    $id_per_side_slut = (($sidetal* \antal_vare_per_sider()));
    
    
    if($sidetal>1){        
        $id_per_side_start = ($sidetal-1) * \antal_vare_per_sider();
        
    }    

    $sql = "SELECT  id_vare 
    FROM 
    `gruppe`  AS `gruppe` INNER JOIN 
    `vare_har_gruppe` AS X INNER JOIN 
    `vare`  AS V  
    ON `id_varegruppe` = X.`f_id_varegruppe` AND X.`f_id_vare` = V.`id_vare` 
    WHERE `id_varegruppe` = $gruppe_nr ORDER BY `prioritet` LIMIT $id_per_side_start , $id_per_side_slut ";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $ids= array_column($row,0);
     mysqli_close($db_server);
     return $ids;
}


// Hent oplysninger til katalog i variant, ud fra vare-id (kun vis=1)
function get_info_catalog ($vare_id){
    require 'login.php';
    
    $sql = "SELECT navn , variant.`pris` , variant.`billede`, variant.`id_variant`
            FROM `vare` 
            INNER JOIN `variant` 
            ON vare.`id_vare` = variant.`f_id_vare`
            WHERE `id_vare` = $vare_id AND variant.`vis`=1";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
    
}


?>
