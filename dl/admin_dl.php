<?php

function get_nyheds_mails(){
 require 'login.php';
 
 
    $sql = "SELECT `email` 
            FROM `kunde`
            WHERE `nyhed`=1";
            
    
    $result= mysqli_query($db_server, $sql); 
    $row= mysqli_fetch_all($result);
    mysqli_close($db_server);
     return $row;

}




?>
