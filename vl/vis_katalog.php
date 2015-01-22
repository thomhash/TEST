<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\styles.css">
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
          echo '<img src="..\billeder\\' .$info_vare[$raekke_nr][2] .'">'; 
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
   
      
            

?>

  
</body>

</html>
