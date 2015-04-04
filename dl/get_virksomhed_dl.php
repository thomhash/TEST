<?php

function get_virksomhed_dinformation(){
    require 'login.php';
     
    $sql = "SELECT * FROM `virksomhed` WHERE id_virksomhed = 1";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}