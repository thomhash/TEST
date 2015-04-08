<?php 
// Lavet af Thomas
require '../fl/search_fl.php';
require_once '../fl/tjek_mobile_browser.php';
$tekst = $_GET['search-string'];
$sidetal = $_GET['side'];
$varer=  hent_soeg($tekst, $sidetal);



$katalog="frame_visenkeltvare.php";
if(mobile_browser()){
    $katalog="frame_visenkeltvare_mobile.php";
    
}

?>

<div id="soeg">
    <?php
//Viser billeder af varen hvis der findes varer der indeholde søgetekst    
if(!empty($varer)){    
foreach ($varer as $key => $value) {
        echo '<a href="'.$katalog.'?id=' .$varer[$key][0] .'">' ;
             echo '<img src="../billeder//' .$varer[$key][3] .'">'; 
             echo "<br>";
             echo '<a href="'.$katalog.'?id=' .$varer[$key][0] .'"/>'.$varer[$key][1].'</a>' ;
                echo '</a>';
                echo '<HR>';
    
    }
}
else{echo  "Ingen resultater"; }    
?>
</div>

<?php 
// Hvis der er flere resultater end ønsket kommer der sidetal i bunden. Fl-laget bestemmer hvor mange varer der er per side.
$sider= hent_soeg_sider($tekst);
if($sider>1){
    
echo '<br>' 
      .'<p class="talsider" align="center">';  
      for ($x = 1; $x <= $sider; $x++) {
          
          if($x==$sidetal){
              if(mobile_browser()==true){echo '<a href="frame_vis_soegeresultater_mobile.php?side=' .$x .'& search-string=' .$tekst .'"><b>' .$x .'</b></a>';}
                 else{echo '<a href="frame_vis_soegeresultater.php?side=' .$x .'& search-string=' .$tekst .'"><b>' .$x .'</b></a>';}
          }
          else{
              if(mobile_browser()==true){echo '<a href="frame_vis_soegeresultater_mobile.php?side=' .$x .'& search-string=' .$tekst .'">' .$x .'</a>';}
                else{echo '<a href="frame_vis_soegeresultater.php?side=' .$x .'& search-string=' .$tekst .'">' .$x .'</a>';}
          }  
          
          echo "&nbsp;";
 
}  echo '</p>'; 
       

}?>