<?php

require '../fl/get_ordre.php';
require '../fl/get_kunde.php';
$id = $_GET['id'];  
$ordre = hent_ordre_information($id);

//$kunde = hent_kunde($id);

                    ?>
<h1>Ordre oversigt</h2>
<table style="width:100%" border="2">
                <tr>
                    <td>Variant id</td>
                    <td>Antal</td> 
                    <td>Navn</td>
                    <td>størrelse</td> 
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
