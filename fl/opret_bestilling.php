<?php
require '../dl/opret_ordre.php';

function opret_ordre(){
  $mail =$_GET["email"]; 
  $afsendt = "nej";
  $tidbestilt = "nej";
   
     opret_ordre_d($mail,$afsendt,$tidbestilt);
     //header('Location:..\index.php');     
     header('Location:../vl/kassen_trin_4.php');
     
 }
 opret_ordre();
 function opret_ordre_harvare(){
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