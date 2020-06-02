<?php

/*
Template Name: Payroll Elementor Right
Template Post Type: payroll
*/
?>

<?php get_header();?>


<!--- Payroll Header --->
<?php get_template_part( 'partials/payroll', 'banner' ); ?>




<!--- Main Content --->
		<div id="payroll-content-container"class="container-fluid">
			<section class="page-wrap">
				<div class="row">
				<div class="col-md-3">
					    <!-- Payroll Menu -->
							<div class="">
						<?php wp_nav_menu( array(
							'theme_location' 	=> 'payroll-menu',
							'fallback_cb'    	=> '__return_false',
							'depth'           	=> 0,
							'container'     	=> 'div',
							'container_class' 	=> 'side-menu',
							'walker'			=> new Walker_Nav_Side(),
						) ); ?>
							</div>
				</div>
				<div class="col content-right">
					<?php while (have_posts()) : the_post();/* Start loop */ ?>
						<?php the_content(); ?>
					<?php endwhile; /* End loop */ ?>
				</div>
			</div>
		</section>
	</div>
</div>

<!--- Payroll Footer --->
<?php get_template_part( 'partials/payroll', 'footer' ); ?>


<?php get_footer();?>
