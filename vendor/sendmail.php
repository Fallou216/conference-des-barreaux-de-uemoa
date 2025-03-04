<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';

// Connexion à la base de données (à modifier selon tes paramètres)
$servername = "localhost";
$username = "root";  // Remplace par ton utilisateur MySQL
$password = "";  // Remplace par ton mot de passe MySQL
$dbname = "conference-des-barreaux-de-uemoa";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération et sécurisation des données du formulaire
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        // Insertion des données dans la base de données
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (:name, :email, :phone, :subject, :message)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':subject' => $subject,
            ':message' => $message
        ]);

        // Envoi de l'e-mail avec PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'falloudioum216@gmail.com'; // Ton adresse email
        $mail->Password = 'drpf yczi nrte myqt'; // Utiliser une clé d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('falloudioum216@gmail.com', 'Mirahtec');
        $mail->addAddress('falloudioum216@gmail.com', 'Mamadou Fallou Dioum');

        $mail->isHTML(true);
$mail->Subject = "Nouveau message de contact: $subject"; // Sujet de l'e-mail
$mail->Body = "
    <html>
    <head>
        <style>
            .email-container {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #dddddd;
                border-radius: 10px;
                background-color: #f9f9f9;
            }
            .email-container h2 {
                color: #444444;
                font-size: 24px;
                margin-bottom: 20px;
            }
            .email-container p {
                margin: 10px 0;
                font-size: 16px;
            }
            .email-container strong {
                color: #555555;
                font-weight: bold;
            }
            .email-container .message {
                background-color: #ffffff;
                padding: 15px;
                border: 1px solid #dddddd;
                border-radius: 5px;
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <h2>Nouveau message de contact</h2>
            <p><strong>Sujet:</strong> $subject</p>
            <p><strong>Nom:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Téléphone:</strong> $phone</p>
            <div class='message'>
                <p><strong>Message:</strong></p>
                <p>$message</p>
            </div>
        </div>
    </body>
    </html>
";

        $mail->send();
        echo "<div class='success'><p>Votre message a été envoyé avec succès !</p></div>";
    }
} catch (Exception $e) {
    echo "<div class='error'><p>Erreur lors de l'envoi du message: " . $e->getMessage() . "</p></div>";
}
?>