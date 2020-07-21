<?php

/*
Template Name: Pricing Mid-Size Business
Template Post Type: payroll
*/
?>

<?php get_header();?>


<!--- Payroll Header --->
<?php get_template_part( 'partials/payroll', 'banner' ); ?>



<!--- Main Content --->
		<div id="payroll-content-container" class="container-fluid">
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
						<h1 class="entry-title-payroll"> Pricing </h1>
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
							<div class="card" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" >
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
							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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
							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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
							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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
							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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

							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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

							<div class="card"  type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link">
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
					<!--- Pricing Caluclator --->
					<div class="payroll-calculator">
						<form action="#" method="post" class="demoForm" id="demoForm">
							<fieldset>

								<h2>Choose a plan to calculate your total payroll price </h2>
								<div class="row pricing-card">


										<div class="col-md-4">
											<div class="card card-1">
												<label>
													<input type="radio" name="size" value="10" />
												   <div class="card-body">
															<p>Platinum 10.0</p>
															<h5>$10</h5>
															<p>PEPM</p>
												   </div>
												</label>

											</div>
										</div>

										<div class="col-md-4">
											<div class="card card-2">
												<label>
													<input type="radio" name="size" value="12" />
												   <div class="card-body">
															<p>Platinum 12.0</p>
															<h5>$12</h5>
															<p>PEPM</p>
												   </div>
												</label>

											</div>
										</div>

										<div class="col-md-4">
											<div class="card card-3">
												<label>
													<input type="radio" name="size" value="20" />

														<div class="card-body">
															<p>Platinum Permier</p>
															<h5>$20</h5>
															<p>PEPM</p>

												   </div>
												</label>

											</div>
										</div>
										<div class="container">
											<h2>Drag slider below to indicate total employees</h2>
											<span class="total-employees">Total Employees: <span id="employees"></span></br></span>
											<div class="slidecontainer">

											   <input type="range" min="100" max="500" class="slider" id="myRange">


											   <p>*To receive a customized business proposal for more than 500 employees, please <a href="/contact-us/">Contact Us</a></p>
										   </div>
										</div>

										<div class="container">
											<div class="displayPrice">

		 									   <p class="text-center">

		 										   <label>
		 											   <span class="updatePrice">Total </span> = <b>$<span type="text" name="total" class="num" value="1000" readonly="readonly"id="finalPrice" /></span></b>
		 										   </label>
		 										   PEPM
		 									   </p>
		 								   </div>
										</div>



								</div>







							</fieldset>
						</form>


					</div>
				<script type="text/javascript">

					// get list of radio buttons with name 'size'
					document.getElementById("myRange").step = "1";
					var slider = document.getElementById("myRange");
					var output = document.getElementById("employees");
					var finalPrice = document.getElementById("finalPrice");
					var plan = document.forms['demoForm'].elements['size'];
					output.innerHTML = slider.value;


					// loop through list
					for (var i=0, len=plan.length; i<len; i++) {
					plan[i].onclick = function() { // assign onclick handler function to each
						// put clicked radio button's value in total field
						finalPrice.innerHTML = this.value * slider.value;

						slider.oninput = function() {
							output.innerHTML = this.value;
							finalPrice.innerHTML = this.value * plan.value;
						};
					};

				};

				</script>

				<!-- You Be The Judge Chart -->
					<div class="container you-judge">
						<a id="why"></a>
						<h5 class="text-center">Why Pay 40+% More for Less Service...</h5>
						<h2 style="color:#ffe04a; font-size: 50px; text-align: center;">You Be The Judge !!!</h2>
						<h1 style="color:#009fd9; font-size: 40px; text-align: center;"><b>TPG vs. <span style="color:#f2575b;">ADP</span></b></h1>
						<h3 style="color: #000; background: #fccf39; padding: 10px 0; text-align: center;">Payroll Processing &amp; HR Services</h3>
						<table class="table table-striped table-bordered">
							<tbody>
								<tr class="row-one">
									<td class="w-50">Solution</td>
									<td class="adp">ADP</td>
									<td class="tpg">TPG</td>
								</tr>
								<tr class="row-two">
									<td class="w-50 compare">Compare & Save !</td>
									<td class="adp">Workforce Now w/HR</td>
									<td class="tpg">Platinum 10.0 <br>w/ Advanced HR</td>
								</tr>
								<tr class="row-three">
									<td class="w-50">Quote for Company w/250 Employees</td>
									<td>Annual Savings w/TPG</td>
									<td>*$20,000+</td>
								</tr>
								<tr>
									<td class="w-50">Lifetime PEPM Price Lock Guarantee</td>
									<td class="cell-center adp-background">Not Offered</td>
									<td class="cell-center tpg-background">Lifetime Guarantee</td>
								</tr>
								<tr>
									<td class="w-50">Integrated HRIS System</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Electronic On-Boarding for New Hires</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">New Hire Reporting</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Benefits Administration</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Live HR Support + Online Document Storage</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Mobile Processing 24/7 w/Employee on-line Access</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Timeclock & Scheduling Platform w/Integration</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">Performance Management w/ Compensation</td>
									<td class="cell-center adp-background"><i class="fas fa-check"></i></td>
									<td class="cell-center tpg-background"><i class="fas fa-check"></i></td>
								</tr>
								<tr>
									<td class="w-50">300+ Online Training Courses (English & Spanish)</td>
									<td class="cell-center adp-background">Not Offered</td>
									<td class="cell-center tpg-background">Included</td>
								</tr>
								<tr>
									<td class="w-50">PayGo Workers Comp w/ On & Off-Site Audit Support</td>
									<td class="cell-center adp-background">Not Offered</td>
									<td class="cell-center tpg-background">Included</td>
								</tr>
								<tr>
									<td class="w-50">Annual Labor Law Poster Delivery</td>
									<td class="cell-center adp-background">Not Included</td>
									<td class="cell-center tpg-background">English & Spanish</td>
								</tr>
								<tr>
									<td class="w-50">Simplified Certified Payroll</td>
									<td class="cell-center adp-background">Not Included</td>
									<td class="cell-center tpg-background">Included</td>
								</tr>
								<tr>
									<td class="w-50">Employee Handbook - (Annual Review & Build)</td>
									<td class="cell-center adp-background">You Build</td>
									<td class="cell-center tpg-background">TPG Builds</td>
								</tr>
								<tr>
									<td class="w-50">Accounting Integration (i.e. QuickBooks)
(Complete by TPG's Chart of Accounts Specialist)</td>
									<td class="cell-center adp-background">Not Included</td>
									<td class="cell-center tpg-background">Included</td>
								</tr>
							</tbody>
						</table>
						<p>*Pricing based on proposals dated 01/15/2019. ADP offers additional add-ons to their Workforce Now platform at an additional cost for each item. TPG compared Platform for Platform solutions.</p>
					</div>

				</div>
				<!---End of Content Section --->
			</div>
			<!---End of Page Wrap --->
		</section>
	</div>
</div>

<!--- Payroll Footer --->
<?php get_template_part( 'partials/payroll', 'footer' ); ?>

<?php get_footer();?>
