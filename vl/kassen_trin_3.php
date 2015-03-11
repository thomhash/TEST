<?php
$mail =$_GET["email"];  
?>
<head>
	
	<link rel="stylesheet" href="..\login_user_normalize.css">
	<link rel="stylesheet" href="..\login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
    <body>
        <h1> <b>Godkend ordre:</h1>

        <h2> Sendes til: </h2> <br>
        
By: <br>

Vej
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
    <link rel="stylesheet" type="text/css" href="..\kurv_style.css">
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
            <br>    <br>
Total:
<?php 
echo $total; 
echo $antal_total;
?>

<br>
<form><br>
    <a href="betingelser.html">Læs forretningsbetingelserne </a><br><br>
    <input type="checkbox" required="true" name="test" value="Jeg bestiller hermed ovenstående og bekræfter, at jeg har læst og accepterer forretningsbetingelserne"> 
    Jeg bestiller hermed ovenstående og bekræfter, at jeg har læst og accepterer forretningsbetingelserne
    <br><br>
<input type="submit" value="Godkend">
</form>