<?php

function get_over_grupper(){
require 'login.php';

 $sql = "SELECT `id_varegruppe`, `gruppe`
            FROM `gruppe`
            WHERE `overgruppe` is null
            ORDER BY `gruppe`";
    
    $result= mysqli_query($db_server, $sql);       
    $hovede_grupper= mysqli_fetch_all($result);
   
     mysqli_close($db_server);
     
     return$hovede_grupper;
    
}


function get_undergrupper(){
    require 'login.php';

 $sql = "SELECT `id_varegruppe`, `gruppe`, `overgruppe`
            FROM `gruppe`
            WHERE `overgruppe` is not null
            ORDER BY `gruppe`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
    
}
?>

