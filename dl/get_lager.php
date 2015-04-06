<?php
// Lavet af Mikkel 
require '../dl/varer.php';
function get_lager(){
    
    
    require 'login.php';

    $sql = "SELECT variant.id_variant, vare.navn, type.`type_vaerdi` , varefarve.`varefarve`, maerke.maerke_navn, variant.pris, variant.antal FROM `variant` INNER JOIN `type` INNER JOIN `vare` INNER JOIN `varefarve` INNER JOIN `maerke` ON type.`id_type` = variant.`f_id_type` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve` AND vare.f_id_maerke=maerke.id_maerke ORDER BY `vare`.`navn` ASC";
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);

    mysqli_close($db_server);
    return $row;
 }
 
 function get_lager_variant($id){
    
    
    require 'login.php';

    $sql = "SELECT variant.antal FROM `variant` WHERE `id_variant`=$id";
    $result= mysqli_query($db_server, $sql);       
    $resultat= mysqli_fetch_all($result);

    mysqli_close($db_server);
    return $resultat;
 }