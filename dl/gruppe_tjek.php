<?php 

require '../dl/varer.php';

function get_gruppe_med_overgruppe($gruppe_id){
    require 'login.php';
      
  
    $sql = "SELECT `id_varegruppe` FROM `gruppe` WHERE `overgruppe` = $gruppe_id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}