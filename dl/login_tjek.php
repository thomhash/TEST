<?php
// Lavet af Mikkel 

function login_tjek($brugernavn, $kode) {
    require 'login.php';

    $sql = "SELECT `id_medarbejder`
FROM `medarbejder`
WHERE `brugernavn` = '$brugernavn'
AND `adgangskode` = '$kode';";

    $result = mysqli_query($db_server, $sql);
    $row = mysqli_fetch_all($result);
    $tal = count($row);
    mysqli_close($db_server);
    return $tal;
}

function login_kunde($brugernavn) {
    require 'login.php';

    $sql = "SELECT `adgangskode`
        FROM `kunde`
        WHERE `email` = '$brugernavn'";

    $result = mysqli_query($db_server, $sql);
    $row = mysqli_fetch_all($result);

    mysqli_close($db_server);

    return $row;
}

function get_kunde_id_fra_brugernavn($brugernavn) {
    require 'login.php';

    $sql = "SELECT `id_kunde`
        FROM `kunde`
        WHERE `email` = '$brugernavn'";

    $result = mysqli_query($db_server, $sql);
    $row = mysqli_fetch_all($result);

    mysqli_close($db_server);

    return $row;
}
