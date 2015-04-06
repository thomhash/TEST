<?php
// Lavet af Mikkel 
function get_ordre_info_id($id){
    require 'login.php';
   
    $sql = "Select f_id_kunde, tid_afsendt, tid_bestilt, tid_begyndt, f_id_medarbejder from ordre where id_ordre = $id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
}