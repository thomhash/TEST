<html>

<head>
   
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css_menu.php">
        <link rel="stylesheet" type="text/css" href="../styles.php">
</head>
<body>
<?php



 $gruppenr = $_GET['gruppe'];
   $side = $_GET['page'];
   
    $maerke=0;
    $stoerrelser=0;
    $farver=0;
    $pris_min=0;
    $pris_max=999999;
    
     if (isset($_GET["maerke"]) && !empty($_GET["maerke"])){
         $maerke=$_GET["maerke"];
     }
      if (isset($_GET["stoerrelser"]) && !empty($_GET["stoerrelser"])){
         $stoerrelser=$_GET["stoerrelser"];
     }
     if (isset($_GET["farver"]) && !empty($_GET["farver"])){
         $farver=$_GET["farver"]; 
         }
     if (isset($_GET["pris_min"])&&$_GET["pris_min"]!="" ){
         $pris_min=$_GET["pris_min"];
     }
     if (isset($_GET["pris_max"])&&$_GET["pris_max"]!=""){
         $pris_max=$_GET["pris_max"];
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
        include 'vis_katalog.php';
        ?>    
        </div>
    <div id="venstre">
     <?php
        include 'vis_filter.php';
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
