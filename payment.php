<?php
/*
Template Name: Реквизиты
*/
?>

<?php get_header(); ?>

<?php
function display_file_size($file_url) {
    if ($file_url) {
        $file_path = str_replace(site_url(), ABSPATH, $file_url);
        if (file_exists($file_path)) {
            $file_size_bytes = filesize($file_path);
            $file_size_kb = round($file_size_bytes / 1024 );
            echo $file_size_kb;
        } else {
            echo '0';
        }
    }
}
?>

<div id="popup" class="popup">
    <div class="popup-content">
        <img id="popup-image" src="" alt="Popup Image">
        <span class="close-popup">&times;</span>
    </div>
</div>


<section class="section-payment">
    <div class="container">
        <div class="requisites__container requisites__container_place_req">
            <div class="requisites__unit">
                <span class="requisites__unit-title">Полное наименование</span>
                <span class="requisites__unit-desc">Общество с ограниченной ответственностью «ФЛАМАКС»</span>
            </div>
            <div class="requisites__unit">
                <span class="requisites__unit-title">Сокращенное наименование</span>
                <span class="requisites__unit-desc">
                            ООО «ФЛАМАКС»</span>
            </div>
            <div class="requisites__unit">
                <span class="requisites__unit-title">Юридический адрес</span>
                <span class="requisites__unit-desc">127566, г. Москва, Алтуфьевское шоссе, д.44, эт.5, пом.VII, ком.4</span>
                <span class="requisites__unit-desc">ОГРН: 1147748025347</span>
                <span class="requisites__unit-desc">
                            Дата внесения в ЕГРЮЛ записи, <br>
содержащей указанные сведения: 08.08.2014                </span>
            </div>
            <div class="requisites__unit">
                <span class="requisites__unit-title">Почтовый и фактический адрес:</span>
                <span class="requisites__unit-desc">127566, г. Москва, Алтуфьевское шоссе, д.44, БЦ "Альтеза"</span>
                <span class="requisites__unit-desc">ИНН <span class="requisites__accent">9715010966</span></span>
                <span class="requisites__unit-desc">КПП <span class="requisites__accent">771501001</span></span>
            </div>

            <div class="requisites__unit">
                <span class="requisites__unit-title">Банковские реквизиты</span>
                <span class="requisites__unit-desc">р/с <span
                            class="requisites__accent">40702810238000035129</span></span>
                <span class="requisites__unit-desc">в СБЕРБАНК ПАО</span>
                <span class="requisites__unit-desc">ОГРН <span class="requisites__accent">
                                1147748025347</span></span>
                <span class="requisites__unit-desc">ОКАТО <span class="requisites__accent">
                                45280574000</span></span>
                <span class="requisites__unit-desc">ОКТМО <span class="requisites__accent">
                                45359000000</span></span>
                <span class="requisites__unit-desc">ОКПО <span class="requisites__accent">
                                64512625</span></span>
                <span class="requisites__unit-desc">ОКВЭД <span class="requisites__accent">
                                25.29 43.22 35.11 41.20 41.91</span></span>
            </div>
        </div>
        <div class="requisites__container requisites__container_place_contacts">
            <div class="contacts">
                <div class="contacts__contact">
                    <span class="contacts__contact-name">Тел./факс</span>
                    <a class="contacts__contact-link" href="tel:+78002006269">
                        +7 800 200 62 69</a>
                </div>

                <div class="contacts__contact">
                    <span class="contacts__contact-name">Почта</span>
                    <a class="contacts__contact-link" href="mailto:info@flamax.ru">
                        info@flamax.ru </a>
                </div>

                <div class="contacts__contact">
                    <span class="contacts__contact-name">Телефон</span>
                    <a class="contacts__contact-link" href="tel:+74956496269">+7 495 649 62 69</a>
                    <a class="contacts__contact-link" href="tel:+74952150055">+7 495 215 00 55</a>
                </div>

                <div class="contacts__contact">
                    <span class="contacts__contact-name">Сайт</span>
                    <a class="contacts__contact-link" rel="noopener" href="https://www.flamax.ru/">www.flamax.ru</a>
                </div>
            </div>

            <div class="contacts__docs">

                <a class="contacts__doc-link" download=""
                   href="<?php the_field('requisites') ?>">
                    <span class="contacts__doc-link-text"> в формате pdf</span>

                    <div class="contacts__doc-size">
                        <svg class="contacts__doc-link-icon" viewBox="0 0 26 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9985 21.4939V11.9209M12.9985 21.4939L17.8524 16.6904M12.9985 21.4939L8.14453 16.6904"
                                  stroke="#BE3D3D"></path>
                            <path d="M19.606 21.7656V27.1589H6.52734V21.7656" stroke="#BE3D3D"></path>
                            <path d="M1 27.1573V1H18.4545H19.4522L25 6.5431V27.1573M25 6.55162H19.4432V1"
                                  stroke="#333333"></path>
                        </svg>

                        <span class="contacts__doc-size-label">

                            <?php display_file_size(get_field('requisites')); ?>
                            Кб</span>
                    </div>
                </a>
                <a class="contacts__doc-link" download=""
                   href="<?php the_field('explanatory_note') ?>">
                    <span class="contacts__doc-link-text">ПОЯСНИТЕЛЬНАЯ ЗАПИСКА в формате pdf</span>

                    <div class="contacts__doc-size">
                        <svg class="contacts__doc-link-icon" viewBox="0 0 26 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9985 21.4939V11.9209M12.9985 21.4939L17.8524 16.6904M12.9985 21.4939L8.14453 16.6904"
                                  stroke="#BE3D3D"></path>
                            <path d="M19.606 21.7656V27.1589H6.52734V21.7656" stroke="#BE3D3D"></path>
                            <path d="M1 27.1573V1H18.4545H19.4522L25 6.5431V27.1573M25 6.55162H19.4432V1"
                                  stroke="#333333"></path>
                        </svg>

                        <span class="contacts__doc-size-label"><?php display_file_size(get_field('explanatory_note')); ?> Кб</span>
                    </div>
                </a>
            </div>

            <div class="certificates">
                <span class="certificates__title">СВИДЕТЕЛЬСТВА КОМПАНИИ</span>

                <div class="certificates__container">
                    <div class="certificates__link" style="margin-right: 1rem;">
                        <img class="certificates__link-image"
                             src="<?php the_field('image_1') ?>"  alt="Свидетельства">
                    </div>
                    <div class="certificates__link" style="margin-right: 1rem;">
                        <img class="certificates__link-image"
                             src="<?php the_field('image_2') ?>" alt="Свидетельства">
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('popup');
        const popupImage = document.getElementById('popup-image');
        const closePopup = document.querySelector('.close-popup');

        const images = document.querySelectorAll('.certificates__link-image');

        images.forEach(function(image) {
            image.addEventListener('click', function() {
                const imageUrl = this.getAttribute('src');
                popupImage.setAttribute('src', imageUrl);
                popup.style.display = 'block';
            });
        });

        closePopup.addEventListener('click', function() {
            popup.style.display = 'none';
        });

        popup.addEventListener('click', function(event) {
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    });

</script>

<?php get_footer(); ?>
