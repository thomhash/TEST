<!DOCTYPE html>
<html>
<head>
	<title>Dropdowns</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css_menu.css">
</head>
<body>
<div class="container">
	
<a class="toggleMenu" href="#">Menu</a>
<ul class="nav">
	
	
	








<?php

require '..\fl\opret_menu.php';
$main_raekkenr = 0;
$grupper = hent_grupper();

foreach ($grupper as $value) {    
    
    //if (!empty($grupper[$main_raekkenr][2])) {href($grupper[$main_raekkenr][2],$grupper[$main_raekkenr][0], $grupper[$main_raekkenr][1]);}
    //else {  href(null,$grupper[$main_raekkenr][0],$grupper[$main_raekkenr][1]); }
    href($grupper[$main_raekkenr][2],$grupper[$main_raekkenr][0], $grupper[$main_raekkenr][1]);
   // echo "<li>" .'<a href="#">'.$grupper[$main_raekkenr][1] .'</a>';

        if (!empty($grupper[$main_raekkenr][2])) {
            $undergruppe1= $grupper[$main_raekkenr][2];
            
            echo "<ul>";
            vis_undergruppe1($undergruppe1);
            echo "</ul>";
                        
        }
    
    

    echo "</li>";
    $main_raekkenr++;
}


function vis_undergruppe1($undergruppe_1){
     $raekkenr =0;
     
      foreach ($undergruppe_1 as $value) {
                
          href($undergruppe_1[$raekkenr][3], $undergruppe_1[$raekkenr][0], $undergruppe_1[$raekkenr][1]);
                //echo "<li>" .'<a href="#">' .$undergruppe_1[$raekkenr][1] .'</a>';
                    
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


function vis_undergruppe2($undergruppe_2)
{ $raekkenr=0;
    foreach ($undergruppe_2 as $value) {
        
        //<a href="vis_katalog.php?page=1 & gruppe=1">T-shirt</a> <br>
        echo "<li>" .'<a href="vis_katalog.php?page=1 & gruppe='.$undergruppe_2[$raekkenr][0].'">'.$undergruppe_2[$raekkenr][1] .'</a>' .'</li>';
        
        $raekkenr++;
    }
    
    

}


function href($subarray, $id, $navn){
    
    
    if (empty($subarray)) {
        
        echo "<li>" .'<a href="vis_katalog.php?page=1 & gruppe='.$id.'">'.$navn .'</a>' .'</li>';
    }
    else {
        echo "<li>" .'<a href="#">'.$navn .'</a>';
    }
    
    
}


?>

        </ul>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript_menu.js"></script>
</body>
</html>

