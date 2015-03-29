 <?php require '../fl/get_vare.php';
      if(session_id() == '') {
    session_start();
}

      $vare = $_SESSION["kurv"];   
      $total =0;
      $antal_total =0;

?>
<br>
<?php
    $rnr=0;
    foreach($vare as $id=>$antal){
        $info_array[$rnr][0]= get_vare_info_kurv($id);
        $info_array[$rnr][1]=$antal;
        $rnr++;
    }

     ?>
         <?php 
         $raekkenr=0;
         foreach($info_array as $id=>$antal){
            $subarray=$info_array[$raekkenr][0];
        
                     foreach($subarray as $id2){
                         if ($info_array[$raekkenr][1]>0){
                             $total += $info_array[$raekkenr][1]*$subarray[0][4];
                             $antal_total += $info_array[$raekkenr][1];
   
      
        }
        $raekkenr ++;
                     }
    }
 echo "Antal vare: "+ $antal_total + "total: "+ $total +"kr";


