<?php
// Lavet af Thomas
require_once 'login.php';

function get_soeg($tekst, $sidetal){
$id_per_side_start=0;
$id_antal = 4; 

if($sidetal>1){        
        $id_per_side_start = ($sidetal-1) * 4;
    }
    
 require 'login.php';
    $sql = "SELECT `id_vare` 
            FROM `vare`
            WHERE `navn` LIKE '%$tekst%' AND `aktiv`=1 
            LIMIT $id_per_side_start, $id_antal" ;
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $ids= array_column($row,0);    
     mysqli_close($db_server);
     
     return $ids;

}

function get_soeg_variant($vare_id){


 require 'login.php';
    $sql = "SELECT variant.`id_variant`, vare.`navn` , variant.`pris` , billede.`url` 
            FROM `variant` 
            INNER JOIN `vare` 
            INNER JOIN `billede`  
            ON vare.`id_vare` = variant.`f_id_vare` AND variant.`f_id_billede`=billede.`id_billede` 
            WHERE vare.`id_vare`=$vare_id AND variant.`aktiv`=1 AND `vis`=1
            Limit 0,1" ;
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;

}

function get_soeg_side_antal($tekst){


 require 'login.php';
    $sql = "SELECT `id_vare` 
            FROM `vare`
            WHERE `navn` LIKE '%$tekst%' AND `aktiv`=1";
            
    
    $result= mysqli_query($db_server, $sql); 
    mysqli_close($db_server);
     return $result;

}
?>