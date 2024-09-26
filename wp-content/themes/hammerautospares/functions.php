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

function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_inquiries';  // Add table name

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        first_name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(15) NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_contact_table');

// Add admin menu
function register_inquiry_menu_page() {
    add_menu_page(
        'Contact Inquiries', // Page title
        'Inquiries', // Menu title
        'manage_options', // Capability
        'contact-inquiries', // Menu slug
        'display_contact_inquiries', // Callback function
        'dashicons-email', // Icon
        6 // Position
    );
}

add_action('admin_menu', 'register_inquiry_menu_page');

// Display the data in the custom table
function display_contact_inquiries() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_inquiries';
    
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

    echo '<div class="wrap"><h1>Contact Inquiries</h1>';
    echo '<table class="widefat fixed" cellspacing="0">';
    echo '<thead><tr><th>First Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Date</th></tr></thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>' . esc_html($row->first_name) . '</td>';
        echo '<td>' . esc_html($row->email) . '</td>';
        echo '<td>' . esc_html($row->phone) . '</td>';
        echo '<td>' . esc_html($row->message) . '</td>';
        echo '<td>' . esc_html($row->created_at) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

// Register the admin menu
function register_subscribers_menu_page() {
    add_menu_page(
        'Exclusive Offers Subscribers', // Page title
        'Subscribers', // Menu title
        'manage_options', // Capability
        'exclusive-subscribers', // Menu slug
        'display_subscribers_page', // Callback function
        'dashicons-email-alt', // Icon
        6 // Position
    );
}
add_action('admin_menu', 'register_subscribers_menu_page');

// Callback function to display the subscribers in the admin panel
function display_subscribers_page() {
    global $wpdb;
    
    // Fetch the subscribers from the database
    $subscribers = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}subscribers ORDER BY created_at DESC");
    
    echo '<div class="wrap">';
    echo '<h1>Exclusive Offers Subscribers</h1>';
    
    if (!empty($subscribers)) {
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr><th>Email</th><th>Subscribed On</th></tr></thead>';
        echo '<tbody>';
        
        foreach ($subscribers as $subscriber) {
            echo '<tr>';
            echo '<td>' . esc_html($subscriber->email) . '</td>';
            echo '<td>' . esc_html($subscriber->created_at) . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody></table>';
    } else {
        echo '<p>No subscribers found.</p>';
    }

    echo '</div>';
}
?>
