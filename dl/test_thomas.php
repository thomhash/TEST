<?php
header('Content-type: text/html; charset=utf-8');

require 'login.php';
   $testf="æøå";
     echo $testf;
     echo "øæååå";

    $sql = "SELECT  fornavn 
    FROM 
    kunde 
    WHERE email='sdcds@xn--l-3fa9c' ";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
    
     print_r($row);