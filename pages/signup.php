<?php
if(isset($_SESSION['uid']))
{
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

<section class="vh-100 gradient-custom ">
        <div class="container py-5 h-100 ">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration bg-dark text-light" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration Form</h3>
                  <span class="float-center text-13 text-center normal mt-1">Have an account? <a class="colo-4 text-center" href="login.php">Login</a></span>
                  
                  <form action="#" method="post" enctype="multipart/form-data" onsubmit="return reg_form(this)">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="firstName" name="full_name" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">Full Name</label>
                          <span id="msg1" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                          <br>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div data-mdb-input-init class="form-outline">
                          <input type="email" name="username" id="emailAddress" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                          <span id="msg2" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                        </div>
                      </div>
                      <div class="col-md-12 pe-5">
                        <input class="form-control form-control-lg " name="img" id="formFileLg" type="file" />
                        <div class="small text-muted mt-2 text-muted">Upload your profile Image</div>
                        <span id="msg3" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div data-mdb-input-init class="form-outline datepicker w-100">
                            <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <span id="msg4" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <h6 class="mb-2 pb-1">Gender: </h6>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input " type="radio" name="gender" id="femaleGender" value="Female" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input " type="radio" name="gender" id="maleGender" value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input " type="radio" name="gender" id="otherGender" value="Other" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                        <span id="msg5" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" name="pass" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">Password</label>
                            <span id="msg6" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" name="c_pass" id="form3Example4cdg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                            <span id="msg7" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                          </div>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-12">
                        <label class="form-check-label" for="form2Example3">Languages: </label>
                        Hindi: <input class="form-check-input me-2" type="checkbox" name="language[]" value="Hindi" />
                        English: <input class="form-check-input me-2" type="checkbox" name="language[]" value="English" />
                        Gujrati: <input class="form-check-input me-2" type="checkbox" name="language[]" value="Gujrati" />
                        Marathi: <input class="form-check-input me-2" type="checkbox" name="language[]" value="Marathi" />
                        <span id="msg8" align="center" style="color:#FF0000; text-transform:capitalize"></span>
                      </div>
                    </div>
      
                    <div class="mt-4 pt-2">
                      <button data-mdb-ripple-init class="btn btn-primary btn-lg" name="signup" id="signup">Sign Up</button>
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