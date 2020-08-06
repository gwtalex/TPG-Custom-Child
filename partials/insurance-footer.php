

<?php // Testimonials for Personal Insurance
if(has_term('personal','insurance-category')) { ?>
<div class="container-fluid" id="testimonials">
	<a name="testimonials-section"></a>
	<div class="row">
		<div class="col">
			<h2>WHAT OUR CUSTOMERS SAY</h4>
			<div id='RRTestimonials'></div>
			<script async src='https://cf.rocketreferrals.com/jsloader/v2?c_id=HM2keU0jjLM84zGE_pPOPw'></script>
			<script>
				window.RRLoader = window.RRLoader || [];
				window.rrcall = window.rrcall || function(){RRLoader.push(arguments);}
				rrcall('load_testimonials', 'RRTestimonials');
			</script>
			<a href="https://cf.rocketreferrals.com/testimonialwidget/HM2keU0jjLM84zGE_pPOPw
"><p>Click here for more testimonials</p></a>
		</div>
	</div>
</div>
<?php } ?>

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
					
					<a href="<?php if ( get_field( 'cta_page' ) ): ?>

						<?php the_field('cta_page'); ?>

						<?php else: // field_name returned false ?>

						<?php echo "/contact-us/"; ?>

						<?php endif; // end of if field_name logic ?>">
						<button type="button" class="btn btn-md">Get A Quote</button>
					</a>

				</div>
		</div>
		</div>
	</div>
