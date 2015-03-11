<html>
<head>
        
</head>    
<body>
    <?php
    
    require '../fl/filter_fl.php';
    //$gruppenr = $_GET['gruppe'];
    //$gruppenr=6;
    //$side = $_GET['page'];
    // Tjekker om man har valgt en kategori. Hvis $gruppenr=0 vises alle maerker som har tilknyttet en vare, som er i en gruppe
   
    
    $alle_maerker=  hent_gruppe_maerker($gruppenr);
    $alle_stoerrelser=  hent_gruppe_stoerrelser($gruppenr);
    $alle_farver=  hent_gruppe_farver($gruppenr);
    
   
    
    ?>
    <br>
<form name='maerker' action="frame_viskatalog.php">
        <fieldset>
          
                <legend>Filtrer søgning</legend>
                <input type="hidden" name="gruppe" value="<?php echo $gruppenr; ?>" checked/>
                <input type="hidden" name="page" value="<?php echo $side; ?>" checked/>
                <legend>Mærke</legend>
                        <?php if(empty ($alle_maerker)){echo "Der er ingen mærker i denne gruppe";}
                            else {foreach ($alle_maerker as $value) {
                            echo '<input type="checkbox" name="maerke[]" value="'.$value.'" />'.$value;
                            }}?> <br><br>
                <legend>Størrelser</legend>            
                         <?php  if(empty ($alle_stoerrelser)){echo "Der er ingen størrelser i denne gruppe";}
                            else {foreach ($alle_stoerrelser as $value) {
                            echo '<input type="checkbox" name="stoerrelser[]" value="'.$value.'" />'.$value;
                            }}?><br><br>
                <legend>Farver</legend>            
                         <?php if(empty ($alle_farver)){echo "Der er ingen farver i denne gruppe";}  
                            else {foreach ($alle_farver as $value) {
                            echo '<input type="checkbox" name="farver[]" value="'.$value.'" />'.$value;
                            }}?><br><br>
                <legend>Pris </legend>
                <input name="pris_min" type="number" min="0" max="99999" step="1" placeholder="min" />
                <input name="pris_max" type="number" min="0" max="99999" step="1" placeholder="max" />
                       <br><br><br><input type="submit" value="Søg" />
        </fieldset>
</form>
    
        
<?php

?>
</body>
</html>