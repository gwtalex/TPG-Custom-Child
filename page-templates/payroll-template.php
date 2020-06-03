<?php

/*
Template Name: Payroll Elementor Bottom
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
					<?php the_field('content_right'); ?>
				</div>
			</div>
		</section>
		<div class="content-main container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<?php while (have_posts()) : the_post();/* Start loop */ ?>
	        			<?php the_content(); ?>
					<?php endwhile; /* End loop */ ?>
				</div>

			</div>
		</div>
	</div>
</div>

<!--- Payroll Footer --->
<?php get_template_part( 'partials/payroll', 'footer' ); ?>


<?php get_footer();?>
