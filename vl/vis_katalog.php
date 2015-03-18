<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<body>
    
    <div id="katalog">
    
    
    <?php
    require '../fl/opretkatalog.php';
    require_once '../fl/tjek_mobile_browser.php';
    require 'tekst.php';
    $maerke=0;
    $stoerrelser=0;
    $farver=0;
    $pris_min=0;
    $pris_max=99999999;
    
     if (isset($_GET["maerke"])){
         $maerke=$_GET["maerke"];
     }
      if (isset($_GET["stoerrelser"])){
         $stoerrelser=$_GET["stoerrelser"];
     }
     if (isset($_GET["farver"])){
         $farver=$_GET["farver"]; 
         }
     if (isset($_GET["pris_min"])&&$_GET["pris_min"]!="" ){
         $pris_min=$_GET["pris_min"];
     }
     if (isset($_GET["pris_max"])&&$_GET["pris_max"]!=""){
         $pris_max=$_GET["pris_max"];
     }
     
    //variable sendt fra hovedsiden
   //$gruppenr = $_GET['gruppe'];
   //$side = $_GET['page'];
    
   
   //$info_vare= hent_vare_katalog($gruppenr, $side);
   $info_vare= hent_vare_katalog_filter($gruppenr, $side, $maerke, $stoerrelser, $farver, $pris_min, $pris_max);
     if(empty($info_vare)){
       echo "<br>" ."Der er ingen varer";
   }
    
   $raekke_nr=0;
   // Loekke der laver html figurer for hvert billede som skal vises i kataloget
        foreach ($info_vare as $value) {
          
         echo "<figure>";
         if(mobile_browser()==true){ echo '<a href="frame_visenkeltvare_mobile.php?id=' .$info_vare[$raekke_nr][3] .'">' ;   }
           else {echo '<a href="frame_visenkeltvare.php?id=' .$info_vare[$raekke_nr][3] .'">' ;}
             echo '<img src="../billeder//' .$info_vare[$raekke_nr][2] .'">'; 
                echo '</a>';
           echo "<figcaption>
                    <table>   
                        <tr>
                            <td>";
                              echo $info_vare[$raekke_nr][0];
                              echo '</td>
                                    <td align = "right">';
                                        echo \pris() .$info_vare[$raekke_nr][1];
                             echo  "</td>
                        </tr>
                    </table>
                </figcaption>
            </figure>";


       $raekke_nr++;
}

   
// Lav link til de næste sider hvis sidetallet er højere end 1

$sider= \hent_antal_sider($gruppenr);
if($sider>1){
echo '<br>' 
      .'<p class="sider" align="center">';  
      for ($x = 1; $x <= $sider; $x++) {
          
          if($x==$side){
              if(mobile_browser()==true){echo '<a href="frame_viskatalog_mobile.php?page=' .$x .'& gruppe=' .$gruppenr .'"><b>' .$x .'</b></a>';}
                 else{echo '<a href="frame_viskatalog.php?page=' .$x .'& gruppe=' .$gruppenr .'"><b>' .$x .'</b></a>';}
          }
          else{
              if(mobile_browser()==true){echo '<a href="frame_viskatalog_mobile.php?page=' .$x .'& gruppe=' .$gruppenr .'">' .$x .'</a>';}
                else{echo '<a href="frame_viskatalog.php?page=' .$x .'& gruppe=' .$gruppenr .'">' .$x .'</a>';}
          }  
          //echo  $x;
          echo "&nbsp;";
 
}  echo '</p>'; 
       

}

?>
   
        
 
    
    </div>
</body>

</html>
