<?php
ob_start();
//header("Location:vl/frame_frontpage.php");
//die();

    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            echo "Dette er mobile browser";
            header("Location:vl/frame_frontpage_mobile.php");
            die();
            ob_flush();
        }
        
    }
   
    header("Location:vl/frame_frontpage.php");
    die();
    ob_flush();
      
?>