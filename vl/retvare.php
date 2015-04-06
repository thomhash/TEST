<?php
// Lavet af Mikkel
require '../fl/get_vare.php';
//require '../fl/ret_vare_beskrivelse.php';

$id = $_GET['id'];
 if (isset($_GET['ret'])){
     $ret = $_GET['ret'];
     
     if ($ret == "1")
     {
        echo' <script language="javascript" type="text/javascript">
                   alert("Redigering er gennemført!");
               </script>';
     }
     else{
         echo' <script language="javascript" type="text/javascript">
                   alert("OBS: Fejl i redigering");
               </script>';
     }
 }
 
?><h1>
<?php
$vare_navn= get_vare_navn_f($id);
$variant_info = get_vare_info_f($id);
$vare_info = get_aktiv_vare_fra_vare_id($variant_info[0][9]);
echo $vare_navn[0][0];
?>
</h1>      
<a href="tjek_lager.php">Lager </a><br>
<a href="admin_menu.php">Menu</a><br>
<br>
<hr>
Er vare aktiv i sortimanet:  <br>
<?php 
if ($vare_info[0][0] == 0)
{
    echo "Nej";
}else
{
    echo "Ja";
}
; ?>
<br>
Skal vare være aktiv i sortimanet:  <br>
<form action="../fl/ret_vare.php?id=<?php echo $id ?>" method="POST">
    
    <select name="aktiv_vare">

            <option value="0">Nej</option>
            <option value="1">ja</option>
    </select>
    
    <input type="hidden" name="rediger" value="aktiv_vare"><br>
    <input type="submit" name="submit">
</form>
        <hr>
</center></h2>
    Information: <br> 
    <br> 
     <?php
     echo "Antal på lager <br>";
     echo $variant_info[0][6];
     echo "<br> Variant: <br>";
     echo $variant_info[0][2];
     echo "<br>Farve: <br>";
     echo $variant_info[0][3];
     echo "<br>Mærke: <br>";
     echo $variant_info[0][4];

    ?>
    <br>
    <hr>
    Pris:
    <?php
   
    echo $variant_info[0][5];
    ?>
    <br>
Ny pris: 
<form name="pris_form" action="../fl/ret_vare.php?id=<?php echo $id ?>" method="POST" onsubmit="return validateForm()">
    <input type="input" name="ny_pris" value="">
    
  
    <input type="hidden" name="rediger" value="pris_form"><br>
    <input type="submit" name="submit" >
</form>
<hr>
    
Nuværende beskrivelse:<br>  
<?php
$vare_beskrivelse = get_vare_beskrivelse_vare_f($id);
echo $vare_beskrivelse[0][0];
?><br><br>
 <form action="../fl/ret_vare_beskrivelse.php?id=<?php echo $id ?>" method="POST">
    
     
    Ny beskrivelse:<br>
    <textarea name="vare_beskrivelse" cols="40" rows="5"></textarea><br>
    <input type="submit" value="Send"> 
 </form>

<hr>
vare prioritet: 
<?php
$prioritet= get_vare_prioritet_f($id);

echo $prioritet[0][0];
?>
<br> 
Ny prioritet:<br>
 <form action="../fl/ret_vare.php?id=<?php echo $id ?>" method="POST">
     <input type="hidden" name="rediger" value="prioritet">
     <input type="number" name="vare_prioritet"><br>
    <input type="submit" value="Send"> 
 </form>
<hr>
<br> 
Bliver vis i kataloget: <br>
<?php 
if ($variant_info[0][7] == 0)
{
    echo "Nej";
}else
{
    echo "Ja";
}
; ?>
<br>
skal vises i kataloget: 
<form action="../fl/ret_vare.php?id=<?php echo $id ?>" method="POST">
    
    <select name="vis_variant">

            <option value="0">Nej</option>
            <option value="1">ja</option>
    </select>
    
    <input type="hidden" name="rediger" value="vis_variant"><br>
    <input type="submit" name="submit">
</form>
<hr>

Er aktiv i sortimanet:  <br>
<?php 
if ($variant_info[0][8] == 0)
{
    echo "Nej";
}else
{
    echo "Ja";
}
; ?>
<br>
Skal være aktiv i sortimanet:  <br>
<form action="../fl/ret_vare.php?id=<?php echo $id ?>" method="POST">
    
    <select name="aktiv_variant">

            <option value="0">Nej</option>
            <option value="1">ja</option>
    </select>
    
    <input type="hidden" name="rediger" value="aktiv_variant"><br>
    <input type="submit" name="submit">
</form>
<hr>
<br> 

<br> 
Billede:<br><br>
Vælg nyt billede:
<formaction="../fl/uploade_billede.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
<hr>


         <script>   
             
  function validateForm() {
    var x = document.forms["pris_form"]["ny_pris"].value;
    if (isNaN(x)==true) {
        alert('OBS: Skriv et tal, brug "." som komma');
        return false;
    }
}


function rettelse_ok() {
    alert("rettelse ok..");
}
function rettelse_ikke_ok() {
    alert("rettelse ikke ok..");
}
</script>
</script>
