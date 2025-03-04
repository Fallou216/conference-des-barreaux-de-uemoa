<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assemblée Générale</title>
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
        <!-- portfolio-details-nav -->
        <section class="portfolio-section">
            <div class="section-title-box text-center">
                <div class="section-tagline">Assemblée Générale de l'UEMOA</div>
                <h2 class="section-title">Découvrez les Réunions et Événements <br>de l'Assemblée Générale</h2>
            </div><!-- section-title-box -->
            <div class="portfolio-content conatainer-fluid">
                <div class="portfolio-carousel owl-carousel owl-theme">
                    <!-- Réunion 1 : Assemblée Générale 2023 -->
                    <div class="item">
                        <div class="portfolio-card">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="Assemblée Générale 2023">
                            <div class="portfolio-card-meta">
                                <div class="portfolio-card-text"><a href="assemblee-2023.html">Réunion Annuelle</a>
                                </div>
                                <div class="portfolio-card-title"><a href="assemblee-2023.html">Assemblée Générale
                                        2023</a></div>
                            </div><!-- portfolio-card-meta -->
                        </div>
                        <!--portfolio-card-->
                    </div><!-- item -->

                    <!-- Réunion 2 : Réforme Judiciaire -->
                    <div class="item">
                        <div class="portfolio-card">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="Réforme Judiciaire">
                            <div class="portfolio-card-meta">
                                <div class="portfolio-card-text"><a href="reforme-judiciaire.html">Réforme</a></div>
                                <div class="portfolio-card-title"><a href="reforme-judiciaire.html">Réforme Judiciaire
                                        2022</a></div>
                            </div><!-- portfolio-card-meta -->
                        </div>
                        <!--portfolio-card-->
                    </div><!-- item -->

                    <!-- Événement 1 : Formation des Avocats -->
                    <div class="item">
                        <div class="portfolio-card">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="Formation des Avocats">
                            <div class="portfolio-card-meta">
                                <div class="portfolio-card-text"><a href="formation-avocats.html">Formation</a></div>
                                <div class="portfolio-card-title"><a href="formation-avocats.html">Formation des Avocats
                                        2021</a></div>
                            </div><!-- portfolio-card-meta -->
                        </div>
                        <!--portfolio-card-->
                    </div><!-- item -->

                    <!-- Événement 2 : Promotion des Droits Humains -->
                    <div class="item">
                        <div class="portfolio-card">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="Promotion des Droits Humains">
                            <div class="portfolio-card-meta">
                                <div class="portfolio-card-text"><a href="droits-humains.html">Droits Humains</a></div>
                                <div class="portfolio-card-title"><a href="droits-humains.html">Promotion des Droits
                                        Humains 2020</a></div>
                            </div><!-- portfolio-card-meta -->
                        </div>
                        <!--portfolio-card-->
                    </div><!-- item -->
                </div>
                <!--portfolio-carousel-->
            </div>
            <!--portfolio-content-->
        </section>

        <!--portfolio-section-->
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
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/youtube-popup/youtube-popup.jquery.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>