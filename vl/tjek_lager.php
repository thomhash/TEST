<?php
require '../fl/get_lager.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Se lagerstatus: </h1>
<a href="admin_menu.php">Menu</a><br>
<br>
<table border="1">
     <tr>
    
    <th>Navn</th>
    <th>størrelse</th>
    <th>varefarve</th>
    <th>mærke</th>
    <th>Varefarve</th>
    <th>På lager</th>
    <th>Ændre lager</th>
      
    
  </tr>
<?php
$hent = hent_lager();
foreach ($hent as list($a, $b, $c, $d, $e, $f, $g)) {
    
    ?><tr><th>
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

