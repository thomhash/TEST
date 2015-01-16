<?php

require '../dl/varer.php';
//Test variable
$gruppenr = 2;
$side =1;

//funktion der henter varer(array,)der skal vises ud fra et gruppe nr samt hvilkent side man er på
function hent_vare_katalog($gruppenr, $side){
    //Hent vare id ud fra gruppenr og side
    $id_array=get_vareid($gruppenr,$side);
    // 2 dimensionelt array der indeholder nav, pris, billede , og variant id for produkter der skal vises
    $vis_vare;

    $raekke_nr = 0;
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


/*
echo "<br>";
echo $vis_vare[0][0] ."...";
echo $vis_vare[0][1] ."...";
echo $vis_vare[0][2] ."...";
echo $vis_vare[0][3] ."...";
echo "<br>";
echo $vis_vare[1][0] ."...";
echo $vis_vare[1][1] ."...";
echo $vis_vare[1][2] ."...";
echo $vis_vare[1][3] ."...";
echo "<br>";
echo $vis_vare[2][0] ."...";
echo $vis_vare[2][1] ."...";
echo $vis_vare[2][2] ."...";
echo $vis_vare[2][3] ."...";
echo "<br>";

echo $vis_vare[3][0] ."...";
echo $vis_vare[3][1] ."...";
echo $vis_vare[3][2] ."...";
echo $vis_vare[3][3] ."..."; */





/*$info = get_info_catalog(1);

echo $info[0][0];
echo $info[0][1];
echo $info[0][2];
echo $info[0][3];
echo ".............";*/



//echo $id_array[2];





?>