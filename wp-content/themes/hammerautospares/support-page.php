<?php
/*
Template Name: Support Template
*/
get_header();  // Include header.php
?>

<div class="cmn-banner shipping-banner">	
	<div class="container">
		<div class="bn_cmn_title text-center color-white">
                <h2>Fast & Reliable Shipping</h2>
				<p>Enjoy prompt delivery of high-quality car parts with multiple shipping options to fit your needs.</p>
            </div>
	</div>
</div>
<div class="fast-shp-section lg-pd white-bg">	
	<div class="container">
		<div class="section_title text-center mr-btm ">
                <h2>Contact Hammer Auto </br>Spares Support</h2>
				<p>Reach out for assistance with your automotive parts needs.</p>
		</div>
		<div class="sprt-rw">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="sprt-form light-blue-bg">
                        
                    <?php            
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                global $wpdb;
                            
                                // Get the form data
                                $first_name = sanitize_text_field($_POST['first_name']);
                                $email = sanitize_email($_POST['email']);
                                $phone = sanitize_text_field($_POST['phone']);
                                $message = sanitize_textarea_field($_POST['message']);
                            
                                // Insert data into the custom table
                                $wpdb->insert(
                                    $wpdb->prefix . 'contact_inquiries',
                                    array(
                                        'first_name' => $first_name,
                                        'email' => $email,
                                        'phone' => $phone,
                                        'message' => $message,
                                        'created_at' => current_time('mysql'),
                                    )
                                );
                            
                                // Send email
                                $to = $email;
                                $subject = "Thank you for your inquiry!";
                                $body = "Hi $first_name,\n\nThank you for reaching out to us. We have received your inquiry and will get back to you soon.\n\nBest regards,\nHammerautospares";
                                $headers = ['Content-Type: text/plain; charset=UTF-8', 'From: Hammerautospares <info@hammerautospares.uk>'];
                            
                                if (wp_mail($to, $subject, $body, $headers)) {
                                    echo "<div class='success-message'>Thank you for your inquiry! A confirmation email has been sent to your address.</div>";
                                } else {
                                    echo "<div class='error-message'>There was an issue sending your email. Please try again.</div>";
                                }
                            }              
                        ?> 

                        <form id="inquiryForm" method="POST" action="">
                            <div class="form-field">
                                <label>Your First Name</label>
                                <input type="text" name="first_name" placeholder="Enter your first name" required />
                            </div>
                            <div class="form-field">
                                <label>Your Email Address*</label>
                                <input type="email" name="email" placeholder="Enter your email address" required />
                            </div>
                            <div class="form-field">
                                <label>Your Phone Number*</label>
                                <input type="text" name="phone" placeholder="Enter your phone number" required />
                            </div>
                            <div class="form-field">
                                <label>Your Message*</label>
                                <textarea name="message" placeholder="Type your message here" required></textarea>
                            </div>
                            <div class="form-field">
                                <button type="submit" class="submit-btn">Submit Your Inquiry</button>
                            </div>
                        </form>

                        <!-- Add a div to display success or error messages -->
                        <div id="responseMessage"></div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="sprt-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="review_and_map">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.6105652367846!2d0.05204810000000001!3d51.538702300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a64bcd464441%3A0x122ade2c4d9c5125!2s182%20High%20St%20N%2C%20London%20E6%202JA%2C%20UK!5e0!3m2!1sen!2sin!4v1726312007935!5m2!1sen!2sin"
                        width="" height="" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>



            <div class="col-lg-6 p-0">
                <div class="review_bx_">
                    <div class="owl-carousel owl-theme" id="review_slider">
                        <div class="item">
                            <div class="review_bx">
                                <div class="icon">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="review_text">
                                    <p>Hammer Auto Spares provided excellent service and quality parts for my
                                        classic car restoration project.</p>
                                </div>
                                <div class="name">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/photo-1498595718608-0981b1355981.jpg" alt="">
                                    <h2>john doe</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<?php get_footer();  // Include footer.php ?>