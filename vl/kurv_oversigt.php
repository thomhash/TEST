<?php

 <?php require '../fl/get_vare.php';
          require 'tekst.php';
    
        
      //   $id = $_GET['id'];  
     //    $info_array= get_variant_info($id);

         $vare[2]=1;
         $vare[5]=4;
         $vare[11]=17;
         $info_array;
         print_r($vare);
   //      foreach ($vare as &$value) {
  //      echo $value;
//}
?>
<br>
<?php
    foreach($vare as $id=>$antal){
        $info_array[]= get_vare_info_kurv($id);
        
    }
    foreach($info_array as $id=>$antal){
        echo $info_array;
        
    }
   // print_r($info_array)
    
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
<tr><th>
      
        </th>
                
           
            <th>1 </th>
            <th>2 </th>
     
            <th>5 </th>
            <th>
               
            <form name="ret" action="../fl/ret_lager.php" method="POST">
            <input type="submit" value="+"> 
            
               <form name="ret" action="../fl/ret_lager.php" method="POST">
            <input type="submit" value="-"> 
             
            <form name="ret" action="../fl/ret_lager.php" method="POST">
            <input type="submit" value="Slet"> 
             </form>
                </th>
           
            </tr>
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
</html>
