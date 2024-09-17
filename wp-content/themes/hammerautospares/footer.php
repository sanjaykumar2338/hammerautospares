<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer_cot">
                    <h2>Quality</h2>
                    <p><b>Reliable car parts for every driver’s needs.</b></p>
                    <div class="bottom_icon">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
            <div class="footer_cot" style="color: white;">
                    <h2>Support</h2>
                    <div class="align_no">
                        <a href="tel:<?php echo get_theme_mod('phone_number_1', '02034320393'); ?>" style="color: white;"> <?php echo get_theme_mod('phone_number_1', '02034320393'); ?></a>
                        <a href="tel:<?php echo get_theme_mod('phone_number_2', '+442034320393'); ?>" style="color: white;"> <?php echo get_theme_mod('phone_number_2', '+442034320393'); ?></a>
                    </div>
                    <span>
                        <a href="mailto:<?php echo get_theme_mod('email_address', 'support@hammperautospares.co.uk'); ?>" style="color: white;"> <?php echo get_theme_mod('email_address', 'support@hammperautospares.co.uk'); ?></a><br>
                        <a href="<?php echo get_theme_mod('website_url', 'www.hammerautospares.uk'); ?>" style="color: white;" target="_blank"> <?php echo get_theme_mod('website_url', 'www.hammerautospares.uk'); ?></a>
                    </span>
                </div>

            </div>

            <div class="col-lg-4 text-center">
                <div class="footer_cot">
                    <h2>Services</h2>
                    <div class="form">
                        <form action="#">
                            <label for="email">Enter your email address </label>
                            <input type="email" id="email" placeholder="Your email for updates">
                            <a href="#" class="comman_btn">Subscribe for exclusive offers</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text">
        <span>© <?php echo date('Y'); ?>. All rights reserved.</span>
    </div>
</footer>

<!-- JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('#review_slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 }
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
