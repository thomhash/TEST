
 <?php require '../fl/get_vare.php';
      session_start();
      $vare = $_SESSION["kurv"];    
     // print_r($_SESSION["kurv"]);
     // print_r($vare);
    
      //   $id = $_GET['id'];  
     //    $info_array= get_variant_info($id);

       //  $vare[2]=1;
       //  $vare[1]=2;
       //  $vare[3]=2;
       //  $vare[5]=4;
         
     //    $info_array;
     //    print_r($vare);
   //      foreach ($vare as &$value) {
  //      echo $value;
//}
?>
<br>
<?php
    $rnr=0;
    foreach($vare as $id=>$antal){
        $info_array[$rnr][0]= get_vare_info_kurv($id);
        $info_array[$rnr][1]=$antal;
        $rnr++;
    }
         
    //print_r($info_array);
     ?>
<br><br>
<?php

  //echo print_r($info_array[0]);
  //echo print_r($info_array[1]);
   
?>
<header>
    
</header>
<html>
    <body>
<table border="1">
     <tr>
    
    <th>Produkt</th>
   
    <th>Pris pr. stk.</th>
    <th>Total</th>

    <th>Antal</th>
       <th>Juster</th>
    
  </tr>
    <tr>    
         <?php 
         $raekkenr=0;
         foreach($info_array as $id=>$antal){
        $subarray=$info_array[$raekkenr][0];
        
                     foreach($subarray as $id2){
               //  echo $info_array[$raekkenr][1];     
            // echo $subarray[0][0];
    ?>
         <th> <?php echo $subarray[0][5]; echo $subarray[0][1]; echo $subarray[0][2]; ?></th> 
                     
            <th> <?php echo $subarray[0][4]; ?></th>  
            <th> <?php echo $info_array[$raekkenr][1]*$subarray[0][4]; ?></th>
            <th> <?php echo $info_array[$raekkenr][1]; ?></th>
            <th>
               
        <form name="ret" action="../fl/tilfoj_kurv.php?variant_id='<?php echo $subarray[0][0] ?>'" method="POST">
            
            <input name="plus" type="submit" value="1"> 
                 
            <input type="button" name="t" value="-1"> 
                
            <input type="submit" name="t" value="Slet"> 
        </form>
        <form action="../fl/ret_kurv.php" method="get">
        
        <div id="buttons">
            <input type="submit" class="f" name="next" value="Slet">
            <input type="submit" class="f" name="prev" value="-">
            <input type="submit" class="f" name="prev" value="+">
            <div style="clear:both"></div><!-- Need this to have the buttons actually inside div#buttons -->
        </div>
    </form>     
                </th>
           
            </tr>
        
     <?php   
        }
        $raekkenr ++;
    }
    ?>
      
            </table>
           
            <br>       
            Fragt:    
            <br>    <br>
Total:
<br><br>
Gå til kassen 
<br><br>
Handel videre
</body>

<head>
     <style>
        .f {
            float: right;
        }
    </style>
</head>
</html>
