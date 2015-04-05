<?php

require '../fl/get_ordre.php';
require '../fl/get_kunde.php';
$id = $_GET['id'];  


//$kunde = hent_kunde($id);

                    ?>
<h1>Ordre oversigt</h2>
<table style="width:100%" border="2">
                <tr>
                    
                    <td>Antal</td> 
                    <td>Navn</td>
                    <td>Variant</td> 
                    <td>Farve</td>
                    <td>Mærke</td>
                    <td>Pris</td>
                </tr>
                <?php
                $ind_rnr = 0;
                $ind_knr = 0;
                foreach (hent_ordre_information_kunde($id) as $r) {
                    ?> <tr> <?php
                        foreach (hent_ordre_information_kunde($id)[$ind_rnr] as $r) {
                            ?> <td><?php
                                echo hent_ordre_information_kunde($id)[$ind_rnr][$ind_knr];
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
