<?php

function opret_kunde($stoerrelse) { {

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

        $sqlin = "INSERT INTO `webshop`.`stoerrelse` (`id_stoerrelse`, `stoerrelse_beskrivelse`) VALUES (NULL, '$stoerrelse');";

        if ($conn->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
