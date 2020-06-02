<?php if ( $image = get_field( 'footer_image' ) ): ?>

	<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">

<?php else: // field_name returned false ?>

	<div id="insurance-footer" class="container-fluid" style="background-color:#939393; border-bottom: 2px solid white;">

<?php endif; // end of if field_name logic ?>

	<div class="container-fluid">
		<?php $link = get_field('cta_page'); ?>
		<div class="row w-100">
				<div class="col-md-7">
					<h2>Ready To Get Started?</h2>
					<p>Visit our <a href="/contact-us/">Contact Us</a> page, use our <a href="<?php echo esc_url( $link ); ?>" >Get a Quote</a> tool or call <a href="tel:8558744677">(855) 874-4677</a> to talk to a specialist</p>
				</div>
				<div class="col-md-5">
					<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
				</div>
		</div>
		</div>
	</div>
