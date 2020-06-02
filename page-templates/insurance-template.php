<?php

/*
Template Name: Insurance Main
Template Post Type: insurance
*/
?>

<?php get_header();?>


<!--- Insurance Header --->
<?php get_template_part( 'partials/insurance', 'banner' ); ?>



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
<?php get_template_part( 'partials/insurance', 'footer' ); ?>


<?php get_footer();?>
