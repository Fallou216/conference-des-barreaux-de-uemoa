<header class="header">
    <!-- Barre supérieure -->
    <div class="topbar">
        <div class="topbar-inner">
            <div class="topbar-left">
                <div class="topbar-socials">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <!--topbar-socials-->
                <div class="topbar-info">
                    <ul>
                        <li>
                            <div class="topbar-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div><!-- topbar-icon -->
                            <div class="topbar-text">
                                <a href="mailto:contact@uemoa.int">contact@uemoa.int</a>
                            </div><!-- topbar-text -->
                        </li><!-- li -->
                        <li>
                            <div class="topbar-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div><!-- topbar-icon -->
                            <div class="topbar-text">
                                <span>Téléphone : +226 25 31 88 73</span>
                            </div><!-- topbar-text -->
                        </li><!-- li -->
                    </ul><!-- ul -->
                </div>
                <!--topbar-info-->
            </div><!-- topbar-left -->
            <div class="topbar-right">
                <ul>
                    <li><a href="Partenaires.php">Nos Partenaires</a></li>
                    <li><a href="contact.php">Nous Contacter</a></li>
                </ul><!-- ul -->
            </div>
            <!--topbar-right-->
        </div><!-- topbar-inner -->
    </div>
    <!--topbar-->
    <!-- Menu principal -->
    <div class="main-menu sticky-header">
        <div class="main-menu-inner">
            <div class="main-menu-left">
                <div class="main-menu-logo">
                    <a href="index.php"><img src="assets/image/logo-uemoa.png" alt="Logo UEMOA" width="80"
                            height="60"></a>
                </div>
                <!--main-menu-logo-->
                <?php include('layouts/navigation.php'); ?>
                <!--navigation-->
            </div>
            <!--main-menu-left-->
            <div class="main-menu-right">
                <div class="mobile-menu-button mobile-nav-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- mobile-menu-button -->
                <div class="search-box">
                    <a href="#" class="search-toggler">
                        <i class="flaticon-search-interface-symbol"></i>
                    </a><!-- search-toggler -->
                </div><!-- search-box -->
                <div class="main-menu-right-button">
                    <a href="contact.php" class="btn btn-primary">Nous contacter</a>
                </div><!-- main-menu-right-button -->
            </div>
            <!--main-menu-right-->
        </div>
        <!--main-menu-inner-->
    </div>
    <!--main-menu-->
</header>