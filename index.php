<!DOCTYPE html>
<html lang="fr">

<!-- head -->
<?php include ('layouts/head.php'); ?>
<link rel="stylesheet" href="style.css">


<body>
    <!-- Pre loader -->
    <div id="pre-loader">
        <?php include ('layouts/preloader.php'); ?>
    </div>
    <!-- end pre-loader -->

    <!-- Header -->
    <?php include ('layouts/header.php'); ?>
    <!-- end header-->

    <!-- Contenu de la page -->
    <div class="page-wrapper">
        <!-- SLIDER -->
        <?php include('slider.php'); ?>
        <!-- FIN SLIDER -->

        <!-- Section Domaines d'Intervention -->
        <section class="department-section">
            <div class="container">
                <div class="department-section-inner">
                    <div class="row row-gutter-y-20">
                        <!-- Réduction de l'espace entre les lignes -->

                        <!-- Droits et Libertés -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-balance-scale"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Droits et Libertés</a></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Renforcement des Capacités -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-chalkboard-teacher"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Formations et Capacités</a></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Harmonisation des Législations -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-gavel"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Harmonisation des Lois</a></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Médiation et Arbitrage -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-handshake"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Médiation et Arbitrage</a></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Solidarité entre Barreaux -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-users"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Solidarité Barreaux</a></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Lutte contre la Corruption -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="department-card">
                                <div class="department-card-icon">
                                    <a href="missions.php"><i class="fas fa-shield-alt"></i></a>
                                </div>
                                <div class="department-card-content">
                                    <h5><a href="missions.php">Lutte contre la Corruption</a></h5>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- department-section-inner -->
            </div><!-- container -->
        </section>
        <!-- Fin de la section Domaines d'Intervention -->
        <!-- Section Présentation et Président -->
        <section class="about-mayor-section">
            <div class="container">
                <div class="row">
                    <!-- Présentation -->
                    <div class="col-lg-6">
                        <div class="about-inner">
                            <div class="section-title-box">
                                <div class="section-tagline">Présentation</div><!-- section-tagline -->
                                <h2 class="section-title">Bienvenue sur le portail de la Conférence des Barreaux de
                                    l'UEMOA</h2>
                                <p>La Conférence des Barreaux de l'UEMOA est une organisation qui regroupe les barreaux
                                    des États membres de l'Union Économique et Monétaire Ouest-Africaine (UEMOA). Elle
                                    œuvre pour l'harmonisation des législations, la promotion des droits humains, et le
                                    renforcement de la profession d'avocat dans la sous-région.</p>
                            </div><!-- section-title-box -->
                            <div class="row">
                                <!-- Carte 1 : Promotion des droits humains -->
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="about-card">
                                        <h4 class="about-title"><i class="fa-solid fa-scale-balanced"></i>Droits Humains
                                        </h4>
                                        <p class="about-text">Défense des droits de l'homme et de l'accès à la justice
                                            pour tous.</p>
                                    </div><!-- about-card -->
                                </div><!-- col-xl-6 col-lg-12 col-md-6 -->

                                <!-- Carte 2 : Formation des avocats -->
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="about-card">
                                        <h4 class="about-title"><i class="fa-solid fa-graduation-cap"></i>Formation des
                                            Avocats</h4>
                                        <p class="about-text">Organisation de séminaires et formations continues pour
                                            les avocats.</p>
                                    </div><!-- about-card -->
                                </div><!-- col-xl-6 col-lg-12 col-md-6 -->
                            </div><!-- row -->
                        </div><!-- about-inner -->
                    </div><!-- col-lg-6 -->

                    <!-- Président de la Conférence -->
                    <div class="col-lg-6">
                        <div class="mayor-box">
                            <div class="section-title-box">
                                <div class="section-tagline">PRÉSIDENT DE LA CONFÉRENCE</div><!-- section-tagline -->
                                <h2 class="section-title">Maître MENTENON Claude</h2>
                                <p>Le Président de la Conférence des Barreaux de l'UEMOA joue un rôle clé dans la
                                    promotion de la justice, la défense des droits humains, et le renforcement de la
                                    coopération entre les barreaux des États membres.</p>
                            </div><!-- section-title-box -->
                        </div>
                        <!--section-title-box-->
                        <div class="mayor-icon-box">
                            <div class="mayor-icon">
                                <i class="flaticon-professor"></i>
                            </div><!-- mayor-icon -->
                            <h4 class="mayor-icon-title">Un leader engagé pour la justice en Afrique de l'Ouest</h4>
                        </div>
                        <!--mayor-icon-box-->
                        <ul class="list-unstyled list-style-one">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Promotion de l'harmonisation des législations dans l'espace UEMOA.</p>
                            </li><!-- li -->
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Renforcement des capacités des avocats à travers des formations continues.</p>
                            </li><!-- li -->
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Défense des droits humains et de l'accès à la justice pour tous.</p>
                            </li><!-- li -->
                        </ul><!-- ul -->
                    </div>
                    <!--mayor-box-->
                </div><!-- col-lg-6 -->
            </div><!-- row -->
    </div><!-- container -->
    </section>
    <!--mayor-section-->
    <section class="service-one-section">
        <div class="container">
            <h2 class="section-title" style="text-align: center;">Barreaux de la conférence de l'espace uemoa</h2>

            <div class="row row-gutter-30">
                <!-- Bénin -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/B.png" class="img-fluid" alt="Drapeau du Bénin"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Bénin</h3>
                            <p>Le <strong>Bénin</strong> pays d'Afrique de l'Ouest au riche patrimoine culturel, le
                                Bénin
                                possède un système judiciaire basé sur le droit civil, hérité du système français, avec
                                une Cour suprême, des cours d'appel et des tribunaux de première instance, et compte
                                environ 165 avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Burkina Faso -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/BF.png" class="img-fluid" alt="Drapeau du Burkina Faso"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Burkina Faso</h3>
                            <p>Le <strong>Burkina Faso</strong> pays d'Afrique de l'Ouest est reconnu pour son artisanat
                                et sa musique, son système judiciaire, également de droit civil, comprend une Cour de
                                cassation, des cours d'appel et des tribunaux de grande instance, et le pays compte
                                environ 204 avocats.
                            </p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Côte d'Ivoire -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/CD.png" class="img-fluid" alt="Drapeau de la Côte d'Ivoire"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Côte d'Ivoire</h3>
                            <p>La <strong>Côte d'Ivoire</strong> pays enclavé d'Afrique de l'Ouest, le Burkina Faso est
                                reconnu pour son artisanat et sa musique, son système judiciaire, également de droit
                                civil, comprend une Cour de cassation, des cours d'appel et des tribunaux de grande
                                instance, et le pays compte environ 559 avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Guinée-Bissau -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/GB.png" class="img-fluid" alt="Drapeau de la Guinée-Bissau"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Guinée-Bissau</h3>
                            <p>La <strong>Guinée-Bissau</strong> pays d'Afrique de l'Ouest, la Guinée-Bissau est connue
                                pour ses îles Bijagos et sa biodiversité, son système judiciaire, en développement,
                                comprend une Cour suprême, des tribunaux régionaux et des tribunaux de première
                                instance, et le pays compte environ 50 avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mali -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/M.png" class="img-fluid" alt="Drapeau du Mali"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Mali</h3>
                            <p>Le <strong>Mali</strong> vaste pays d'Afrique de l'Ouest, le Mali est riche en histoire
                                et
                                en culture, avec des sites emblématiques comme Tombouctou, son système judiciaire
                                combine le droit civil et le droit coutumier, avec une Cour suprême, des cours d'appel
                                et des tribunaux de première instance, et compte environ 360 avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Niger -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/N.png" class="img-fluid" alt="Drapeau du Niger"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Niger</h3>
                            <p>Le <strong>Niger</strong> pays sahélien d'Afrique de l'Ouest, le Niger est caractérisé
                                par ses paysages désertiques et sa culture touarègue, son système judiciaire, mêlant
                                droit civil et droit coutumier, comprend une Cour de cassation, des cours d'appel et des
                                tribunaux de grande instance, et le pays compte environ 130 avocats.
                            </p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Sénégal -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/S.png" class="img-fluid" alt="Drapeau du Sénégal"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Sénégal</h3> pays d'Afrique de l'Ouest réputé pour sa musique, sa danse et son
                            hospitalité, le Sénégal a un système judiciaire basé sur le droit civil, avec une Cour
                            suprême, des cours d'appel et des tribunaux de première instance, et compte environ 400
                            avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Togo -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <img src="assets/image/flags/T.png" class="img-fluid" alt="Drapeau du Togo"
                                style="width: 50px; height: auto;">
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Togo</h3>
                            <p>Le <strong>Togo</strong> petit pays d'Afrique de l'Ouest, le Togo est connu pour ses
                                plages, ses cascades et sa culture vaudou, son système judiciaire, de droit civil,
                                comprend une Cour suprême, des cours d'appel et des tribunaux de première instance, et
                                le pays compte environ 154 avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section class="batonniers-section">
        <div class="container">
            <div class="section-title-box text-center">
                <div class="section-tagline">Les bâtonniers des barreaux membres de l'espace uemoa</div>
                <h2 class="section-title">Les bâtonniers des barreaux membres de l'espace uemoa</h2>
            </div><!-- section-title-box -->
            <div class="batonniers-grid">
                <!-- Bâtonnier du Bénin -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B1.png" class="batonnier-photo" alt="Bâtonnier du Bénin">
                    <div class="batonnier-info">
                        <h5>Maître Angelo Hounkpatin</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Bénin. Engagé dans la défense des droits de l'homme et le
                            renforcement de l'État de droit.</p>
                    </div>
                </div>
                <!-- Bâtonnier du Burkina Faso -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B2.png" class="batonnier-photo" alt="Bâtonnier du Burkina Faso">
                    <div class="batonnier-info">
                        <h5>Maître Batibié Benao</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Burkina Faso. Défenseur ardent de la justice sociale et
                            de l'équité.</p>
                    </div>
                </div>
                <!-- Bâtonnier de la Côte d'Ivoire -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B3.png" class="batonnier-photo"
                        alt="Bâtonnier de la Côte d'Ivoire">
                    <div class="batonnier-info">
                        <h5>Maître Florence Loan-Messan</h5>
                        <p>Première femme Bâtonnier de l'Ordre des Avocats de Côte d'Ivoire. Pionnière dans la promotion
                            de l'égalité des genres dans la profession juridique.</p>
                    </div>
                </div>
                <!-- Bâtonnier de la Guinée-Bissau -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B8.png" class="batonnier-photo"
                        alt="Bâtonnier de la Guinée-Bissau">
                    <div class="batonnier-info">
                        <h5>Maître Mamadou Souaré Diop</h5>
                        <p>Bâtonnier de l'Ordre des Avocats de Guinée-Bissau. Défenseur des droits et de l'égalité des
                            citoyens.</p>
                    </div>
                </div>
                <!-- Bâtonnier du Mali -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B4.png" class="batonnier-photo" alt="Bâtonnier du Mali">
                    <div class="batonnier-info">
                        <h5>Maître Ousmane Bouba Traoré</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Mali. Actif dans la promotion de la paix et de la justice
                            dans la région.</p>
                    </div>
                </div>
                <!-- Bâtonnier du Niger -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B5.png" class="batonnier-photo" alt="Bâtonnier du Niger">
                    <div class="batonnier-info">
                        <h5>Maître Oumarou Sanda Kadri</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Niger. Dévoué à la protection des droits fondamentaux et
                            à l'accès à la justice pour tous.</p>
                    </div>
                </div>
                <!-- Bâtonnier du Sénégal -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B6.png" class="batonnier-photo" alt="Bâtonnier du Sénégal">
                    <div class="batonnier-info">
                        <h5>Maître Mamadou SECK</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Sénégal. Leader dans les réformes juridiques et la
                            modernisation du système judiciaire.</p>
                    </div>
                </div>
                <!-- Bâtonnier du Togo -->
                <div class="batonnier-card">
                    <img src="assets/image/batonnier/B7.png" class="batonnier-photo" alt="Bâtonnier du Togo">
                    <div class="batonnier-info">
                        <h5>Maître Claude Folly Adama</h5>
                        <p>Bâtonnier de l'Ordre des Avocats du Togo. Engagé dans la promotion de l'état de droit et la
                            défense des libertés individuelles.</p>
                    </div>
                </div>
            </div><!-- batonniers-grid -->
        </div><!-- container -->
    </section>

    <style>
    .batonnier-card {
        text-align: center;
        background: #f8f9fa;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .batonnier-card:hover {
        transform: scale(1.05);
    }

    .batonnier-photo {
        width: 200px;
        /* Taille uniforme */
        height: 200px;
        /* Taille uniforme */
        object-fit: cover;
        /* Ajuste l'image pour qu'elle remplisse complètement le cadre */
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .batonnier-card:hover .batonnier-photo {
        transform: scale(1.1);
    }

    .batonnier-info {
        margin-top: 10px;
    }

    .batonniers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        justify-items: center;
        padding: 20px;
    }
    </style>

    <section class="service-one-section">
        <div class="container">
            <h2 class="section-title" style="text-align: center;">Nos Missions</h2>

            <div class="row row-gutter-30">
                <!-- Mission 1 : Harmonisation des législations -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-balance-scale"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Harmonisation des Législations</h3>
                            <p>Travailler à l'unification des pratiques juridiques au sein des pays membres pour
                                faciliter l'intégration régionale et renforcer la coopération judiciaire.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 2 : Formation des avocats -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-chalkboard-teacher"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Formation des Avocats</h3>
                            <p>Organiser des séminaires, des formations continues et des conférences pour améliorer
                                les compétences des avocats dans les différents domaines du droit.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 3 : Promotion des droits humains -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Promotion des Droits Humains</h3>
                            <p>Défendre les droits de l'homme, l'accès à la justice, et l'égalité des citoyens
                                devant la loi dans l'espace UEMOA.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 4 : Solidarité entre les barreaux -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Solidarité et coopération entre les Barreaux</h3>
                            <p>Renforcer la coopération et l'échange d'informations entre les barreaux des
                                différents pays membres pour une meilleure collaboration régionale.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 5 : Plaidoyer pour la profession d'avocat -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-bullhorn"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Plaidoyer pour la Profession d'Avocat</h3>
                            <p>Défendre les intérêts de la profession d'avocat au niveau régional et international,
                                et améliorer les conditions de travail des avocats.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 6 : Médiation et arbitrage -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Médiation et Arbitrage</h3>
                            <p>Encourager la médiation et l'arbitrage comme alternatives aux procédures judiciaires
                                longues, pour une résolution efficace des conflits.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 7 : Lutte contre la corruption -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-gavel"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Lutte contre la Corruption</h3>
                            <p>Œuvrer pour un système judiciaire transparent et renforcer l'État de droit dans la
                                région en luttant contre la corruption.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 8 : Accès à la justice -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Accès à la Justice</h3>
                            <p>Promouvoir un accès équitable à la justice pour tous les citoyens, en particulier les
                                populations vulnérables.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->

                <!-- Mission 9 : Réformes juridiques et judiciaires -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="service-one-card">
                        <div class="service-one-icon">
                            <i class="fa-solid fa-book"></i>
                        </div><!-- service-one-icon -->
                        <div class="service-one-card-content">
                            <h3>Réformes Juridiques et Judiciaires</h3>
                            <p>Soutenir les réformes législatives et judiciaires pour garantir un système judiciaire
                                plus efficace, équitable et accessible.</p>
                        </div><!-- service-one-card-content -->
                    </div><!-- service-one-card -->
                </div><!-- col-xxl-4 col-xl-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <!-- Section des Partenaires -->
    <section class="partners-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <div class="section-tagline">Partenaires de l'UEMOA</div>
                        <h2 class="section-title">Nos Partenaires Institutionnels et Internationaux</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gutter-y-30 justify-content-center">
                <!-- Partenaire 1 : Commission de l'UEMOA -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/Partenaires/P1.png" class="img-fluid" alt="Commission de l'UEMOA">
                        </div>
                        <div class="partner-card-content">
                            <h4>Commission de l'UEMOA</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 2 : Cour de Justice de l'UEMOA -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/Partenaires/CJ.png" class="img-fluid"
                                alt="Cour de Justice de l'UEMOA">
                        </div>
                        <div class="partner-card-content">
                            <h4>Cour de Justice de l'UEMOA</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 3 : Union Internationale des Avocats (UIA) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/UIA.png" class="img-fluid"
                                alt="Union Internationale des Avocats">
                        </div>
                        <div class="partner-card-content">
                            <h4>Union Internationale des Avocats (UIA)</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 4 : Conseil International des Barreaux -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/CIDB.png" class="img-fluid"
                                alt="Conseil International des Barreaux">
                        </div>
                        <div class="partner-card-content">
                            <h4>Conseil International des Barreaux</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 5 : Organisation des Nations Unies (ONU) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/ONU.png" class="img-fluid"
                                alt="Organisation des Nations Unies">
                        </div>
                        <div class="partner-card-content">
                            <h4>Organisation des Nations Unies (ONU)</h4>
                        </div>
                    </div>
                </div>


                <!-- Partenaire 7 : Banque Centrale des États de l'Afrique de l'Ouest (BCEAO) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/P3.png" class="img-fluid"
                                alt="Banque Centrale des États de l'Afrique de l'Ouest">
                        </div>
                        <div class="partner-card-content">
                            <h4>Banque Centrale des États de l'Afrique de l'Ouest (BCEAO)</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 8 : Union Africaine (UA) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/AU.png" class="img-fluid" alt="Union Africaine">
                        </div>
                        <div class="partner-card-content">
                            <h4>Union Africaine (UA)</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 9 : Organisation Internationale de la Francophonie (OIF) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/OIF.png" class="img-fluid"
                                alt="Organisation Internationale de la Francophonie">
                        </div>
                        <div class="partner-card-content">
                            <h4>Organisation Internationale de la Francophonie (OIF)</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 10 : Banque Mondiale -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/P7.png" class="img-fluid" alt="Banque Mondiale">
                        </div>
                        <div class="partner-card-content">
                            <h4>Banque Mondiale</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 11 : Union Européenne (UE) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/P9.png" class="img-fluid" alt="Union Européenne">
                        </div>
                        <div class="partner-card-content">
                            <h4>Union Européenne (UE)</h4>
                        </div>
                    </div>
                </div>

                <!-- Partenaire 12 : Programme des Nations Unies pour le Développement (PNUD) -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="partner-card">
                        <div class="partner-card-img">
                            <img src="assets/image/partenaires/PNUD.png" class="img-fluid"
                                alt="Programme des Nations Unies pour le Développement">
                        </div>
                        <div class="partner-card-content">
                            <h4>Programme des Nations Unies pour le Développement (PNUD)</h4>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <!-- Fin de la section des Partenaires -->
    <!-- Section Actualités -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-box">
                <div class="section-title-box text-center">
                    <div class="section-tagline">Actualités Récentes</div>
                    <h2 class="section-title">Découvrez les dernières nouvelles et articles</h2>
                </div>
            </div>
            <div class="row">
                <!-- Article 1 -->
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card-image">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="3e Congrès des Avocats de l’UEMOA">
                            <a href="news.php"></a>
                        </div>
                        <div class="blog-card-date">
                            <a href="news.php">20 SEP 2024</a>
                        </div>
                        <div class="blog-card-content">
                            <h4><a href="news.php">3e Congrès des Avocats de l’UEMOA : Bilan de dix ans
                                    d'application du Règlement n°05</a></h4>
                            <p>Le 3e Congrès des Avocats de l'UEMOA s'est tenu à Abidjan, réunissant des avocats des
                                huit pays membres pour évaluer une décennie d'harmonisation des pratiques
                                professionnelles.</p>
                        </div>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card-image">
                            <img src="assets/image/CDBU1.png" class="img-fluid" alt="Recommandations du Congrès 2024">
                            <a href="news.php"></a>
                        </div>
                        <div class="blog-card-date">
                            <a href="news.php">21 SEP 2024</a>
                        </div>
                        <div class="blog-card-content">
                            <h4><a href="news.php">Cinq recommandations pour l'avenir de la profession
                                    d'avocat dans l'UEMOA</a></h4>
                            <p>À l'issue du congrès, cinq recommandations clés ont été formulées pour améliorer
                                l’exercice de la profession dans l’espace communautaire.</p>
                        </div>
                    </div>
                </div>
                <!-- Article 3 -->
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card-image">
                            <img src="assets/image/CDBU1.png" class="img-fluid"
                                alt="Rentrée judiciaire de la Cour de Justice de l’UEMOA">
                            <a href="news.php"></a>
                        </div>
                        <div class="blog-card-date">
                            <a href="news.php">20 DÉC 2023</a>
                        </div>
                        <div class="blog-card-content">
                            <h4><a href="news.php">Rentrée judiciaire de la Cour de Justice de l’UEMOA</a>
                            </h4>
                            <p>L'audience solennelle de la rentrée judiciaire s'est déroulée à Ouagadougou, abordant les
                                activités non judiciaires de la Cour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section -->

    <section class="cta-two-section">
        <div class="container">
            <div class="cta-two-section-inner">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="cta-two-title">
                            <div class="cta-two-card-icon">
                                <i class="flaticon-envelope-2"></i>
                            </div>
                            <div class="cta-two-card-content">
                                <p>Restez informé</p>
                                <h3>Abonnez-vous à notre newsletter</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <form action="vendor/abonnement.php" class="cta-two-form" method="post">
                            <div class="cta-two-form-group">
                                <input type="email" id="email" class="input-text" placeholder="Adresse e-mail"
                                    name="email" required>
                            </div>
                            <button class="btn btn-primary">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--cta-two-section-->
    </div>


    </div>
    <!-- End contenu  -->
    <!-- Footer -->
    <section class="footer">
        <?php include ('layouts/footer.php'); ?>
    </section>
    <!-- Début de la fenêtre modale de recherche -->
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
    <!-- search-popup -->
    <!-- Pour aller en haut de page... -->
    <a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- plugins js -->
    <?php include ('layouts/plugins.php'); ?>
</body>

</html>