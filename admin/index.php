
<?php
include_once('partials/header.php');
?>


	<div class="container-fluid">
		<div class="row">
		
			<?php
			include_once('partials/navbar.php');
			?>

			<main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
				<div class="row analytic_1">
					<div class="col-md-3">
						<div class="analytic_1l">
							<h5 class="mb-0">Dashboard</h5>
						</div>
					</div>
					<div class="col-md-9">
						<div class="analytic_1r pull-right">
							<div class="input-group">
								<input type="text" class="form-control form_2" id="cal_2" placeholder="Search Here...">
								<span class="input-group-btn">
									<button class="btn btn-primary bg_1" type="button">
										<i class="fa fa-calendar cal_2"></i></button>
								</span>
							</div>
							<button type="submit" class="btn btn-primary bg_1"><i class="fa fa-refresh"></i></button>
						</div>
					</div>
				</div>
				<div class="row analytic_2 mt-4">
					<div class="col-xl-3 col-md-5 col-lg-5">
						<div class="analytic_2l">
							<div class="analytic_2l1 bg-white">
								<h6 class="font_14">ACTIVE USERS </h6>
								<h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
								<p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
										class="pull-right col_3">Since last month</span></p>
							</div>
							<div class="analytic_2l1 bg-white mt-4">
								<h6 class="font_14">VIEWS PER MINUTE</h6>
								<h3>263 <span class="pull-right col_3"><i class="fa fa-file"></i></span></h3>
								<p class="col_4 mb-0"><i class="fa fa-long-arrow-down"></i> 1.08% <span
										class="pull-right col_3">Since previous week</span></p>
							</div>
							<div class="analytic_2l1 bg-white mt-4">
								<p class="mb-0">Enhance your Campaign for better outreach <i
										class="fa fa-long-arrow-right"></i></p>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-md-7 col-lg-7">
						<div class="analytic_2r bg-white">
							<h6>SESSIONS OVERVIEW</h6>

							<canvas id="multipleLineChart"></canvas>

						</div>
					</div>
				</div>

				<div class="row footer mt-4">
					<div class="col-md-8">
						<div class="footer_1l">
							<p class="mb-0 col_3">© 2013 Your Website Name. All Rights Reserved | Design by <a
									class="col_1 font-weight-bold" href="http://www.templateonweb.com">TemplateOnWeb</a>
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer_1r" style="text-align:right;">
							<ul>
								<li class="d-inline font_14"><a class="col_3" href="#">About </a></li>
								<li class="d-inline font_14"><a class="col_3" href="#">Support </a></li>
								<li class="d-inline font_14"><a class="col_3" href="#">Contact Us </a></li>
							</ul>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/global.js"></script>
	<script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		})
	</script>

	<script>
		//================ Line chart With Multiple Lines ========

		var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

		new Chart("multipleLineChart", {
			labels: 'Multiple Line Chart',
			type: "line",
			data: {
				labels: xValues,
				datasets: [{
					label: 'India',
					data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
					borderColor: "red",
					fill: false
				}, {
					label: 'US',
					data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
					borderColor: "green",
					fill: false
				}, {
					label: 'China',
					data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
					borderColor: "blue",
					fill: false
				}]
			},
			options: {
				legend: { display: false }
			}
		});

	</script>
</body>

</html>