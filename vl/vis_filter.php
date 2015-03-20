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
                <input type="hidden" name="page" value="1" checked/>
                <legend>Mærke</legend>
                        <?php if(empty ($alle_maerker)){echo "ingen mærker";}
                            else {foreach ($alle_maerker as $value) {
                            echo '<input type="checkbox" name="maerke[]" value="'.$value.'"';
                            if(!empty($maerke)&&$maerke!=0){
                                foreach ($maerke as $value2) {
                                    if($value==$value2){ echo "checked";}
                            }} echo '/>'.$value;
                            }}?> <br><br>
                <legend>Størrelser</legend>            
                         <?php  if(empty ($alle_stoerrelser)){echo "størrelser";}
                            else {foreach ($alle_stoerrelser as $value) {
                            echo '<input type="checkbox" name="stoerrelser[]" value="'.$value.'"'; 
                            if(!empty($stoerrelser)&&$stoerrelser!=0){
                                foreach ($stoerrelser as $value3) {
                                    if($value==$value3){ echo "checked";}
                            }}
                            echo '/>'.$value;
                            }}?><br><br>
                <legend>Farver</legend>            
                         <?php if(empty ($alle_farver)){echo "ingen farver";}  
                            else {foreach ($alle_farver as $value) {
                            echo '<input type="checkbox" name="farver[]" value="'.$value.'"';
                            if(!empty($farver)&&$farver!=0){
                                foreach ($farver as $value4) {
                                    if($value==$value4){ echo "checked";}
                            }}        
                            echo '/>'.$value;
                            }}?><br><br>
                <legend>Pris </legend>
                
                <input name="pris_min" type="number" min="0" max="999999" placeholder="min" value="<?php echo $pris_min;  ?>" step="1"  />
                <input name="pris_max" type="number" min="0" max="999999" value="<?php echo $pris_max;  ?>" step="1" placeholder="max" />
                       <br><br><br><input type="submit" value="Søg" />
        </fieldset>
</form>
    
        
<?php

?>
</body>
</html>