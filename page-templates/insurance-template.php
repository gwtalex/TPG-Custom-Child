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
			<button type="button" class="btn btn-outline btn-lg">Get A Quote</button>
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
			<div class="col-md-2">
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
<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="row w-100">
			<div class="col-md-12">

			</div>
			<div class="col-md-8">
				<h2>Ready To Get Started?</h2>
				<p>Visit our <a href="/contact-us/">Contact Us Page</a> or <a href="tel:8558744677"> Talk To A Specialist</a></p>
			</div>
			<div class="col-md-4">
				<?php $link = get_field('get_a_quote_url'); ?>
				<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
			</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
