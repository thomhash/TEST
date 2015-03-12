<?php
require '../dl/opret_ordre.php';
session_start();
function opret_ordre(){
  $mail =$_GET["email"]; 
  $afsendt = "nej";
  $tidbestilt = "nej";
   
    $id_ordre = opret_ordre_d($mail,$afsendt,$tidbestilt);
    
     $vare = $_SESSION["kurv"]; 
     
     foreach($vare as $id=>$antal){
     opret_ordre_har_vare($id_ordre,$antal,$id);
   
    }

//header('Location:..\index.php');     
     // skal bruges -->     header('Location:../vl/kassen_trin_4.php');
     
 }
 opret_ordre();
 //opret_ordre_harvare();
 get_ordre();
 
 function opret_ordre_harvare(){
     
    
    
     set_kundeoplysninger($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
     //header('Location:..\index.php');     
     
     
 }
  function opret_faktura(){
     require '../dl/opret_kunde_dl.php';
     $fornavn = $_GET['fornavn'];
     $efternavn = $_GET['efternavn'];
     $tlf = $_GET['tlf'];
     $adresse = $_GET['adresse'];
     $postnr = $_GET['postnr'];
     $by = $_GET['by'];
     $nyhed = null;
     
     // Hvis nyhedsboxen er tjekket af sættes vaerdien til 1
    if (isset($_GET["nyhedsbrev"])){
        $nyhed=$_GET["nyhedsbrev"];
        }
     
     $mail = $_GET['mailadr'];   
     
     set_kundeoplysninger($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
     //header('Location:..\index.php');     
     
     
 }