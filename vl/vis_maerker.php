<?php
require '../fl/fl_Mikkel_test.php';
session_start();
//include '../fl/krav_admin.php';
?>
<link rel="stylesheet" type="text/css" href="..\styles.php">

<div id="top"> Det er smart <div>
     
<div id="content">
    <div id="overskrift">
        Her er overskriften til hjemmesiden <br>
          Her er overskriften til hjemmesiden <br>
            Her er overskriften til hjemmesiden <br>
              Her er overskriften til hjemmesiden <br>
                Her er overskriften til hjemmesiden <br>
                  Her er overskriften til hjemmesiden <br>
                  
        Det er smart 
        </div>
    
    
    <div id="venstre">
        

    
        Her er det rigtige indhold<br>
        </div> 
    <div id="indhold">
        <form action="../fl/log_out.php" method="POST">
    <input type="submit" value="Log ud">
</form>
<hr>
<h3> Mulighedder: </h3> <br> 
<href>
    Opret nyt mærke <br>
    Opret ny farve <br>
    Opret ny størelse <br>
    Opret ny gruppe <br>
    Opret ny vare <br>
    Opret ny variant <br>
    <br>
    Tjek lagerstatus  <br>
    Tilføj vare til lager <br>
    <br>
    Tjek ordre <br>
    Tjek historik  <br>
</href>
<!--Opret nyt mærke -->
<hr>
<hr>
<h3> Opret nyt maerke</h3>

<form action="../fl/opret_maerke.php" method="POST">
    Maerke:<br>

    <input type="text" name="maerke"><br>
    <input type="submit" value="Send">
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
    <input type="submit" value="Send">
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
        <option value="0">Ingen</option>
<?php
$hent = hent_alle_grupper();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php echo $a; ?>"><?php echo $b; ?></option>
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
$hent = hent_alle_grupper();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>
<hr>


<h3> Forbind vare med grupper</h3>

<form action="../fl/gruppe_tjek.php" method="POST">
    Vare:<br>

      <select name="vare_til_gruppe">
        <option value="DET VIRKER">Ingen</option>
<?php
$hent = hent_vare();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php echo $a; ?>"><?php echo $b; ?></option>
            <?php
        }
        ?>
      </select><br>
    Gruppe <br>
    <select name="gruppe_til_vare">
        <option value="DET VIRKER">Ingen</option>
<?php
$hent = hent_alle_grupper();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php echo $a; ?>"><?php echo $b; ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Send">
</form>

<hr>




<h3>Uplaode billede</h3>
<form action="../fl/uploade_billede.php" method="post" enctype="multipart/form-data">
    Vælg billede:<br> 
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
<hr>

<h3>Opret ny vare</h3>
<form action="../fl/opret_maerke.php" method="POST">
    Vare navn:<br>
    <input type="text" name="vare_navn"><br>
    Vare beskrivelse:<br>
    <textarea name="vare_beskrivelse" cols="40" rows="5" ... ></textarea><br>
    Prioritet:<br>
    <input type="number" name="vare_prioritet"><br>
    Mærke:<br>
    <select name="maerke_til_vare">
<?php
$hent = hent_maerker();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php echo $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select><br>
    Gruppe:<br>
    <select name="gruppe_til_vare">
    <?php
    
$hent = hent_alle_grupper();
foreach ($hent as list($a, $b)) {
    ?>
            <option value="<?php echo $a ?>"><?php echo $b ?></option>
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
        <select name="variant_billede">
            <?php
            $hent = hent_billede();
            foreach ($hent as list($a, $b)) {
                ?>
                <option value="<?php echo $a ?>"><?php echo $b ?></option>
                <?php
            }
            ?>
        </select>
        <br>Pris:<br>
        <input type="text" name="variant_pris"><br>
        <br>number:<br>
        <input type="number" name="variant_antal"><br>

        <input type="submit">

    </form>
    <hr>
     
    
        </div>
    </div>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>