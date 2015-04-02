<?php

require_once '../dl/varer.php';
//Test variable
//$gruppenr = 2;
//$side =1;





//funktion der henter varer(array,)der skal vises ud fra et gruppe nr samt hvilkent side man er på
function hent_vare_katalog($gruppenr, $side){
    //Hent vare id's ud fra gruppenr og side
    $id_array=get_vareid($gruppenr,$side);
    //$id_array=  get_vareid_filter($gruppenr, $side, $maerker, $stoerrelser, $farver, $pris_min, $pris_max);
    // 2 dimensionelt array der indeholder nav, pris, billede , og variant id for produkter der skal vises
    $vis_vare=[];

    $raekke_nr = 0;
    // Loekke der løber alle id's igennem som lige er blevet hentet
    foreach ($id_array as $value){
        // Henter info om 1 vare og sætter ind i et 2 dimensionelt array med info om alle varer der skal vises på en given side
        $vare_info = get_info_catalog($value);
            
        $vis_vare[$raekke_nr][0] = $vare_info[0][0];
        $vis_vare[$raekke_nr][1] = $vare_info[0][1];
        $vis_vare[$raekke_nr][2] = $vare_info[0][2];
        $vis_vare[$raekke_nr][3] = $vare_info[0][3];
        
        $raekke_nr++;
}

return $vis_vare;


}
//// test
function hent_vare_katalog_filter($gruppenr, $side, $maerker, $stoerrelser, $farver, $pris_min, $pris_max){
    //Hent vare id's ud fra gruppenr og side
    $id_array=[];
    $id_array=  get_vareid_filter($gruppenr,$side, $maerker, $stoerrelser, $farver, $pris_min, $pris_max);
    //$id_array=  get_vareid_filter($gruppenr, $side, $maerker, $stoerrelser, $farver, $pris_min, $pris_max);
    // 2 dimensionelt array der indeholder nav, pris, billede , og variant id for produkter der skal vises
    $vis_vare=[];

    $raekke_nr = 0;
    // Loekke der løber alle id's igennem som lige er blevet hentet
    
    foreach ($id_array as $value){
        // Henter info om 1 vare og sætter ind i et 2 dimensionelt array med info om alle varer der skal vises på en given side
        $vare_info = get_info_catalog($value, $farver, $pris_min, $pris_max,$stoerrelser);
        if(!empty($vare_info)){            
        $vis_vare[$raekke_nr][0] = $vare_info[0][0];
        $vis_vare[$raekke_nr][1] = $vare_info[0][1];
        $vis_vare[$raekke_nr][2] = $vare_info[0][2];
        $vis_vare[$raekke_nr][3] = $vare_info[0][3];
        
        }
        
        $raekke_nr++;
}

return $vis_vare;


}

function hent_antal_sider($gruppenr, $maerke, $stoerrelser, $farver, $pris_min, $pris_max){
    $sider = \get_number_of_pages($gruppenr, $maerke, $stoerrelser, $farver, $pris_min, $pris_max);
    
    return $sider;
}


function get_variant_info($id_variant){
    $info = \get_variant($id_variant);
    
    return $info;
}
//test
function hent_stoerrelser($id_variant, $farve_id){
    $id= \get_vare_id($id_variant);
    $stoerrelser= get_stoerrelser($id[0][0], $farve_id);
    
    return $stoerrelser;
}

function hent_farve_varianter($id_variant, $farve_id){
    
    $vare_id=get_vare_id($id_variant); 
     
    $farver= get_farver($vare_id[0][0], $farve_id);     
    $smaa_billeder;
     
    $raekke_nr = 0;
    if (!empty($farver)) {
        foreach ($farver as $key => $value)           
        {   
            
            $temp= get_farver_billeder($vare_id[0][0], $farver[$raekke_nr][0]);
            $smaa_billeder[$raekke_nr][0]= $temp [0][0];
            $smaa_billeder[$raekke_nr][1]= $temp [0][1];
            $raekke_nr++;
            
            
        }
    
        
          
        
        return $smaa_billeder;
    }
}

function hent_type_beskrivelse($variant_id){
    
    $type_tekst=  get_type_beskrivelse($variant_id);
    
    return $type_tekst;
}



?>
