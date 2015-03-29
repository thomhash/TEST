<?php
 require '../dl/opret_kunde_dl.php';
if(session_id() == '') {
    session_start();
}
 
 
     $fornavn = $_GET['fornavn'];
     $efternavn = $_GET['efternavn'];
     $tlf = $_GET['tlf'];
     $adresse = $_GET['adresse'];
     $postnr = $_GET['postnr'];
     $by = $_GET['by'];
     $mail = $_GET['email'];  
     $nyhed = null;
     // Hvis nyhedsboxen er tjekket af sættes vaerdien til 1
        if (isset($_GET["nyhedsbrev"])){
        $nyhed=$_GET["nyhedsbrev"];
        }
        
    $same_mail=check_kunde_mail($mail);
    //print_r($same_mail);
    $er_bruger=check_kode($mail);
    if (!empty($er_bruger) && $_SESSION["logget_ind_kunde"] != "ja") {
             
        header('Location:../vl/frame_login.php?kob=1');
         ob_flush();
    }
    else if (!empty($same_mail) && $_SESSION["logget_ind_kunde"] == "ja") {
              
         ret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
         header('Location:../vl/frame_kassen_trin_2.php?mail='.$mail);          
         ob_flush();
    }
    else {
              
     opret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
    }
     
    
    
    
     function opret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed){          
         echo "Opretter ny kunde";
         $id_kunde = opret_kunde_ved_kob($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
    header('Location:../vl/frame_kassen_trin_2.php?mail='.$mail);
      }
      
      
      
      
       function ret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed){      
    
              
     $id_kunde = set_kundeoplysninger($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
   header('Location:../vl/frame_kassen_trin_2.php?mail='.$mail);
      }
