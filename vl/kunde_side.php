<?php
ob_start();
include '../fl/krav_kunde.php';
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
    <li><a href="frame_indkoebskurv.php">Se din indkøbskurv</a></li>
    <li><a href="se_ordre_kunde.php">Se dine ordre</a></li>
    <li><a href="opret_vare.php">Tilmeld/frameld nyhedsbrev </a></li>
    <li><a href="tjek_lager.php">Rediger kundeoplysninger </a></li>
</ul>  
</h3>