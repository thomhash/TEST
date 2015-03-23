<?php
require '../dl/search_dl.php';
function hent_soeg($tekst, $sidetal){
    $result=[];
    $vare_id= get_soeg($tekst, $sidetal);
    
    //Hent info om varer som skal vises til soegning
    foreach ($vare_id as $key => $value) {
        $variant_info=get_soeg_variant($value);
       
        $result[$key][0]= $variant_info[0][0];
        $result[$key][1]= $variant_info[0][1];
        $result[$key][2]= $variant_info[0][2];
        $result[$key][3]= $variant_info[0][3];
        
    }
    return $result;
}

function hent_soeg_sider($tekst){
    
    $antal_sider= get_soeg_side_antal($tekst);
    
    $number= mysqli_num_rows($antal_sider);
    $sider =ceil ($number/10);
    
    return $sider;
    
}




?>