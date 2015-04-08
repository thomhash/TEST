<?php if(session_id() == '') {
    session_start();
}?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css_menu.php">
      
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
   <link rel="stylesheet" type="text/css" href="../styles_mobile.php"> 
</head>
<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript_menu.js"></script>
<?php


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
        include 'kurv_oversigt.php';
        ?>    
        </div>
    
         
         
</body>  

</html>