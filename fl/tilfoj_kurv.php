<?php
session_start();
require '../fl/get_lager.php';

$vare_antal_nu =0;

if (isset($_POST['variant_id'])){
    $vare_id = $_POST['variant_id']; 
   
}

if (isset($_POST['variant_antal'])){
    $vare_antal_tilfoj = $_POST['variant_antal']; 
  
}

if (isset($_GET['variant_id'])){
    $vare_id = $_GET['variant_id']; 
   
}

if (isset($_GET['variant_antal'])){
    $vare_antal_tilfoj = $_GET['variant_antal']; 
  
}


if (isset($_POST['slet_vare'])){
    
}

if (isset($_POST['rediger'])){
    echo "Du har lagt f varianti kurven:";
    echo $vare_id;
    echo "DEter fedt!";
    
    $vare_antal_tilfoj = $_POST['rediger'];
    
}


if(isset($_SESSION['kurv'][$vare_id])){
    $vare_antal_nu = $_SESSION["kurv"][$vare_id];
    echo "hej";
    
    
}
tjek_lager($vare_id,$vare_antal_tilfoj+$vare_antal_nu);

function tjek_lager($id_variant,$antal)
{
    $lager_for_id = hent_lager_id($id_variant)[0];
    echo "lager";
    echo $lager_for_id[0];
    if($lager_for_id[0] >= $antal){
        $_SESSION["kurv"][$id_variant] = $antal;
        header('Location:../vl/kurv_oversigt.php');
    }
    else
    {
        
        header('Location:../vl/kurv_oversigt.php?lager=nej');
        ?> 


<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>

<?php
    }
}





$antal_vare=0;

$antal_vare_2 = array_sum($_SESSION["kurv"]); 

foreach($_SESSION["kurv"] as $id=>$value){
    $antal_vare += $value;
    }

 
echo "Antal vare i kurven:"; 
 echo $antal_vare_2;  

print_r($_SESSION["kurv"]);


//session_destroy();
/* 
foreach($_SESSION as $key => $value) {
    echo  'Current session variable' . $key . ' is: ' . $value . '<br />';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

