<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';

$servername = "localhost";
$username = "root";  // Remplace par ton utilisateur MySQL
$password = "";  // Remplace par ton mot de passe MySQL
$dbname = "conference-des-barreaux-de-uemoa";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        // Récupération et sécurisation de l'email
        $email = htmlspecialchars($_POST['email']);

        // Vérifier si l'email existe déjà
        $stmt = $conn->prepare("SELECT * FROM abonnements WHERE email = :email");
        $stmt->execute([':email' => $email]);

        if ($stmt->rowCount() > 0) {
            echo "<div class='error'><p>Cet email est déjà abonné !</p></div>";
        } else {
            // Insérer l'email dans la base de données
            $stmt = $conn->prepare("INSERT INTO abonnements (email) VALUES (:email)");
            $stmt->execute([':email' => $email]);

            // Envoyer un mail de confirmation
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'falloudioum216@gmail.com';
            $mail->Password = 'drpf yczi nrte myqt'; // Remplace par ta clé d'application Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('falloudioum216@gmail.com', 'Mirahtec');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Confirmation d'abonnement";
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
                    </style>
                </head>
                <body>
                    <div class='email-container'>
                        <h2>Merci pour votre abonnement au conference des barreaux de l'uemoa!</h2>
                        <p>Vous êtes maintenant abonné à nos notifications.</p>
                    </div>
                </body>
                </html>
            ";

            if ($mail->send()) {
                echo "<div class='success'><p>Votre abonnement a été pris en compte. Un e-mail de confirmation vous a été envoyé.</p></div>";
            } else {
                echo "<div class='error'><p>Erreur lors de l'envoi de l'email de confirmation.</p></div>";
            }
        }
    }
} catch (Exception $e) {
    echo "<div class='error'><p>Erreur lors de l'inscription : " . $e->getMessage() . "</p></div>";
}

?>