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
                <!-- Activités récentes de la Conférence des Barreaux de l'UEMOA -->
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="details-image">
                            <img src="assets/image/CDBU1.png" class="img-fluid"
                                alt="3ème Congrès des Avocats de l'UEMOA">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="details-content">
                            <p>
                                En septembre 2024, la Conférence des Barreaux de l'UEMOA a organisé le <strong>3ème
                                    Congrès des
                                    Avocats</strong> à Abidjan, Côte d'Ivoire. Cet événement a rassemblé <strong>361
                                    participants</strong>,
                                y compris des représentants de pays observateurs tels que la Guinée et le Cameroun.
                            </p>
                            <p>
                                Le congrès, placé sous le thème <strong>« Dix ans d’application du Règlement n°05 :
                                    retour vers
                                    le futur de l’avocature de l’espace UEMOA »</strong>, a permis d'évaluer l'impact du
                                Règlement
                                n°05 sur la profession d'avocat et de formuler cinq recommandations majeures pour
                                relever les défis
                                actuels de la profession dans l'espace communautaire.
                            </p>
                            <h3>📌 Points clés du Congrès :</h3>
                            <ul>
                                <li>Évaluation de l'application du <strong>Règlement n°05</strong> après dix ans.</li>
                                <li>Discussions sur l'<strong>harmonisation des pratiques juridiques</strong> dans
                                    l'UEMOA.</li>
                                <li>Renforcement de la <strong>formation continue des avocats</strong>.</li>
                                <li>Amélioration de la coordination entre les barreaux des États membres.</li>
                                <li>Propositions pour moderniser la profession d’avocat.</li>
                            </ul>
                            <p>
                                Ce congrès a permis de consolider les efforts pour une justice plus harmonisée et
                                accessible dans
                                toute la région.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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