<?php if(session_id() == '') {
    session_start();
}?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

</head> 
<?php
require '../fl/get_vare_info.php';

// include '../fl/krav_admin.php';
?>
<link rel="stylesheet" type="text/css" href="../styles.php">
<h1>Opret vare: </h1>
<a href="admin_menu.php">Menu</a><br>


<h3> Mulighedder: </h3> 
<href>

    <a href="#mærke">Opret nyt mærke </a><br>
    <a href="#farve">Opret ny farve </a><br>
    <a href="#type_beskrivelse">Opret ny type beskrivelse</a><br>
    <a href="#type_variabel">Opret ny type variabel</a><br>
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
    Maerke:<br>
    <input type="hidden" name="type_rediger" value="maerke">
    <input type="text" name="maerke" required><br>
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
    <input type="hidden" name="type_rediger" value="farve">
    <input type="text" name="farve" required><br>
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

<h3><a id="type_beskrivelse">Opret ny type beskrivelse</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    type beskrivelse:<br>
    <input type="hidden" name="type_rediger" value="type_beskrivelse">
    <input type="text" name="type_beskrivelse" required><br>
    <input type="submit" value="Send">
</form>
Nuværende farver:
<form> 
    <select>
        <?php
        $hent = hent_type_beskrivelser();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php $a ?>"><?php echo $b ?></option>
            <?php
        }
        ?>
    </select>
</form>
<hr>

<h3> <a id="forbind">Opret ny type variabel</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    Vare:<br>
    <input type="hidden" name="type_rediger" value="type_variabel" required>
    <select name="type_beskrivelse_id">
        <?php
        $hent = hent_type_beskrivelser();
        foreach ($hent as list($a, $b)) {
            ?>
            <option value="<?php echo $a; ?>"><?php echo $b; ?></option>
            <?php
        }
        ?>
    </select><br><br>Variabel:<br>
    <input type="text" name="type_vaerdi"><br>

    <br>
    <input type="submit" value="Send">
</form>

<hr>

<h3> <a id="gruppe">Opret ny gruppe</a></h3>

<form action="../fl/opret_maerke.php" method="POST">
    Gruppe:<br>
    <input type="hidden" name="type_rediger" value="gruppe" required>
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
    <input type="hidden" name="type_rediger" value="vare_til_gruppe">
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
    <select name="gruppe_til_vare" >
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
    <input type="hidden" name="type_rediger" value="opret_ny_vare">
    Vare navn:<br>
    <input type="text" name="vare_navn" required><br>
    Vare beskrivelse:<br>
    <textarea name="vare_beskrivelse" cols="40" rows="5" required></textarea><br>
    Prioritet:<br>
    <input type="number" name="vare_prioritet" required><br>
    Mærke:<br>
    <select name="maerke_til_vare" required>
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
    Type beskrivelse:<br>
    <select name="type_beskrivelse">
        <?php
        $hent = hent_type_beskrivelser();
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
    <input type="hidden" name="type_rediger" value="opret_ny_variant">
    <input type="hidden" name="vare_id" value="<?php if (isset($_GET['vare_id'])) {
            echo $_GET['vare_id'];
        } ?>">
    Vare:<br>

    
        <select id="variant_vare" name="variant_vare">
            <option> Vælg:</option>
            <?php
            $hent = hent_vare();
            foreach ($hent as list($a, $b, $c)) {
                ?>
                <option href="../vl/opret_vare.php?type_beskrivelse_id=<?php echo $c ?>&vare_id=<?php echo $a ?>" value="<?php echo $a ?>"><?php echo $b ?></option>
                <?php
            }
            ?>
        </select>
        <br>
        <br>
        vare valgt: <br><strong>
            <?php
            if (isset($_GET['vare_id'])) {
                echo(hent_vare_navn_fra_id($_GET['vare_id'])[0][0]);
            }
            ?></strong>
        <br>variant:<br>
        <select name="type_beskrivelse_id">
            <?php
            if (isset($_GET['type_beskrivelse_id'])) {
                $hent = hent_type_tekst2($_GET['type_beskrivelse_id']);
            } else {
                $hent = hent_type_beskrivelser();
            }
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
        <input type="text" name="variant_pris" required><br>
        <br>Antal på lager:<br>
        <input type="number" name="variant_antal" required><br>

        <input type="submit">

    </form>
    <hr>


   

    <script>
        document.getElementById('variant_vare').onchange = function () {
            window.location.href = this.children[this.selectedIndex].getAttribute('href');
        }
    </script>