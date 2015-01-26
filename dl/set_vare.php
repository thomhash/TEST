<?php

require_once 'login.php';



function opret_stoerelse($stoerrelse) { {

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

        $sqlin = "INSERT INTO `webshop`.`stoerrelse` (`id_stoerrelse`, `stoerrelse`) VALUES (NULL, '$stoerrelse');";

        if ($conn->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


function opret_farve($varefarve) { {

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

        $sqlin = "INSERT INTO `webshop`.`varefarve` (`id_varefarve`, `varefarve`) VALUES (NULL, '$varefarve');";

        if ($conn->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

function opret_gruppe($gruppe,$overgruppe) { {
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

        $sqlin = "INSERT INTO `webshop`.`gruppe` (`id_varegruppe`, `gruppe`, `overgruppe`) VALUES (NULL, '$gruppe','$overgruppe');";

        if ($conn->query($sqlin) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}



function opret_maerke($marke) {

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

    $sqlin = "INSERT INTO maerke ( maerke) VALUES ('$marke')";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function opret_farveB($farve) {

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

    $sqlin = "INSERT INTO maerke ( maerke) VALUES ('$marke')";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function opret_vare($vare_navn,$vare_beskrivelse,$maerke_til_vare,$vare_prioritet){

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

    $sqlin = "INSERT INTO `webshop`.`vare` (`id_vare`, `f_id_maerke`, `beskrivelse`, `navn`, `prioritet`) VALUES (NULL, '$maerke_til_vare', '$vare_beskrivelse', '$vare_navn', '$vare_prioritet');";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function opret_variant($variant_vare,$variant_stoerelse,$variant_vare,$variant_billede,$variant_pris,$variant_pris,$variant_vis,$variant_antal)
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

    $sqlin = "INSERT INTO `webshop`.`variant` (`id_variant`, `pris`, `f_id_stoeelse`, `f_id_varefarve`, `f_id_vare`, `vis`, `billede`, `antal`) VALUES (NULL, '999', '2', '3', '6', '1', 'test.jpg', '2');";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

