<?php
// Lavet af Mikkel 
function opret_vare_til_ordre($id_ordre,$id_variant,$antal) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }

        $sqlin = "INSERT INTO `stoerrelse` (`id_stoerrelse`, `stoerrelse_beskrivelse`) VALUES (NULL, '$stoerrelse');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}