<?php ob_start();
 require_once 'tjek_mobile_browser.php';
if(session_id() == '') {
    session_start();
} 
$_SESSION["logget_ind_kunde"] = "nej";
   $_SESSION["bruger_id"] = NULL; 
if(mobile_browser()){header("location:../vl/frame_frontpage_mobile.php");
ob_flush();
}
else{header("location:../vl/frame_frontpage.php");
ob_flush();
}   
   
 
