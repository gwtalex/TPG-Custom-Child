<?php
/**
 * The template blog index
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<!--- Blog Header --->
<div id="blog-header" class="container-fluid" style="background-image:url('https://www.mytpg.com/wp-content/uploads/2020/06/working-man-is-typing-on-black-frame-laptop-3774082-scaled.jpg'">
   <div class="container-fluid">
	   <div class="container">
		   <h1 class="page-title">MyTPG.com Blog</h1>
		   <p>At TPG we equip our clients with information you need to be successful in your business.</p>
	   </div>
   </div>
</div>

<div class="wrapper" id="archive-wrapper">

	<div class="container-fluid" id="blog-content" tabindex="-1">

		<div class="row">

			<!-- Do the right sidebar check -->
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


			<div class="col w-100">
                <div class="row" id="blog-category-buttons" >
                    <div class="col-sm-4">
                        <div class="d-flex flex-column" >
                            <a href="/category/personal-lines-insurance/" class="btn btn-insurance">
                                Personal Insurance
                            </a>
                            <a href="/category/commercial-insurance/" class="btn btn-insurance">
                                Commerical Insurance
                            </a>
                            <a href="/category/payroll/" class="btn btn-insurance">
                                Payroll
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column">
                            <a href="/category/personal-lines-insurance/" class="btn btn-risk">
                                COVID-19
                            </a>                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column" >
                            <a href="/category/risk-management/" class="btn btn-insurance">
                                Risk Management
                            </a>
                            <a href="/category/human-resources/" class="btn btn-insurance">
                                Human Resources
                            </a>
                            <a href="/category/health-benefits/" class="btn btn-insurance">
                                Health & Benefits
                            </a>
                        </div>
                    </div>
                </div>
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
