<?php

/*
Template Name: Pricing Small-Size Business
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
									<th scope="col" class="w-75 cell-1" >TPG’s (3) Options For the Perfect Fit</th>
									<th scope="col" class="plat-10">PLATINUM</th>
									<th scope="col" class="plat-20">PLATINUM PLUS</th>
									<th scope="col" class="plat-premier">PLATINUM 2.0</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="w-75 cell-pepm" >Simple Flat Per Pay Period Pricing
(Base Price $25)</th>
									<td class="pepm-10"><h5>$4</h5> per person</td>
									<td class="pepm-12"><h5>$6</h5> per person</td>
									<td class="pepm-20"><h5>$10</h5> per person</td>
								</tr>
							</tbody>
						</table>

						<div class="accordion" id="payroll-mid-accordion">
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Payroll Processing
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
												<td class="w-75">On-Time Automated Payroll</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Mobile Processing 24/7	</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Payroll on Autopilot	</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
											<tr>
												<td class="w-75">Edit Payroll with Ease</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<td class="w-75">Detailed Payroll Reports</td>
											<td><i class="fas fa-check check-red check-red"></i></td>
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
												<td class="w-75">Flexible Payment Schedules</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Direct Deposit / Live Checks / Cash cards</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Garnishments & Reimbursements</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Digital Signatures</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Online Paystubs / Employee Access</td>
												<td><i class="fas fa-check check-red check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Accounting & HR Integration</td>
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
												<td class="w-75">Online W-2 & 1099</td>
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
											Time & Attendance
										</button>
									</h2>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Time & Attendance Integration</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Overtime Compliance</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Scheduling Integration</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Time Clock Solution</td>
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
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
											Hiring & On-Boarding
										</button>
									</h2>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">New Hire Reporting</td>
												<td><i class="fas fa-check check-red"></i></td>
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
												<td class="w-75">Candidate Tracking</td>
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
												<td class="w-75">Fll HCM/Payroll Integration</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Success Analytics</td>
												<td></td>
												<td></td>
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
											HR Solutions
										</button>
									</h2>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Accounting & HR Integration</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Labor Law Email Updates / Annual Poster</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Healthcare Compliance</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Performance Management</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Succession Planning</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Compensation Management</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Online / Live HR</td>
												<td></td>
												<td></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Employee Handbook Builder</td>
												<td></td>
												<td></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">300+ E-Learning Training Courses</td>
												<td></td>
												<td></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Employee Analytics</td>
												<td></td>
												<td></td>
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
											Benefits Administration
										</button>
									</h2>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#payroll-mid-accordion">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="w-75">Retirement Planning</td>
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
												<td class="w-75">Top-Rated Health Plans</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Open Enrollment Reminders</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Integrated Benefit Administration & Enrollment</td>
												<td></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">ACA Compliance Reporting</td>
												<td></td>
												<td></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">ACA Penalty Management</td>
												<td></td>
												<td></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Health Care Budgeting with Selection</td>
												<td></td>
												<td></td>
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
												<td class="w-75">Pay as You Go</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">No Down Payment</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">A Rated WC Carriers</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Per Pay Period Reporting</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>
											<tr>
												<td class="w-75">Automatic Deductions</td>
												<td><i class="fas fa-check check-red"></i></td>
												<td><i class="fas fa-check check-yellow"></i></td>
												<td><i class="fas fa-check check-green"></i></td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>

						</div>

						<div class="payroll-calculator">
							<form action="#" method="post" class="demoForm" id="demoForm">
								<fieldset>

									<h2>Choose a plan to calculate your total payroll price </h2>
									<div class="row pricing-card">
											<div class="col-md-4">
												<div class="card card-1">
													<label>
														<input type="radio" name="size" value="4" />
													   <div class="card-body">
																<p>Platinum</p>
																<h5>$4</h5>
																<p>Per Person</p>
													   </div>
													</label>

												</div>
											</div>

											<div class="col-md-4">
												<div class="card card-2">
													<label>
														<input type="radio" name="size" value="6" />
													   <div class="card-body">
																<p>Platinum Plus</p>
																<h5>$6</h5>
																<p>Per Person</p>
													   </div>
													</label>

												</div>
											</div>

											<div class="col-md-4">
												<div class="card card-3">
													<label>
														<input type="radio" name="size" value="10" />

															<div class="card-body">
																<p>Platinum 2.0</p>
																<h5>$10</h5>
																<p>Per Person</p>

													   </div>
													</label>

												</div>
											</div>
											<div class="container">
												<h2>Drag slider below to indicate total employees</h2>
												<span class="total-employees">Total Employees: <span id="employees"></span></br></span>

												<div class="slidecontainer">

												   <input type="range" min="1" max="99" class="slider" id="myRange">

												   <p>*To receive a customized business proposal for more than 500 employees, please <a href="/contact-us/">Contact Us</a></p>
											   </div>
											</div>

											<div class="container">
												<div class="displayPrice">

												   <p class="text-center">
													   <label>
														  <b> $25</b> Base Price + <b>$<span id="planPrice"></span></b> Per Person = <b>$<span type="text" name="total" class="num" value="1000" readonly="readonly" id="finalPrice" /></span></b>
													   </label>
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
						var planPrice = document.getElementById("planPrice");
						var plan = document.forms['demoForm'].elements['size'];
						output.innerHTML = slider.value;


						// loop through list
						for (var i=0, len=plan.length; i<len; i++) {
						plan[i].onclick = function() { // assign onclick handler function to each
							// put clicked radio button's value in total field
							finalPrice.innerHTML = this.value * slider.value + 25;
							planPrice.innerHTML = this.value;

							slider.oninput = function() {
								output.innerHTML = this.value;
								finalPrice.innerHTML = this.value * plan.value + 25;
							};
						};

					};

					</script>


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
