<?php

/*
Template Name: Insurance Commerical Home
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

<!--- Commercial Buttons --->

<div class="container-fluid">
	<div class="row commercial-buttons">

		<div class="col-md-1">
		</div>
	    <div class="col-md-2">
		    <a href="/insurance/construction-specialists/"><button class="btn-insurance">Construction</button></a><br>
		    <a href="/insurance/agriculture-specialists/"><button class="btn-insurance">Agriculture</button></a><br>
		    <a href="/insurance/technology/"><button class="btn-insurance">Technology</button></a><br>
	    </div>
	    <div class="col-md-2">
			<a href="/insurance/transportation-specialists/"><button class="btn-insurance">Transportation</button></a><br>
			<a href="/insurance/real-estate-specialists/"><button class="btn-insurance">Real Estate</button></a><br>
			<a href="/insurance/food-industry-service-specialists/"><button class="btn-insurance">Food Industry</button></a><br>
	    </div>
	    <div class="col-md-2">
			<a href="/insurance/manufacturing-specialists/"><button class="btn-insurance">Manufacturing</button></a><br>
			<a href="/insurance/automotive-specialists/"><button class="btn-insurance">Automotive</button></a><br>
			<a href="/insurance/non-profit-specialists/"><button class="btn-insurance">Non-Profits</button></a><br>
	    </div>
	    <div class="col-md-2">
			<a href="/insurance/restaurant-specialists/"><button class="btn-insurance">Restaurants</button></a><br>
			<a href="/insurance/education-specialists/"><button class="btn-insurance">Education</button></a><br>
			<a href="/insurance/franchise-services-specialists/"><button class="btn-insurance">Franchise Services</button></a><br>
	    </div>
	    <div class="col-md-2">
			<a href="/insurance/retail-wholesale/"><button class="btn-insurance">Retail/Wholesale</button></a><br>
			<a href="/insurance/health-care-specialists/"><button class="btn-insurance">Health Care</button></a><br>
			<a href="/insurance/cannabis-industry-specialists/"><button class="btn-insurance">Cannabis Industry</button></a><br>
	    </div>
		<div class="col-md-1">
		</div>
	</div>
</div>



<!--- Main Content --->
<div id="insurance-content-container" class="container-fluid">
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
