<?php

require '../dl/varer.php';
//Test variable
//$gruppenr = 2;
//$side =1;





//funktion der henter varer(array,)der skal vises ud fra et gruppe nr samt hvilkent side man er på
function hent_vare_katalog($gruppenr, $side){
    //Hent vare id's ud fra gruppenr og side
    $id_array=get_vareid($gruppenr,$side);
    // 2 dimensionelt array der indeholder nav, pris, billede , og variant id for produkter der skal vises
    $vis_vare;

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


?>