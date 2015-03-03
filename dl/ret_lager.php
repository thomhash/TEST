<?php

function edit_lager($lager,$id)
{
     
    require 'login.php';
 
    echo "Nyt lager:"+$lager+"til vare:"+$id;
    $sqlin = "UPDATE variant SET antal=$lager WHERE variant.id_variant=$id";

    
    
    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully med $lager og $id";
        
        
        
    } else {    
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

