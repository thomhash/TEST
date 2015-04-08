<?php 
 ob_start();
if(session_id() == '') {
    session_start();
}?>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css_menu.php">
   <link rel="stylesheet" href="../login_user.css">
<link rel="stylesheet" type="text/css" href="../styles.php">

    
</head>
<body>
<?php



if (isset($_SESSION["logget_ind_kunde"])){
        
if ($_SESSION["logget_ind_kunde"] == "ja"){
    
header("location:frame_kunde_menu.php");
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
        if($kundeoplysninger==1){ include 'indtast_kundeoplysninger.php'; }
            else {if($opretbruger==1 || $findes==1){include 'opret_kunde.php';}
                     else {include 'login_kunde.php';}}
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
