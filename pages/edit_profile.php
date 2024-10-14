<?php
if(isset($_SESSION['uid']))
{
	
}
else{
  echo "<script>
		window.location='home'
		</script>";
}

?>

<?php
include_once('partials/header.php');
?>

<?php
include_once('partials/navbar.php');
?>



<!-- <form action="index.php" method="post">
    <input type="text" name="name" />
    <input type="submit" name="submit" type="submit" >
</form> -->


<section id="contact" class="pt-4 pb-4 bg_grey">
	<div class="container-xl">

		<div class="row contact_2 mt-4">

			<div class="col-md-12">
				<div class="contact_2l row">
					<div class="col-md-12 text-center">
						<h4>Sign-Up Here</h4>
						<span class="float-CENTER text_13 normal mt-1">Have an account? <a class="colo_4" href="login.php">Login</a></span></h5>
					</div>
				</div>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="contact_2l1 mt-3 row">
						<div class="col-md-6">

							<div class="contact_2l1i">
								<input class="form-control" value="<?php echo $fetch->full_name;?>" name="full_name" placeholder="Name*" type="text" />
							</div>
						</div>
						<div class="col-md-6">

							<div class="contact_2l1i">
								<input class="form-control" value="<?php echo $fetch->img;?>" name="img" placeholder="Upload your image*" type="file" />
                <img src="./admin/upload/users/<?php echo $fetch->img?>" width="50px">
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact_2l1i">
								<input class="form-control" name="username" value="<?php echo $fetch->username;?>" placeholder="Email*" type="email" />
							</div>
						</div>

					</div>
						<div class="col-md-6">
						<div class="mb-3">
								<label for="example-multiselect" class="form-label"><h3>Language</h3></label><br>
									<input type="checkbox"  name="language[]" value="Hindi" <?php
                  $lag=$fetch->language;
                  $lag_arr=explode(",",$lag);
                  if(in_array("Hindi",$lag_arr)) { echo "Checked"; }
                  ?>/>Hindi
									<input type="checkbox" name="language[]" value="English" <?php
                  $lag=$fetch->language;
                  $lag_arr=explode(",",$lag);
                  if(in_array("English",$lag_arr)) { echo "Checked"; }
                  ?>/>English
									<input type="checkbox" name="language[]" value="Gujrati" <?php
                  $lag=$fetch->language;
                  $lag_arr=explode(",",$lag);
                  if(in_array("Gujrati",$lag_arr)) { echo "Checked"; }
                  ?>/>Gujrati
									<input type="checkbox" name="language[]" value="Marathi" <?php
                  $lag=$fetch->language;
                  $lag_arr=explode(",",$lag);
                  if(in_array("Marathi",$lag_arr)) { echo "Checked"; }
                  ?>/>Marathi
							</div>
						</div>
						<div class="col-md-6 mt-3">
								<label for="example-select" class="form-label"><h3>Gender</h3></label> <br>
								Male :<input type="radio" name="gender" value="Male" <?php if($fetch->gender=="Male"){ echo "checked"; }?>/>
								Female :<input type="radio" name="gender" value="Female" <?php if($fetch->gender=="Female"){ echo "checked"; }?>/>
								Other :<input type="radio" name="gender" value="Other" <?php if($fetch->gender=="Other"){ echo "checked"; }?>/>
					</div>
					<div class="contact_2l1 mt-3 row">
						<div class="col-md-12">
							<div class="contact_2l1i">

								<h6 class="mt-3 mb-0 text-center"> <button class="button" name="save" id="signup">Save</button></h6>

							</div>
				</form>
			</div>
		</div>

	</div>
	</div>
	</div>
</section>




<?php
include_once('partials/footer.php');
?>