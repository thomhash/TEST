<?php
session_start();  
$_SESSION["logget_ind"] = "nej";
   $_SESSION["bruger_id"] = NULL; 
header("location:../vl/frame_frontpage.php");
 //session_destroy(); 
 // header("location:../index.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

