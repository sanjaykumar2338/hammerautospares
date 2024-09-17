<?php
function custom_theme_enqueue_assets() {
  // Enqueue theme's main stylesheet
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );

  // Enqueue other stylesheets and scripts
  wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.css' );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_assets' );

// Register navigation menu
function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Enable support for menus in the theme
add_theme_support( 'menus' );

function footer_customizer_settings($wp_customize) {
  // Phone Number 1
  $wp_customize->add_setting('phone_number_1', array(
      'default' => '02034320393',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('phone_number_1', array(
      'label' => 'Phone Number 1',
      'section' => 'footer_section',
      'type' => 'text',
  ));

  // Phone Number 2
  $wp_customize->add_setting('phone_number_2', array(
      'default' => '+442034320393',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('phone_number_2', array(
      'label' => 'Phone Number 2',
      'section' => 'footer_section',
      'type' => 'text',
  ));

  // Email
  $wp_customize->add_setting('email_address', array(
      'default' => 'support@hammperautospares.co.uk',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('email_address', array(
      'label' => 'Email Address',
      'section' => 'footer_section',
      'type' => 'email',
  ));

  // Website
  $wp_customize->add_setting('website_url', array(
      'default' => 'www.hammerautospares.uk',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('website_url', array(
      'label' => 'Website URL',
      'section' => 'footer_section',
      'type' => 'url',
  ));
}

add_action('customize_register', 'footer_customizer_settings');


?>
