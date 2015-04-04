<?php
require 'login.php';
function ret_nyhed($email)
{
    require 'login.php';
   
// Create connection
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update kunde set nyhed='0' where email='$email'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
