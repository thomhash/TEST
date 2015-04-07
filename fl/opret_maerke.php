<?php
// Lavet af Mikkel 

require '../fl/gruppe_tjek.php';

if (($_POST['type_rediger']) == "maerke") {
    $marke = $_POST['maerke'];
    opret_maerke($marke);
}
if (($_POST['type_rediger']) == "farve") {
    $farve = $_POST['farve'];
    opret_farve($farve);
}

if (($_POST['type_rediger']) == "type_beskrivelse") {
    $type_beskrivelse = $_POST['type_beskrivelse'];
    opret_type_beskrivelse($type_beskrivelse);
}

if (($_POST['type_rediger']) == "type_variabel") {
    $type_beskrivelse_id = $_POST['type_beskrivelse_id'];
    $id_type_vaerdi = $_POST['type_vaerdi'];
    opret_type($type_beskrivelse_id, $id_type_vaerdi);
}

if (($_POST['type_rediger']) == "gruppe") {
    $gruppe = $_POST['gruppe'];
    $overgruppe = $_POST['overgruppe'];
    if ($overgruppe == "0") {
        opret_gruppe_uu($gruppe);
    } else {
        opret_gruppe($gruppe, $overgruppe);
    }
}

if (($_POST['type_rediger']) == "opret_ny_vare") {
    $vare_navn = $_POST['vare_navn'];
    $vare_beskrivelse = $_POST['vare_beskrivelse'];
    $maerke_til_vare = $_POST['maerke_til_vare'];
    $id_type_beskrivelse = $_POST['type_beskrivelse'];
    $vare_prioritet = $_POST['vare_prioritet'];
    $vare_gruppe = $_POST['gruppe_til_vare'];
    $aktiv = 1;

    $vare_id = opret_vare($vare_navn, $vare_beskrivelse, $maerke_til_vare, $vare_prioritet, $vare_gruppe, $aktiv, $id_type_beskrivelse);
    forbind_grupper($vare_id, $vare_gruppe);
}

if (($_POST['type_rediger']) == "opret_ny_variant") {
    $variant_vare = $_POST['vare_id'];
    $variant_type_id = $_POST['type_beskrivelse_id'];
    $variant_farve = $_POST['variant_farve'];
    $variant_billede = $_POST['variant_billede'];
    $variant_pris = $_POST['variant_pris'];
    $variant_vis = $_POST['variant_vis'];
    $variant_antal = $_POST['variant_antal'];

    opret_variant($variant_vare, $variant_type_id, $variant_farve, $variant_billede, $variant_pris, $variant_vis, $variant_antal);
}



// $stoerelse = $_POST['stoerelse'];

// $varenavn = $_POST['gruppe'];

// $varenavn = $_POST['varenavn'];

// $gruppe = $_POST['gruppe'];





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

