<?php
require 'dl/parametre_dl.php';
function baggrundsfarve()
    {   $id="Baggrundsfarve";
        $farve = get_parametre($id);
    
        return $farve[0][0];
    }
 function venstre_farve()
    {   $id="Venstre farve";
        $farve = get_parametre($id);
    
        return $farve[0][0];
    }
  function indhold_farve()
    {   $id="Indhold farve";
        $farve = get_parametre($id);
    
        return $farve[0][0];
    }  

function antal_vare_per_sider()
    {   $id="Antal varer pr. side";
        $antal = get_parametre($id);
    
        return $antal[0][0];
    }
    
//bredde af billede i px  
function bredde_billeder()
    {   $id="Bredde af billeder i px.";
        $bredde=get_parametre($id);
        //$bredde= 90/$antal_vandret;
        return $bredde[0][0];
        
    }
//hoejde af billede i px
function hoejde_billeder()
    {   $id="Hoejde af billeder i px.";
        $hoejde = get_parametre($id);
        return $hoejde[0][0];
    } 
  
 // Hvor mange vare skal vises vandret    
function bredde_billeder_mobile()
    {   $id="Bredde af billeder til mobil i px.";
        $bredde=get_parametre($id);
        //$bredde= 90/$antal_vandret;
        return $bredde[0][0];
        
    }
//hoejde af billede i px
function hoejde_billeder_mobile()
    {   $id="Hoejde af billeder til mobil i px.";
        $hoejde = get_parametre($id);
        return $hoejde[0][0];
    }    
//Sæt farve i menuen for hovedegrupper i menuen
function farve_hovedgruppe()
    {   $id="Farve til hovedgrupper i menuen";
        $farve = get_parametre($id);
        return $farve[0][0];
    } 
//Sæt border-farve for hovedegrupper i menuen
function kant_farve_hovedgruppe()
    {   
        $farve = "#104336";//"#175e4c";
        return $farve;
    } 
     
// Sæt farve for undergruppe 1 i menuen    
function farve_undergruppe1()
    {   $id="Farve til undergruppe 1 i menuen";
        $farve = get_parametre($id);
        return $farve[0][0];
    }
//Sæt border-farve for undergruppe1 i menuen
function kant_farve_undergruppe1()
    {   $farve = "#175e4c";//"#175e4c";
        return $farve;
    }    
// Sæt farve for undergruppe 2 i menuen
function farve_undergruppe2()
    {   $id="Farve til undergruppe 2 i menuen";
        $farve = get_parametre($id);
        return $farve[0][0];
    }      
//Sæt border-farve for undergruppe2 i menuen
function kant_farve_undergruppe2()
    {   $farve = "175e4c";//"#175e4c";
        return $farve;
    } 
//Hent stort billede til forsiden
function banner_billede()
    {   $id="Banner billede";
        $url = get_parametre($id);
        return $url[0][0];
    }


//Hent stort billede til forsiden
function forside_stort_billede()
    {   $id="Stort billede til forsiden";
        $url =  get_parametre($id);
        return $url[0][0];
    }     
    
//Hent variant billede 1 til forsiden
function forside_billede1()
    {   $id="Variant id 1 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
//Hent variant billede 2 til forsiden
function forside_billede2()
    {   $id="Variant id 2 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
//Hent variant billede 3 til forsiden
function forside_billede3()
    {   $id="Variant id 3 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
 //Hent variant billede 4 til forsiden
function forside_billede4()
    {   $id="Variant id 4 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
 //Hent variant billede 5 til forsiden
function forside_billede5()
    {   $id="Variant id 5 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
//Hent variant billede 6 til forsiden
function forside_billede6()
    {   $id="Variant id 6 til forsiden";
        $variant_id = get_parametre($id);
        return $variant_id[0][0];
    }     
                                    
    
?>

