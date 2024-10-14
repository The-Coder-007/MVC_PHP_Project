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
							<h5>VIDEOS</h5>
						</div>
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane active" id="preview117">
									<div class="row base_formbi">
										<form action="#" method="post" enctype="multipart/form-data">
										<div class="col-md-12 col-12">
											<div class="base_formbil">
											<div class="mb-3">
													<label for="example-select" class="form-label">Main Categories</label>
													<select class="form-select" id="example-select" name="main_cat_id" >
														<option value="-">Select Category</option>
														<?php
														foreach($main_categories as $val)
														{
														?>
														<option value="<?php echo $val->id?>"><?php echo $val->title;?></option>
														<?php
														}
														?> 
													</select>
												</div>
												<div class="mb-3">
													<label for="example-select" class="form-label">Sub Categories</label>
													<select class="form-select" id="example-select" name="sub_cat_id">
														<option value="-">Selecet category</option>
														<?php
														foreach($sub_categories as $val)
														{
														?>
														<option value="<?php echo $val->id?>"><?php echo $val->title;?></option>
														<?php
														}
														?> 
													</select>
												</div>
												<div class="mb-3">
													<label for="example-select" class="form-label">Movie Type</label>
													<select class="form-select" id="example-select" name="movie_type_id">
														<option value="-">Select Movie Type</option>
														<?php
														foreach($movie_type as $val)
														{
														?>
														<option value="<?php echo $val->type_id?>"><?php echo $val->type;?></option>
														<?php
														}	
														?> 
													</select>
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Title</label>
													<input type="text" id="simpleinput" name="title" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="example-fileinput" class="form-label">Upload image</label>
													<input type="file" id="example-fileinput" name="img" class="form-control">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Release Year</label>
													<input type="text" id="simpleinput" name="release_year" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Format</label>
													<input type="text" id="simpleinput" name="format" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Quality</label>
													<input type="text" id="simpleinput" name="quality" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="example-textarea" class="form-label">Sort Description</label>
													<textarea class="form-control border border-secondary" name="sort_desc" id="example-textarea" rows="5"></textarea>
												</div>
												<div class="mb-3">
													<label for="example-textarea" class="form-label">Long Description</label>
													<textarea class="form-control border border-secondary" name="long_desc" id="example-textarea" rows="5"></textarea>
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Languages</label>
													<input type="text" id="simpleinput" name="languages" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Writer</label>
													<input type="text" id="simpleinput" name="writers" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Producer</label>
													<input type="text" id="simpleinput" name="producers" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Licensor</label>
													<input type="text" id="simpleinput" name="licensor" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Studio</label>
													<input type="text" id="simpleinput" name="studios" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Sources</label>
													<input type="text" id="simpleinput" name="sources" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Genres</label>
													<input type="text" id="simpleinput" name="genres" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Duration</label>
													<input type="text" id="simpleinput" name="duration" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Rating</label>
													<input type="text" id="simpleinput" name="rating" class="form-control border border-secondary">
												</div>
												<div class="mb-3">
													<label for="example-textarea" class="form-label">Casts</label>
													<textarea class="form-control border border-secondary" name="cast" id="example-textarea" rows="5"></textarea>
												</div>
												<div class="mb-3">
													<label for="simpleinput" class="form-label">Link</label>
													<input type="text" id="simpleinput" name="link" class="form-control border border-secondary">
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