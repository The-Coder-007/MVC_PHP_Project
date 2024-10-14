<?php
function active($currect_page){
  $url_array =  explode("/", $_SERVER["REQUEST_URI"]) ; // current page url
  $url = end($url_array);  
  if($currect_page == $url){
	  echo "active"; //class name in css 
  } 
}

?>

<section id="top">
<div class="container">
 <div class="row top_1">
  <div class="col-md-3">
   <div class="top_1l pt-1">
    <h3 class="mb-0"><a class="text-white" href="home"><i class="fa fa-video-camera col_red me-1"></i> MovieHub</a></h3>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
    <div class="input-group">
				<input type="text" class="form-control bg-black" placeholder="Search Site...">
				<span class="input-group-btn">
					<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
						 Search</button>
				</span>
		</div>
   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
     <ul class="social-network social-circle mb-0">
			<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul>
   </div>
  </div>
 </div>
</div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="home"><i class="fa fa-video-camera col_red me-1"></i> Planet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item ">
          <a class="nav-link <?php active('home')?>" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php active('top_rated')?>" href="top_rated">Top Rated</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php active('upcoming')?>" href="upcoming">Upcoming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php active('popular')?>" href="popular">Popular</a>
        </li>
        
      </ul>
      <!-- This ul will push the Sign-Up and Login links to the right -->
      <ul class="navbar-nav ms-auto mb-0">
        <?php if (!empty($_SESSION["uid"])) { ?>
         
          <li class="nav-item">
            <a class="nav-link <?php active('profile')?>" href="profile">Hello <?php echo $_SESSION['full_name'];?> &nbsp; <img src="./admin/upload/users/<?php echo $_SESSION['img'];?>" width="30px" height="30px" alt="Profile"></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.php">Watchlist</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.php">Feedback</a></li>
            <li class="nav-item <?php active('user_logout')?>">
            <a class="nav-link" href="user_logout">Logout</a>
          </li>
          </ul>
        </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link <?php active('signup')?>" href="signup">Sign-Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php active('login')?>" href="login">Login</a>
          </li>
          
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>


</section>