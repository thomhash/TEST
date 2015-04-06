<?php
// Lavet af Mikkel 
require 'login.php';
function ret_nyhed($email)
{
    require 'login.php';

    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
  
    $sqlin = "update kunde set nyhed='0' where email='$email'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
