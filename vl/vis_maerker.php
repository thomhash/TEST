<?php
require '../fl/fl_Mikkel_test.php';
?>
<!--Opret nyt mærke -->
<hr>
Opret nyt maerke 
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

Opret ny farve
<form action="../fl/opret_maerke.php" method="POST">
    Maerke:<br>
    
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
Opret ny størelse
<form action="../fl/opret_maerke.php" method="POST">
    Størelse:<br>
    
    <input type="text" name="stoerelse"><br>
    <input type="submit" value="Dette_er_maerke">
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

<hr>
Opret ny vare
<form action="../fl/opret_maerke.php" method="POST">
    Vare navn:<br>
    <input type="text" name="navn"><br>
    Vare beskrivelse:<br>
    <input type="text" name="beskrivelse"><br>
    Vare beskrivelse:<br>
    <input type="text" name="prioritet"><br>
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

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>