<?php
require '../fl/fl_Mikkel_test.php';
session_start();

?>
<link rel="stylesheet" type="text/css" href="../styles.php">

<div id="top"> 
    
    <?php
    include 'top.php';
    ?>
    
    <div>
     
<div id="content">
    <div id="overskrift">
       <?php
        include 'overskrift.php';
        ?>
        </div>
    
    
    <div id="venstre">
     <?php
        include 'venstre.php';
        ?>
        </div> 
    <div id="indhold">
        <?php
        include 'login_bruger.php';
        ?>    
        </div>
    </div>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>