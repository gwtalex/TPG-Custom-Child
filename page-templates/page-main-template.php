<?php

/*
Template Name: Main Pages
Template Post Type: page
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
		</div>
	</div>
</div>

<!--- Main Content --->
<div id="insurance-content-container"class="container-fluid">
	<section class="page-wrap">
		<div class="row">
			<div class="col-md-3">
					<!-- Payroll Menu -->
						<div class="">
					<?php wp_nav_menu( array(
						'theme_location' 	=> 'main-pages-menu',
						'fallback_cb'    	=> '__return_false',
						'depth'           	=> 0,
						'container'     	=> 'div',
						'container_class' 	=> 'side-menu',
						'walker'			=> new Walker_Nav_Side(),
					) ); ?>
						</div>
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


<?php get_footer();?>
