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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

