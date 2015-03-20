<?php
include 'dl/login.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1> Opret vare </h1> 
<hr>
   Opret nyt maerke 
    <form action="opretmaerke.php" method="POST">
Maerke:<br>
<input type="text" name="maerke"><br>
id:<br> 
<input type="submit">
</form><br> 
 Nuværende mærker:   
<hr> 

  Opret ny farve
    <form action="opretfarve.php" method="POST">
Farve:<br>
<input type="text" name="farve">
<br>
<input type="submit">
    </form><br> 
 Nuværende varver:

Opret ny stoerelse
    <form action="opretstorelse.php" method="POST">
        
<hr>
Stoerelse:<br>
<input type="text" name="stoerelse">
<br>
<input type="submit">
</form><br> 
Nuværende størelse<br> 
<hr> 
Gruppe:<br>
<input type="text" name="gruppe">
<br>
<input type="submit">
</form><br> 
Nuværende grupper<br> 
<hr> 

Opret ny vare
    <form action="opretvarep.php" method="POST ">
Navn:<br>
<input type="text" name="varenavn">
<br>
Beskrivelse:<br>
<input type="text" name="beskrivelse">
<br>
Priotet:<br>
<input type="number" name="priotet" min="1" max="3">
<br>
<input type="submit">
</form>
<hr> 
<br>
Opret variant<br>
<form></form>
Pris <br> 
<input type="text" name="pris"><br>
mærke <br>
     <select name="cars">
     <?php 
    
$sql = "SELECT * FROM `maerke`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><option value="<?php $row["id_maerke"]?>"><?php echo $row["maerke"]; ?></option><?php
    }
} else {
    echo "0 results";
}
?>
<br>
     <select name="cars">
<br>   
farve <br>
     <select name="cars">
     <?php 
    
$sql = "SELECT * FROM `maerke`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><option value="<?php $row["id_maerke"]?>"><?php echo $row["maerke"]; ?></option><?php
    }
} else {
    echo "0 results";
}
?>
<input type="submit">
<br>


<br>

   
    <?php



/* 
$sqlin = "INSERT INTO maerke (id_maerke, maerke_navn) VALUES ('1', 'Adidas')";

if ($conn->query($sqlin) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/


$sqls = "SELECT * FROM `maerke`";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
    // output data of each row
    while($rows = $results->fetch_assoc()) {
        echo "Id: " . $rows["id_maerke"]. " - Vare: " . $rows["maerke"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>





     
    </body>
</html>


