<?php

/*
Template Name: Insurance Main
Template Post Type: insurance
*/
?>

<?php get_header();?>


<!--- Insurance Header --->
<?php $image = get_field('banner_image'); ?>
<div id="insurance-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<a href="<?php if ( get_field( 'get_a_quote_url' ) ): ?>

				<?php the_field('get_a_quote_url'); ?>

			<?php else: // field_name returned false ?>

				<?php echo "/contact-us/"; ?>

			<?php endif; // end of if field_name logic ?>">
				<button type="button" class="btn btn-outline btn-lg">Get A Quote</button>
			</a>
		</div>
	</div>
</div>

<!--- Personal Insurance Carosel --->
<div class="container-fluid">
	<?php
	$slider = get_field('slider');
	if ( !empty( $slider ) && has_term('personal','insurance-category')) {
		echo do_shortcode($slider);
	}
	?>
</div>



<!--- Main Content --->
<div id="insurance-content-container"class="container-fluid">
	<section class="page-wrap">
		<div class="row">
			<div class="col-md-3">
				    <!-- Insurance Menu -->
					<?php
					if(has_term('personal','insurance-category')) {
  							wp_nav_menu( array(
  							'theme_location' 	=> 'personal-insurance-menu',
							'fallback_cb'    => '__return_false',
							'depth'           	=> 0,
							'container'     	=> 'div',
							'container_class' 	=> 'side-menu',
							'walker'			=> new Walker_Nav_Side(),
  							) );

					} else(has_term('commercial', 'insurance-category')) {
						  wp_nav_menu( array(
						  	'theme_location' 	=> 'commercial-insurance-menu',
						  	'fallback_cb'    => '__return_false',
  							'depth'           	=> 0,
  							'container'     	=> 'div',
  							'container_class' 	=> 'side-menu',
  							'walker'			=> new Walker_Nav_Side(),
					   ) )

				   } ?>
			</div>
			<div class="col content-right">
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'loop-templates/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					// End the loop.
					endwhile;
				?>
			</div>
		</div>
	</section>
</div>


<!--- Insurance Footer --->
<?php $image = get_field('footer_image'); ?>
<!--- Use following line for color--->
<div id="insurance-footer" class="container-fluid" style="background-color:#939393; border-bottom: 2px solid white;">

<!--- Use following line for image
<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
--->
	<div class="container-fluid">
		<div class="row w-100">
				<div class="col-md-6">
					<h2>Ready To Get Started?</h2>
					<p>Visit our <a href="/contact-us/">Contact Us</a> page, use our Get a Quote tool or call <a href="tel:8558744677">(855) 874-4677</a> to talk to a specialist.</p>
				</div>
				<div class="col-md-6">
					<a href="<?php if ( get_field( 'get_a_quote_url' ) ): ?>

						<?php the_field('get_a_quote_url'); ?>

					<?php else: // field_name returned false ?>

						<?php echo "/contact-us/"; ?>

					<?php endif; // end of if field_name logic ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
				</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
