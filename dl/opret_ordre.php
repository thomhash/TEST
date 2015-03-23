<?php

function opret_ordre0($id_kunde,$afsendt,$tidbestilt) { {
require 'login.php';
$last_id =0;     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }

        $sqlin = "INSERT INTO `ordre_har_vare` (`id_stoerrelse`, `stoerrelse_beskrivelse`) VALUES (NULL, '$stoerrelse');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}

function opret_ordre_d($id_kunde) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }

        $sqlin = "INSERT INTO `ordre` (`f_id_kunde`, `tid_bestilt`) VALUES ('$id_kunde', NULL);";
        
        
        if ($db_server->query($sqlin) === TRUE) {
            $last_id = $db_server->insert_id; 
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
        
        
        //echo $last_id;
    }
    return $last_id;
}

function opret_ordre_har_vare($id_ordre,$antal,$variant,$pris) { {
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }
       
        $sqlin = "INSERT INTO `ordre_har_vare` (`f_id_ordre`, `f_id_variant`, `antal`, `pris`) VALUES ('$id_ordre', '$variant', '$antal', '$pris');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sqlin . "<br>" . $db_server->error;
        }
    }
}

function opret_faktura($id_ordre,$fornavn,$efternavn,$adresse,$post_nr, $bynavn,$telefon) { {
    
require 'login.php';
     
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server>connect_error);
        }
       
        $sqlin = "INSERT INTO `faktura` (`id_faktura`, `dato`, `f_id_ordre_f`, `fornavn`, `efternavn`, `adresse`, `bynavn`, `post_nr`, `telefon`) VALUES (NULL, '18-01-1990', '$id_ordre', '$fornavn', '$efternavn', '$adresse', '$bynavn', '$post_nr', '$telefon');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}

