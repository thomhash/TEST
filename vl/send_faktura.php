<?php
require '../PHPMailer_5.2.4/send_mail.php';
//require '../dl/get_kunde.php';
require '../dl/get_bestillinger.php';
require '../dl/get_ordre.php';



function send_faktura($id_ordre){
    
    $kunde[0] = get_kunde_fra_ordre_id($id_ordre)[0];
    //$ordre = hent_ordre_information($id_ordre);
    $kunde = get_kunde_info_id($kunde[0])[0];
    print_r($kunde);
    
    //send_mail("Test2", "<h2> Tak for din bestilling </h2>", "mikkelbra@gmail.com", "Mikkel Rasmussen");
}



