<?php
// Lavet af Thomas
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<h1>Tilpas layout: </h1>
<a href="admin_menu.php">Menu</a><br>
<br>

<?php
require '../dl/parametre_dl.php';

$all_parametre=  get_all_parametre();

// Henter alle parametre fra dl-laget. Switch-case alt anhængigt om om det er et billede, en farve eller tekst 
foreach ($all_parametre as $key => $value) {
   
    switch($all_parametre[$key][2]){
    case "1":
        echo '<form action="../dl/parametre_dl.php">';
        echo '<label >'.$all_parametre[$key][0] .'</label><br>';
        echo '<input type="hidden" name="parameter" value="'.$all_parametre[$key][0] .'">';
        echo '<input type="color" name="vaerdi" value="'.$all_parametre[$key][1] .'">';
        echo '<input type="submit" value="Submit"> </form>'; 
        break;
    case "0":
        echo '<form action="../dl/parametre_dl.php">';
        echo '<label >'.$all_parametre[$key][0] .'</label><br>';
        echo '<input type="hidden" name="parameter" value="'.$all_parametre[$key][0] .'">';
        echo '<input type="text" name="vaerdi" value="'.$all_parametre[$key][1] .'" required pattern="^\S+$">';
        echo '<input type="submit" value="Submit"> </form>'; 
        break;
    case "2":
        echo '<form action="../fl/uploade_billede.php" method="POST" enctype="multipart/form-data">
        Vælg billede:<br> 
        <input type="hidden" name="parametre" value="1">
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit">
        </form>';
        echo '<form action="../dl/parametre_dl.php">';
        echo '<label >'.$all_parametre[$key][0] .'</label><br>';
        echo '<input type="hidden" name="parameter" value="'.$all_parametre[$key][0] .'">';
        echo '<input type="text" name="vaerdi" value="'.$all_parametre[$key][1] .'" required pattern="^\S+$">';
        echo '<input type="submit" value="Submit"> </form>';
        break;
    }
    
}