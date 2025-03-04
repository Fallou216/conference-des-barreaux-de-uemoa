<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News1</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/reey-font/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
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
    <?php include ('layouts/head.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .footer-widget-text p {
        font-size: 16px;
        line-height: 32px;
        font-weight: 600;
        color: var(--thm-white);
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
        <section class="details-section">
            <div class="container">
                <!-- Détails du 3e Congrès des Avocats de l’UEMOA -->
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="details-image">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="3e Congrès des Avocats de l’UEMOA">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="details-content">
                            <h2>⚖️ 3e Congrès des Avocats de l’UEMOA</h2>
                            <p>
                                <strong>Le 20 septembre 2024</strong>, le <strong>3e Congrès des Avocats de
                                    l’UEMOA</strong> s’est tenu à <strong>Abidjan</strong>,
                                réunissant <strong>361 participants</strong>, dont des avocats, magistrats et
                                représentants des institutions judiciaires
                                des huit pays membres. Des délégations de la Guinée et du Cameroun étaient également
                                présentes en tant qu'observateurs.
                            </p>

                            <h3>📌 Thème central :</h3>
                            <p>
                                « <strong>Dix ans d’application du Règlement n°05 : retour vers le futur de l’avocature
                                    de l’espace UEMOA</strong> »
                                – Une rétrospective sur l’impact de ce règlement sur la profession d’avocat et les défis
                                à relever pour l’avenir.
                            </p>

                            <h3>📌 Débats et Recommandations :</h3>
                            <ul>
                                <li><i class="fas fa-gavel"></i> <strong>Évaluation du Règlement n°05 :</strong> Analyse
                                    des avancées et des difficultés rencontrées depuis sa mise en œuvre.</li>
                                <li><i class="fas fa-balance-scale"></i> <strong>Harmonisation des pratiques juridiques
                                        :</strong> Proposition de normes communes pour uniformiser les règles
                                    professionnelles.</li>
                                <li><i class="fas fa-graduation-cap"></i> <strong>Formation continue :</strong>
                                    Développement de programmes pour renforcer les compétences des avocats.</li>
                                <li><i class="fas fa-users"></i> <strong>Coopération inter-barreaux :</strong>
                                    Renforcement des échanges et du partage d’expériences entre les barreaux de la
                                    région.</li>
                                <li><i class="fas fa-lightbulb"></i> <strong>Modernisation de la profession :</strong>
                                    Introduction des nouvelles technologies pour améliorer les services juridiques.</li>
                            </ul>

                            <p>
                                Cet événement a marqué une étape clé dans la consolidation des efforts visant à rendre
                                la justice
                                plus efficace et accessible dans l’ensemble de l’UEMOA.
                            </p>

                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                            <a href="news.php" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i> Retour aux actualités
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>


        <!-- Fin de la section des Partenaires -->
        <!--client-section-->
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
    <!-- Fin de la fenêtre modale de recherche -->
    <a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/youtube-popup/youtube-popup.jquery.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>