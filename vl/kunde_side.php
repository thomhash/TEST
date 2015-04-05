<?php
ob_start();
include '../fl/krav_kunde.php';

require_once '../fl/tjek_mobile_browser.php';
?>
<br>
<center>
<form action="../fl/log_out.php">
    <input type="submit" value="Log ud">
</form>
</center>
<h2> Kunde oversigt </h2>
<h3>
<ul>
    <li><a href="frame_indkoebskurv<?php if(mobile_browser()){echo"_mobile";}?>.php">Se din indkøbskurv</a></li>
    <li><a href="frame_se_ordre_kunde.php">Se dine ordre</a></li>
    <li><a href="opret_vare.php">Tilmeld/frameld nyhedsbrev </a></li>
    <li><a href="ret_bruger.php">Rediger kundeoplysninger </a></li>
</ul>  
</h3>
