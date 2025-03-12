<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lois</title>
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

        <div class="page-wrapper">

            <!--page-banner-->
            <!-- nav nav-pills -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row row-gutter-30">
                        <!-- Document 1 : Traité de l'UEMOA -->
                        <div class="col-xxl-4 col-xl-6">
                            <div class="service-three-card">
                                <div class="service-three-icon">
                                    <i class="fa-solid fa-gavel"></i>
                                </div><!-- service-three-icon -->
                                <div class="service-three-card-content">
                                    <h3><a href="assets/ODA-PDF/REGLEMENT INTERIEUR DE L’ORDRE DES AVOCATS .pdf"
                                            target="_blank">REGLEMENT INTERIEUR DE L’ORDRE DES AVOCATS</a></h3>
                                    <p>Le Règlement Intérieur arrêté par le Conseil de l’Ordre, contient des règles
                                        obligatoires pour tous
                                        les avocats exerçant leur profession au Sénégal...</p>
                                    <div class="service-three-detail">
                                        <a href="assets/ODA-PDF/REGLEMENT INTERIEUR DE L’ORDRE DES AVOCATS .pdf"
                                            target="_blank"><span>Télécharger</span><i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <i class="flaticon-pdf"></i>
                                    </div><!-- service-three-detail -->
                                </div><!-- service-three-card-content -->
                            </div><!-- service-three-card -->
                        </div><!-- col-xxl-4 col-xl-6 -->
                    </div><!-- row -->
                </div><!-- tab-pane -->
            </div><!-- tab-content -->
            </section><!-- document-section  -->
        </div>
        <br>
        <br>
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