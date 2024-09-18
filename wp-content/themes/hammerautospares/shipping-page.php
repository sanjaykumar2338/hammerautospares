<?php
/*
Template Name: Shipping Template
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
<div class="fast-shp-section lg-pd light-blue-bg">	
	<div class="container">
		<div class="section_title text-center mr-btm ">
                <h2>Fast Shipping Options</h2>
				<p>We ensure prompt delivery with various shipping options to meet your needs and budget.</p>
		</div>
		<div class="fast-rw">
			<div class="row align-items-center">
				<div class="col-md-7">
					<div class="fast_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pngtree-fast-delivery-label-design-png-image_9153915-AGB4Rw6qoaiVwOK6.png">
					</div>
				</div>
				<div class="col-md-5">
					<div class="fast_cnt">
						<ul class="fast-list">
							<li>
								<h4>Quick Order Processing</h4>
								<p>We prioritize swift order processing to get your parts delivered as soon as possible.</p>
							</li>
							<li>
								<h4>Reliable Delivery Service</h4>
								<p>Experience fast and dependable shipping for all your automotive parts purchases with us.</p>
							</li>
							<li>
								<h4>Multiple Shipping Choices</h4>
								<p>Select from various shipping methods tailored to your preferences and urgency requirements.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="shp-contact-section lg-pd white-bg">	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="shp-left">
					<h2>Contact Us</h2>
					<p>Reach out for inquiries about our extensive range of high-quality car parts and services. We're here to assist you with your automotive needs.</p>
					<ul>
						<li>
							<strong>Support</strong> <a href="tel:">+442034320393</a>
						</li>
						<li>
							<strong>Help</strong> <a href="mailto:support@hammerautospares.com">support@hammerautospares.com</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="shp-right">
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
		</div>
	</div>
</div>

<?php get_footer();  // Include footer.php ?>
