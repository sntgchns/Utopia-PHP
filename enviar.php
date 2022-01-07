<?php
require('PHPMailer/PHPMailerAutoload.php');

require_once('config.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                                             // Enable verbose debug output

$mail->isSMTP();                                                    // Set mailer to use SMTP
$mail->Host = host;                                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                             // Enable SMTP authentication
$mail->Username = username;                         // SMTP username
$mail->Password = password;                                 // SMTP password
$mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = port;                                                  // TCP port to connect to
$mail->CharSet = 'UTF-8';

$mail->From = $_POST['email'];
$mail->FromName = $_POST['nombre'];
$mail->addAddress('info@utopiansworld.com', "Utopian's World");     // Add a recipient
$mail->addBCC('santiagosonora@gmail.com', 'Santiago Soñora');  
// $mail->addAddress('joe@example.net', 'Joe User');                // Add a recipient
// $mail->addAddress('ellen@example.com');                          // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->WordWrap = 50;                                            // Set word wrap to 50 characters
// $mail->addAttachment('/var/tmp/file.tar.gz');                    // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');               // Optional name
$mail->isHTML(true);                                                // Set email format to HTML

$mail->Subject = 'Contact from UTOPIA';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Body    = "<html><body style='display: inline-block; background: rgb(221, 199, 161); border: 6px solid green;'><div style='display: flex; justify-content: center; background: rgb(109,0,100);'><h1 style='color: rgb(222,222,222); text-transform: uppercase;'>Utopia</h1></div><div style='display: inline-block; padding: 10px;'><h3 style='display: inline-block; color: rgb(109,0,100); padding: 0; margin: 0;'><b>Este mensaje fue enviado por: </b></h3><p style='display: inline-block; color: rgb(127,111,0); padding: 0 0 0 10px; margin: 0;'>{$_POST['nombre']}</p></div><br><div style='display: inline-block; padding:10px;'><h3 style='display: inline-block; color: rgb(109,0,100); padding: 0; margin: 0;'><b>Su e-mail es: </b></h3><p style='display: inline-block; color: rgb(127,111,0); padding: 0 0 0 10px; margin: 0;'>{$_POST['email']}</p></div><br><div style='display: inline-block; padding:10px;'><h3 style='display: inline-block; color: rgb(109,0,100); padding: 0; margin: 0;'><b>Mensaje: </b></h3><p style='display: inline-block; color: rgb(127,111,0); padding: 0 0 0 10px; margin: 0;'>{$_POST['mensaje']}</p></div></body></html>";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location:https://utopiansworld.com/");
}
?>