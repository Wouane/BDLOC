<?php
//session_start();

//require ("../vendor/autoload.php");

$mail = new PHPMailer;

$mail->isSMTP();
$mail->setLanguage('fr');
$mail->CharSet = 'UTF-8';

$mail->SMTPDebug = 2;	//0 pour désactiver les infos de débug
$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "thejma666@gmail.com";
$mail->Password = "poiuytreza321654987";

$mail->setFrom('ServiceMessagerie@BDloc', 'Service de Messagerie BDloc');
$mail->addAddress($email, $foundUser['user_name']);

$mail->isHTML(true); 

$mail->Subject = 'Envoyé par PHP !';

$mail->Body = 'Nous avont bien reçus votre demande de renouvelement de mots de passe <br>
	pour changer votre mots de passe <a href="">Click ici</a>';



if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message sent!";
}
