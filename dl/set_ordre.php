<?php
// Lavet af Mikkel 
function start_ordre($id,$dato)
{
    require 'login.php';
   
// Create connection
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update ordre set tid_begyndt='$dato' where id_ordre='$id'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function afslut_ordre($id,$dato)
{
    require 'login.php';
   
// Create connection
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update ordre set tid_afsendt='$dato' where id_ordre='$id'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}