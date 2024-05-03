<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoofari - Zoo & Safari Park Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="keywords"/>
    <meta content="" name="description"/>

    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="icon"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
          rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
          rel="stylesheet"/>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/animate/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css"
          rel="stylesheet"/>


    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>


    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

</head>

<body>

<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
>
    <div
            class="spinner-border text-primary"
            style="width: 3rem; height: 3rem"
            role="status"
    >
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Street, New York, USA</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""
                ><i class="fab fa-facebook-f"></i
                    ></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""
                ><i class="fab fa-twitter"></i
                    ></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""
                ><i class="fab fa-linkedin-in"></i
                    ></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""
                ><i class="fab fa-instagram"></i
                    ></a>
            </div>
        </div>
    </div>
</div>

<nav
        class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s"
>
    <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-10.png"
             alt="Icon"/>
        <h1 class="m-0 text-primary">Zoofari</h1>
    </a>
    <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown"
                >Pages</a
                >
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="animal.html" class="dropdown-item">Our Animals</a>
                    <a href="membership.html" class="dropdown-item">Membership</a>
                    <a href="visiting.html" class="dropdown-item">Visiting Hours</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary"
        >Buy Ticket<i class="fa fa-arrow-right ms-3"></i
            ></a>
    </div>
</nav>
