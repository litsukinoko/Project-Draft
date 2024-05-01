<?php
/*
Template Name: Подвал
*/
?>

<footer>
    <div class="container">
        <div class="logo-row">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class="footer-logo">
            <a href="<?php echo home_url(); ?>/#request_form" class="request-button">оставить заявку</a>
        </div>
        <div class="navigation-row">
            <ul class="navigation">
                <li><a href="#services">Услуги</a> </li>
                <li><a href="#about">О заводе</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>

            <p class="rights">© Flamax.2024</p>

            <div class="terms-row">
                <a href="https://www.flamax.ru/policy.php" class="policy">Политика обработки персональных данных</a>
                <a href="https://steel.flamax.ru/payment/" class="docs">Реквизиты</a>
            </div>
        </div>
    </div>
</footer>




<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?ver=3"></script>


<?php wp_footer(); ?>


</body>

</html>