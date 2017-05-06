<?php

// registering nav walker bootsterap
require_once('wp-bootstrap-navwalker.php');

// theme support
function wpb_custom_new_menu()
{
    add_theme_support('post-thumbnails');
//    nav menu
    register_nav_menus(
        array(
            'primary' => __('primary'),
            'extra-menu' => __('Extra Menu')
        )
    );
//post formats
    add_theme_support('post-formats', array('aside', 'gallery'));

}

add_action('init', 'wpb_custom_new_menu');

//the_excerpt length control
function set_excerpt_length()
{
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

//widgets
function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-section">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="col-md-4 center col-padding">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="col-md-4 center col-padding">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="col-md-4 center col-padding">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));


}
add_action('widgets_init', 'wpb_init_widgets');


//customizer file
require get_template_directory(). '/inc/customizer.php';