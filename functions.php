<?php


add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('menu_main_header', 'Меню в шапке');
}


function create_posttype()
{
    register_post_type('services',
        array('labels' => array('name' => __('Сервисы'),
            'singular_name' => __('Сервис')
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
        )

    );

    register_post_type('questions',
        array('labels' => array('name' => __('Вопросы'),
            'singular_name' => __('Вопрос')
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'questions'),
            'show_in_rest' => true,
        )

    );

    register_post_type('prices',
        array('labels' => array('name' => __('Цены'),
            'singular_name' => __('Цена')
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'prices'),
            'show_in_rest' => true,
        )

    );

    register_post_type('equipment',
        array('labels' => array('name' => __('Оборудование'),
            'singular_name' => __('Слайд')
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'equipment'),
            'show_in_rest' => true,
        )

    );
}

add_action('init', 'create_posttype');



?>