<?php


function opret_fakturak($id_kunde,$afsendt,$f_id_ordre_f,$f_id_medarbejder,$f_id_virksomhed) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }

        $sqlin = "INSERT INTO `webshop`.`faktura` (`id_faktura`, `afsendt`, `f_id_ordre_f`, `f_id_medarbejder`, `f_id_virksomhed`) VALUES (NULL, '$afsendt', '$f_id_ordre_f', '$f_id_medarbejder', '$f_id_virksomhed');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}