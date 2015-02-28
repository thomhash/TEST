<?php
require '../dl/ret_lager.php';
require '../dl/get_lager.php';

echo "det er smart";
   $antal = $_POST['antal'];
   $id = $_POST['id'];
   $antal_nu = get_lager_variant($id);
   $antal_nu;
   $ny_lager = $antal[0][0]+$antal_nu[0][0];
   edit_lager($ny_lager,$id);
   echo $id;
   echo $antal;
  

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

