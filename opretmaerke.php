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
$marke = $_POST['maerke'];
$idmarke = $_POST['id_maerke'];


$sqlin = "INSERT INTO maerke ( maerke) VALUES ('$marke')";

if ($conn->query($sqlin) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>




