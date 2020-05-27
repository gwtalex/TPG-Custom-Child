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
<div id="blog-header" class="container-fluid" style="background-image:url('https://new.galaxywebteam.com/wp-content/uploads/2020/05/blog-banner.jpg'">
	<div class="container-fluid">
		<div class="container">
		<h1 class="blog-heading"><?php the_title(); ?></h1>
		 <p class="blog-text">MyTPG Blog</br> Published: <?php the_time('m/j/y g:i A') ?></p>
		</div>
	</div>
</div>
<div class="wrapper" id="single-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row flex-column-reverse flex-md-row">
			<div id="blog-widget-area" class="col-md-2">
				<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" role="search">
	                <label class="sr-only" for="s">Search</label>
	                <div class="input-group">
    		            <input class="field form-control" id="s" name="s" type="text" placeholder="Search Blog Posts …" value="">
    	                <span class="input-group-append">
    			            <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search">
                            <input type="hidden" name="post_type" value="post">
    		            </span>
	               </div>
               </form>
				<?php
				  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') )
				?>
			</div>
			<div class="col">
				<main class="site-main" id="blog-main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content-single'); ?>

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
