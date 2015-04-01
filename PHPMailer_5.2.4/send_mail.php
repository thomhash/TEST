<?php
require_once('PHPMailerAutoload.php');
//require "PHPMailerAutoload.php";
//send_mail_f("test", "saddsa", "mikkelbra@gmail.com", "mikkel");
//send_mail($emne, $tekst, $email, $navn);
function send_mail_f($emne, $htmltekst, $email, $navn){

$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "send.one.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "send_email@webshopgenerator.dk";  // GMAIL username
$mail->Password   = "matador";            // GMAIL password

$mail->From       = "send_email@webshopgenerator.dk";
$mail->FromName   = "webshopgenerator.dk";

$mail->WordWrap   = 50; // set word wrap
$mail->AddAddress($email, $navn);  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = $emne;
$mail->Body    = $htmltekst;
//$mail->AltBody = $plantekst;

if(!$mail->Send()) {
   echo 'Message could not be sent.3';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent.';
}


