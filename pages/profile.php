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


<!-- <section id="contact" class="pt-4 pb-4 bg_grey">
	<div class="container-xl">

		<div class="row contact_2 mt-4">

			<div class="col-md-12">
            <main>
      <div class="container-fluid px-0">
        <div class="mx-auto tm-content-container">
        <div class="mx-auto tm-content-container mt-4 px-3 mb-3">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-page-title mb-5 tm-text-primary text-center">My Profile</h2>
            </div>
          </div>
          <div class="row">
            <div class="offset-lg-3 col-lg-6 mb-5 pt-3">
				<div class="row">
                    
					<div class="col-lg-6">
						<img class="mr-4 rounded-circle" height="250px" width="100%" src="./admin/upload/users/<?php echo $fetch->img; ?>" alt="Generic placeholder image">
					</div>
					<div class="col-lg-6">
						<h1>Name : <?php echo $fetch->full_name; ?></h1><br>
						<p>Email : <?php echo $fetch->username; ?></p>
						<p>Gender : <?php echo $fetch->gender; ?></p>
						<p>Launguges : <?php echo $fetch->language; ?></p>
						<a href="edit_profile?eprofile=<?php echo $fetch->id; ?>" class="btn btn-primary">Edit</a>
					</div>
                   
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
			</div>
		</div>

	</div>
	</div>
	</div>
</section> -->

<div class="col-md-12 col-12">
	<div class="trend_1r text-center">
		<h6 class="mb-0 mt-4"><a class="button"> MY PROFILE </a></h6>
	</div>
</div>
<div class="play2 row mt-4 mb-5">
	<div class="col-md-4 col-12 p-0">
		<div class="play2l">
			<div class="grid clearfix">
				<figure class="effect-jazz mb-0">
					<a href="#"><img class="w-100" height="476" src="./admin/upload/users/<?php echo $fetch->img; ?>" alt="Generic placeholder image"></a>

				</figure>
			</div>
		</div>
	</div>
	<div class="col-md-8 p-0">
		<div class="play2r  bg_grey p-4">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12 text-start mt-5">
				<h5><span class="col_red">Name :</span>&nbsp; <?php echo $fetch->full_name; ?><br></h5>
			
				</div>
				<div class="col-md-12 col-12 text-start mt-5">
				<h5><span class="col_red">Email :</span>&nbsp; <?php echo $fetch->username; ?><br></h5>
			
				</div>
				<div class="col-md-12 col-12 text-start mt-5">
				<h5><span class="col_red">Gender :</span>&nbsp; <?php echo $fetch->gender; ?><br></h5>
			
				</div>
				<div class="col-md-12 col-12 text-start mt-5">
				<h5><span class="col_red">Launguges :</span>&nbsp; <?php echo $fetch->language; ?><br></h5>
			
				</div>
				<div class="col-md-12 text-center mt-5 mb-4">
				<a href="edit_profile?eprofile=<?php echo $fetch->id; ?>" class="btn btn text-white bg_red rounded-0 border-0" type="button">
				Edit</a>
				</div>
			</div>
		</div>

		</di>
	</dv>

</div>
</div>
</div>
</div>




<?php
include_once('partials/footer.php');
?>