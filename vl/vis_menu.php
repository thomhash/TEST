<?php 
// Lavet af Thomas
?>
      

<div class="container_menu">
	
<a class="toggleMenu" href="#">Menu</a>
<ul class="nav">
	
<?php

require '../fl/opret_menu.php';
require_once '../fl/tjek_mobile_browser.php';
$main_raekkenr = 0;
$grupper = hent_grupper();


// Hovedgrupper køres igennem
foreach ($grupper as $value) {    
       href($grupper[$main_raekkenr][2],$grupper[$main_raekkenr][0], $grupper[$main_raekkenr][1]);
        if (!empty($grupper[$main_raekkenr][2])) {
            $undergruppe1= $grupper[$main_raekkenr][2];
             echo "<ul>";
            vis_undergruppe1($undergruppe1);
            echo "</ul>";
                        
        }
    
    echo "</li>";
    $main_raekkenr++;
}

// Første undergruppe køres igennem
function vis_undergruppe1($undergruppe_1){
     $raekkenr =0;
     
      foreach ($undergruppe_1 as $value) {
                
          href($undergruppe_1[$raekkenr][3], $undergruppe_1[$raekkenr][0], $undergruppe_1[$raekkenr][1]);
                  
                    if (!empty($undergruppe_1[$raekkenr][3])) {
                        $undergruppe2=$undergruppe_1[$raekkenr][3];
                            echo "<ul>";
                                vis_undergruppe2($undergruppe2);
                            echo "</ul>";
                        }
       echo "</li>";              
    $raekkenr++;
    }         
}
// Anden undergruppe køres igennem
function vis_undergruppe2($undergruppe_2)
{ $raekkenr=0;
    foreach ($undergruppe_2 as $value) {
        echo "<li>" .'<a href="frame_viskatalog.php?page=1 & gruppe='.$undergruppe_2[$raekkenr][0].'">'.$undergruppe_2[$raekkenr][1] .'</a>' .'</li>';
        
        $raekkenr++;
    }
}

// Funktione der tjekker om en given gruppe har undergrupper knyttet til sig. Hvis den ikke har indsættes et
// link til gruppen. Hvis den har undergrupper indsættes et link der intet gør
function href($subarray, $id, $navn){
    
    
    if (empty($subarray)) {
        
        echo "<li>" .'<a href="frame_viskatalog.php?page=1 & gruppe='.$id.'">'.$navn .'</a>' .'</li>';
    }
    else {
        echo "<li>" .'<a href="#" onClick="return false;">'.$navn .'</a>';
    }
    
    
}


?>
        
        <li><a href="frame_omos.php">Om os</a></li>
        <?php
        // Hvis der benyttes en mobil browser indsættes link til obile version i menuen
        if(mobile_browser()){ echo '<li><a href="frame_frontpage_mobile.php">Mobile version</a></li>';}
        ?>
        </ul>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript_menu.js"></script>