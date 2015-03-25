<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css_menu.php">
        
        
</head>
<body>
<div class="container_menu" >
	
<a class="toggleMenu" href="#">Menu</a> 
<ul class="nav">

     

	
	








<?php

require '../fl/opret_menu.php';
$grupper = hent_grupper();



foreach ($grupper as $main_raekkenr => $value) {    
       href($grupper[$main_raekkenr][2],$grupper[$main_raekkenr][0], $grupper[$main_raekkenr][1]);
        if (!empty($grupper[$main_raekkenr][2])) {
            $undergruppe1= $grupper[$main_raekkenr][2];
             echo "<ul>";
            vis_undergruppe1($undergruppe1);
            echo "</ul>";
          }
    echo "</li>";
}


function vis_undergruppe1($undergruppe_1){
     foreach ($undergruppe_1 as $raekkenr => $value) {
          href($undergruppe_1[$raekkenr][3], $undergruppe_1[$raekkenr][0], $undergruppe_1[$raekkenr][1]);
                   if (!empty($undergruppe_1[$raekkenr][3])) {
                        $undergruppe2=$undergruppe_1[$raekkenr][3];
                            echo "<ul>";
                                vis_undergruppe2($undergruppe2);
                            echo "</ul>";
                        }
       echo "</li>";              
    }         
}

function vis_undergruppe2($undergruppe_2)
{     foreach ($undergruppe_2 as $raekkenr => $value) {
        echo "<li>" .'<a href="frame_viskatalog.php?page=1 & gruppe='.$undergruppe_2[$raekkenr][0].'">'.$undergruppe_2[$raekkenr][1] .'</a>' .'</li>';
    }
}


function href($subarray, $id, $navn){
    
    
    if (empty($subarray)) {
        
        echo "<li>" .'<a href="frame_viskatalog.php?page=1 & gruppe='.$id.'&desktop=1">'.$navn .'</a>' .'</li>';
    }
    else {
        echo "<li>" .'<a href="#" onClick="return false;">'.$navn .'</a>';
    }
    
    
}


?>
       
        </ul>
     
  
      
    </div>
    
    <!--<div class="search" float:left;>
    <form>
  <input type="search" name="searchfield" placeholder="Søg på vare"> 
        </form> 
</div>-->
   



<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript_menu.js"></script>
</body>
</html>

