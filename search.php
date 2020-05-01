<?php
/**
 * The template for displaying search results pages
 *
 * @package understrap
 */
 // Exit if accessed directly.
 defined( 'ABSPATH' ) || exit;

 get_header();

 $container = get_theme_mod( 'understrap_container_type' );
 ?>
 <!--- Blog Header --->
 <div id="blog-header" class="container-fluid" style="background-image:">
 	<div class="container-fluid">
 		<div class="container">
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: query term */
					esc_html__( 'Search Results for: %s', 'understrap' ),
					'<span>' . get_search_query() . '</span>'
				);
				?>
			</h1>
 		</div>
 	</div>
 </div>
 <div class="wrapper" id="archive-wrapper">

 	<div class="container-fluid" id="blog-content" tabindex="-1">

 		<div class="row">

 			<!-- Do the right sidebar check -->
 			<div id="blog-widget-area" class="col-md-2">
 				<?php
 				  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') )
 				?>
 			</div>


 			<div class="col w-100">
 				<div class="d-flex flex-wrap">

 						<?php if ( have_posts() ) : ?>

 							<?php /* Start the Loop */ ?>
 							<?php while ( have_posts() ) : the_post(); ?>

 								<?php

 								/*
 								 * Include the Post-Format-specific template for the content.
 								 * If you want to override this in a child theme, then include a file
 								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 								 */
 								get_template_part( 'content', 'blog', get_post_format() );
 								?>

 							<?php endwhile; ?>

 						<?php else : ?>

 							<?php get_template_part( 'loop-templates/content', 'none' ); ?>

 						<?php endif; ?>


 				</div>
 				<!-- The pagination component -->
 				<?php understrap_pagination(); ?>
 			</div>






 		</div> <!-- .row -->

 	</div><!-- #content -->

 	</div><!-- #archive-wrapper -->

 <?php get_footer(); ?>
