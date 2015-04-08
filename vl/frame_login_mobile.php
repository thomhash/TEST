<?php 
 ob_start();
if(session_id() == '') {
    session_start();
}?>
<html>

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
 <link rel="stylesheet" type="text/css" href="../styles_mobile.php">   
 <link rel="stylesheet" href="../login_user.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css_menu.php">
 
 
 
</head>
<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="javascript_menu.js"></script>
<?php
if (isset($_SESSION["logget_ind_kunde"])){
        
if ($_SESSION["logget_ind_kunde"] == "ja"){
    
header("location:frame_kunde_menu_mobile.php");
ob_flush();
}

}
$opretbruger=0;
$findes=0;
$kundeoplysninger=0;
// Tjekker om der ønskes at oprette en ny bruger, eller blot at logge ind. Indhold ændrer sig udfra hvad man har valgt
if (isset($_GET["opretbruger"])){
$opretbruger=$_GET["opretbruger"];
}
if (isset($_GET["findes"])){
$findes=$_GET["findes"];
}
if (isset($_GET["kundeoplysninger"])){
$kundeoplysninger=$_GET["kundeoplysninger"];
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
        if($kundeoplysninger==1){ include 'indtast_kundeoplysninger.php'; }
            else {if($opretbruger==1 || $findes==1){include 'opret_kunde.php';}
                     else {include 'login_kunde.php';}}
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