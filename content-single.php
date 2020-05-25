<?php
/**
 * The gwt blog template for displaying content
 *
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		the_post_thumbnail();
	?>

	<header class="entry-header">

		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
    <p class="blog-publish-date">This article was published on: <?php the_time('m/j/y g:i A') ?><br></p>
    <div class="blog-social-top"><?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?><br></div>
    <br>
    <br>
	</header><!-- .entry-header -->


    	<div class="entry-content">

    		<?php the_content(); ?>

    		<?php
    		wp_link_pages(
    			array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
    				'after'  => '</div>',
    			)
    		);
    		?>

    	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>
<div class="blog-social-top"><?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?><br></div>
<br>
<br>
    <footer class="entry-footer">

    		<?php understrap_entry_footer(); ?>

    	</footer><!-- .entry-footer -->


</article><!-- #post-## -->
