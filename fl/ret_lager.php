<?php
// Lavet af Mikkel 
ob_start();
require '../dl/ret_lager.php';
require '../dl/get_lager.php';

$antal = $_POST['antal'];
$id = $_POST['id'];
$antal_nu = get_lager_variant($id);
$ny_lager = $antal + $antal_nu[0][0];
edit_lager($ny_lager, $id);

header("Location:../vl/tjek_lager.php");
ob_flush();
?>