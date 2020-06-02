<?php

/*
Template Name: Insurance Full Width
Template Post Type: insurance, page
*/
?>

<?php get_header();?>


<!--- Insurance Header --->
<?php get_template_part( 'partials/insurance', 'banner' ); ?>


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
<?php get_template_part( 'partials/insurance', 'footer' ); ?>


<?php get_footer();?>
