        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!-- title -->
            <title>Flamax</title>
            <?php wp_head(); ?>
            <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/swiper.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/fonts.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/style.css?ver=2">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/responsive.css?ver=1">



        </head>

        <body>


        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

        <div class="sticky-wrapper collapsed">
            <nav class="navbar">
                <div class="container ">
                    <div class="navbar-responsive">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>/#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo Flamax">
                        </a>

                        <div class="toggle-btn">
                            <label class="burger" for="burger">
                                <input type="checkbox" id="burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Услуги</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">О заводе</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#contacts">Контакты</a>
                        </li>
                    </ul>

                    <div class="navbar-ad-links">
                        <a href="tel:+74956496269" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg" alt="">
                            +7 495 649 62 69</a>
                        <a href="mailto:info@flamax.ru" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" alt="">
                            info@flamax.ru</a>
                    </div>
                </div>
            </nav>
        </div>
