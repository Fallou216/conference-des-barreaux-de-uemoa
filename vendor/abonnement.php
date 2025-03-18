<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";  // Remplace par ton utilisateur MySQL
$password = "";  // Remplace par ton mot de passe MySQL
$dbname = "conference-des-barreaux-de-uemoa";

$response = [];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);

        // Vérifier si l'email existe déjà
        $stmt = $conn->prepare("SELECT * FROM abonnements WHERE email = :email");
        $stmt->execute([':email' => $email]);

        if ($stmt->rowCount() > 0) {
            $response = ['status' => 'error', 'message' => 'Cet email est déjà abonné !'];
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
                <body>
                    <p>Merci pour votre abonnement au conference des barreaux de l'uemoa!</p>
                    <p>Vous êtes maintenant abonné à nos notifications.</p>
                </body>
                </html>
            ";

            if ($mail->send()) {
                $response = ['status' => 'success', 'message' => 'Votre abonnement a été pris en compte. Un e-mail de confirmation vous a été envoyé.'];
            } else {
                $response = ['status' => 'error', 'message' => 'Erreur lors de l\'envoi de l\'email de confirmation.'];
            }
        }
    }
} catch (Exception $e) {
    $response = ['status' => 'error', 'message' => 'Erreur lors de l\'inscription : ' . $e->getMessage()];
}

echo json_encode($response);
exit;

?>