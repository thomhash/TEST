<?php



function antal_vare_per_sider()
    {   $antal = 2;
    
        return $antal;
    }
// Hvor mange vare skal vises vandret    
function varer_vandret()
    {   $antal_vandret = 3  ;
        
        $bredde= 90/$antal_vandret;
        return $bredde;
        
    }
//hoejde af billede i px
function hoejde_billeder()
    {   $hoejde = 250;
        return $hoejde;
    }    

?>

