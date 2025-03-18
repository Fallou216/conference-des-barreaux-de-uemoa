<?php

// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conference-des-barreaux-de-uemoa"; // Nom correct de la base de données

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['soumettre'])) {

        // Sécurisation des entrées utilisateur
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        // Vérification de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='error'>L'email n'est pas valide.</div>";
        } else {
            // Préparer et exécuter l'insertion dans la base de données
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $subject, $message]);

            // Appel du script pour envoyer l'email
            require 'vendor/contact.php';

            echo "<div class='success'>Formulaire soumis avec succès et message envoyé.</div>";
        }
    }
} catch (PDOException $e) {
    echo "<div class='error'>Erreur de connexion : " . $e->getMessage() . "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    /* Styles pour les messages de succès et d'erreur */
    .alert-success {

        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert-error {

        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/flaticon/css/flaticon_towngov.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/youtube-popup/youtube-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon_io/logo-uemoa.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon_io/logo-uemoa.png">
    <link rel="manifest" href="assets/image/favicons/site.webmanifest">
    <link rel="stylesheet" href="style.css">
    <style>
    .footer-widget-text p {
        font-size: 16px;
        line-height: 32px;
        font-weight: 600;
        color: var(--thm-white);
    }
    </style>

    <style>
    /* Styles pour les messages de succès et d'erreur */
    .alert-success {

        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert-error {

        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <!-- Pre loader -->
    <div id="pre-loader">
        <?php include ('layouts/preloader.php'); ?>
    </div>
    <!-- end pre-loader -->

    <!-- Header -->
    <?php include ('layouts/header.php'); ?>
    <!-- end header-->
    <div class="page-wrapper">

        <!--page-banner-->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-box">
                            <div class="section-tagline">
                                NOUS CONTACTER
                            </div><!-- section-tagline -->
                            <h1 class="section-title">Toujours là pour vous aider</h1>
                            <p>Si vous avez des questions concernant la conférence, n'hésitez pas à nous envoyer un
                                message. Notre équipe est prête à vous assister pour que votre expérience soit la plus
                                enrichissante possible.</p>
                        </div><!-- contact-box -->
                    </div><!-- col-lg-4 -->
                    <div class="col-lg-8">
                        <!-- Conteneur pour les messages -->
                        <div id="message-container" style="display: none;">
                            <div id="message" class="message"></div>
                        </div>

                        <form id="contactForm" action="vendor/sendmail.php" class="contact-form contact-form-validated"
                            method="post" onsubmit="disableSubmitButton()">
                            <div class="row row-gutter-10">
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="name" class="input-text" placeholder="Votre nom" name="name"
                                        required>
                                </div><!-- col-12 col-lg-6 -->
                                <div class="col-12 col-lg-6">
                                    <input type="email" id="email" class="input-text" placeholder="Adresse e-mail"
                                        name="email" required>
                                </div><!-- col-12 col-lg-6 -->
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="phone" class="input-text" placeholder="Numéro de téléphone"
                                        name="phone" required>
                                </div><!-- col-12 col-lg-6 -->
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="subject" class="input-text" placeholder="Sujet"
                                        name="subject" required>
                                </div><!-- col-12 col-lg-6 -->
                                <div class="col-12 col-lg-12">
                                    <textarea name="message" placeholder="Écrivez votre message" class="input-text"
                                        required></textarea>
                                </div><!-- col-12 col-lg-12 -->
                                <div class="col-12 col-lg-12">
                                    <button id="submitBtn" type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i> Envoyer le message
                                    </button>
                                </div><!-- col-12 col-lg-12 -->
                            </div><!-- row -->
                        </form>

                        <script>
                        function disableSubmitButton() {
                            document.getElementById("submitBtn").disabled = true;
                        }
                        </script>


                        <style>
                        /* Styles pour les messages */
                        #message-container {
                            margin-bottom: 20px;
                            /* Espace entre les messages et le formulaire */
                        }

                        .message {
                            padding: 15px;
                            border-radius: 5px;
                            color: white;
                            font-size: 16px;
                            margin-bottom: 10px;
                            opacity: 1;
                            transition: opacity 0.5s ease-in-out;
                        }

                        .message.success {
                            background-color: #4CAF50;
                            /* Vert */
                        }

                        .message.error {
                            background-color: #f44336;
                            /* Rouge */
                        }

                        /* Styles pour le formulaire (couleurs d'origine) */
                        .btn-primary {
                            background-color: var(--thm-primary);
                            /* Couleur bleue d'origine */
                            color: white;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                        }

                        .btn-primary:hover {
                            background-color: var(--thm-black);
                            /* Couleur bleue plus foncée au survol */
                        }
                        </style>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.querySelector('.contact-form');
                            const messageContainer = document.getElementById('message-container');
                            const message = document.getElementById('message');

                            form.addEventListener('submit', function(event) {
                                event.preventDefault();

                                // Simuler une soumission de formulaire réussie ou une erreur
                                const formData = new FormData(form);
                                fetch(form.action, {
                                        method: form.method,
                                        body: formData,
                                    })
                                    .then(response => {
                                        if (response.ok) {
                                            showMessage('Votre message a été envoyé avec succès!',
                                                'success');
                                        } else {
                                            showMessage(
                                                'Une erreur s\'est produite lors de l\'envoi du message.',
                                                'error');
                                        }
                                    })
                                    .catch(() => {
                                        showMessage(
                                            'Une erreur s\'est produite lors de l\'envoi du message.',
                                            'error');
                                    });

                                // Réinitialiser le formulaire après la soumission
                                form.reset();
                            });

                            function showMessage(text, type) {
                                message.textContent = text;
                                message.className = 'message ' + type;
                                messageContainer.style.display = 'block';

                                // Faire disparaître le message après 10 secondes
                                setTimeout(function() {
                                    messageContainer.style.display = 'none';
                                }, 10000);
                            }
                        });
                        </script>
                    </div><!-- row -->
                </div><!-- container -->
        </section><!-- contact-section -->
        <div class="contact-gmap-section">
            <div class="container">
                <div class="responsive-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15904852.990911573!2d-20.19317955213576!3d13.286643900147148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.6931712!2d-17.4718976!4m5!1s0xe2ebe2112555555%3A0x8e98823fea1d476c!2s9F9M%2BG2X%20Si%C3%A8ge%20de%20L%C2%B4UEMOA%2C%20Avenue%20Maurice%20Yameogo%2C%20Ouagadougou%2C%20Burkina%20Faso!3m2!1d12.3684054!2d-1.5172607999999999!5e0!3m2!1sfr!2ssn!4v1741599044356!5m2!1sfr!2ssn"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div><!-- responsive-map -->
            </div><!-- container -->
        </div><!-- contact-gmap-section -->
        <div class="cta-four-section">
            <div class="container">
                <div class="cta-four-inner">
                    <div class="row row-gutter-y-20">
                        <div class="col-12 col-lg-6 col-xl-3">
                            <div class="cta-four-content">
                                <i class="flaticon-help"></i>
                                <div class="cta-four-content-box">
                                    <span>Une question ?</span>
                                    <p>Appelez-nous au +226 25 31 88 73</p>
                                </div><!-- cta-four-content-box -->
                            </div><!-- cta-four-content -->
                        </div><!-- col-12 col-lg-6 col-xl-3 -->
                        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="cta-four-content">
                                <i class="flaticon-envelope-3"></i>
                                <div class="cta-four-content-box">
                                    <span>Envoyez un e-mail</span>
                                    <p>contact@conference-barreaux-uemoa.org</p>
                                </div><!-- cta-four-content-box -->
                            </div><!-- cta-four-content -->
                        </div><!-- col-12 col-md-6 col-lg-6 col-xl-3 -->
                        <div class="col-12 col-lg-6 col-xl-4">
                            <div class="cta-four-content">
                                <i class="flaticon-location-pin"></i>
                                <div class="cta-four-content-box">
                                    <span>Visitez nos bureaux</span>
                                    <p>Siège : Ouagadougou, Burkina Faso</p>
                                </div><!-- cta-four-content-box -->
                            </div><!-- cta-four-content -->
                        </div><!-- col-12 col-lg-6 col-xl-4 -->
                        <div class="col-12 col-lg-6 col-xl-2">
                            <div class="cta-four-content">
                                <div class="cta-four-widget-socials">
                                    <a href="https://x.com/UEMOA_Officiel"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/UEMOAOfficielle/?locale=fr_FR"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a
                                        href="https://www.google.com/search?q=page+pinterest+de+uemoa&oq=page+pinterest+de+uemoa&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCDYzMzlqMGo0qAIGsAIB8QV5NmMvHBxBiQ&sourceid=chrome&ie=UTF-8"><i
                                            class="fa-brands fa-pinterest-p"></i></a>
                                    <a href="https://www.instagram.com/uemoaofficiel/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </div><!-- cta-four-widget-socials -->
                            </div><!-- cta-four-content -->
                        </div><!-- col-12 col-lg-6 col-xl-2 -->
                    </div><!-- row -->
                </div><!-- cta-four-inner -->
            </div><!-- container -->
        </div><!-- cta-four-section -->
    </div>
    <!--page-wrapper-->
    <!--bottom-footer-->
    <section class="footer">
        <?php include ('layouts/footer.php'); ?>
    </section>
    <!-- Début de la fenêtre modale de recherche -->
    <div class="search-popup" role="dialog" aria-modal="true" aria-labelledby="search-title">
        <div class="search-popup-overlay search-toggler" tabindex="-1"></div>
        <div class="search-popup-content">
            <form action="#" method="get" role="search">
                <label for="search" id="search-title" class="sr-only">Rechercher</label>
                <input type="text" id="search" name="q" placeholder="Rechercher..." aria-label="Rechercher">
                <button type="submit" aria-label="Valider la recherche" class="search-btn">
                    <span><i class="flaticon-search-interface-symbol" aria-hidden="true"></i></span>
                </button>
            </form>
        </div>
    </div>
    </div><!-- search-popup -->
    <a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/vendor/youtube-popup/youtube-popup.jquery.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>