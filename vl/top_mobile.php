<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../fl/tjek_mobile_browser.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<form name="soegning" action='frame_vis_soegeresultater_mobile.php'>
<div id="overskrift_img">
<a href="frame_frontpage_mobile.php">
             <img src="../billeder/overskrift.jpg">
                 </a>

</div>
<div id="icons" align="right" >
    
    
   

           
            <a href="kurv_oversigt.php">
                <img id="big" src="../billeder/shoppingcart.png">
                </a> 
            
            <a href="<?php if(mobile_browser()==true){echo "frame_login_mobile.php";}
                                else{echo "frame_login.php";}?>">
                <img id="big" src="../billeder/account.png">
                </a> 
            
            </div>
<br>

 <input type='hidden' name='side' value="1">  
<input  class='header-search-box' type='search' id='search-string' name='search-string' placeholder="Søg på vare" >
<img src='    http://findicons.com/files/icons/974/glyphish/18/magnifying_glass.png' class='magnifying-glass' />    

</form>
<script src="search.js"></script>

 



 <?php //include 'lille_kurv.php'; ?>





