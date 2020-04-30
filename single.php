<?php
/**
 * The template for displaying all single posts.
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!--- Insurance Header --->
<?php $image = get_field('banner_image'); ?>
<div id="blog-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
		</div>
	</div>
</div>
<div class="wrapper" id="single-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">
			<div id="blog-widget-area" class="col-md-3">
				<?php
				  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') )
				?>
			</div>
			<div class="col w-100">
				<main class="site-main" id="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div>


			<!-- Do the right sidebar check -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
