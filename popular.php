<?php
include_once('partials/header.php');
?>

<?php
include_once('partials/navbar.php');
include_once('partials/limit_words.php');
?>

<section id="center" class="center_o pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Popular</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0 col_red"><a href="home">Home</a> <span class="me-2 ms-2 text-light"><i class="fa fa-caret-right align-middle"></i></span> Popular</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="serv_pg" class="pt-4 pb-4 bg_grey">
<section id="upcome" class="pt-4 pb-5">
    <div class="container">
			 <div class="row trend_2 ">
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="trend_2i row">
                            <?php
                            if (is_array($popular) && !empty($popular)) {
                                foreach ($popular as $i => $val) {
                            ?>
                            <div class="col-md-3 col-sm-6 mb-4"> <!-- Use col-md-4 to display 3 cards per row -->
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid mb-3">
                                            <figure class="effect-jazz mb-0">
                                                <a href="show?videos=<?php echo $val->id; ?>">
                                                    <img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>" 
                                                         height="250px" class="w-100" alt="img25">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                        <span class="fs-1">
                                            <a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="trend_2ilast bg_grey p-3 clearfix">
                                    <h5><a class="col_red" href="#"><?php echo limit_words($val->title, 3); ?></a></h5>
                                    <p class="mb-2"><?php echo limit_words($val->sort_desc, 10); ?></p>
                                    <span class="col_red">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <p class="mb-0">1 Views</p>
                                </div>
                            </div>
                            <?php
                                }
                            } else {
                                echo "No videos available.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>




<?php
include_once('partials/footer.php');
?>