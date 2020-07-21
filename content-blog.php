<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div id="blog-articles" class="shadow card text-center">
	<div class="entry-meta">
		<span class="day-date"><?php echo get_the_date( 'j' ); ?></span>
		<br>
		<span class="month"><?php echo get_the_date( 'M ' ); ?></span>
	</div><!-- .entry-meta -->
	<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header">

			<?php
			the_title(
				sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

			<?php if ( 'post' == get_post_type() ) : ?>



			<?php endif; ?>

		</header><!-- .entry-header -->



		<div class="entry-content">

				<?php the_excerpt(); ?>



			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
</div>
