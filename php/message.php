<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

// // I need to modiy the credentials to something like this for security
// $config = parse_ini_file('/var/app/config.ini', true);

// $mail->Username = $config['email']['username'];
// $mail->Password = $config['email']['password'];


$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.sparkpostmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'SMTP_Injection';          // SMTP username
$mail->Password = ''; // SMTP password
$mail->SMTPSecure = 'TLS';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$telephone = $_POST['telephone'];
$comment = $_POST['comment'];

$mail->setFrom($visitor_email, $name);
$mail->addReplyTo($visitor_email, $name);
$mail->addAddress('');   // Add a recipient

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = $comment;
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Steve Leblanc</b></p>';

$mail->Subject = 'Email from Contact Form on Steve Leblanc.net Website';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>