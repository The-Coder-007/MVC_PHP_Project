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


<section id="contact" class="pt-4 pb-4 bg_grey">
 <div class="container-xl">
 
  <div class="row contact_2 mt-4">
  <div class="col-md-12">
    <div class="contact_2l row">
	 <div class="col-md-12 text-center">
	  <h4>Login Here</h4>
	  <span class="float-center text_13 normal mt-1">or <a class="colo_4" href="signup.php">Create an account</a></span>
	 </div> 
	</div>
    <form action="#" method="post">
	<div class="contact_2l1 mt-3 row">
	 <div class="col-md-6 col-12 col-xl-4 offset-xl-4 offset-md-3">
        
	  <div class="contact_2l1i ">
      <input class="form-control" placeholder="Email*" type="email" name="username" >
	  </div>
	 </div> 
	 
	</div>
	<div class="contact_2l1 mt-3 row">
	 <div class="col-md-6 col-12 col-xl-4 offset-xl-4 offset-md-3">
	  <div class="contact_2l1i">
	    <input class="form-control" placeholder="password*" name="pass" type="password">
	  </div>
	 </div> 
	 
	</div>
	<div class="contact_2l1 mt-3 row">
	 <div class="col-md-12">
	  <div class="contact_2l1i">
	  
		<h6 class="mt-3 mb-0 text-center " style="margin-left: 1%;"> <button class="button" type="submit" name="submit" id="">Login</button></h6>
       
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