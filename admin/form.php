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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="col_6">Admin Form</h2>
      </div>
      <div class="form_1 row">
	   <div class="col-md-8">
	    <div class="form_1l  row">
		 <div class="col-md-12">
		   <input style="font-size:22px;" class="form-control" placeholder="Add Title" type="text">
		 </div>
		</div>
		<div class="card mt-3">
          <div class="card-header">
             <h5>BASIC FORM</h5>
          </div>
          <div class="card-body">

             <div class="form_1l  row">
		 <div class="col-md-12">
		   <input class="form-control" placeholder="Name" type="text">
		 </div>
		</div>
		     <div class="form_1l mt-3 row">
		 <div class="col-md-12">
		   <input class="form-control" placeholder="Email" type="text">
		 </div>
		</div>
		<div class="form_1l mt-3 row">
		 <div class="col-md-6">
		   <input class="form-control" placeholder="Email" type="text">
		 </div>
		 <div class="col-md-6">
		   <input class="form-control" placeholder="Email" type="text">
		 </div>
		</div>
		<div class="form_1l mt-3 row">
		 <div class="col-md-6">
		   <select class="form-select" aria-label="Default select example">
			  <option selected>Open this select menu</option>
			  <option value="1">One</option>
			  <option value="2">Two</option>
			  <option value="3">Three</option>
           </select>
		 </div>
		 <div class="col-md-6">
		   <select class="form-select" aria-label="Default select example">
			  <option selected>Open this select menu</option>
			  <option value="1">One</option>
			  <option value="2">Two</option>
			  <option value="3">Three</option>
           </select>
		 </div>
		</div>
		<div class="form_1l mt-3 row">
		 <div class="col-md-12">
		   <div class="input-group">
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
		 </div>
		</div>
		
		<div class="form_1l mt-3 row">
		 <div class="col-md-12">
		   <div class="input-group">
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
		 </div>
		</div>
          </div>
      </div>
	  
	    
		<div class="card mt-3">
          <div class="card-header">
             <h5>BASIC FORM</h5>
          </div>
          <div class="card-body">
			<div class="form_1l mt-3 row">
			<div class="col-md-6">
			<div class="input-group input-group-merge">
			<input type="password" id="password" class="form-control" placeholder="Enter your password">
			<div class="input-group-text" data-password="false">
			<span><i class="fa fa-eye"></i></span>
			</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="input-group">
			<label class="input-group-text" for="inputGroupFile01">Upload</label>
			<input type="file" class="form-control" id="inputGroupFile01">
			</div>
			</div>
			</div>
			
			<div class="form_1l mt-3 row">
			<div class="col-md-6">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">
			Default checkbox
			</label>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
			<label class="form-check-label" for="flexCheckChecked">
			Checked checkbox
			</label>
			</div>
			</div>
			</div>
			
			<div class="form_1l mt-3 row">
			<div class="col-md-6">
			<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
			<label class="form-check-label" for="flexRadioDefault1">
			Default radio
			</label>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
			<label class="form-check-label" for="flexRadioDefault2">
			Default checked radio
			</label>
			</div>
			</div>
			</div>
			
			<div class="form_1l mt-3 row">
			<div class="col-md-6">
			<label for="customRange1" class="form-label">Example range</label>
			<input type="range" class="form-range" id="customRange1">
			</div>
			<div class="col-md-6">
			<label for="disabledRange" class="form-label">Disabled range</label>
			<input type="range" class="form-range" id="disabledRange" disabled>
			</div>
			</div>
			
			<div class="form_1l mt-3 row">
			<div class="col-md-6">
			<div class="input-group ">
			<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">@example.com</span>
			</div>
			</div>
			<div class="col-md-6">
			<div class="input-group">
			<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
			<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Action</a></li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Separated link</a></li>
			</ul>
			<input type="text" class="form-control" aria-label="Text input with dropdown button">
			</div>
			</div>
			</div>
			
			<div class="form_1l mt-3 row">
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			</div>
		  </div>
      </div>
		

	   </div>
	   <div class="col-md-4">
	    <div class="form_1r">
		  <div class="accordion" id="accordionExample">
           <div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
			  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<span class="text-black">Publish</span>
			  </button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			  <div class="accordion-body publish_box_m">
			    <ul class="publish_box">
				 <li class="d-inline-block"><a href="#">Save Draft</a></li>
				 <li class="d-inline-block float-end"><a href="#">Preview</a></li>
				</ul>
				<h6><i class="fa fa-eye mr-5 colo_3"></i> Status: <span class="text-black">Draft</span> <a href="#">Edit</a></h6>
				<h6><i class="fa fa-eye mr-5 colo_3"></i> Visibility: <span class="text-black">Public</span> <a href="#">Edit</a></h6>
				<h6><i class="fa fa-calendar mr-5 colo_3"></i> Publish: <span class="text-black">Immediately</span> <a href="#">Edit</a></h6>
				<h6><i class="fa fa-eye mr-5 colo_3"></i> <a href="#">Readability:</a> <span class="text-black">Not available</span> </h6>
				<h6 class="mb-0"><i class="fa fa-eye mr-5 colo_3"></i> <a href="#">SEO:</a> <span class="text-black">Not available</span> </h6>
			  </div>
			</div>
         </div>
		   <div class="publish_comment">
		     <h6 class="mb-0"><a href="#">Publish</a></h6>
		   </div>
         </div>
		</div>
		<div class="form_1r mt-3">
		  <div class="accordion" id="accordionExample1">
           <div class="accordion-item">
			<h2 class="accordion-header" id="headingOne1">
			  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
				<span class="text-black">Tags</span>
			  </button>
			</h2>
			<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
			  <div class="accordion-body">
			    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>
		       <p>Separate Tags With Commas </p>
			   
			   <p class="mb-0"><a href="#">Separate Tags With Commas</a> </p>
			  </div>
			</div>
         </div>
         </div>
		</div>
		<div class="form_1r mt-3">
		  <div class="accordion" id="accordionExample2">
           <div class="accordion-item">
			<h2 class="accordion-header" id="headingOne2">
			  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
				<span class="text-black">Categories</span>
			  </button>
			</h2>
			<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
			  <div class="accordion-body">
			    <div class="bd-example">
  <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	    <ul class="m-0 p-0" style="list-style:none;">
		 <li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		</ul>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <ul class="m-0 p-0" style="list-style:none;">
		 <li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Second checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		</ul>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <ul class="m-0 p-0" style="list-style:none;">
		 <li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Third checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		<li>
		 <div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Default checkbox
		</label>
		</div>
		  <ul style="list-style:none;">
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Other checkbox
		</label>
		</div></li>
		   <li><div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
		Inner checkbox
		</label>
		</div></li>
		  </ul>
		</li>
		</ul>
    </div>
  </div>
  <p class="mb-0"><a href="#">Separate Tags With Commas</a> </p>
</div>
			  </div>
			</div>
         </div>
         </div>
		</div>
		<div class="form_1r mt-3">
		  <div class="accordion" id="accordionExample3">
           <div class="accordion-item">
			<h2 class="accordion-header" id="headingOne3">
			  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne">
				<span class="text-black">Attributes</span>
			  </button>
			</h2>
			<div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
			  <div class="accordion-body">
	           <h6>Order</h6>
			   <input class="form-control" placeholder="0" type="text">
			  </div>
			</div>
         </div>
         </div>
		</div>
		<div class="form_1r mt-3 mb-3">
		  <div class="accordion" id="accordionExample4">
           <div class="accordion-item">
			<h2 class="accordion-header" id="headingOne4">
			  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
				<span class="text-black">Featured Image</span>
			  </button>
			</h2>
			<div id="collapseOne4" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
			  <div class="accordion-body">
	           <p class="mb-0"><a href="#">Set Featured Image</a> </p>
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


    <script src="js/bootstrap.bundle.min.js" ></script>

      </script><script src="js/global.js"></script>
  

</body></html>