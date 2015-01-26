<?php
require '../fl/fl_Mikkel_test.php';
?>
<!--Opret nyt mærke -->
<hr>
<h3> Opret nyt maerke</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Maerke:<br>

    <input type="text" name="maerke"><br>
    <input type="submit" value="Dette_er_maerke">
</form>
Nuværende mærker:
<form> 
    <select>
        <?php
        $hent = hent_maerker();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>
<hr>

<h3>Opret ny farve</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Farve:<br>

    <input type="text" name="farve"><br>
    <input type="submit" value="Dette_er_maerke">
</form>
Nuværende farver:
<form> 
    <select>
        <?php
        $hent = hent_varefarve();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>

<hr>
<h3> Opret ny størelse</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Størelse:<br>

    <input type="text" name="stoerelse"><br>
    <input type="submit" value="Send">
</form>
Nuværende Størelser:
<form> 
    <select>
        <?php
        $hent = hent_stoerrelser();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>
<hr>
<h3> Opret ny gruppe</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Gruppe:<br>

    <input type="text" name="gruppe"><br>
       
    Undergruppe <br>
    <select name="undergruppe">
          <option value="DET VIRKER">Ingen</option>
        <?php
        $hent = hent_grupper();
        foreach ($hent as list($a, $b)) {
                       ?>
            <option value="<?php echo $a;?>"><?php echo $b;?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Send">
</form>
Nuværende grupper:
 <form> 
    <select>
        <?php
        $hent = hent_grupper();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>
<hr>
<h3>Opret ny vare</h3>
<form action="../fl/opret_maerke.php" method="POST">
    Vare navn:<br>
    <input type="text" name="vare_navn"><br>
    Vare beskrivelse:<br>
    <textarea name="vare_beskrivelse" cols="40" rows="5" ... ></textarea><br>
    <input type="number" name="vare_prioritet"><br>
    Mærke:<br>
    <select name="maerke_til_vare">
        <?php
        $hent = hent_maerker();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php echo $a?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select><br>
    <br>
    <input type="submit" value="Send">
</form>


<hr>
<h3>Opret ny variant</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Vare:<br>

    <form> 
        <select name="variant_vare">
            <?php
            $hent = hent_vare();
            foreach ($hent as list($a, $b)) {
                ?>
                <option value="<?php echo $a ?>"><?php echo $b ?></option>
                <?php
            }
            ?>
        </select>
        <br>Størelse<br>
        <select name="variant_stoerelse">
            <?php
            $hent = hent_stoerrelser();
            foreach ($hent as list($a, $b)) {
                ?>
                <option value="<?php echo $a ?>"><?php echo $b ?></option>
                <?php
            }
            ?>
        </select>
        <br>Farve:<br>
        <select name="variant_farve">
            <?php
            $hent = hent_varefarve();
            foreach ($hent as list($a, $b)) {
                ?>
                <option value="<?php echo $a ?>"><?php echo $b ?></option>
                <?php
            }
            ?>
        </select>
       
        <br>Vis:<br>
        <select name="variant_vis">
            <option value="1">Ja</option>
            <option value="0">Nej</option>

        </select>
         <br>Billede:<br>
        <input type="text" name="variant_billede"><br>
        <br>Pris:<br>
        <input type="text" name="variant_pris"><br>
        <br>number:<br>
        <input type="number" name="variant_antal"><br>
    
        <input type="submit">

    </form>
    <hr>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>