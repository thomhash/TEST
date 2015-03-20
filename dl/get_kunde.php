<?php

function get_kunde_info_id($id){
    require 'login.php';
   
    $sql = "Select fornavn, efternavn, adresse, post_nr, bynavn, telefonnummer, email from kunde where id_kunde = $id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_kunde_id_fra_mail($email){
    require 'login.php';
   
    $sql = "SELECT id_kunde FROM `kunde` WHERE email = '$email'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
     
}

function get_kurv_fra_id($id){
    require 'login.php';
   
    $sql = "SELECT f_id_variant, antal FROM `kurv` WHERE f_id_kunde = '$id'";
    
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

