
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../styles.php"> 
<link rel="stylesheet" type="text/css" href="../login_user.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css_menu.php">
</head>
<body>
<?php
$desktop=0;

if (isset($_GET["desktop"])){
$desktop=$_GET["desktop"];
}


?>
 


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
   <div id="indhold">
        <?php
        include 'tjek_ordre_id_kunde.php';
        ?>    
        </div>
    <div id="venstre">
     <?php
        include 'venstre.php';
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