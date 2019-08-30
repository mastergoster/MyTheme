<?php
function register_my_menu()
{
    register_nav_menu('main', "Menu principal");
}
add_action('after_setup_theme', 'register_my_menu');

function register_my_sidebar() {
    register_sidebar(
        array(
            'name' => 'Sidebar Principal',
            'id' => 'main-sidebar',
            'description' => 'La jolie sidebar principale',
            'before_widget' =>'<div id="%1$s" class="widget %2$s">',
            'after_widget' =>'</div>',
            'before_title' =>'<h2 class="widget-title">',
            'after_title' =>'</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Sidebar du footer',
            'id' => 'footer-sidebar',
            'description' => 'La jolie sidebar principale des pieds',
            'before_widget' =>'<div id="%1$s" class="widget %2$s">',
            'after_widget' =>'</div>',
            'before_title' =>'<h2 class="widget-title">',
            'after_title' =>'</h2>'
        )
    );
}

add_action('widgets_init', 'register_my_sidebar');