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
							<h5>Employee</h5>
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
													<input type="text" id="simpleinput" name="full_name" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="example-fileinput" class="form-label">Upload image</label>
													<input type="file" id="example-fileinput" name="img" class="form-control">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Username</label>
													<input type="email" id="simpleinput" name="username" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Password</label>
													<input type="text" id="simpleinput" name="pass" class="form-control border border-secondary">
												</div>

												<button class="btn btn-primary" name="submit" type="submit">Add</button>
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


			<div class="row  base_formb mt-4">

				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>HORIZONTAL FORM</h5>
						</div>
						<div class="card-body">

							<p> Create horizontal forms with the grid by adding the .row class to form groups and using the .col-*-* classes to specify the width of your labels and controls. Be sure to add .col-form-label to your label s as well so they’re vertically centered with their associated form controls.</p>
							<ul class="nav nav-tabs mb-3" style="list-style:none;">
								<li class="nav-item">
									<a href="#preview126" data-bs-toggle="tab" aria-expanded="false" style="font-weight:bold;" class="nav-link active">
										<i class="mdi mdi-home-variant d-md-none d-block"></i>
										<span class="d-md-block">Preview</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#code126" data-bs-toggle="tab" aria-expanded="true" style="font-weight:bold;" class="nav-link">
										<i class="mdi mdi-account-circle d-md-none d-block"></i>
										<span class="d-md-block">Code</span>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="preview126">
									<form class="form-horizontal">
										<div class="row mb-3">
											<label for="inputEmail3" class="col-3 col-form-label">Email</label>
											<div class="col-9">
												<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword3" class="col-3 col-form-label">Password</label>
											<div class="col-9">
												<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
											<div class="col-9">
												<input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
											</div>
										</div>
										<div class="row mb-3 justify-content-end">
											<div class="col-9">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="checkmeout">
													<label class="form-check-label" for="checkmeout">Check me out !</label>
												</div>
											</div>
										</div>
										<div class="justify-content-end row">
											<div class="col-9">
												<button type="submit" class="btn btn-info">Sign in</button>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="code126">
									<pre class="brush: html;">
				<form class="form-horizontal">
					<div class="row mb-3">
						<label for="inputEmail3" class="col-3 col-form-label">Email</label>
						<div class="col-9">
						  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-3 col-form-label">Password</label>
						<div class="col-9">
						  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
						<div class="col-9">
						  <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
						</div>
					</div>
					<div class="row mb-3 justify-content-end">
						<div class="col-9">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="checkmeout">
								<label class="form-check-label" for="checkmeout">Check me out !</label>
							</div>
						</div>
					</div>
					<div class="justify-content-end row">
						<div class="col-9">
						  <button type="submit" class="btn btn-info">Sign in</button>
						</div>
					</div>
				</form>
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

</script>
<script src="js/global.js"></script>


</body>

</html>