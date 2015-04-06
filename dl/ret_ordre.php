<?php
// Lavet af Mikkel 
function ret_begyndt($dato, $ordre_id) {
    require 'login.php';
    // Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "UPDATE `webshop`.`ordre` SET `tid_begyndt` = '$dato' WHERE `ordre`.`id_ordre` = '$ordre_id'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function ret_afsendt($dato, $ordre_id) {
    require 'login.php';
    // Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "UPDATE `webshop`.`ordre` SET `tid_afsendt` = '$dato' WHERE `ordre`.`id_ordre` = '$ordre_id'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function ret_medarbejder($medarbejder, $ordre_id) {
    require 'login.php';
    // Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "UPDATE `webshop`.`ordre` SET `f_id_medarbejder` = '$medarbejder' WHERE `ordre`.`id_ordre` = '$ordre_id'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

