<?php
ob_start();
require_once 'login.php';
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
    
}

 if (isset($_GET['parameter'])){
     
         $parameter = $_GET['parameter'];
         $vaerdi= $_GET['vaerdi'];
         set_parametre($parameter, $vaerdi);
     }



function get_parametre($parameter){
    require 'login.php';
    
     $sql = "SELECT `parameter_vaerdi`
            FROM `parameter`
            WHERE parameter.`parameter`='$parameter'";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    mysqli_close($db_server);
    
    return $row;
    
    
}

function get_all_parametre(){
    require 'login.php';
    
     $sql = "SELECT `parameter`,`parameter_vaerdi`,`f_type_paramete`
            FROM `parameter`";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    mysqli_close($db_server);
    
    return $row; 
    
    
    
}
function set_parametre($parameter, $vaerdi){
    
    require 'login.php';
    
     $sql = "UPDATE parameter
            SET `parameter_vaerdi`='$vaerdi'
            WHERE parameter.`parameter`='$parameter'";
            
    $result= mysqli_query($db_server, $sql);       
    mysqli_close($db_server);
    
    header('Location:../vl/vis_parametre.php');
    
   
    
}

ob_flush(); ?>