<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\styles.php">
</head>

<body>
    
    
    
    
    <?php
    require '../fl/opretkatalog.php';
    require 'tekst.php';
    //Test variable
   $gruppenr = $_GET['gruppe'];
   $side = $_GET['page'];
   
   
   $info_vare= hent_vare_katalog($gruppenr, $side);
   
    
   $raekke_nr=0;
   // Loekke der laver html figurer for hvert billede som skal vises i kataloget
        foreach ($info_vare as $value) {
          
         echo "<figure>";
           echo '<a href="vis_enkelt_vare.php">' ;
             echo '<img src="..\billeder\\' .$info_vare[$raekke_nr][2] .'">'; 
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
             echo '<a href="vis_katalog.php?page=' .$x .'& gruppe=' .$gruppenr .'"><b>' .$x .'</b></a>';
          }
          else{
            echo '<a href="vis_katalog.php?page=' .$x .'& gruppe=' .$gruppenr .'">' .$x .'</a>';
          }  
          //echo  $x;
          echo "&nbsp;";
 
}  echo '</p>'; 
       

}

?>
   
    
  
</body>

</html>
