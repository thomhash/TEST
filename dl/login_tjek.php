<?php

function login_tjek($brugernavn,$kode)
{
require 'login.php';
  
    $sql = "SELECT * FROM `varefarve` WHERE username='$brugernavn'";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
    mysqli_close($db_server);
    return $row;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

