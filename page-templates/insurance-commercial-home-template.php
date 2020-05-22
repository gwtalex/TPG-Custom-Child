<?php

/*
Template Name: Insurance Commerical Home
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
			<a href="/contact-us">
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

<!--- Commercial Buttons --->

<div class="row commercial-buttons">

	<div class="col-md-1">
	</div>
    <div class="col-md-2">
	    <a href="http://mytpg.com/construction"><button class="btn-insurance">Construction</button></a><br>
	    <a href="http://mytpg.com/agriculture"><button class="btn-insurance">Agriculture</button></a><br>
	    <a href="http://mytpg.com/technology"><button class="btn-insurance">Technology</button></a><br>
    </div>
    <div class="col-md-2">
		<a href="http://mytpg.com/transportation"><button class="btn-insurance">Transportation</button></a><br>
		<a href="http://mytpg.com/real-estate"><button class="btn-insurance">Real Estate</button></a><br>
		<a href="http://mytpg.com/food-industry"><button class="btn-insurance">Food Industry</button></a><br>
    </div>
    <div class="col-md-2">
		<a href="http://mytpg.com/manufacturing"><button class="btn-insurance">Manufacturing</button></a><br>
		<a href="http://mytpg.com/commercial-automotive/"><button class="btn-insurance">Automotive</button></a><br>
		<a href="http://mytpg.com/commercial-nonprofit"><button class="btn-insurance">Non-Profits</button></a><br>
    </div>
    <div class="col-md-2">
		<a href="http://mytpg.com/restaurant"><button class="btn-insurance">Restaurants</button></a><br>
		<a href="http://mytpg.com/education"><button class="btn-insurance">Education</button></a><br>
		<a href="http://mytpg.com/franchise-services"><button class="btn-insurance">Franchise Services</button></a><br>
    </div>
    <div class="col-md-2">
		<a href="http://mytpg.com/retail-wholesale"><button class="btn-insurance">Retail/Wholesale</button></a><br>
		<a href="http://mytpg.com/health-care"><button class="btn-insurance">Health Care</button></a><br>
		<a href="http://mytpg.com/cannabis-industry-insurance"><button class="btn-insurance">Cannabis Industry</button></a><br>
    </div>
	<div class="col-md-1">
	</div>
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
<!--- Use following line for color
<div id="insurance-footer" class="container-fluid" style="background-color:#136d7c; border-bottom: 2px solid white;">
--->
<!--- Use following line for image--->
<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">

	<div class="container-fluid">
		<div class="row w-100">
				<div class="col-md-6">
					<h2>Ready To Get Started?</h2>
					<p>Visit our <a href="/contact-us/">Contact Us page</a>, use our Get a Quote tool or call to <a href="tel:8558744677"> talk to a specialist</a></p>
				</div>
				<div class="col-md-6">
					<?php $link = get_field('get_a_quote_url'); ?>
					<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
				</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
