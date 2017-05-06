<?php
function wpb_customize_register($wp_customize){
//main page top section
$wp_customize->add_section('showcase', array(
    'title' => __('Showcase' , 'wpBootstrap'),
    'description' => sprintf(__('Options for showcase', 'wpBootstrap')),
    'priority' => 130
));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
//option / theme_mod
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image',array(
        'label' => __('Showcase Image', 'wpBootstrap'),
        'section' => 'showcase',
        'setting' => 'showcase_image',
        'priority' => 1
    )));

$wp_customize->add_setting('showcase_heading', array(
    'default' => _x('DevPars', 'wpBootstrap'),
//option / theme_mod
    'type' => 'theme_mod'
));

$wp_customize->add_control('showcase_heading', array(
    'label' => __('Heading', 'wpBootstrap'),
    'section' => 'showcase',
    'priority' => 2
));

    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Just another WordPress site', 'wpBootstrap'),
//option / theme_mod
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wpBootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));
    $wp_customize->add_setting('btn-url', array(
        'default' => _x('http://test.com', 'wpBootstrap'),
//option / theme_mod
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn-url', array(
        'label' => __('Button Url', 'wpBootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ));
    $wp_customize->add_setting('btn-text', array(
        'default' => _x('read more', 'wpBootstrap'),
//option / theme_mod
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn-text', array(
        'label' => __('Button text', 'wpBootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));
}

add_action('customize_register', 'wpb_customize_register');
