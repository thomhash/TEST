<html>


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
<?php
require 'fl/fl_Mikkel_test.php';
session_start();

?>


<div id="top"> 
    
    <?php
    include 'vl\top.php';
    ?>
     <div>
  
<div id="content">
    <div id="overskrift">
       <?php
        include 'vl\overskrift.php';
        ?>
        </div>
    <div id="menu">
       <?php
        include 'vl\vis_menu.php';
        ?>
        </div>
   
    <div id="venstre">
     <?php
        include 'vl\venstre.php';
        ?>
        </div> 
    <div id="indhold">
        <?php
        include 'vl\indhold.php';
        ?>    
        </div>
    </div>
         
         
</body>  

</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>