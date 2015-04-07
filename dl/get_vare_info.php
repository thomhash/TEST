<?php 
// Lavet af Mikkel 
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
 
 function get_type_beskrivelser(){
    require 'login.php';
  
    $sql = "SELECT id_type_beskrivelse, type_tekst
            FROM `type_beskrivelse`";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
 }
 
  function get_type_tekst($f_type_beskrivelse_id){
    require 'login.php';
  
    $sql = "SELECT type_vaerdi
            FROM `type` WHERE f_type_beskrivelse_id ='$f_type_beskrivelse_id'";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
 }
 
   function get_type_tekst2($f_type_beskrivelse_id){
    require 'login.php';
  
    $sql = "SELECT id_type, type_vaerdi
            FROM `type` WHERE f_type_beskrivelse_id ='$f_type_beskrivelse_id'";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
 }
 
 
         
          function get_vare_navn_fra_vare_id($vare_id){
    require 'login.php';
  
    $sql = "SELECT navn
            FROM `vare` WHERE id_vare ='$vare_id'";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
 }
   function get_id_type_fra_variant($f_type_beskrivelse_id){
    require 'login.php';
  
    $sql = "SELECT id_type, type_vaerdi
            FROM `type` WHERE f_type_beskrivelse_id ='$f_type_beskrivelse_id'";
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
  
    $sql = "SELECT id_vare, navn, f_type_beskrivelse FROM `vare` ORDER BY navn";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

 function get_billede(){
    require 'login.php';
  
    $sql = "SELECT id_billede, url FROM `billede` ORDER BY url";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}



?>