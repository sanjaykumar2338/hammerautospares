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
						<form>
							<div class="form-field">
								<label>Your First Name</label>
								<input type="text" placeholder="Enter your first name"/>
							</div>
							<div class="form-field">
								<label>Your Email Address*</label>
								<input type="email" placeholder="Enter your email address"/>
							</div>
							<div class="form-field">
								<label>Your Message*</label>
								<textarea placeholder="Type your message here"></textarea>
							</div>
							<div class="form-field">
								<button type="button" class="submit-btn">Submit Your Inquiry</button>
							</div>
						</form>
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