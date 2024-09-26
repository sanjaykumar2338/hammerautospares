<footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer_cot">
                        <h2>quality</h2>
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
                <div class="footer_cot">
                        <h2>Support</h2>
                        <div class="align_no">
                            <a href="tel:02034320393"> 02034320393</a>
                            <a href="tel:+442034320393"> +442034320393</a>
                        </div>
                        <span> support@hammperautospares.co.uk<br>
                            www.hammerautospares.uk
                        </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_cot">
                        <h2>servies</h2>
                        <div class="form">
                        <?php            
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                global $wpdb;
                            
                                // Get the form data
                                $email = sanitize_email($_POST['email']);
                            
                                // Insert data into the custom table
                                $wpdb->insert(
                                    $wpdb->prefix . 'subscribers',
                                    array(
                                        'email' => $email,
                                        'created_at' => current_time('mysql'),
                                    )
                                );
                            
                                // Send email
                                $to = $email;
                                $subject = "Thank you for subscribe exclusive offers!";
                                $body = "Hi $first_name,\n\nThank you for reaching out to us.\n\nBest regards,\nHammerautospares";
                                $headers = ['Content-Type: text/plain; charset=UTF-8', 'From: Hammerautospares <info@hammerautospares.uk>'];
                            
                                if (wp_mail($to, $subject, $body, $headers)) {
                                    echo "<div style='color: white;' class='success-message'>Thank you for your inquiry! A confirmation email has been sent to your address.</div>";
                                } else {
                                    echo "<div style='color: white;' class='error-message'>There was an issue sending your email. Please try again.</div>";
                                }
                            }              
                        ?>   
                        <form action="" method="POST">
                            <label for="email">Enter your email address</label>
                            <input type="email" name="email" placeholder="Your email for updates" required>
                            <button type="submit" class="comman_btn">Subscribe for exclusive offers</button>
                        </form>

                        </div>
                    </div>
                </div>

            </div>
			<div class="copyright-text text-left">
					<p>© <?php echo date('Y'); ?>. All rights reserved.</p>
			</div>
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
