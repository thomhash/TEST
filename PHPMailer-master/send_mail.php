<?php

require 'PHPMailerAutoload.php';

//send_mail_f("test", "saddsa", "mikkelbra@gmail.com", "mikkel");

function send_mail_f($emne, $htmltekst, $email, $navn){
$mail = new PHPMailer;
$er_sendt =false; 
// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP();
$mail->SMTPAuth   = false;                  // enable SMTP authentication
//$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "mailout.one.com";      // sets GMAIL as the SMTP server
$mail->Port       = 25;                   // set the SMTP port

$mail->Username   = "";  // GMAIL username
$mail->Password   = "";  

$mail->From       = "send_email@webshopgenerator.dk";
$mail->FromName   = "webshopgenerator.dk";                               // TCP port to connect to

$mail->From = 'send_email@webshopgenerator.dk';
$mail->FromName = 'Mailer';
$mail->addAddress($email, $navn);     // Add a recipient

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $emne;
$mail->Body    = $htmltekst;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    $er_sendt = true;
    echo 'Message could not be sent. 3';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    $er_sendt = false;
    echo 'Message has been sent';
}
return $er_sendt;
}



