<html>

<head>
   
    
</head>
<body>
<?php

 $gruppenr = $_GET['gruppe'];
   $side = $_GET['page'];

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
    <div id="menu">
       <?php
        include 'vis_menu.php';
        ?>
        </div>
    <div id="venstre">
     <?php
        include 'vis_filter.php';
        ?>
        </div>
     
    <div id="indhold">
        <?php
        include 'vis_katalog.php';
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