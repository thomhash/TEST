<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\styles.css">
</head>

<body>
    <?php
    require '../fl/opretkatalog.php';
    //Test variable
   $gruppenr = 2;
   $side =1;
   
   $info_vare= hent_vare_katalog($gruppenr, $side);
   
    
    
    
    
    $raekke_nr=0;
    $navn;
    $pris;
    $billede;
    
    
    for ($x = 0; $x <= 23; $x++) {
    $navn[$x]="";
    $pris[$x]="";
    $billede[$x]="";
}
    
    /*
    $array_en_raekke=[];
    
        $array_en_raekke[0][0] = "Nike shock";
        $array_en_raekke[0][1] = 499;
        $array_en_raekke[0][2] = '..\billeder\nike_shock_red.jpg';
        $array_en_raekke[0][3] = 1; 
        
        $array_en_raekke[1][0] = "Nike Shock";
        $array_en_raekke[1][1] = 499;
        $array_en_raekke[1][2] = '..\billeder\nike_shock_red.jpg';
        $array_en_raekke[1][3] = 1; 
        
                */
        foreach ($info_vare as $value) {
          //  foreach ($innerArray as $value) {
                // Hvis navn er laengere end 1
                  if (strlen($info_vare[$raekke_nr][0])>0 ){
                    $navn[$raekke_nr] = $info_vare[$raekke_nr][0];
                    $pris[$raekke_nr] = "Pris: " .$info_vare[$raekke_nr][1];
                    $billede[$raekke_nr] = '<img src="..\billeder\\' .$info_vare[$raekke_nr][2] .'">';
                    
                   
                    
                                
                   
               // }
            }
            
            
        $raekke_nr++;
      }
      
      
            

?>

   
    <figure>
        <?php echo $billede[0]; ?>
        <figcaption>
            <table>   
                <tr>
                    <td>
                        <?php echo $navn[0];?>   
                    </td>
                    <td align = "right">
                        <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    
    <figure>
        <?php echo $billede[1]; ?>
        <figcaption>  
            <table>   
                <tr>
                    <td>
                        <?php echo $navn[1];?>   
                    </td>
                    <td align = "right">
                        <?php echo $pris[1];?>  
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    
     <figure>
        <img src='..\billeder\nike_shock_green.jpg'>
        <figcaption>  
            <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    
     <figure>
        <img src='..\billeder\puma_street_sko_green.jpg'>
        <figcaption> 
         <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    
    <figure>
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
        <figcaption> 
         <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    <figure>
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
        <figcaption>  
            <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    <figure>
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
        <figcaption>  
            <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    <figure>
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
        <figcaption>  
            <table>   
                <tr>
                    <td>
                 <?php echo $array_en_raekke[0][0];?>   
                    </td>
                    <td align = "right">
                 <?php echo $pris[0]; ?> 
                    </td>
                </tr>
            </table>
        </figcaption>
     </figure>
    
    
    
 <!--   
 <div id="container">
     <figure
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
         
     </figure>
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/600px-Smiley.svg.png">
</div>

      //-->
    
    
    
    
  <!--  
<div id='outer'>
    <img src='..\billeder\nike_shock_blue.jpg' alt='whatever1' />
    <img src='..\billeder\nike_shock_red.jpg' alt='whatever2' />
    <img src='..\billeder\nike_shock_green.jpg' alt='whatever3' />
    <img src='whatever4.png' alt='whatever4' />
    <img src='whatever5.png' alt='whatever5' />
    <img src='whatever6.png' alt='whatever6' />
    <img src='whatever7.png' alt='whatever7' />
    <img src='whatever8.png' alt='whatever8' />
    <img src='whatever9.png' alt='whatever9' />
    <img src='whatever10.png' alt='whatever10' />
    <img src='whatever11.png' alt='whatever11' />
    <img src='whatever12.png' alt='whatever12' />
   <div id='bd'></div>
</div>
    
    //-->
  
</body>

</html>