<h1>Tilpas layout: </h1>
<a href="admin_menu.php">Menu</a><br>
<br>

<?php
require '../dl/parametre_dl.php';

$all_parametre=  get_all_parametre();


foreach ($all_parametre as $key => $value) {
    if($all_parametre[$key][2]==1){
        echo '<form action="../dl/parametre_dl.php">';
        echo '<label >'.$all_parametre[$key][0] .'</label><br>';
        echo '<input type="hidden" name="parameter" value="'.$all_parametre[$key][0] .'">';
        echo '<input type="color" name="vaerdi" value="'.$all_parametre[$key][1] .'">';
        echo '<input type="submit" value="Submit"> </form>'; 
    }
    else{
        echo '<form action="../dl/parametre_dl.php">';
        echo '<label >'.$all_parametre[$key][0] .'</label><br>';
        echo '<input type="hidden" name="parameter" value="'.$all_parametre[$key][0] .'">';
        echo '<input type="text" name="vaerdi" value="'.$all_parametre[$key][1] .'" required pattern="^\S+$">';
        echo '<input type="submit" value="Submit"> </form>'; 
        
    }
    
    
}