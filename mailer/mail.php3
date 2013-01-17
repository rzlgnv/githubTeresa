<?php /*?><?php
$to = "hutchteresa@gmial.com", $subject, $message, "From: PHPMailer\nReply-To: $from\nX-Mailer: PHP/" . phpversion());


mail("hutchteresa@gmail.com", $subject, $message, "From: PHPMailer\nReply-To: $from\nX-Mailer: PHP/" . phpversion());
<?php */?>
<?php
require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "hutchteresa@gmail.com"; // SMTP username
$mail->Password = "lteresa01"; // SMTP password
$webmaster_email = "hutchteresa@gmail.com"; //Reply to this email ID
$email="hutchteresa@gmail.com"; // Recipients email ID
$name="Teresa"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "test";
$mail->Body = "Hi";
$mail("hutchteresa@gmail.com", $subject, $message= $_POST["mail"] ;
?> 
