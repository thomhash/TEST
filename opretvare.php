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
    <form action="index.php" method="get">
Maerke:<br>
<input type="text" name="maerke">
<br>
<input type="submit">
</form>
<hr> 

Opret nyt maerke 
    <form action="index.php" method="get">
Maerke:<br>
<input type="text" name="varenavn">
<br>
<input type="submit">
</form>
<hr> 
Opret ny størelse
    <form action="index.php" method="get">
Størelse:<br>
<input type="text" name="stoerelse">
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


$sqlin = "INSERT INTO maerke (id_maerke, maerke_navn) VALUES ('1', 'Adidas')";

if ($conn->query($sqlin) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






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


