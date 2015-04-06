<?php
if(session_id() == '') {
    session_start();
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css_menu.php">
    <link rel="stylesheet" type="text/css" href="../styles.php">
</head>
<body>


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
        include 'kurv_oversigt.php';
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
