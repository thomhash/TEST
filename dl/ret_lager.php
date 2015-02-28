<?php

function edit_lager($lager,$id)
{
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
    echo "Nyt lager:"+$lager+"til vare:"+$id;
    $sqlin = "UPDATE variant SET antal=$lager WHERE variant.id_variant=$id";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully med $lager og $id";
        
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

