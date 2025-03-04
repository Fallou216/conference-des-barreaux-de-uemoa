<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// Créer une nouvelle instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration SMTP                           
    $mail->isSMTP();  
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
    $mail->Username = 'falloudioum216@gmail.com'; // Ton adresse email
    $mail->Password = 'lyrk delw ugkl gckd'; // Ton mot de passe (à ne jamais exposer publiquement)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Méthode de sécurité (STARTTLS)
    $mail->Port = 587; // Port pour TLS
    $mail->CharSet = 'UTF-8'; // Encodage des caractères

    // Options SSL pour ignorer la vérification des certificats
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Récupération des données du formulaire
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $category = htmlspecialchars($_POST['category']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification des fichiers joints (s'il y en a)
    if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
        $file_tmp_name = $_FILES['userfile']['tmp_name'];
        $file_name = $_FILES['userfile']['name'];

        // Ajouter le fichier comme pièce jointe
        $mail->addAttachment($file_tmp_name, $file_name);
    }

    // Définir l'expéditeur et le destinataire
    $mail->setFrom('falloudioum216@gmail.com', 'Mirahtec');  // Expéditeur
    $mail->addAddress('falloudioum216@gmail.com', 'Mamadou Fallou Dioum');  // Destinataire fixe (adresse à laquelle le formulaire sera envoyé)

	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'A contact request send by ' . $name;
	$mail->Body    = 'Name: ' . $name . "<br>";
	$mail->Body .= 'Email: ' . $senderEmail . "<br>";


	if ($phone) {
		$mail->Body .= 'Phone: ' . $phone . "<br>";
	}
	if ($services) {
		$mail->Body .= 'services: ' . $services . "<br>";
	}
	if ($subject) {
		$mail->Body .= 'Subject: ' . $subject . "<br>";
	}
	if ($address) {
		$mail->Body .= 'Address: ' . $address . "<br>";
	}
	if ($website) {
		$mail->Body .= 'Website: ' . $website . "<br>";
	}

	$mail->Body .= 'message: ' . "<br>" . $message;

	$mail->send();
	echo "<div class='inner success'><p class='success'>Thanks for contacting us. We will contact you ASAP!</p></div><!-- /.inner -->";
} catch (Exception $e) {
	echo "<div class='inner error'><p class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p></div><!-- /.inner -->";
}