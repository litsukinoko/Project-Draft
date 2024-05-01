<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

    <style type="text/css">
        img, svg {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            pointer-events: none;
        }


    </style>
    <script type="text/javascript">
        document.getElementsByTagName('img').ondragstart = function () {
            return false;
        };
    </script>

    <section class="hero-section">
        <div class="hero-section-bg" style="background-image: url('<?php the_field('hero_img') ?>') ">
            <div class="container">
                <div class="text">
                    <h1 class="hero-text"><?php the_field('hero_text') ?></h1>
                    <p class="hero-subtext"><?php the_field('hero_subtext') ?></p>
                </div>
                <a href="#request_form">
                    <button class="hero-btn">рассчитать стоимость</button>
                </a>

            </div>
        </div>
    </section>
    <section class="advantages-section">
        <div class="container">
            <h2 class="advantages-header"><?php the_field('advantages_title') ?></h2>

            <div class="advantages-container">
                <div class="advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/re.svg" alt="">
                    <h6><?php the_field('advantage_name_1') ?></h6>
                    <p><?php the_field('advantage_description_1') ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/robot.svg" alt="">
                    <h6><?php the_field('advantage_name_2') ?></h6>
                    <p><?php the_field('advantage_description_2') ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/chip.svg" alt="">
                    <h6><?php the_field('advantage_name_3') ?></h6>
                    <p><?php the_field('advantage_description_3') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <h2 class="services-header"><?php the_field('services_title') ?></h2>

            <div class="services-container">
                <?php
                $services = get_posts(array(
                    'numberposts' => 0,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'services',
                    'suppress_filters' => true,
                ));

                foreach ($services as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="services__item">
                        <img src="<?php the_field('service_img') ?>" alt="service">
                        <h5><?php the_field('service_name') ?></h5>
                        <ul>
                            <?php the_field('service_text') ?>
                        </ul>
                        <a href="#request_form">
                            <button>рассчитать стоимость</button>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>


            </div>
        </div>
    </section>

    <section class="section-about" id="about">
        <div class="container">
            <div class="left-column">
                <div class="navigation">
                    <div class="prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/prev.svg" alt="">
                    </div>
                    <div class="next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/next.svg" alt="">
                    </div>
                </div>
                <h2 class="about-header"><?php the_field('about_section_title') ?></h2>
                <p class="description"><?php the_field('about_section_description') ?></p>
            </div>
            <div class="right-column">
                <div class="swiper aboutSwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $images = get_field('about_section_images');
                        if ($images) {
                            foreach ($images as $image) { ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image['about_img'] ?>" alt="">

                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div>
                <div class="about-pagination"></div>
                <div class="about-slide-description-container">
                    <?php
                    $slider_descriptions = get_field('slider_descriptions');
                    if ($slider_descriptions) {
                        foreach ($slider_descriptions as $description) { ?>
                            <div class="slide-description-item">
                                <h6><?php echo $description['description_title'] ?></h6>
                                <p><?php echo $description['description_text'] ?></p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-equipment">
        <div class="container">
            <div class="equipment-header-container">
                <h2 class="equipment-header"><?php the_field('equipment_section_title') ?></h2>
                <div class="navigation">
                    <div class="eq-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/prev.svg" alt="">
                    </div>
                    <div class="eq-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/next.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper equipmentSwiper">
                <div class="swiper-wrapper">

                    <?php
                    $equipments = get_posts(array(
                        'numberposts' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'equipment',
                        'suppress_filters' => true,
                    ));

                    $i = 1;
                    foreach ($equipments as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php the_field('eq_img') ?>" alt="">
                            <div class="description">
                                <h6><?php the_field('eq_title') ?></h6>
                                <ul>
                                    <?php the_field('eq_description') ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>

            <div class="eq-pagination"></div>
        </div>
    </section>


    <section class="section-prices">
        <div class="container">
            <h2 class="prices-header"><?php the_field('prices_section_title') ?></h2>
            <?php
            $prices = get_posts(array(
                'numberposts' => 0,
                'orderby' => 'date',
                'order' => 'ASC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'prices',
                'suppress_filters' => true,
            ));

            $i = 1;
            foreach ($prices as $post) {
                setup_postdata($post);
                $tabs_id = 'tabs_id' . $i;
                ?>
                <div class="prices-item" data-id="<?php echo $tabs_id ?>">
                    <h6 class="prices-item__header"><?php the_title(); ?></h6>
                    <div class="content">
                        <?php
                        $tabs = get_field('tabs');
                        if ($tabs && count($tabs) > 1) {
                            $tab_index = 1; ?>
                            <div class="prices-item__tabs">
                                <?php
                                foreach ($tabs as $tab) { ?>
                                    <div class="prices-item__tab <?php echo $tab_index === 1 ? 'active' : ''; ?>"
                                         id="tab-<?php echo $tabs_id . '-' . $tab_index; ?>">
                                        <?php echo $tab['tab'] ?>
                                    </div>
                                    <?php
                                    $tab_index++;
                                } ?>
                            </div>
                        <?php }
                        ?>

                        <?php
                        $tabs = get_field('tabs');
                        if ($tabs) {
                            $tab_index = 1;
                            foreach ($tabs as $tab) { ?>
                                <div class="desktop <?php echo $tab_index === 1 ? 'in-view' : ''; ?>"
                                     data-id="<?php echo $tabs_id ?>"
                                     data-tabid="tab-<?php echo $tabs_id . '-' . $tab_index; ?>">
                                    <?php echo do_shortcode($tab['shortcode']); ?>
                                </div>

                                <div class="mobile <?php  if(count($tabs) == 1){ echo 'single '; }  echo $tab_index === 1 ? 'in-view' : ''; ?>"
                                     data-id="<?php echo $tabs_id ?>"
                                     data-tabid="tab-<?php echo $tabs_id . '-' . $tab_index; ?>">
                                    <?php echo do_shortcode($tab['shortcode_vl']); ?>
                                </div>
                                <?php
                                $tab_index++;
                            }
                        }
                        ?>
                    </div>
                    <p class="table-info"><?php the_field('tables_note') ?></p>
                </div>
                <?php
                $i++;
            }
            wp_reset_postdata(); // сброс
            ?>


        </div>
    </section>


    <section class="section-form" id="request_form">
        <div class="container">
            <h2 class="form-header"><?php the_field('form_section_title') ?></h2>

            <?php echo do_shortcode('[forminator_form id="9"]'); ?>

            <form class="form" style="display: none">
                <div class="field">
                    <label class="field-name" for="field-name">ФИО*</label>
                    <input class="field-input" type="text" name="name" id="field-name" placeholder="Введите ФИО">
                </div>
                <div class="field">
                    <label class="field-email" for="field-email">E-mail*</label>
                    <input class="field-input" type="text" name="email" id="field-email" placeholder="example@mail.ru">
                </div>
                <div class="flex-container">
                    <div class="field">
                        <label class="field-phone" for="field-phone">Телефон*</label>
                        <input class="field-input" type="text" name="phone" id="field-phone"
                               placeholder="+7-(929)-111-11-11">
                    </div>
                    <div class="field">
                        <label class="field-inn" for="field-inn">ИНН*</label>
                        <input class="field-input" type="text" name="inn" id="field-inn" placeholder="0123456789">
                    </div>
                </div>
                <div class="field">
                    <label class="field-comment" for="field-comment">Комментарии</label>
                    <textarea class="field-input" type="text" name="comment" id="field-comment" rows="7"
                              placeholder="Дополнительная информация о заказе..."></textarea>
                </div>

                <div class="bottom-area">
                    <button class="attachment-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/attachment.svg" alt="">
                        Прикрепить файл
                    </button>
                    <div class="send-area">
                        <p>Нажимая кнопку, вы даете согласие на <a href="#"> обработку персональных данных</a></p>
                        <button class="send-button">отправить</button>
                    </div>
                </div>
            </form>
            <p class="description"><?php the_field('form_description') ?></p>
        </div>
    </section>

    <section class="section-questions">
        <div class="container">
            <h2 class="questions-header"><?php the_field('questions_section_title') ?></h2>
            <div class="questions">
                <?php
                $questions = get_posts(array(

                    'numberposts' => 0,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'questions',
                    'suppress_filters' => true,
                ));

                $i = 1;
                foreach ($questions as $post) {
                    setup_postdata($post);
                    $question_id = 'question' . $i;
                    ?>
                    <div class="question-container">
                        <div class="collapsable-container">
                            <p class="question"><?php the_field('question') ?></p>
                            <p class="collapse question-text"
                               id="<?php echo $question_id ?>"><?php the_field('answer') ?></p>
                        </div>
                        <button class="chevron" type="button" data-bs-toggle="collapse"
                                data-bs-target="#<?php echo $question_id ?>"
                                aria-expanded="false" aria-controls="<?php echo $question_id ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/chevron-right.svg"
                                 alt="">
                        </button>
                    </div>
                    <?php
                    $i++;
                }
                wp_reset_postdata(); // сброс
                ?>


            </div>
        </div>
    </section>


    <section class="section-contact" id="contacts">
        <div class="container">
            <div class="left-column">
                <h2 class="contact-header"><?php the_field('contacts_section_title') ?></h2>
                <div class="contact-infos">
                    <p><span>Адрес:</span> <?php the_field('address') ?></p>
                    <p><span>Часы работы:</span> <?php the_field('work_times') ?></p>
                    <p><span>Телефон:</span> <?php the_field('phone') ?></p>
                    <p><span>Почта:</span> <?php the_field('email') ?></p>
                </div>
                <a href="<?php the_field('docs_link') ?>" target="_blank">Наши реквизиты <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow%2045deg.svg" alt=""></a>
            </div>
            <div class="right-column">

                <?php the_field('map_code') ?>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
                const multiUpload = document.querySelector('.forminator-multi-upload a');
                const rowLast = document.querySelector('.forminator-row-last');
                const terms = document.createElement('p');
                const rowLastField = rowLast.querySelector('.forminator-field');
                terms.innerHTML = 'Нажимая кнопку, вы даете согласие на <a href="#">обработку персональных данных</a>';
                multiUpload.innerHTML = `<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/attachment.svg" alt="">
                        Прикрепить файл`;

                rowLastField.insertBefore(terms, rowLastField.firstChild);
                if (multiUpload && rowLast) {
                    rowLast.insertBefore(multiUpload, rowLast.firstChild);
                }
            }, 2000)


            jQuery(document).ready(function ($) {
                let $items = $(".equipmentSwiper .swiper-slide");
                let maxHeight = 0;

                function resize() {
                    $items.css("height", "");

                    $items.each(function () {
                        let itemHeight = $(this).height();
                        maxHeight = Math.max(maxHeight, itemHeight);
                    });
                    $items.height(maxHeight);
                }

                $(window).on("resize", function () {
                    resize();
                });

                resize();
            });

        });


    </script>

<?php get_footer(); ?>