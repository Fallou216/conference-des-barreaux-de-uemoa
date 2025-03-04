<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bureau Exécutif</title>
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

        <section class="team-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="team-inner">
                            <div class="section-tagline">Membres du Bureau Exécutif</div>
                            <h2 class="section-title">Rencontrez les dirigeants de l'UEMOA</h2>
                        </div>
                        <!--team-inner-->
                    </div>
                    <!--col-12 col-md-12 col-lg-6 col-xl-6-->
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="team-box">
                            <p>Découvrez les membres actuels du Bureau Exécutif de l'Union Économique et Monétaire Ouest
                                Africaine (UEMOA), qui œuvrent pour l'intégration et le développement économique de la
                                région.</p>
                        </div>
                        <!--team-box-->
                    </div>
                    <!--col-12 col-md-12 col-lg-6 col-xl-6-->
                </div><!-- row -->
                <div class="row row-gutter-y-30">
                    <!-- Membre 1 -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="assets/image/CDBU1.png" class="img-fluid" alt="Abdoulaye Diop">
                            </div><!-- team-card-img -->
                            <div class="team-card-content">
                                <h4>Abdoulaye Diop</h4>
                                <p>Président de la Commission</p>
                            </div><!-- team-card-content -->
                        </div>
                        <!--team-card-->
                    </div>
                    <!--col-12 col-md-6 col-xl-3-->
                    <!-- Membre 2 -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="assets/image/team/kako_nubukpo.jpg" class="img-fluid" alt="Kako Nubukpo">
                            </div><!-- team-card-img -->
                            <div class="team-card-content">
                                <h4>Kako Nubukpo</h4>
                                <p>Commissaire</p>
                            </div><!-- team-card-content -->
                        </div>
                        <!--team-card-->
                    </div>
                    <!--col-12 col-md-6 col-xl-3-->
                    <!-- Membre 3 -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="assets/image/team/commissaire_3.jpg" class="img-fluid"
                                    alt="Nom du Commissaire 3">
                            </div><!-- team-card-img -->
                            <div class="team-card-content">
                                <h4>Nom du Commissaire 3</h4>
                                <p>Commissaire</p>
                            </div><!-- team-card-content -->
                        </div>
                        <!--team-card-->
                    </div>
                    <!--col-12 col-md-6 col-xl-3-->
                    <!-- Membre 4 -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="assets/image/team/commissaire_4.jpg" class="img-fluid"
                                    alt="Nom du Commissaire 4">
                            </div><!-- team-card-img -->
                            <div class="team-card-content">
                                <h4>Nom du Commissaire 4</h4>
                                <p>Commissaire</p>
                            </div><!-- team-card-content -->
                        </div>
                        <!--team-card-->
                    </div>
                    <!--col-12 col-md-6 col-xl-3-->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <!--team-section-->

        <!--cta-one-->
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