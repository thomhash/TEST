<?php
// Lavet af Mikkel
require '../fl/get_ordre.php';

$ordre = hent_alle_ordre_fra_kunde_id($_SESSION["bruger_id"][0]);

 
//echo $_SESSION["bruger_id"][0];
$rnr = 0;
$knr = 0;
?>
<h2> Dine ordre: </h2> 
<table style="width:40%" border="2">
    <?php
   
        ?>
        <tr>
           
            <td>Dato bestilt:</td>
            <td>Status:</td> 
        </tr>
        <?php
        foreach ($ordre as $rn) {
            
                ?> <tr> 
                    <td>
                        <a href="frame_kunde_vis_enkel_ordre.php?id=<?php echo $ordre[$rnr][0]; ?>"> <?php echo ($ordre[$rnr][3]); ?> </a>
                    </td>
                    <td>
                        <?php if(($ordre[$rnr][2]) != NULL){echo "Behandlet og afsendt";}else if (($ordre[$rnr][4]) != NULL){echo "Pakning begyndt";}else { echo "Ordre modtaget"; }?>
                    </td>
                   
                </tr> 
        <?php  
        $rnr++;
    } 
    
            ?> 
