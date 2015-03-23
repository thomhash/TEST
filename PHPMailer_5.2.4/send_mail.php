<?php
echo "test2";

function send_mail($emne, $tekst, $email, $navn)
{
    require 'class.phpmailer.php';
        echo "test3";
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port
echo "test4";
$mail->Username   = "mikkelbra@gmail.com";  // GMAIL username
$mail->Password   = "Mikkel199";            // GMAIL password
echo "test5";
$mail->From       = "mikkelbra@gmail.com";
$mail->FromName   = "webshopgenerator.dk";
echo "test6";

$mail->WordWrap   = 50; // set word wrap
$mail->AddAddress("$email", "$navn");  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML
echo "test7";
$mail->Subject = "$emne";
$mail->Body    = "$tekst";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.3';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent.';
}
echo "test8";
?>



