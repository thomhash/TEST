
 <?php require '../fl/get_vare.php';
      session_start();
      session_start();

      $vare = $_SESSION["kurv"];   
      $total =0;
      $antal_total =0;
      $fragt = 50;

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
<br><br>

<header>
    <link rel="stylesheet" type="text/css" href="..\kurv_style.css">
</header>
<html>
    <body>
        <h1>Din indkøbskurv:</h1>
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
                         if ($info_array[$raekkenr][1]>0){
                             $total += $info_array[$raekkenr][1]*$subarray[0][4];
                             $antal_total += $info_array[$raekkenr][1];

                             
    ?>
         <th> <?php 
         
         echo '<a href="../vl/vis_enkeltvare.php?id=' .$subarray[0][0] .'">' ;
             echo '<img src="../billeder\\' .$subarray[0][5] .'">'; 
                
         
         echo $subarray[0][1]; 
         ?>
             <br>
             <?php
         echo $subarray[0][2]; echo $subarray[0][6]; echo'</a>';?></th> 
                     
            <th> <?php echo $subarray[0][4]; ?></th>  
            <th> <?php echo $info_array[$raekkenr][1]*$subarray[0][4]; 
            
            ?></th>
            
            <th> <?php echo $info_array[$raekkenr][1]; ?></th>
            <th>
           
                <form name="ret" action="../fl/tilfoj_kurv.php?variant_id=<?php echo $subarray[0][0] ?>" method="POST">
            
            <input name="rediger" type="submit" value="1" > 
                 
            <input name="rediger" type="submit"  value="-1"> 
                
            <input name="rediger" type="submit" value="Slet" src="www.google.com" > 
            
        </form>
        <form action="../fl/ret_kurv.php" method="get">
        
        
    </form>     
                </th>
           
            </tr>
        
     <?php   
        }
        $raekkenr ++;
                     }
    }
    ?>
      
            </table>
           
            <br>       
            Fragt: 
      <?php 
      if ($antal_total > 0)
      {
          $fragt = 50;
      }
      else{
          $fragt = 0;
      }
     echo $fragt;  
     
     ?>
            <br>    <br>
Total:
<?php 
echo $total+$fragt;

?>
<br><br>
<a href="kassen_trin_1.php"> Gå til kassen </a>
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
