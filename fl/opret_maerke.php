<?php
require '../dl/set_vare.php';

if (empty($_POST['maerke']) == false) {
    $marke = $_POST['maerke'];
    opret_maerke($marke);
}
if (empty($_POST['farve']) == false) {
   $farve = $_POST['farve'];
   opret_farve($farve);
}

if (empty($_POST['stoerelse']) == false) {
   $stoerelse = $_POST['stoerelse'];
   opret_stoerelse($stoerelse);
}

if (empty($_POST['gruppe']) == false) {
   $gruppe = $_POST['gruppe'];
   $undergruppe = $_POST['undergruppe'];
   opret_gruppe($gruppe,$undergruppe);
}

if (empty($_POST['vare_navn']) == false) {
   $vare_navn = $_POST['vare_navn'];
   $vare_beskrivelse = $_POST['vare_beskrivelse'];
   $maerke_til_vare = $_POST['maerke_til_vare'];
   $vare_prioritet = $_POST['vare_prioritet'];
   opret_vare($vare_navn,$vare_beskrivelse,$maerke_til_vare,$vare_prioritet);
}

if (empty($_POST['variant_pris']) == false) {
   $variant_vare = $_POST['variant_vare'];
   $variant_stoerelse = $_POST['variant_stoerelse'];
   $variant_vare = $_POST['variant_vare'];
   $variant_billede = $_POST['variant_billede'];
   $variant_pris = $_POST['variant_pris'];
   $variant_vis = $_POST['variant_vis'];
   $variant_antal = $_POST['variant_antal'];
   
   
   opret_variant($variant_vare,$variant_stoerelse,$variant_vare,$variant_billede,$variant_pris,$variant_pris,$variant_vis,$variant_antal);
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

