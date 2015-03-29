<?php



function check_kunde_mail($mail) { 

       require 'login.php';
       
       $sql = "SELECT `id_kunde` 
           FROM `kunde` 
           WHERE `email` = '$mail'
            LIMIT 1";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     
     return $row;

    }
 function check_kode($mail) { 

     
      require 'login.php';
     
       $sql = "SELECT * FROM `kunde` WHERE `email` = '$mail' AND `adgangskode` IS NOT NULL LIMIT 1";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     
     return $row;
     
     
     
     
    }
 
    
function set_kunde($mail , $hash_kode){
    require 'login.php';
        
    $sqlin = "INSERT INTO `kunde` (email, adgangskode)
                           VALUES ('$mail', '$hash_kode')";

    if ($db_server->query($sqlin) === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . "<br>" . $db_server->error;
    }
    
    mysqli_close($db_server);
    
}

function set_kundeoplysninger($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed){
    
    echo $fornavn .$efternavn .$tlf .$adresse .$postnr .$by .$mail;
    
    require 'login.php';
    
        
    $sqlin = "UPDATE kunde
              SET fornavn='$fornavn',efternavn='$efternavn', telefonnummer='$tlf',adresse='$adresse', post_nr='$postnr'
              , bynavn= '$by', nyhed='$nyhed'
              WHERE email='$mail'";
            

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . "<br>" . $db_server->error;
    }
    
    mysqli_close($db_server);
        
}

function opret_kunde_ved_kob($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed){
    
   // echo $fornavn .$efternavn .$tlf .$adresse .$postnr .$by .$mail;
    
    require 'login.php';
    
        
    $sqlin = "INSERT INTO `webshop`.`kunde` (`id_kunde`, `fornavn`, `adresse`, `bynavn`, `efternavn`, `email`, `post_nr`, `telefonnummer`, `nyhed`) VALUES (NULL, '$fornavn', '$adresse', '$by', '$efternavn', '$mail', '$postnr', '$tlf', '$nyhed')";
            

    if ($db_server->query($sqlin) === TRUE) {
        echo "New record created successfully";
        $last_id = $db_server->insert_id; 
    } else {
        echo "Error: " . "<br>" . $db_server->error;
    }
    
    mysqli_close($db_server);
    return $last_id;  
}



?>
