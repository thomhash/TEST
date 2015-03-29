<?php
require_once '../dl/varer.php';
require_once '../parametre.php';

function hent_smaa_billeder($variant_id){
$variant_info=  get_variant($variant_id);


return $variant_info;    
}

function hent_variant_ids(){
    $ids=[];
    $ids[0]=  forside_billede1();
    $ids[1]=  forside_billede2();
    $ids[2]=  forside_billede3();
    $ids[3]=  forside_billede4();
    $ids[4]=  forside_billede6();
    $ids[5]=  forside_billede5();
    
    return $ids;
    
}

?>