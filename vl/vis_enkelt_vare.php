<?php

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.php">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body> 
 <div id="enkelt">
    <?php require'fl/opretkatalog.php';
          require 'vl/tekst.php';
          
         //$id = $_GET['id'];  
         $info_array= get_variant_info($id);
         
         
    ?>  
     
   <div id="billeder"> 
        
        <h1> <?php echo $info_array[0][0]   ?> </h1>
      <div id="topbillede"> 
        <img src ="billeder\<?php echo $info_array[0][3]; ?> ">
      </div> 
        
       
       <div class="container1">
          <?php 
                     
            $farve_varianter= hent_farve_varianter($id, ($info_array[0][6]));
                   
                   ?>
    
        <div class="images">
             <div class="image one active">
               
                 <?php 
                 $billede_nr=0;
                  if (!empty($farve_varianter)) {
                 foreach ($farve_varianter as $key => $value) {
                      if ($billede_nr>0 && $billede_nr % 4 ==0){
                        echo '</div>';
                          
                        echo '<div class="image">';
                        echo '<a href="vis_enkelt_vare.php?id=' .$farve_varianter[$billede_nr][0]  .'">';
                        echo    '<img src="billeder\\' .$farve_varianter[$billede_nr][1] .'">';
                        echo '</a>';
                        
                       echo '<div id="controls">';
                       echo     '<img src="http://annhowardesign.com/images/arrowright.jpg" class="next" alt="Next"/>'; 
                       echo     '<img src="http://annhowardesign.com/images/arrowleft.jpg" class="prev" alt="Previous"/>'; 
                       echo  '</div>';
                        
                           $billede_nr++;
                      }
                       
                      else{
                         echo '<a href="vis_enkelt_vare.php?id=' .$farve_varianter[$billede_nr][0]  .'">';
                         echo    '<img src="billeder\\' .$farve_varianter[$billede_nr][1] .'">';
                         echo '</a>';
                     
                    
                             $billede_nr++;
                          }

                         
                      }
                  }
                 echo '</div>';
                 
                 
                  
                 ?>
            
                 
                 
        </div>
           
           
           
           
    </div>
         
         
         
         
         
            
     
        
        
        
   </div> 
        
        

    <div id="dropdown" action='fl/indkoebskurv.php'>        
        
        <form method="post">
          Størrelse: 
          
         
            <select id="Stoerrelser">
                
                
                 <?php 
          
                $size= hent_stoerrelser($id, $info_array[0][6]); 
                $raekke_nr=0;
                 // Laver en drop down list med alle størrelser der er samme model og har samme farve
                    foreach ($size as $value){
                      // if statement der sætter den vare man er inde på som selected 
                        if($size[$raekke_nr][0]== $info_array[0][5]){
                            
                             
                            echo '<option value="' .$size[$raekke_nr][1] .'" selected>' .$size[$raekke_nr][0] .'</option>';
                            
                            $raekke_nr++;
                        }
                        else {
                                
                            echo '<option value="' .'vis_enkelt_vare.php?id=' .$size[$raekke_nr][1] .'">' .$size[$raekke_nr][0] .'</option>'; 
                             $raekke_nr++;
                              }
                             
                             
                             
                        }
                ?>
            </select>
        
         
        <br><br>
            
         <p>    
        <?php echo $info_array[0][1]; ?>
        </p>
        
        <br><br>
        
         <table>   
                        <tr>
                            <td>  
                                <p1>
                                <?php echo "<br>" .pris() .$info_array[0][2] ;   ?>
                                <p1> 
                            </td>
                            <td  align = "right" >
                            <p >
                                Antal 
                                <input type="number" name="Antal" value="1" min="1" max="<?php echo $info_array[0][4];?>" /> 
                            </p>
                           
                                 <?php 
                                    // Hvis varen er på lager skrives det med grønt, hvis ikke skrives det med rødt at varen 
                                    // ikke er på lager
                                    if($info_array[0][4]>=1 ){
                                    echo '<p2 title="Der er '.$info_array[0][4] .' på lager"> Varen er på lager' ."</p2>";
                                                             
                                }   
                                        else {echo "<p3>" ."Varen er ikke på lager" ."</p3>";}
                                ?>
                           
                                <p1>
                                <input type="submit" name="koeb" value="Køb" id="koeb" /> 
                                </p1>
                            </td>
                        </tr>
                    </table>
        
        </form>
         
    </div>  
        
     
        
    
        
    
        
        
        
        
    </div>
    
    
    <script src="vl/javascript_enkeltvare.js"></script>
</body>



    
    
    
    
    
    
    
    
</html>
