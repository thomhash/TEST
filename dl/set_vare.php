<?php
require_once 'login.php';

function set_maerke($maerke){ 
        
}

function set_stoerrelse($stoerrelse){    
}

function opret_maerke2($maerke){
    
   
    
    $sql = "INSERT INTO `webshop`.`maerke` (`id_maerke`, `maerke`) VALUES (NULL, '$maerke');";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    
}
function opret_maerke($marke){   
    
    
    
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


$sqlin = "INSERT INTO maerke ( maerke) VALUES ('$marke')";

if ($conn->query($sqlin) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

