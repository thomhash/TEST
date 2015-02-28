<?php
function ret_beskrivelse($beskrivelse,$id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";
    $num = $id[0][0];
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update vare set beskrivelse='$beskrivelse' where id_vare='$num'";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function ret_prioritet_d($prioritet,$id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";
    $num = $id[0][0];
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update vare set prioritet='$prioritet' where id_vare='$num'";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function ret_pris_d($pris,$id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";
    $num = $id[0][0];
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set pris='$pris' where id_variant='$num'";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function ret_vis_rediger_id_vare_d($vis,$id)
{
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";
    $num = $id[0][0];

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set vis='$vis' where f_id_vare='$num'";

    if ($conn->query($sqlin) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



function ret_vis_d($vis,$id)
{
    echo $vis;
    echo $id;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";
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
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

