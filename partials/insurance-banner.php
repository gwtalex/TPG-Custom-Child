<?php $image = get_field('banner_image'); ?>
<div id="insurance-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<a href="<?php if ( get_field( 'cta_page' ) ): ?>

				<?php the_field('cta_page'); ?>

			<?php else: // field_name returned false ?>

				<?php echo "/contact-us/"; ?>

			<?php endif; // end of if field_name logic ?>">
				<button type="button" class="btn btn-outline btn-lg">Get A Quote</button>
			</a>

			<p id="testimonials-banner">RECOMMENDED BY THE PEOPLE WHO MATTER MOST: OUR CUSTOMERS
				CLICK <a href="#testimonials-section">HERE</a> TO READ WHAT THEY HAVE TO SAY</p>
		</div>
	</div>
</div>
