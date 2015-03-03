<?php
require 'login.php';
function ret_beskrivelse($beskrivelse,$id)
{
    require 'login.php';
    $num = $id[0][0];
// Create connection
    
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update vare set beskrivelse='$beskrivelse' where id_vare='$num'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function ret_prioritet_d($prioritet,$id)
{
    require 'login.php';
    
   
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    $num = $id[0][0];
    // echo $id[0][0];
    $sqlin = "update vare set prioritet='$prioritet' where id_vare='$num'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function ret_pris_d($pris,$id)
{
    require 'login.php';
    $num = $id[0][0];
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set pris='$pris' where id_variant='$num'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}

function ret_vis_rediger_id_vare_d($vis,$id)
{
    require 'login.php';
    $num = $id[0][0];
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set vis='$vis' where f_id_vare='$num'";

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
}



function ret_vis_d($vis,$id)
{
    require 'login.php';
    echo $vis;
    echo $id;

    $num = $id[0][0];
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set vis='$vis' where id_variant='$num'";

    if ($conn->query($sqlin) === TRUE) {
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

