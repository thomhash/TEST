<?php ob_start();
    

if (isset($_SESSION["logget_ind_kunde"])){
        
if ($_SESSION["logget_ind_kunde"] != "ja"){
$_SESSION["login_besked"] = "OBS: Denne side du prøver at tilgå kræver login";    
   header("location:frame_login.php?krav=1");
   ob_flush();
}
}
else{
   header("location:frame_login.php?krav=1");  
   ob_flush();
}

?>