<?php
// det er smart! 
function login_tjek($brugernavn,$kode)
{
require 'login.php';
  
    $sql = "SELECT `id_medarbejder`
FROM `medarbejder`
WHERE `brugernavn` = '$brugernavn'
AND `adgangskode` = '$kode';";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    // $count = mysql_num_rows($row);
    $tal = count($row);
    mysqli_close($db_server);
    // $logget = $row[1];
    return $tal;
}

function login_kunde($brugernavn)
{
require 'login.php';
  
    $sql = "SELECT `adgangskode`
        FROM `kunde`
        WHERE `email` = '$brugernavn'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
   
    mysqli_close($db_server);
   
    return $row;
}