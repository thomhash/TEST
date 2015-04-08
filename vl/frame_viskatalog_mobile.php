<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <link rel="stylesheet" type="text/css" href="../styles_mobile.php">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css_menu.php">
   
</head>
<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="javascript_menu.js"></script>
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
    include 'top_mobile.php';
    ?>
     </div>
  
  

    
    <div id="menu">
       <?php
        include 'vis_menu_mobile.php';
        ?>
        </div>
   
     
    <div id="indhold">
        <?php
        include 'vis_katalog.php';
        ?>    
        </div>

    
         
</body>  

</html>