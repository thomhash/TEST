<?php
// Lavet af Thomas
require_once '../fl/tjek_mobile_browser.php';

?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

 <form name="soegning" action='frame_vis_soegeresultater.php'>
<div id="icons" align="right" >
    <input type='hidden' name='side' value="1">   
    <input  class='header-search-box' type='search' id='search-string' name='search-string' placeholder="Søg på vare">
   
<img src='http://findicons.com/files/icons/974/glyphish/18/magnifying_glass.png' class='magnifying-glass' />           
    <a href="frame_indkoebskurv.php">
                <img id="big" src="../billeder/shoppingcart.png">
                </a> 
            
            <a href="<?php if(mobile_browser()==true){echo "frame_login_mobile.php";}
                                else{echo "frame_login.php";}?>">
                <img id="big" src="../billeder/account.png">
                </a> 
            
            </div>
 </form>
 

<script src="search.js"></script>