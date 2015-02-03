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
    $id_per_side_slut = antal_vare_per_sider();
    
    
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


function get_number_of_pages ($gruppe_nr){

    require 'login.php';
    
    $sql = "SELECT  id_vare 
    FROM 
    `gruppe`  AS `gruppe` INNER JOIN 
    `vare_har_gruppe` AS X INNER JOIN 
    `vare`  AS V  
    ON `id_varegruppe` = X.`f_id_varegruppe` AND X.`f_id_vare` = V.`id_vare` 
    WHERE `id_varegruppe` = $gruppe_nr ";
        
    $result= mysqli_query($db_server, $sql);
    $row_cnt= mysqli_num_rows($result);
    $sider =ceil ($row_cnt/antal_vare_per_sider());
    
    
    mysqli_close($db_server);
     return $sider;
}

// Henter navn, beskrivelse , pris , billede, antal, størrelse og farve til en given variant
function get_variant ($variant_id){
    require 'login.php';
    
    $sql = "Select vare.`navn`, vare.`beskrivelse`, pris, billede, antal, stoerrelse.`stoerrelse`, varefarve.`id_varefarve`   
            FROM            
            `variant`
            INNER JOIN `vare`
            INNER JOIN `stoerrelse`
            INNER JOIN `varefarve`
            ON vare.`id_vare` = variant.`f_id_vare` AND stoerrelse.`id_stoerrelse`=variant.`f_id_stoerrelse` AND varefarve.`id_varefarve`= variant.`f_id_varefarve`
            WHERE `id_variant`= $variant_id ";
    
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
    
}




// Hent størrelser i given farve udfra et vare id
function get_stoerrelser($vare_id, $farve){
    require 'login.php';
    $sql = "SELECT stoerrelse.`stoerrelse` , variant.`id_variant`
            FROM            
            `vare`
            INNER JOIN `stoerrelse` 
            INNER JOIN `variant` 
            INNER JOIN `varefarve` 
            ON stoerrelse.`id_stoerrelse` = variant.`f_id_stoerrelse` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve`
            WHERE vare.`id_vare`= $vare_id AND varefarve.`id_varefarve`= $farve";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}

function get_vare_id($variant_id){
    require 'login.php';
    $sql = "SELECT vare.`id_vare`
            FROM            
            `vare`
            INNER JOIN `variant` 
            ON variant.`f_id_vare` = vare.`id_vare`
            WHERE variant.`id_variant`= $variant_id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}

function get_farver($vare_id, $farve_id){
    require 'login.php';
    $sql = "SELECT variant.`id_variant`, variant.`billede`
            FROM            
            `variant`
            INNER JOIN `vare` 
            ON variant.`f_id_vare` = vare.`id_vare`
            WHERE variant.`id_variant`= $variant_id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}


?>
