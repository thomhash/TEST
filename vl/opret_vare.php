<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
    
</head> 
<?php
require '../fl/get_vare_info.php';
session_start();
// include '../fl/krav_admin.php';
?>
<link rel="stylesheet" type="text/css" href="../styles.php">
<h1>Opret vare: </h1>
<a href="admin_menu.php">Menu</a><br>

 
<h3> Muligheder: </h3> 
<href>
    
    <a href="#mærke">Opret nyt mærke </a><br>
    <a href="#farve">Opret ny farve </a><br>
    <a href="#størelse">Opret ny størtelse </a><br>
    <a href="#gruppe">Opret ny gruppe </a><br>
    <a href="#billede">Opret nyt billede </a><br>
   <a href="#vare"> Opret ny vare</a> <br>
   <a href="#variant">Opret ny variant </a><br>
    
</href>
<!--Opret nyt mærke -->
<br>
<hr>
<h3> <a id="mærke">Opret nyt mærke</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    Mærke:<br>

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

<h3><a id="farve">Opret ny farve</a></h3>

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
<h3> <a id="størelse">Opret ny størrelse</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    Størrelse:<br>

    <input type="text" name="stoerelse"><br>
    <input type="submit" value="Send">
</form>
Nuværende Størrelser:
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
<h3> <a id="gruppe">Opret ny gruppe</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    Gruppe:<br>

    <input type="text" name="gruppe"><br>

    Overgruppe <br>
    <select name="overgruppe">
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


<h3> <a id="forbind">Forbind vare med grupper</a></h3>

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




<h3><a id="billede">Upload billede</a></h3>
<form action="../fl/uploade_billede.php" method="post" enctype="multipart/form-data">
    Vælg billede:<br> 
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
<hr>

<h3><a id="vare">Opret ny vare</h3>
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
<h3><a id="variant">Opret ny variant</a></h3>

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
        <br>Størrelse<br>
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
