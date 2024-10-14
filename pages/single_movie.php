<?php
include_once('partials/header.php');
?>

<?php
include_once('partials/navbar.php');
?>


					<?php
						if (is_array($videos) && !empty($videos)) {
							foreach ($videos as $i => $val) {
								if ($i < 1) {
						?>
						
					
						
				
						<div class="play2 row mt-4">
    <div class="col-md-4 p-0">
        <div class="play2l">
            <div class="grid clearfix">
                <figure class="effect-jazz mb-0">
                    <a href="#"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>" height="515" class="w-100" alt="abc"></a>
                </figure>
            </div>
        </div>
    </div>
    <div class="col-md-8 p-0">
        <div class="play2r bg_grey p-4">
            <h5><span class="col_red">MOVIE :</span>&nbsp; <?php echo $val->title; ?> &nbsp;<span class="col_red"> </h5>
            <h5 class="mt-3">Thriller</h5>
            <hr class="line">
            <p class="mt-3"><?php echo $val->sort_desc; ?></p>
            <div class="play2ri row mt-4">
                <div class="col-md-6">
                    <div class="play2ril">
                        <h6 class="fw-normal">
                            Running Time: <span class="pull-right"><?php echo $val->duration; ?></span>
                        </h6>
                        <hr class="hr_1">
                        <h6 class="fw-normal">
                            Genre: <span class="pull-right"><?php echo $val->genres; ?></span>
                        </h6>
                        <hr class="hr_1">
                        <h6 class="fw-normal">
                            Director: <span class="pull-right"><?php echo $val->writers; ?></span>
                        </h6>
                        <hr class="hr_1">
                        <h6 class="fw-normal">
                            Stars: <span class="pull-right"><?php echo $val->cast; ?></span>
                        </h6>
                        <hr class="hr_1">
                        <h6 class="fw-normal">
                            Release Date: <span class="pull-right"><?php echo $val->release_year; ?></span>
                        </h6>
                        <hr class="hr_1 mb-0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="play2rir">
                        <h6 class="fw-normal">Imdb - <?php echo $val->rating; ?></h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $val->imdb_rating * 10; ?>%;" aria-valuenow="<?php echo $val->imdb_rating * 10; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="fw-normal mt-3">Semper - 7.3</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 73%;" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="fw-normal mt-3">Dapibus - 9.0</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="fw-normal mt-3">Ipsum - 8.3</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="fw-normal mt-3">Lorem - 7.9</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <?php
								}
							}}
						 else {
							echo "No videos available.";
						}

						?>

<!-- <section id="stream" class="pb-5 pt-4">
	<div class="container">
		<div class="row trend_1">
			<div class="col-md-6 col-6">
				<div class="trend_1l">
					<h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Movie <span class="col_red">Streaming Services</span></h4>
				</div>
			</div>
			<div class="col-md-6 col-6">
				<div class="trend_1r text-end">
					<h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
				</div>
			</div>
		</div>
		<div class="row trend_2 mt-4">
			<div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="trend_2i row">
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/4.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/5.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/6.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/7.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/8.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="trend_2i row">
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/9.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/10.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/11.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/4.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="trend_2im clearfix position-relative">
									<div class="trend_2im1 clearfix">
										<div class="grid">
											<figure class="effect-jazz mb-0">
												<a href="#"><img src="img/5.jpg" class="w-100" alt="img25"></a>
											</figure>
										</div>
									</div>
									<div class="trend_2im2 clearfix  position-absolute w-100 top-0">
										<h5><a class="col_red" href="#">Semper</a></h5>
										<span class="col_red">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<p class="mb-0">2 Views</p>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</section> -->

<?php
include_once('partials/footer.php');
?>