<?php

/*
Template Name: Insurance Full Width
Template Post Type: insurance, page
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
			<div class="col-md-8">
				<h2>Ready To Get Started?</h2>
				<p>Visit our <a href="/contact-us/">Contact Us Page</a> or <a href="tel:8558744677"> Talk To A Specialist</a></p>
			</div>
			<div class="col-md-4">
				<?php $link = get_field('get_a_quote_url'); ?>
				<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
			</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
