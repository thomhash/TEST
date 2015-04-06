
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../styles.php"> 
<link rel="stylesheet" type="text/css" href="../login_user.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css_menu.php">
</head>
<body  onload="LoadGmaps()" onunload="GUnload()">
<?php
$desktop=0;



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
   
    <div id="venstre">
     <?php
        include 'venstre.php';
        ?>
        </div> 
    <div id="indhold">
        <?php
        include 'om_os.php';
        ?>    
        </div>
    </div>
         
         
</body>  

</html>