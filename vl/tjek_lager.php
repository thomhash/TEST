<?php
// Lavet af Mikkel
require '../fl/get_lager.php';
?>
<h1>Se lagerstatus: </h1>
<a href="admin_menu.php">Menu</a><br>
<br>
<table id="kurv" border="1">
     <tr class="ordre">
    
    <th>Navn</th>
    <th>Variant</th>
    <th>Varefarve</th>
    <th>Mærke</th>
    <th>Pris</th>
    <th>På lager</th>
    <th>Ændre lager</th>
      
    
  </tr>
<?php
$hent = hent_lager();
foreach ($hent as list($a, $b, $c, $d, $e, $f, $g)) {
    
    ?><tr class="variant"><th>
        <?php echo '<a href="retvare.php?id='.$a.'">' ;
                echo "".$b."<a>" ?>
                
        </th>
                
           
            <th><?php echo $c; ?></th>
            <th><?php echo $d; ?></th>
            <th><?php echo $e; ?></th>
            <th><?php echo $f; ?></th>
            <th><?php echo $g; ?></th>
            <th>
               
            <form name="ret" action="../fl/ret_lager.php" method="POST">
                
                <input name="antal" type="number" required>
                <input type="hidden" name="id" value="<?php echo $a; ?>">
                <input type="submit" value="Send"> 
                </th>
            </form>
            </tr>
            <?php
        }
        ?>
         <script>   
             
  function validateForm() {
    var x = document.forms["ret"]["antal"].value;
    if (isNaN(x)==false) {
        alert("OBS: Du har ikke ændret lagerstatus");
        return false;
    }
}
</script>

 
<style>
#kurv {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    
    border-collapse: collapse;
}



#kurv th {

    background-color: #D1D1D8;
   
}

#kurv tr.ordre td {
    
    background-color: #BCBCC2;
}
#kurv tr.variant td {
    
    background-color: #BCBCC2;
}

</style>