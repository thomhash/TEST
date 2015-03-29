<?php
require '../fl/get_kunde.php';
require '../fl/fragt_pris.php';
$mail =$_GET["email"]; 
$kunde_id = get_kunde_id_fra_mail($mail)[0];
?>
<head>
	
	<link rel="stylesheet" href="../login_user_normalize.css">
	<link rel="stylesheet" href="../login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
    <body>
        <h1> <b>Godkend ordre</h1>

        <h2> Kunde: </h2>
   <?php
   $info_kunde = hent_kunde($kunde_id[0])[0];
   echo $info_kunde[0];
   echo " ";
   echo $info_kunde[1];
   ?> <br> <?php
    echo $info_kunde[2];
    ?> <br> <?php
    
    echo $info_kunde[3];
    ?> <br> <?php
    echo $info_kunde[4];
    ?> <br>

	 <?php require '../fl/get_vare.php';
      session_start();

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
<br><br>

<header>
    <link rel="stylesheet" type="text/css" href="../kurv_style.css">
</header>
<html>
    <body>
 
<table border="1">
     <tr>
    
    <th>Produkt</th>
   
    <th>Pris pr. stk.</th>
    <th>Total</th>

    <th>Antal</th>
       
    
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
         
        
             echo '<img src="../billeder//' .$subarray[0][5] .'">'; 
                
         
         echo $subarray[0][1]; 
         ?>
             <br>
             <?php
         echo $subarray[0][2]; echo $subarray[0][6]; ?></th> 
                     
            <th> <?php echo $subarray[0][4]; ?></th>  
            <th> <?php echo $info_array[$raekkenr][1]*$subarray[0][4]; 
            
            ?></th>
            
            <th> <?php echo $info_array[$raekkenr][1]; ?></th>
            
           
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
    echo hent_fragtpris($total);
    // echo "Fragtpirs: "+ hent_alm_fragtpris(); + " kr. gratis fragt ved køb for over: " + hent_gratis_fragtpris() + "kr.";
    ?>
            <br>    <br>
Total:
<?php 
echo $total+hent_fragtpris($total); 

?>

<br>

     <form action="../fl/opret_bestilling.php">
    <a href="betingelser.html">Læs forretningsbetingelserne </a><br><br>
    <input type="checkbox" required="true" name="test" value="Jeg bestiller hermed ovenstående og bekræfter, at jeg har læst og accepterer forretningsbetingelserne"> 
    Jeg bestiller hermed ovenstående og bekræfter, at jeg har læst og accepterer forretningsbetingelserne
    <br><br>
    <input type="hidden" name="email" value = "<?php echo $kunde_id[0];?>">
    
<input type="submit" value="Godkend">
</form>