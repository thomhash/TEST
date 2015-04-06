<?php
ob_start();

require_once 'tjek_mobile_browser.php';

if (isset($_POST["email"])){
opret_kunde();
}

if (isset($_GET["adresse"])){
  
indtast_kundeoplysninger();
}



function opret_kunde(){
    require '../dl/opret_kunde_dl.php';
$mail = $_POST['email'];  
$kode = $_POST['pwd1'];


$same_mail=check_kunde_mail($mail);

 if (empty($same_mail)) {
     $options = ['cost' => 12,];
  // Kodet bliver hashet og indsat i db sammen med mail   
     $hash_kode=password_hash($kode, PASSWORD_DEFAULT);
     if(!empty(check_allerede_kunde_mail($mail))){
         set_tidligere_kunde($mail, $hash_kode);
     }
     else{set_kunde($mail, $hash_kode);}
     
     if(mobile_browser()==true){header('Location:../vl/frame_login_mobile.php?kundeoplysninger=1 & mail=' .$mail);
     ob_flush();}
     else{header('Location:../vl/frame_login.php?kundeoplysninger=1 & mail=' .$mail);
     ob_flush();}
     
 }
 else{
     //Sender tilbages til oprettelseskarmen med en fejlbesked om at mail allerede eksisterer
     if(mobile_browser()==true){header('Location:../vl/frame_login_mobile.php?findes=1');
     ob_flush();}
     else{header('Location:../vl/frame_login.php?findes=1');
     ob_flush();}
     
 }
 
}
 
 function indtast_kundeoplysninger(){
     ob_start();
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
     header('Location:../vl/frame_login.php');     
     ob_flush();
     
 }

?>

