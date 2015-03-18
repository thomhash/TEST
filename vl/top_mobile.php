<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../fl/tjek_mobile_browser.php';
?>
<div id="overskrift_img";>
<a href="frame_frontpage_mobile.php">
             <img src="../billeder/overskrift.jpg">
                 </a>

</div>
<div id="icons" align="right" >
           
            <a href="kurv_oversigt.php">
                <img src="../billeder/shoppingcart.png">
                </a> 
            
            <a href="<?php if(mobile_browser()==true){echo "frame_login_mobile.php";}
                                else{echo "frame_login.php";}?>">
                <img src="../billeder/account.png">
                </a> 
            
            </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

 



 <?php //include 'lille_kurv.php'; ?>





