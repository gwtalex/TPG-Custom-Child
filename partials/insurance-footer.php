<?php if ( $image = get_field( 'footer_image' ) ): ?>

	<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">

<?php else: // field_name returned false ?>

	<div id="insurance-footer" class="container-fluid" style="background-color:#939393; border-bottom: 2px solid white;">

<?php endif; // end of if field_name logic ?>

	<div class="container-fluid">
		<div class="row w-100">
				<div class="col-md-7">
					<h2>Ready To Get Started?</h2>
					<p>Visit our <a href="/contact-us/">Contact Us page</a>, use our Get a Quote tool or call to <a href="tel:8558744677"> talk to a specialist</a></p>
				</div>
				<div class="col-md-5">
					<?php $link = get_field('get_a_quote_url'); ?>
					<a href="<?php echo esc_url( $link ); ?>" ><button type="button" class="btn btn-md">Get A Quote</button></a>
				</div>
		</div>
		</div>
	</div>
