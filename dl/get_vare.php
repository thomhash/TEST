<?php



function get_varebeskrivelse_d($id){
    require 'login.php';
      
  
    $sql = "Select vare.beskrivelse from vare inner join variant On variant.f_id_vare = vare.id_vare where variant.id_variant =$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_vareid_fra_variant_d($id){
    require 'login.php';
       
    $sql = "Select vare.id_vare from vare inner join variant On variant.f_id_vare = vare.id_vare where variant.id_variant =$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
}

function get_vare_beskrivelse_vare_d($id){
    require 'login.php';
      
  
    $sql = "SELECT vare.beskrivelse FROM `vare` WHERE id_vare=$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_overgruppe_d($id){
    require 'login.php';
      
  // 
    $sql = "SELECT gruppe.overgruppe FROM `gruppe` WHERE overgruppe=$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_vare_navn_d($id){
    require 'login.php';
      
  // 
    $sql = "SElect vare.navn FROM vare WHERE id_vare=$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}
function get_vare_prioritet_d($id){
    require 'login.php';

    $sql = "SElect vare.prioritet FROM vare WHERE id_vare=$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
}

function get_vare_info_kurv_d($id){
    require 'login.php';

    $sql = "SELECT variant.id_variant, vare.navn, varefarve.`varefarve`, maerke.maerke_navn, variant.pris, billede.`url`, stoerrelse.`stoerrelse_beskrivelse` FROM `variant` INNER JOIN `stoerrelse` INNER JOIN `vare` INNER JOIN `varefarve` INNER JOIN `maerke` INNER JOIN `billede` ON stoerrelse.`id_stoerrelse` = variant.`f_id_stoerrelse` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve` AND vare.f_id_maerke=maerke.id_maerke AND billede.id_billede=variant.f_id_billede Where variant.id_variant =$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
}
function get_vare_info_d($id){
    require 'login.php';

    $sql = "SELECT variant.id_variant, vare.navn, stoerrelse.`stoerrelse_beskrivelse` , varefarve.`varefarve`, maerke.maerke_navn, variant.pris, variant.antal, variant.`vis` FROM `variant` INNER JOIN `stoerrelse` INNER JOIN `vare` INNER JOIN `varefarve` INNER JOIN `maerke` ON stoerrelse.`id_stoerrelse` = variant.`f_id_stoerrelse` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve` AND vare.f_id_maerke=maerke.id_maerke Where variant.id_variant =$id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
}

function get_id_vare_fra_variant($id){
    require 'login.php';

    $sql = "SELECT variant.f_id_vare FROM `variant` Where variant.id_variant =$id";
    
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

