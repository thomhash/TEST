<?php
ob_start();

require_once 'fl/tjek_mobile_browser.php';
if(mobile_browser()==true){
    
    header("Location:vl/frame_frontpage_mobile.php");
            die();
            ob_flush();
}
else{
    header("Location:vl/frame_frontpage.php");
    die();
    ob_flush();
}
?>
