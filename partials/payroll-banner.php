<?php $image = get_field('banner_image'); ?>
<div id="payroll-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<div class="col-md-4 payroll-banner-form">
				<?php echo do_shortcode('[super_form id="7036"]'); ?>
			</div>
		</div>
	</div>
</div>
