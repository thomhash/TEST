<?php
// Lavet af Mikkel 
require '../dl/ret_vare.php';
require '../dl/get_vare.php';
ob_start();
$rediger = $_POST['rediger'];
$id_variant = $_GET['id'];

echo $id_variant;

if (strcmp($rediger, "aktiv_variant") == 0) {
    $aktiv_variant = $_POST['aktiv_variant'];
    $ok = ret_aktiv_variant($id_variant, $aktiv_variant);
    header('Location:../vl/retvare.php?id=' . $id_variant . '');
    ob_flush();
} else if (strcmp($rediger, "aktiv_vare") == 0) {
    $aktiv_vare = $_POST['aktiv_vare'];
    $id_vare = get_vareid_fra_variant_d($id_variant);
    ret_aktiv_vare($id_vare[0][0], $aktiv_vare);
    header('Location:../vl/retvare.php?id=' . $id_variant . '');
    ob_flush();
} else if (strcmp($rediger, "prioritet") == 0) {
    $vare_prioritet = $_POST['vare_prioritet'];

    $id_vare = get_vareid_fra_variant_d($id_variant);
    ret_prioritet_d($vare_prioritet, $id_vare);
    header('Location:../vl/retvare.php?id=' . $id_variant . '');
    ob_flush();
} else if (strcmp($rediger, "pris_form") == 0) {
    $vare_prioritet = $_POST['ny_pris'];

    // $id_vare=get_vareid_fra_variant_d($id_variant);
    $ok = ret_pris_d($vare_prioritet, $id_variant);
    header('Location:../vl/retvare.php?id=' . $id_variant . '');
    ob_flush();
} else if (strcmp($rediger, "vis_variant") == 0) {
    $variant_vis = $_POST['vis_variant'];

    echo $variant_vis[0][0];
    ret_vis_rediger_id_vare_d(1, get_id_vare_fra_variant($variant_vis[0][0]));
    // $id_vare=get_vareid_fra_variant_d($id_variant);
    ret_vis_d($variant_vis[0][0], $id_variant);
    header('Location:../vl/retvare.php?id=' . $id_variant . '');
    ob_flush();
}
   
  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

