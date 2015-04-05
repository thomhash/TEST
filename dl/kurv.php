<?php

function fyld_kurv_dl($f_id_variant,$f_id_kunde,$antal) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }
       
        $sqlin = "INSERT INTO `kurv` (`f_id_variant`, `f_id_kunde`, `antal`) VALUES ('$f_id_variant', '$f_id_kunde', '$antal');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sqlin . "<br>" . $db_server->error;
        }
    }
}

function slet_kurv_kunde_dl($f_id_kunde) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }
       
        $sqlin = "DELETE FROM `kurv` WHERE f_id_kunde = '$f_id_kunde'";

        if ($db_server->query($sqlin) === TRUE) {
            echo "Er slettet";
        } else {
            echo "Error: " . $sqlin . "<br>" . $db_server->error;
        }
    }
}



