<?php
require '../dl/menu.php';

function hent_grupper()
    {

$hovede_grupper=  get_over_grupper();
$undergrupper = get_undergrupper();

$raekke_main=0;

if(count($undergrupper) > 0){
    
    foreach ($hovede_grupper as $value) {
        $array1=[];
        $array1_raekke1=0;
        
    
     foreach($undergrupper as $raekke1 => $value){
         
        if($undergrupper[$raekke1][2]==$hovede_grupper[$raekke_main][0]){
            
            $array1[$array1_raekke1][0]=$undergrupper[$raekke1][0];
            $array1[$array1_raekke1][1]=$undergrupper[$raekke1][1];
            $array1[$array1_raekke1][2]=$undergrupper[$raekke1][2];
            
            
            $array1_raekke1++;
            
                   } 
               
                   
    }       
   
             if(count($array1) > 0){
                                  
                 $arrayTemp_raekke=0;
                    
                     foreach ($array1 as $value){
                        $arrayTemp=null;
                        $temp_raekke=0;
                        $array1_raekke2=0;
                        
                        foreach ($undergrupper as $value){
                             if($undergrupper[$array1_raekke2][2]==$array1[$arrayTemp_raekke][0]){
                               
                                
                                $arrayTemp[$temp_raekke][0]=$undergrupper[$array1_raekke2][0];
                                $arrayTemp[$temp_raekke][1]=$undergrupper[$array1_raekke2][1];
                                $arrayTemp[$temp_raekke][2]=$undergrupper[$array1_raekke2][2];
                                                                
                                $temp_raekke++;
                                
                              } 
                              
                              $array1_raekke2++;
                        
                        } 
                                                        
                    $array1[$arrayTemp_raekke][3]=$arrayTemp;
                    $arrayTemp_raekke++;
                }
               
           $hovede_grupper[$raekke_main][2]=$array1;    }
           //Sætter subarray til null hvis der ikke er et. Det bruges til visning af menuen     
           else{
                    $hovede_grupper[$raekke_main][2]=null;
                }
    
    $raekke_main++; 
    
        }

    }
    // Hvis der ingen under grupper findes i databasen sætter [2] til null saa der ikke kastet et offdefined offset i fl
        else    {   
                    foreach ($hovede_grupper as $value){
                        $hovede_grupper[$raekke_main][2]=null;
                        $raekke_main++;
                    }
                }
    

    return $hovede_grupper;
}



?>
