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
							<h5>INPUT TYPES</h5>
						</div>
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane active" id="preview117">
									<div class="row base_formbi">
										<div class="col-md-6">
											<div class="base_formbil">
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Text</label>
													<input type="text" id="simpleinput" class="form-control">
												</div>
												<div class="mb-3">
													<label for="example-email" class="form-label">Email</label>
													<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
												</div>
												<div class="mb-3">
													<label for="example-password" class="form-label">Password</label>
													<input type="password" id="example-password" class="form-control" value="password">
												</div>
												<div class="mb-3">
													<label for="password" class="form-label">Show/Hide Password</label>
													<div class="input-group input-group-merge">
														<input type="password" id="password" class="form-control" placeholder="Enter your password">
														<div class="input-group-text" data-password="false">
															<span class="fa fa-eye"></span>
														</div>
													</div>
												</div>
												<div class="mb-3">
													<label for="example-palaceholder" class="form-label">Placeholder</label>
													<input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
												</div>

												<div class="mb-3">
													<label for="example-textarea" class="form-label">Text area</label>
													<textarea class="form-control" id="example-textarea" rows="5"></textarea>
												</div>
												<div class="mb-3">
													<label for="example-readonly" class="form-label">Readonly</label>
													<input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
												</div>

												<div class="mb-3">
													<label for="example-disable" class="form-label">Disabled</label>
													<input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
												</div>

												<div class="mb-3">
													<label for="example-static" class="form-label">Static control</label>
													<input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
												</div>
												<div class="mb-3">
													<label for="example-helping" class="form-label">Helping text</label>
													<input type="text" id="example-helping" class="form-control" placeholder="Helping text">
													<span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="base_formbil">
												<div class="mb-3">
													<label for="example-select" class="form-label">Input Select</label>
													<select class="form-select" id="example-select">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>

												<div class="mb-3">
													<label for="example-multiselect" class="form-label">Multiple Select</label>
													<select id="example-multiselect" multiple class="form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>

												<div class="mb-3">
													<label for="example-fileinput" class="form-label">Default file input</label>
													<input type="file" id="example-fileinput" class="form-control">
												</div>

												<div class="mb-3">
													<label for="example-date" class="form-label">Date</label>
													<input class="form-control" id="example-date" type="date" name="date">
												</div>

												<div class="mb-3">
													<label for="example-month" class="form-label">Month</label>
													<input class="form-control" id="example-month" type="month" name="month">
												</div>

												<div class="mb-3">
													<label for="example-time" class="form-label">Time</label>
													<input class="form-control" id="example-time" type="time" name="time">
												</div>

												<div class="mb-3">
													<label for="example-week" class="form-label">Week</label>
													<input class="form-control" id="example-week" type="week" name="week">
												</div>

												<div class="mb-3">
													<label for="example-number" class="form-label">Number</label>
													<input class="form-control" id="example-number" type="number" name="number">
												</div>

												<div class="mb-3">
													<label for="example-color" class="form-label">Color</label>
													<input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
												</div>

												<div class="mb-0">
													<label for="example-range" class="form-label">Range</label>
													<input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="code117">
									<pre class="brush: html;">
				<div class="row base_formbi">
					<div class="col-md-6">
						<div class="base_formbil">
							<div class="mb-3">
								<label for="simpleinput" class="form-label">Text</label>
								<input type="text" id="simpleinput" class="form-control">
							</div>
							<div class="mb-3">
								<label for="example-email" class="form-label">Email</label>
								<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
							</div>
							<div class="mb-3">
								<label for="example-password" class="form-label">Password</label>
								<input type="password" id="example-password" class="form-control" value="password">
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Show/Hide Password</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" placeholder="Enter your password">
									<div class="input-group-text" data-password="false">
									  <span class="fa fa-eye"></span>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label for="example-palaceholder" class="form-label">Placeholder</label>
								<input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
							</div>
							
							<div class="mb-3">
								<label for="example-textarea" class="form-label">Text area</label>
								<textarea class="form-control" id="example-textarea" rows="5"></textarea>
							</div>
							<div class="mb-3">
								<label for="example-readonly" class="form-label">Readonly</label>
								<input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
							</div>
							
							<div class="mb-3">
								<label for="example-disable" class="form-label">Disabled</label>
								<input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
							</div>
							
							<div class="mb-3">
								<label for="example-static" class="form-label">Static control</label>
								<input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
							</div>
							<div class="mb-3">
								<label for="example-helping" class="form-label">Helping text</label>
								<input type="text" id="example-helping" class="form-control" placeholder="Helping text">
								<span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="base_formbil">
							<div class="mb-3">
								<label for="example-select" class="form-label">Input Select</label>
								<select class="form-select" id="example-select">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							
							<div class="mb-3">
								<label for="example-multiselect" class="form-label">Multiple Select</label>
								<select id="example-multiselect" multiple class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							
							<div class="mb-3">
								<label for="example-fileinput" class="form-label">Default file input</label>
								<input type="file" id="example-fileinput" class="form-control">
							</div>
							
							<div class="mb-3">
								<label for="example-date" class="form-label">Date</label>
								<input class="form-control" id="example-date" type="date" name="date">
							</div>
							
							<div class="mb-3">
								<label for="example-month" class="form-label">Month</label>
								<input class="form-control" id="example-month" type="month" name="month">
							</div>
							
							<div class="mb-3">
								<label for="example-time" class="form-label">Time</label>
								<input class="form-control" id="example-time" type="time" name="time">
							</div>
							
							<div class="mb-3">
								<label for="example-week" class="form-label">Week</label>
								<input class="form-control" id="example-week" type="week" name="week">
							</div>
							
							<div class="mb-3">
								<label for="example-number" class="form-label">Number</label>
								<input class="form-control" id="example-number" type="number" name="number">
							</div>
							
							<div class="mb-3">
								<label for="example-color" class="form-label">Color</label>
								<input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
							</div>
							
							<div class="mb-0">
								<label for="example-range" class="form-label">Range</label>
								<input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
							</div>
						</div>
					</div>
				</div>
			</pre>
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