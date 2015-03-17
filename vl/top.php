<?php
require_once '../fl/tjek_mobile_browser.php';

?>

<div id="icons" align="right" >
           
    <a href="frame_indkoebskurv.php">
                <img src="..\billeder\shoppingcart.png">
                </a> 
            
            <a href="<?php if(mobile_browser()==true){echo "frame_login_mobile.php";}
                                else{echo "frame_login.php";}?>">
                <img src="..\billeder\account.png">
                </a> 
            
            </div>

 

