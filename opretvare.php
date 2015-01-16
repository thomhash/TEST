<?php
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
<input type="text" name="id_maerke">
<br>
<input type="submit">
</form>
<hr> 

  Opret ny farve
    <form action="opretfarve.php" method="POST">
Farve:<br>
<input type="text" name="farve">
<br>
<input type="submit">
</form>

Opret ny stoerelse
    <form action="opretstorelse.php" method="POST">
Stoerelse:<br>
<input type="text" name="stoerelse">
<br>
<input type="submit">
</form>
<hr> 

Opret ny vare
    <form action="opretvarep.php" method="POST ">
Navn:<br>
<input type="text" name="navn">
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
   
   
    <?php
      

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
$sqlin = "INSERT INTO maerke (id_maerke, maerke_navn) VALUES ('1', 'Adidas')";

if ($conn->query($sqlin) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/


$sql = "SELECT * FROM `maerke`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id_maerke"]. " - Vare: " . $row["maerke_navn"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>





     
    </body>
</html>


