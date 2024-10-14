<?php
include_once('partials/tbl_header.php');
?>

<?php
include_once('partials/header.php');
?>



<div class="container-fluid">
	<div class="row">
		<?php
		include_once('partials/navbar.php');
		?>

		<main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
			<div class="row table_bas mt-4">
				<div class="col-xl-12 col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Employees</h5>
						</div>
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane active" id="preview136">
									<table class="table table-hover table-centered mb-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Image</th>
												<th>Full_Name</th>
												<th>User_name</th>
												<th>Created_at</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if (!empty($employee)) {

												foreach ($employee as $val) {
											?>
													<tr>
														<td><?php echo $val->employee_id; ?></td>
														<td><img src="upload/employees/<?php echo $val->img; ?>" width="30" height="30" alt="profile img "></td>
														<td><?php echo $val->full_name; ?></td>
														<td><?php echo $val->username; ?></td>
														<td><?php echo $val->created_at; ?></td>
														<td>
															<a href="status?status_emp=<?php echo $val->employee_id; ?>" class="btn btn-success"><?php echo $val->status; ?></a>
															<h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="edit_emp?e_emp=<?php echo $val->employee_id; ?>"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
															<h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="delete?demp=<?php echo $val->employee_id; ?>"><i class="fa fa-trash col_3"></i></a></h6>
														</td>
													</tr>
												<?php
												}
											} else {
												?>
												<tr>
													<td align="center" colspan="5"> Data Not Found </td>
												</tr>
											<?php
											}
											?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="code136">
									<pre class="brush: html;">
				<table class="table table-hover table-centered mb-0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Date of Birth</th>
							<th>Active?</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Semp D. Pearson</td>
							<td>123-456-7890</td>
							<td>July 24, 1980</td>
							<td> 
								<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
								<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash col_3"></i></a></h6>
							</td>
						</tr>
						<tr>
							<td>Semp D. Pearson</td>
							<td>123-456-7890</td>
							<td>July 24, 1980</td>
							<td> 
								<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
								<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash col_3"></i></a></h6>
							</td>
						</tr>
						<tr>
							<td>Semp D. Pearson</td>
							<td>123-456-7890</td>
							<td>July 24, 1980</td>
							<td> 
								<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
								<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash col_3"></i></a></h6>
							</td>
						</tr>
						<tr>
							<td>Semp D. Pearson</td>
							<td>123-456-7890</td>
							<td>July 24, 1980</td>
							<td> 
								<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
								<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash col_3"></i></a></h6>
							</td>
						</tr>
					</tbody>
				</table>
			</pre>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>



			<div class="row table_bas mt-4">
				<div class="col-xl-12 col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>INVERSE BORDERLESS TABLE</h5>
						</div>
						<div class="card-body">

							<div class="tab-content">
								<div class="tab-pane active" id="preview142">
									<table class="table table-dark table-borderless mb-0">
										<thead>
											<tr>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Date of Birth</th>
												<th>Active?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Semp D. Pearson</td>
												<td>123-456-7890</td>
												<td>July 24, 1980</td>
												<td>
													<h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
													<h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i class="fa fa-trash text-light"></i></a></h6>
												</td>
											</tr>
											<tr>
												<td>Semp D. Pearson</td>
												<td>123-456-7890</td>
												<td>July 24, 1980</td>
												<td>
													<h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
													<h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i class="fa fa-trash text-light"></i></a></h6>
												</td>
											</tr>
											<tr>
												<td>Semp D. Pearson</td>
												<td>123-456-7890</td>
												<td>July 24, 1980</td>
												<td>
													<h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
													<h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i class="fa fa-trash text-light"></i></a></h6>
												</td>
											</tr>
											<tr>
												<td>Semp D. Pearson</td>
												<td>123-456-7890</td>
												<td>July 24, 1980</td>
												<td>
													<h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
													<h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i class="fa fa-trash text-light"></i></a></h6>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="code142">
									<pre class="brush: html;">
				<div class="table-responsive">
					<table class="table table-dark table-borderless mb-0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Date of Birth</th>
								<th>Active?</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Semp D. Pearson</td>
								<td>123-456-7890</td>
								<td>July 24, 1980</td>
								<td> 
									<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
									<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash text-light"></i></a></h6>
								</td>
							</tr>
							<tr>
								<td>Semp D. Pearson</td>
								<td>123-456-7890</td>
								<td>July 24, 1980</td>
								<td> 
									<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
									<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash text-light"></i></a></h6>
								</td>
							</tr>
							<tr>
								<td>Semp D. Pearson</td>
								<td>123-456-7890</td>
								<td>July 24, 1980</td>
								<td> 
									<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
									<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash text-light"></i></a></h6>
								</td>
							</tr>
							<tr>
								<td>Semp D. Pearson</td>
								<td>123-456-7890</td>
								<td>July 24, 1980</td>
								<td> 
									<h6 data-bs-toggle="tooltip" data-bs-placement="left"  data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="#"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit text-light"></i></a></h6>
									<h6 data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="#"><i  class="fa fa-trash text-light"></i></a></h6>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</pre>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>



			<div class="row footer mt-4" style="border-top:1px solid #ddd; padding-top:20px;">
				<div class="col-md-8">
					<div class="footer_1l">
						<p class="mb-0 col_3">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_1 font-weight-bold" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
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
	var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>


</body>

</html>