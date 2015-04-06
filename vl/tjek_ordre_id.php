<?php
// Lavet af Mikkel
require '../fl/get_ordre.php';
require '../dl/get_kunde.php';
$id = $_GET['id'];  
$ordre = hent_ordre_information($id);


$id_kunde =get_kunde_fra_ordre_id($id);
$info_kunde = get_kunde_info_id($id_kunde);
?>              
<h1>Ordre oversigt</h2>

<?php 
   echo $info_kunde[0][0];
   echo " ";
   echo $info_kunde[0][1];
   ?> <br> <?php
    echo $info_kunde[0][2];
    ?> <br> <?php
    
    echo $info_kunde[0][3];
    ?> <br> <?php
    echo $info_kunde[0][4];
    ?> <br>
    <br>
<table style="width:100%" border="2">
                <tr>
                    <td>Variant id</td>
                    <td>Antal</td> 
                    <td>Navn</td>
                    <td>Variant</td> 
                    <td>Farve</td>
                    <td>Mærke</td>
                </tr>
                <?php
                $ind_rnr = 0;
                $ind_knr = 0;
                foreach (hent_enkelt_id_ordre_information($id) as $r) {
                    ?> <tr> <?php
                        foreach (hent_enkelt_id_ordre_information($id)[$ind_rnr] as $r) {
                            ?> <td><?php
                                echo hent_enkelt_id_ordre_information($id)[$ind_rnr][$ind_knr];
                                $ind_knr++;
                                ?> </td><?php
                        }
                        $ind_knr = 0;
                        $ind_rnr++;
                    }
                    ?> </tr> <?php
                $ind_rnr = 0;
           
        


?></table>
<br>

<form action="../fl/set_pakning.php" method="POST">
  
    <input type="hidden" name="type_pak" value="start">
    <input type="hidden" name="ordre_id" value="<?php echo $_GET['id']?>">
    <input type="submit" value="Begynd pakning">
</form>

<form action="../fl/set_pakning.php" method="POST">
   
    <input type="hidden" name="type_pak" value="slut">
   <input type="hidden" name="ordre_id" value="<?php echo $_GET['id']?>">
    <input type="submit" value="Afslut pakning">
</form>


<br>
