<?php $image = get_field('banner_image'); ?>
<div id="payroll-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<a href="<?php if ( get_field( 'cta_page' ) ): ?>

				<?php the_field('cta_page'); ?>

			<?php else: // field_name returned false ?>

				<?php echo "/payroll/schedule-live-demo/"; ?>

			<?php endif; // end of if field_name logic ?>"><button type="button" class="btn btn-outline-success btn-lg">Schedule Live Demo</button></a>
		</div>
	</div>
</div>
