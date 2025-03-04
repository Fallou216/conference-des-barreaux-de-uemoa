<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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
        $mail->Subject = "Nouveau message de contact: $subject";
        $mail->Body = "
            <strong>Nom:</strong> $name <br>
            <strong>Email:</strong> $email <br>
            <strong>Téléphone:</strong> $phone <br>
            <strong>Message:</strong><br> $message
        ";

        $mail->send();
        echo "<div class='success'><p>Votre message a été envoyé avec succès !</p></div>";
    }
} catch (Exception $e) {
    echo "<div class='error'><p>Erreur lors de l'envoi du message: " . $e->getMessage() . "</p></div>";
}
?>