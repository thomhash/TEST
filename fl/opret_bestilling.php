<?php
// Lavet af Mikkel 
if (session_id() == '') {
    session_start();
}
require '../dl/opret_ordre.php';
require '../dl/get_kunde.php';
require '../dl/get_lager.php';
require '../dl/ret_lager.php';
require '../dl/get_vare.php';
require '../dl/get_bestillinger.php';
require '../dl/get_virksomhed_dl.php';
require '../fl/get_dato.php';
//require '../vl/send_faktura.php';
require '../PHPMailer-master/send_mail.php';
ob_start();
$vare = $_SESSION["kurv"];

function opret_ordre() {
    $mail = $_GET["email"];
    $total_pris = $_GET["total_pris"];
    $fragt_pris = $_GET["fragt_pris"];

    $id_ordre = opret_ordre_d($mail, get_dato());
    $vare = $_SESSION["kurv"];

    foreach ($vare as $id => $antal) {
        if ($antal > 0) {
            $pris = get_pris_fra_variant_id($id)[0];
            opret_ordre_har_vare($id_ordre, $antal, $id, $pris[0]);
            ret_lager(-$antal, $id);
        }
        kurv_tom();
    }

    $kundeinfo = get_kunde_info_id($mail);
    //opret_faktura($id_ordre, $kundeinfo[0][0], $kundeinfo[0][1], $kundeinfo[0][2], $kundeinfo[0][3], $kundeinfo[0][4], $kundeinfo[0][5], date("Y m d H:i"));
    opret_faktura_2($id_ordre, $kundeinfo[0][0], $kundeinfo[0][1], $kundeinfo[0][2], $kundeinfo[0][3], $kundeinfo[0][4], $kundeinfo[0][5], date("Y m d H:i"), $fragt_pris, $total_pris);
    send_email("Faktura", email_tekst($kundeinfo, $id_ordre, $total_pris, $fragt_pris), $kundeinfo[0][6], $kundeinfo[0][0]);

    header('Location:../vl/kassen_trin_4.php');
    ob_flush();
}

if (tjek_lager($vare) == true) {
    opret_ordre();
    kurv_tom();
    header('Location:../vl/kassen_trin_4.php');
    ob_flush();
} else {
    header('Location:../vl/frame_indkoebskurv.php?lager=0');
    ob_flush();
}

function tjek_lager($vare) {
    $ok_lager = true;
    foreach ($vare as $id => $antal) {
        $lager = get_lager_variant($id)[0];
        if ($lager[0] < $antal) {
            $ok_lager = false;
            if ($lager[0] > 0) {
                $_SESSION["kurv"][$id] = $lager[0];
            } else {
                $_SESSION["kurv"][$id] = 0;
            }
        }
    }
    return $ok_lager;
}

function ret_lager($antal, $id) {

    $antal_nu = get_lager_variant($id);
    $ny_lager = $antal + $antal_nu[0][0];
    edit_lager($ny_lager, $id);
}

function kurv_tom() {
    unset($_SESSION["kurv"]);
}

function email_tekst($kundeinfo, $id_ordre, $total_pris, $fragt_pris) {

    $vare = get_vareinformation_fra_ordre_id($id_ordre);
    $virksomhed = get_virksomhed_dinformation();

    $tekst = "Kære " . $kundeinfo[0][0] . " " . $kundeinfo[0][1] . "<br><br> Tak for din bestilling. "
            . "Varen bliver sendt hurtigst muligt.<br><br>"
            . "Til: <br>"
            . $kundeinfo[0][0] .
            " "
            . $kundeinfo[0][1] .
            "<br>"
            . $kundeinfo[0][2] .
            "<br>"
            . $kundeinfo[0][3] .
            "<br>"
            . $kundeinfo[0][4] .
            "<br><br>Du har bestilt følgende vare:"
            . "<br>";
    foreach ($vare as $key => $value) {
        $tekst.="<br>" . $vare[$key][1] . " stk. \t" . $vare[$key][2] . "  " . $vare[$key][3] . "\t Pris: " . $vare[$key][6] . " kr.";
    }
    $tekst.="<br><br>Fragt pris: \t\t\t" . $fragt_pris . "kr. <br>";
    $tekst.="Total: \t\t\t" . $total_pris . "kr. <br><br>";
    $tekst.="<br>Med venlig hilsen " . $virksomhed[0][1];
    return $tekst;
}
