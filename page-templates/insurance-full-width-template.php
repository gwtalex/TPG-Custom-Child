<?php

/*
Template Name: Insurance Full Width
Template Post Type: insurance
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
			<button type="button" class="btn btn-outline btn-lg">Get A Quote</button>
		</div>
	</div>
</div>

<!--- Personal Insurance Carosel --->
<div class="container-fluid">
	<?php
	$slider = get_field('slider');
	if ( !empty( $slider ) && has_term('personal','insurance-category')) {
		echo do_shortcode($slider);
	}
	?>
</div>



<!--- Main Content --->
<div id="insurance-content-container"class="container">
	<section class="page-wrap">
		<div class="row">
			<div class="col content">
				<?php
				if (have_posts()) :
   					while (have_posts()) :
      					the_post();
         					the_content();
   					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
</div>


<!--- Insurance Footer --->
<?php $image = get_field('footer_image'); ?>
<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="row w-100">
			<div class="col-md-12">
				<?php $link = get_field('get_a_quote_url'); ?>
				<h2>Ready To Get Started?</h2>
				<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
			</div>
			<div class="col-md-6">
				<p>Visit Our Contact Us Page...</p>
				<a href="/contact-us/"><button type="button" class="btn btn-md">Contact Us</button></a>
			</div>
			<div class="col-md-6">
				<p>Or Talk To A Specialist</p>
				<a a href="tel:8558744677" ><button type="button" class="btn btn-md">Call Now</button></a>
			</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
