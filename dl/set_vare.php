<?php

require_once 'login.php';



function opret_stoerelse($stoerrelse) { {
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


function opret_farve($varefarve) { {

  require 'login.php';  
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server->connect_error);
        }

        $sqlin = "INSERT INTO `varefarve` (`id_varefarve`, `varefarve`) VALUES (NULL, '$varefarve');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}

function opret_gruppe($gruppe,$overgruppe) { {
     require 'login.php'; 
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server->connect_error);
        }

        $sqlin = "INSERT INTO `gruppe` (`id_varegruppe`, `gruppe`, `overgruppe`) VALUES (NULL, '$gruppe','$overgruppe');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}
function opret_type_beskrivelse($type_beskrivelse) { {
     require 'login.php'; 
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server->connect_error);
        }

        $sqlin = "INSERT INTO `type_beskrivelse` (`type_tekst`) VALUES ('$type_beskrivelse');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}

function opret_type($id_type_beskrivelse,$type_vaerdi) { {
     require 'login.php'; 
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server->connect_error);
        }

        $sqlin = "INSERT INTO `type` (`type_vaerdi`, `f_type_beskrivelse_id`) VALUES ('$type_vaerdi','$id_type_beskrivelse');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}


function opret_gruppe_uu($gruppe) { {
      require 'login.php';  
// Check connection
        if ($db_server->connect_error) {
            die("Connection failed: " . $db_server->connect_error);
        }

        $sqlin = "INSERT INTO `gruppe` (`gruppe`) VALUES ('$gruppe');";

        if ($db_server->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
}

function opret_maerke($marke) {
require 'login.php';
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }

    $sqlin = "INSERT INTO maerke ( maerke_navn) VALUES ('$marke')";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function opret_farveB($farve) {
require 'login.php';
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlin = "INSERT INTO maerke ( maerke) VALUES ('$marke')";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function opret_vare($vare_navn,$vare_beskrivelse,$maerke_til_vare,$vare_prioritet,$vare_gruppe,$aktiv,$id_type_beskrivelse){
        
require 'login.php';
  
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }

    $sqlin = "INSERT INTO `vare` (`id_vare`, `f_id_maerke`, `beskrivelse`, `navn`, `prioritet`,`aktiv`,`f_type_beskrivelse`) VALUES (NULL, '$maerke_til_vare', '$vare_beskrivelse', '$vare_navn', '$vare_prioritet','$aktiv','$id_type_beskrivelse');";

    if ($db_server->query($sqlin) === TRUE) {
         $last_id = $db_server->insert_id; 
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
     return $last_id;
}

function tilfoj_gruppe($id_vare,$id_gruppe){
require 'login.php';
   
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }

    $sqlin = "INSERT INTO `vare_har_gruppe` (`id_vare_har_gruppe`, `f_id_vare`, `f_id_varegruppe`) VALUES (NULL, '$id_vare', '$id_gruppe');";

    if ($db_server>query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
     
}


function opret_variant($variant_vare,$variant_type_id,$variant_farve,$variant_billede,$variant_pris,$variant_vis,$variant_antal)
        
                {
require 'login.php';
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }

        $sqlin = "INSERT INTO `variant` (`pris`, `f_id_type`, `f_id_varefarve`, `f_id_billede`, `f_id_vare`,`vis`, `antal`, `aktiv`) VALUES ('$variant_pris', '$variant_type_id', '$variant_farve', '$variant_billede', '$variant_vare', '$variant_vis', '$variant_antal', 1);";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function opret_billede($url)
{
   require 'login.php';
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlin = "INSERT INTO `billede` (`id_billede`, `url`) VALUES (NULL, '$url');";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function forbind_vare_med_gruppe($gruppe,$vare){
   require 'login.php';
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }

    $sqlin = "INSERT INTO `vare_har_gruppe` (`id_vare_har_gruppe`, `f_id_vare`, `f_id_varegruppe`) VALUES (NULL, '$vare', '$gruppe');";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully; FEDT!";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

