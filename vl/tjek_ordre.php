<?php
require '../fl/get_ordre.php';

$ordre = hent_ordre_ikke_begyndt();

print_r($ordre);
echo "-----------------------------------------";
echo "<br>";
$rnr = 0;
$knr = 0;
?>
<table style="width:100%">
    <tr>
        <td>Ordre</td>

        <td>Kunde</td> 

    </tr>
    <tr>
        <td>Eve</td>

        <td>Kunde</td> 
    </tr>
    <tr>
        <td>Navn</td>
        <td>Størrelse</td> 
        <td>Farve</td>
        <td>Pris</td> 
        <td>Antal</td>

    </tr>
    <tr>
        <td>Navn</td>
        <td>Størrelse</td> 
        <td>Farve</td>
        <td>Pris</td> 
        <td>Antal</td>
    </tr>
</table>
<table style="width:100%" border="2">
    <?php
    foreach ($ordre as $rn) {
        ?>
    
        <tr>
            <br>
            <td>Pak ordre</td>
            <td>Ordre id</td>
            <td>Kunde</td> 
        </tr>
        <?php
        foreach ($ordre[$rnr] as $rn) {
            if ($knr == 0) {
                ?> <tr> <td>
                <a href="tjek_ordre_id.php?id=?<?php$ordre[$rnr][0];?>"> Pak </a>
                    </td>
                    <td><?php
                        echo ($ordre[$rnr][0]);
                        ?></td><td><?php
                        echo ($ordre[$rnr][1]);
                        ?> </td></tr> <?php
                }

                if ($knr == 0) {
                    ?>
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
                foreach (hent_ordre_information($ordre[$rnr][$knr]) as $r) {
                    ?> <tr> <?php
                        foreach (hent_ordre_information($ordre[$rnr][$knr])[$ind_rnr] as $r) {
                            ?> <td><?php
                                echo hent_ordre_information($ordre[$rnr][$knr])[$ind_rnr][$ind_knr];
                                $ind_knr++;
                                ?> </td><?php
                        }
                        $ind_knr = 0;
                        $ind_rnr++;
                    }
                    ?> </tr> <?php
                $ind_rnr = 0;
                $knr++;
            }
        }
        $knr = 0;
        $rnr++;

        echo "<br>";
    }