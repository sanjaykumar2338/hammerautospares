<?php
/*
Template Name: Common Template
*/
get_header();  // Include header.php
?>

<div class="shp-contact-section lg-pd white-bg">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shp-left">
					<!-- Display the page title dynamically -->
					<h2><?php the_title(); ?></h2>
					
					<!-- Display the page content dynamically -->
					<div class="page-content">
						<?php
						// Display the content of the current page
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();  // Include footer.php ?>
