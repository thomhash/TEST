<?php 
require '../dl/varer.php';

function get_maerker(){
    require 'login.php';
  
    $sql = "SELECT id_maerke, maerke
            FROM `maerke`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

?>