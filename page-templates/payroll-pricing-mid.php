<?php

/*
Template Name: Pricing Mid-Size Business
Template Post Type: payroll
*/
?>

<?php get_header();?>


<!--- Payroll Header --->
<?php $image = get_field('banner_image'); ?>
<div id="payroll-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<button type="button" class="btn btn-outline-success btn-lg">Schedule Live Demo</button>
		</div>
	</div>
</div>




<!--- Main Content --->
		<div id="payroll-content-container"class="container-fluid">
			<section class="page-wrap">
				<div class="row">
				<div class="col-md-3">
					    <!-- Payroll Menu -->
							<div class="">
						<?php wp_nav_menu( array(
							'theme_location' 	=> 'payroll-menu',
							'fallback_cb'    	=> '__return_false',
							'depth'           	=> 0,
							'container'     	=> 'div',
							'container_class' 	=> 'side-menu',
							'walker'			=> new Walker_Nav_Side(),
						) ); ?>
							</div>
				</div>
				<div class="col content-right" id="payroll-midsize">

					<div class="container">
						<table class="table table-top">
							<thead>
								<tr>
									<th scope="col" class="w-75 cell-1" >Platinum Preferred Clients enjoy TPG's Platinum Premier Solution for Platinum 12.0 Pricing</th>
									<th scope="col" class="plat-10">PLATINUM 10.0</th>
									<th scope="col" class="plat-20">PLATINUM 12.0</th>
									<th scope="col" class="plat-premier">PLATINUM PREMIER</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="w-75 cell-pepm" >Simple Flat Per Employee Per Month Pricing (PEPM)</th>
									<td class="pepm-10"><h5>$10</h5> PEPM</td>
									<td class="pepm-12"><h5>$12</h5> PEPM</td>
									<td class="pepm-20"><h5>$20</h5> PEPM</td>
								</tr>
							</tbody>
						</table>

						<p class="table-bottom">Lifetime Pricing $$$ <br> TPG will lock in your PEPM Pricing for life!!!</p>

						<div class="accordion" id="payroll-mid-accordion">
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Payroll Management
										</button>
									</h2>
								</div>
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Flat Pricing with No Hidden Costs</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Mobile Processing 24/7</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Detailed Payroll Reports</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Vacation & Sick Time Tracking</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
											<tr>
												<td class="w-75">Direct Deposit / Live Checks / Cash Cards</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<td class="w-75">Garnishments & Reimbursements</td>
											<td><i class="fas fa-check check-red check-red"></i></td>
											<td><i class="fas fa-check check-yellow"></i></td>
											<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Employee Portal with Online Access</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Online Paystubs / W-2's & more</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Simplified Certified Payroll</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Job Costing / Labor Center Reporting</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											Tax Management
										</button>
									</h2>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Automatic Tax Filings & Payments</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Tax Form Delivery</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Tax Form Amendments</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Electronic W-2 & 1099 Delivery</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Multiple State Support</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
											<td class="w-75">Multiple Pay Rates & Schedules</td>
											<td><i class="fas fa-check check-red"></i></td>
											<td><i class="fas fa-check check-yellow"></i></td>
											<td><i class="fas fa-check check-green"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											Accounting & CPA Support
										</button>
									</h2>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Accountant Secure Access</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">On Demand Payroll Report Builder</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Accounting Integration (I.E. Quickbooks)</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
											Time Management
										</button>
									</h2>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Time Clock Solution</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Overtime Compliance</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Mobile Time Tracking</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Easy Time Reporting</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Employee Scheduling</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
											Human Capital Management
										</button>
									</h2>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Mrs. Mitchell Employee Payroll Hotline</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">New Hire Reporting</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Integrated HRIS System</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Paperless On-Boarding</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Candidate Tracking / Job Posting</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Electronic New Hire Forms Completion</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Compliance Management</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Annual Harassment Training - (On-site)</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Success Analytics</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
											Benefits Management
										</button>
									</h2>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Benefit Administration / Plan Review</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">401k Integration</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Online Benefit Enrollment</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">ACA Compliance Reporting</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">ACA Penalty Management</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
											Workers' Compensation
										</button>
									</h2>
								</div>
								<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Pay as You Go Payroll Reporting</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">No Premium Down Payment</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">On- & Off-Site Audit Completion</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-4">
								<label>
									<input type="radio" name="product" class="card-input-element" value="10" />
								   <div class="panel panel-default card-input">
										<div class="panel-body">
											<p>Platinum 10.0</p>
											<h5>$10</h5>
											<p>PEPM</p>
										</div>
								   </div>
								</label>
							</div>

							<div class="col-md-4">
								<label>
									<input type="radio" name="product" class="card-input-element" value="12" />
								   <div class="panel panel-default card-input">
										<div class="panel-body">
											<p>Platinum 12.0</p>
											<h5>$12</h5>
											<p>PEPM</p>
										</div>
								   </div>
								</label>
							</div>

							<div class="col-md-4">
								<label>
									<input type="radio" name="product" class="card-input-element" value="20" />
								   <div class="panel panel-default card-input">
										<div class="panel-body">
											<p>Platinum Premier</p>
											<h5>$20</h5>
											<p>PEPM</p>
										</div>
								   </div>
								</label>
							</div>
						</div>

						<div class="slidecontainer">
							<input type="range" min="100" max="500" value="50" class="slider" id="myRange">
							<p>Drag slider to calculate your payroll price.</p>
							<p>*To receive a customized business proposal for more than 500 employees, please Contact Us</p>
						</div>

						<div class="displayPrice">
							<p>
								<b>$<span class="updatePrice">12</span></b><i class="fa-equal"> = </i><b>$<span class="finalPrice">1000</span></b>
								PEPM
							</p>
						</div>
					</div>



				</div>
			</div>
		</section>
	</div>
</div>

<!--- Payroll Footer --->
<?php $image = get_field('footer_image'); ?>
<div id="payroll-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('footer_title'); ?></h1>
			<p><?php the_field('footer_text'); ?></p>
			<button type="button" class="btn btn-success btn-lg">Schedule Live Demo</button>
		</div>
	</div>
</div>

<?php get_footer();?>
