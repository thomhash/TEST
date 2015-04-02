<?php if(session_id() == '') {
session_start();
}?>
<html>

<head>
   
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
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
        include 'venstre.php';
        ?>
        </div> 
    <div id="indhold">
        <?php
        include 'kassen_trin_3.php';
        ?>    
        </div>
    </div>
         
         
</body>  

</html>