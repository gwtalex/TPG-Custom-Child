<?php

/*
Template Name: Risk Elementor Right
Template Post Type: risk
*/
?>

<?php get_header();?>


<!--- Risk Header --->
<?php get_template_part( 'partials/risk', 'banner' ); ?>





<!--- Main Content --->
		<div id="risk-content-container"class="container-fluid">
				<div class="row">
				<div class="col-md-3">
					    <!-- Risk Menu -->
							<div class="">
						<?php wp_nav_menu( array(
							'theme_location' 	=> 'risk-menu',
							'fallback_cb'    => '__return_false',
							'depth'           	=> 0,
							'container'     	=> 'div',
							'container_class' 	=> 'side-menu',
							'walker'			=> new Walker_Nav_Side(),
						) ); ?>
							</div>
					</div>
				<div class="col content-right">
					<div class="row">
						<div class="col-sm-12">
							<?php while (have_posts()) : the_post();/* Start loop */ ?>
								<?php the_content(); ?>
							<?php endwhile; /* End loop */ ?>
						</div>

					</div>				</div>
			</div>
	</div>
</div>

<!--- Risk Footer --->
<?php get_template_part( 'partials/risk', 'footer' ); ?>


<?php get_footer();?>
