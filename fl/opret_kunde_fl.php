<?php
ob_start();
header('Content-type: text/html; charset=utf-8');

if (isset($_GET["email"])){
opret_kunde();
}

if (isset($_GET["adresse"])){
  
indtast_kundeoplysninger();
}



function opret_kunde(){
    require '../dl/opret_kunde_dl.php';
$mail = $_GET['email'];  
$kode = $_GET['pwd1'];

$same_mail=check_kunde_mail($mail ,$kode);

 if (empty($same_mail)) {
     $options = ['cost' => 12,];
  // Kodet bliver hashet og indsat i db sammen med mail   
     $hash_kode=password_hash($kode, PASSWORD_DEFAULT);
     set_kunde($mail, $hash_kode);
     
     header('Location:../vl/frame_login.php?kundeoplysninger=1 & mail=' .$mail);
     ob_flush();
     
 }
 else{
     //Sender tilbages til oprettelseskarmen med en fejlbesked om at mail allerede eksisterer
     header('Location:../vl/frame_login.php?findes=1');
     ob_flush();
     
 }
 
}
 
 function indtast_kundeoplysninger(){
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

?>

