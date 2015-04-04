<?php

function get_ordre_ikke_begyndt(){
    require 'login.php';
        
    $sql = "SELECT * FROM ordre WHERE tid_begyndt IS NULL";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
     
    mysqli_close($db_server);
    return $row;
  }


function get_ordre_begyndt(){
    require 'login.php';
        
    $sql = "SELECT * FROM ordre WHERE tid_begyndt IS NOT NULL AND tid_afsendt IS NULL";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
     
    mysqli_close($db_server);
    return $row;
     
}
function get_ordre_slut(){
    require 'login.php';
        
    $sql = "SELECT * FROM ordre WHERE tid_afsendt IS NOT NULL";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
     
    mysqli_close($db_server);
    return $row;
     
}

function get_vareinformation_fra_ordre_id($id){
    require 'login.php';
      
  
    $sql = "SELECT variant.id_variant, ordre_har_vare.antal, vare.navn, type.`type_vaerdi` , varefarve.`varefarve`, maerke.maerke_navn, ordre_har_vare.pris FROM `variant` INNER JOIN `type` INNER JOIN `vare` INNER JOIN `ordre_har_vare` INNER JOIN `varefarve` INNER JOIN `maerke` ON type.`id_type` = variant.`f_id_type` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve` AND vare.f_id_maerke=maerke.id_maerke AND ordre_har_vare.`f_id_variant`= variant.`id_variant` WHERE ordre_har_vare.f_id_ordre ='$id'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_faktura_fra_ordre_id($id){
    require 'login.php';
      
  
    $sql = "SELECT * FROM faktura where f_id_ordre_f ='$id'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_ordre_fra_ordre_id($id){
    require 'login.php';
      
  
    $sql = "SELECT * FROM ordre where f_id_kunde ='$id'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_kunde_fra_ordre_id($id){
    require 'login.php';
      
  
    $sql = "SELECT f_id_kunde FROM ordre where id_ordre ='$id'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_vareinformation_fra_ordre_id_enkelt($id){
    require 'login.php';
      
    $sql = "SELECT variant.id_variant, ordre_har_vare.antal, vare.navn, type.`type_vaerdi` , varefarve.`varefarve`, maerke.maerke_navn FROM `variant` INNER JOIN `type` INNER JOIN `vare` INNER JOIN `ordre_har_vare` INNER JOIN `varefarve` INNER JOIN `maerke` ON type.`id_type` = variant.`f_id_type` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve` AND vare.f_id_maerke=maerke.id_maerke AND ordre_har_vare.`f_id_variant`= variant.`id_variant` WHERE ordre_har_vare.f_id_ordre ='$id'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}
function get_ordre_fra_kunde_id($id){
    require 'login.php';
        
    $sql = "SELECT * FROM ordre where f_id_kunde ='$id'";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_ordre_info_id($id){
    require 'login.php';
   
    $sql = "Select f_id_kunde, tid_afsendt, tid_bestilt, tid_begyndt, f_id_medarbejder from ordre where id_ordre = $id";
    
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

