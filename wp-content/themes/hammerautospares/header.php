<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Enqueueing theme stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylesheet.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- WordPress head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <svg fill="#0d141a" class="logo" viewBox="0 0 253.43798828125 16.80078125" height="100%"
                width="100%" xmlns="http://www.w3.org/2000/svg">
                <path preserveAspectRatio="none"
                    d="M13.31 0.22L13.31 16.58L9.94 16.58L9.94 9.57L3.37 9.57L3.37 16.58L0 16.58L0 0.22L3.37 0.22L3.37 6.85L9.94 6.85L9.94 0.22L13.31 0.22ZM26.82 16.58L25.68 13.21L19.78 13.21L18.65 16.58L15.07 16.58L21.16 0.22L24.28 0.22L30.40 16.58L26.82 16.58ZM22.72 4.36L20.69 10.48L24.77 10.48L22.72 4.36ZM31.93 0.22L36.33 0.22L40.53 12.08L44.71 0.22L49.13 0.22L49.13 16.58L45.75 16.58L45.75 12.11L46.09 4.39L41.68 16.58L39.36 16.58L34.96 4.40L35.30 12.11L35.30 16.58L31.93 16.58L31.93 0.22ZM52.08 0.22L56.48 0.22L60.68 12.08L64.86 0.22L69.28 0.22L69.28 16.58L65.90 16.58L65.90 12.11L66.24 4.39L61.82 16.58L59.51 16.58L55.11 4.40L55.44 12.11L55.44 16.58L52.08 16.58L52.08 0.22ZM82.06 6.85L82.06 9.49L75.59 9.49L75.59 13.87L83.18 13.87L83.18 16.58L72.22 16.58L72.22 0.22L83.16 0.22L83.16 2.95L75.59 2.95L75.59 6.85L82.06 6.85ZM94.28 16.58L91.21 10.59L88.53 10.59L88.53 16.58L85.16 16.58L85.16 0.22L91.24 0.22Q94.13 0.22 95.71 1.52Q97.28 2.81 97.28 5.17L97.28 5.17Q97.28 6.84 96.55 7.96Q95.83 9.07 94.36 9.74L94.36 9.74L97.90 16.42L97.90 16.58L94.28 16.58ZM88.53 2.95L88.53 7.86L91.25 7.86Q92.52 7.86 93.21 7.22Q93.91 6.57 93.91 5.44L93.91 5.44Q93.91 4.28 93.25 3.62Q92.60 2.95 91.24 2.95L91.24 2.95L88.53 2.95ZM115.93 16.58L114.80 13.21L108.89 13.21L107.77 16.58L104.19 16.58L110.27 0.22L113.39 0.22L119.51 16.58L115.93 16.58ZM111.83 4.36L109.80 10.48L113.89 10.48L111.83 4.36ZM129.85 0.22L133.23 0.22L133.23 10.99Q133.23 13.68 131.55 15.24Q129.87 16.80 126.96 16.80L126.96 16.80Q124.10 16.80 122.41 15.28Q120.73 13.77 120.69 11.12L120.69 11.12L120.69 0.22L124.06 0.22L124.06 11.02Q124.06 12.62 124.83 13.36Q125.60 14.09 126.96 14.09L126.96 14.09Q129.80 14.09 129.85 11.11L129.85 11.11L129.85 0.22ZM148.30 0.22L148.30 2.95L143.29 2.95L143.29 16.58L139.92 16.58L139.92 2.95L134.98 2.95L134.98 0.22L148.30 0.22ZM163.34 8.04L163.34 8.77Q163.34 11.19 162.48 13.00Q161.63 14.82 160.04 15.81Q158.45 16.80 156.40 16.80L156.40 16.80Q154.36 16.80 152.77 15.82Q151.17 14.85 150.30 13.03Q149.42 11.22 149.41 8.86L149.41 8.86L149.41 8.05Q149.41 5.64 150.28 3.80Q151.15 1.97 152.74 0.98Q154.33 0 156.37 0Q158.42 0 160.01 0.98Q161.60 1.97 162.47 3.80Q163.34 5.64 163.34 8.04L163.34 8.04ZM159.92 8.83L159.92 8.03Q159.92 5.46 159.00 4.12Q158.08 2.79 156.37 2.79L156.37 2.79Q154.68 2.79 153.76 4.10Q152.84 5.42 152.82 7.97L152.82 7.97L152.82 8.77Q152.82 11.28 153.75 12.66Q154.67 14.04 156.40 14.04L156.40 14.04Q158.09 14.04 159.00 12.71Q159.91 11.38 159.92 8.83L159.92 8.83ZM179.99 12.29L179.99 12.29Q179.99 11.33 179.32 10.82Q178.64 10.31 176.89 9.74Q175.14 9.18 174.12 8.63L174.12 8.63Q171.33 7.12 171.33 4.57L171.33 4.57Q171.33 3.25 172.08 2.21Q172.83 1.17 174.22 0.58Q175.62 0 177.36 0L177.36 0Q179.11 0 180.48 0.63Q181.85 1.27 182.61 2.43Q183.37 3.58 183.37 5.05L183.37 5.05L180.00 5.05Q180.00 3.93 179.29 3.31Q178.59 2.68 177.31 2.68L177.31 2.68Q176.07 2.68 175.39 3.21Q174.70 3.73 174.70 4.58L174.70 4.58Q174.70 5.38 175.50 5.92Q176.31 6.46 177.87 6.93L177.87 6.93Q180.74 7.79 182.06 9.07Q183.37 10.35 183.37 12.26L183.37 12.26Q183.37 14.39 181.77 15.59Q180.16 16.80 177.44 16.80L177.44 16.80Q175.55 16.80 174.00 16.11Q172.46 15.42 171.64 14.22Q170.83 13.02 170.83 11.43L170.83 11.43L174.21 11.43Q174.21 14.14 177.44 14.14L177.44 14.14Q178.64 14.14 179.32 13.65Q179.99 13.16 179.99 12.29ZM191.97 10.81L189.02 10.81L189.02 16.58L185.65 16.58L185.65 0.22L192.03 0.22Q193.87 0.22 195.27 0.90Q196.67 1.57 197.42 2.81Q198.17 4.05 198.17 5.64L198.17 5.64Q198.17 8.04 196.53 9.43Q194.88 10.81 191.97 10.81L191.97 10.81ZM189.02 2.95L189.02 8.09L192.03 8.09Q193.37 8.09 194.07 7.46Q194.77 6.83 194.77 5.66L194.77 5.66Q194.77 4.46 194.06 3.72Q193.35 2.98 192.11 2.95L192.11 2.95L189.02 2.95ZM208.85 16.58L207.72 13.21L201.81 13.21L200.69 16.58L197.11 16.58L203.19 0.22L206.31 0.22L212.44 16.58L208.85 16.58ZM204.75 4.36L202.72 10.48L206.81 10.48L204.75 4.36ZM223.08 16.58L220.02 10.59L217.33 10.59L217.33 16.58L213.96 16.58L213.96 0.22L220.04 0.22Q222.94 0.22 224.51 1.52Q226.08 2.81 226.08 5.17L226.08 5.17Q226.08 6.84 225.36 7.96Q224.63 9.07 223.16 9.74L223.16 9.74L226.70 16.42L226.70 16.58L223.08 16.58ZM217.33 2.95L217.33 7.86L220.05 7.86Q221.32 7.86 222.02 7.22Q222.71 6.57 222.71 5.44L222.71 5.44Q222.71 4.28 222.05 3.62Q221.40 2.95 220.04 2.95L220.04 2.95L217.33 2.95ZM238.48 6.85L238.48 9.49L232.01 9.49L232.01 13.87L239.60 13.87L239.60 16.58L228.64 16.58L228.64 0.22L239.58 0.22L239.58 2.95L232.01 2.95L232.01 6.85L238.48 6.85ZM250.06 12.29L250.06 12.29Q250.06 11.33 249.38 10.82Q248.71 10.31 246.96 9.74Q245.21 9.18 244.18 8.63L244.18 8.63Q241.40 7.12 241.40 4.57L241.40 4.57Q241.40 3.25 242.15 2.21Q242.89 1.17 244.29 0.58Q245.69 0 247.43 0L247.43 0Q249.18 0 250.55 0.63Q251.92 1.27 252.68 2.43Q253.44 3.58 253.44 5.05L253.44 5.05L250.07 5.05Q250.07 3.93 249.36 3.31Q248.65 2.68 247.37 2.68L247.37 2.68Q246.14 2.68 245.45 3.21Q244.77 3.73 244.77 4.58L244.77 4.58Q244.77 5.38 245.57 5.92Q246.37 6.46 247.94 6.93L247.94 6.93Q250.81 7.79 252.12 9.07Q253.44 10.35 253.44 12.26L253.44 12.26Q253.44 14.39 251.83 15.59Q250.23 16.80 247.51 16.80L247.51 16.80Q245.62 16.80 244.07 16.11Q242.52 15.42 241.71 14.22Q240.89 13.02 240.89 11.43L240.89 11.43L244.27 11.43Q244.27 14.14 247.51 14.14L247.51 14.14Q248.71 14.14 249.38 13.65Q250.06 13.16 250.06 12.29Z">
                </path>
            </svg></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
            // Get the menu by location (e.g., 'header-menu')
            $menu_name = 'header-menu';
            $locations = get_nav_menu_locations(); // Get all menu locations
            $menu_id = isset( $locations[ $menu_name ] ) ? $locations[ $menu_name ] : null;

            if ( $menu_id ) {
                // Fetch the menu items by the menu ID
                $menu_items = wp_get_nav_menu_items( $menu_id );

                // Start rendering the menu HTML
                echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';

                foreach ( $menu_items as $item ) {
                    // Output each menu item as a list item
                    echo '<li class="nav-item">';
                    echo '<a href="' . esc_url( $item->url ) . '" class="nav-link">' . esc_html( $item->title ) . '</a>';
                    echo '</li>';
                }

                echo '</ul>';
            } else {
                // Fallback if no menu is assigned to the location
                echo '<p>No menu assigned to this location.</p>';
            }
            ?>
        </div>

    </div>
</nav>
</header>