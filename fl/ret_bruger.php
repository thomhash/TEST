<?php
// Lavet af Mikkel 
session_start();
ob_start();
require '../dl/opret_kunde_dl.php';
$fornavn = $_GET['fornavn'];
$efternavn = $_GET['efternavn'];
$tlf = $_GET['tlf'];
$adresse = $_GET['adresse'];
$postnr = $_GET['postnr'];
$by = $_GET['by'];
$mail = $_GET['email'];
$nyhed = null;
// Hvis nyhedsboxen er tjekket af sættes vaerdien til 1
if (isset($_GET["nyhedsbrev"])) {
    $nyhed = $_GET["nyhedsbrev"];
}

$same_mail = check_kunde_mail($mail);
//print_r($same_mail);
$er_bruger = check_kode($mail);

if ($_SESSION["logget_ind_kunde"] == "ja") {

    ret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
}

function ret_kunde($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed) {

    $id_kunde = set_kundeoplysninger($fornavn, $efternavn, $tlf, $adresse, $postnr, $by, $mail, $nyhed);
    header('Location:../vl/frame_kunde_menu.php');
    ob_flush();
}

?>