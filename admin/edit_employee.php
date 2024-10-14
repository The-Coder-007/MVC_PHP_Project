<?php
include_once('partials/form_header.php');
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


			<div class="row base_formb mt-2">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Edit Employee</h5>
						</div>
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane active" id="preview117">
									<div class="row base_formbi">
										<form action="#" method="post" enctype="multipart/form-data">
										<div class="col-md-12 col-12">
											<div class="base_formbil">
											
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Name</label>
													<input type="text" id="simpleinput" value="<?php echo $fetch->full_name;?>" name="full_name" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="example-fileinput" class="form-label">Upload image</label>
													<input type="file" value="<?php echo $fetch->img;?>" id="example-fileinput" name="img" class="form-control">
													<img src="upload/employees/<?php echo $fetch->img;?>" alt="">
												</div>
												<!-- <div class="mb-3">
													<label for="simpleinput" class="form-label">Username</label>
													<input type="email" id="simpleinput" name="username" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Password</label>
													<input type="text" id="simpleinput" name="pass" class="form-control border border-secondary">
												</div> -->

												<button class="btn btn-primary" name="save" type="submit">Add</button>
											</form>
											</div>
										</div>
										
									</div>
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

</script>
<script src="js/global.js"></script>


</body>

</html>