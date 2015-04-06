<?php
require 'login.php';
function ret_beskrivelse($beskrivelse,$id)
{
    require 'login.php';
    $ok =0;
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    $ny = $id[0][0];
    //echo $beskrivelse;
    $sqlin = "update vare set beskrivelse='$beskrivelse' where id_vare='$ny'";

   if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_prioritet_d($prioritet,$id)
{
    require 'login.php';
    $ok =0;
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    
    $sqlin = "update vare set prioritet='$prioritet' where id_vare='$id'";

   if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_pris_d($pris,$id)
{
    $ok =0;
    require 'login.php';
    $num = $id[0][0];
// Check connection
    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
    // echo $id[0][0];
    $sqlin = "update variant set pris='$pris' where id_variant='$id'";

    if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_vis_rediger_id_vare_d($vis,$id)
{
    require 'login.php';
    $ok =0;
    if ($db_server->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sqlin = "update variant set vis='$vis' where f_id_vare='$id'";

   if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_aktiv_variant($id,$aktiv)
{
    require 'login.php';
    $ok =0;

    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
   
    $sqlin = "update variant set aktiv='$aktiv' where id_variant='$id'";

    if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_aktiv_vare($id,$aktiv)
{
    require 'login.php';
    $ok =0;

    if ($db_server->connect_error) {
        die("Connection failed: " . $db_server->connect_error);
    }
   
    $sqlin = "update vare set aktiv='$aktiv' where id_vare='$id'";

    if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

function ret_vis_d($vis,$id)
{
    require 'login.php';
    echo $vis;
    echo $id;

    $num = $id[0][0];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlin = "update variant set vis='$vis' where id_variant='$num'";

    if ($db_server->query($sqlin) === TRUE) {
        $ok =1;
        echo "New record created successfully";
        
    } else {
        $ok =0;
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    return $ok;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

