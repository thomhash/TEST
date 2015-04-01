<?php if(session_id() == '') {
    session_start();
}?>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
   <link rel="stylesheet" type="text/css" href="../styles_mobile.php"> 
</head>
<body>
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
        include 'kassen_trin_3.php';
        ?>    
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
