<?php

function get_kunde_id_d($id){
    require 'login.php';
      
  
    $sql = "Select id_kunde from kunde where kunde_id.kunde =$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

