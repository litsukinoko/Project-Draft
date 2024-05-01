<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
            rel="stylesheet"/>
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"/>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/animate/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
</head>

<body>
<div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
>
    <div class="spinner-grow text-primary" role="status"></div>
</div>

