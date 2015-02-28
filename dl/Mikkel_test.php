<?php 
require '../dl/varer.php';

function get_maerker(){
    require 'login.php';
      
  
    $sql = "SELECT id_maerke, maerke_navn
            FROM `maerke`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_alle_stoerrelser(){
    require 'login.php';
  
    $sql = "SELECT id_stoerrelse, stoerrelse_beskrivelse
            FROM `stoerrelse`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
    mysqli_close($db_server);
    return $row;
     
}

function get_varefarve(){
    require 'login.php';
  
    $sql = "SELECT id_varefarve, varefarve
            FROM `varefarve`";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
 }
 
 function get_grupper(){
    require 'login.php';
  
    $sql = "SELECT id_varegruppe, gruppe, overgruppe
            FROM `gruppe`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_grupper_til_vare(){
    require 'login.php';
  
    $sql = "SELECT id_varegruppe, gruppe, overgruppe
            FROM `gruppe`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

 function get_vare(){
    require 'login.php';
  
    $sql = "SELECT id_vare, navn
            FROM `vare`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

 function get_billede(){
    require 'login.php';
  
    $sql = "SELECT id_billede, url
            FROM `billede`";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}



?>