<?php
include_once('partials/header.php');
?>

<?php
include_once('partials/navbar.php');
include_once('partials/limit_words.php');
?>


<section id="center" class="center_home">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<div class="carousel-inner">
			<?php
			// $videos = []; // Example initialization. Replace with your actual data retrieval logic.

			// // Sample data (Replace this with actual data fetching logic)
			// $videos = [
			//     (object) ['img' => 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg', 'title' => 'LEO', 'rating' => 4.5, 'release_year' => 2022, 'genre' => 'Action', 'description' => 'Four waves of increasingly deadly alien attacks...', 'starring' => 'Eget Nulla Semper Porta Dapibus Diam Ipsum', 'runtime' => '1h 32m'],
			//     (object) ['img' => 'https://sm.ign.com/t/ign_in/lists/t/the-10-hig/the-10-highest-grossing-marvel-movies-of-all-time_64ca.1280.jpg', 'title' => 'AVENGERS', 'rating' => 4.5, 'release_year' => 2022, 'genre' => 'Action', 'description' => 'Four waves of increasingly deadly alien attacks...', 'starring' => 'Eget Nulla Semper Porta Dapibus Diam Ipsum', 'runtime' => '1h 32m'],
			//     (object) ['img' => 'https://i.ytimg.com/vi/iHxvf86QXhA/maxresdefault.jpg', 'title' => 'DARBAAR', 'rating' => 4.5, 'release_year' => 2022, 'genre' => 'Action', 'description' => 'Four waves of increasingly deadly alien attacks...', 'starring' => 'Eget Nulla Semper Porta Dapibus Diam Ipsum', 'runtime' => '1h 32m'],
			// ];


			if (is_array($upcoming) && !empty($upcoming)) {
				foreach ($upcoming as $i => $val) {
					if ($i <= 2) {
			?>
						<div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">
							<img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>" height="600px" class="d-block w-100" alt="...">
							<div class="carousel-caption d-md-block">
								<h1 class="font_60"><?php echo $val->title; ?></h1>
								<h6 class="mt-3">
									<span class="col_red me-3">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</span>
									<?php echo $val->rating; ?> (Imdb) Year: <?php echo $val->release_year; ?>
									<a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#"><?php echo $val->genres; ?></a>
								</h6>
								<p class="mt-3" id="descrip"><?php echo $val->sort_desc; ?></p>
								<p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> <?php echo $val->rating; ?></p>
								<p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> <?php echo $val->genres; ?></p>
								<p><span class="col_red me-1 fw-bold">Runtime:</span> <?php echo $val->duration; ?></p>
								<h6 class="mt-4"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
							</div>
						</div>
			<?php
					}
				}
			} else {
				echo "No videos available.";
			}
			?>
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>


<section id="trend" class="pt-4 pb-5">
	<div class="container">
		<div class="row trend_1">
			<div class="col-md-6 col-6">
				<div class="trend_1l">
					<h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> All <span class="col_red">Movies</span></h4>
				</div>
			</div>
			<div class="col-md-6 col-6">
				<div class="trend_1r text-end">
					<h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
				</div>
			</div>
		</div>
		<div class="row trend_2 mt-4">
			<div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
					<!-- <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button> -->
				</div>
				<div class="">
					<div class="carousel-item active">
						
						<div class="trend_2i row">
							<?php
							if (is_array($videos) && !empty($videos)) {
								foreach ($videos as $i => $val) {
							?>
									<div class="col-md-3 col-6">
										<div class="trend_2im clearfix position-relative">
											<div class="trend_2im1 clearfix">
												<div class="grid mb-3">
													<figure class="effect-jazz mb-0">
													<a href="movie_details?id=<?php echo $val->id; ?>"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'img/4.jpg'; ?>" height="250px" class="w-100" alt="img25"></a>
													</figure>
												</div>
											</div>
											<div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
												<span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
											</div>
										</div>
										<div class="trend_2ilast bg_grey p-3 clearfix">
										<h5><a class="col_red" href="movie_details?id=<?php echo $val->id; ?>"><?php echo limit_words($val->title, 4); ?></a></h5>
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

<section id="upcome" class="pt-4 pb-5">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-6 col-6">
                <div class="trend_1l">
                    <h4 class="mb-0">
                        <i class="fa fa-youtube-play align-middle col_red me-1"></i> 
                        Upcoming <span class="col_red">Movies</span>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="trend_1r text-end">
                    <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
                </div>
            </div>
        </div>
        
        <div class="row trend_2 mt-4">
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="trend_2i row">
                            <?php
                            if (is_array($upcoming) && !empty($upcoming)) {
                                foreach ($upcoming as $i => $val) {
                            ?>
                            <div class="col-md-4 col-sm-6 mb-4"> <!-- Use col-md-4 to display 3 cards per row -->
                                <div class="trend_2im clearfix position-relative">
                                    <div class="trend_2im1 clearfix">
                                        <div class="grid mb-3">
                                            <figure class="effect-jazz mb-0">
                                                <a href="show?videos=<?php echo $val->id; ?>">
												<a href="movie_details?id=<?php echo $val->id; ?>"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'img/4.jpg'; ?>" height="250px" class="w-100" alt="img25"></a>
                                                         
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
                                    <h5><a class="col_red" href="#"><?php echo $val->title; ?></a></h5>
                                    <p class="mb-2"><?php echo limit_words($val->sort_desc, 11); ?></p>
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




 <!-- top 100 playlists -->
<section id="play">
	<div class="play_m clearfix">
		<div class="container">
			<!-- <div class="row trend_1">
				<div class="col-md-12">
					<div class="trend_1l">
						<h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Top <span class="col_red">10 Playlist</span></h4>
					</div>
				</div>
			</div>
			<div class="play1 row mt-4 bg_grey pt-3 pb-3">
				<div class="col-md-9">
					<div class="play1l">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="#"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>"  class="w-100" height="450" alt="abc"></a>
							</figure>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 ps-0">
					<div class="play1r">
					<?php
						if (is_array($videos) && !empty($videos)) {
							foreach ($videos as $i => $val) {
								
						?>
						<div class="play1ri">
							<div class="grid clearfix">
								<figure class="effect-jazz mb-3">
									<a href="#"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>" height="200px" class="w-100" alt="abc"></a>
								</figure>
							</div>
						</div>
						<?php
								}
							}
						 else {
							echo "No videos available.";
						}

						?>
						
					</div>
				</div>
			
			</div> -->
			<div class="play2 row mt-4">
				<div class="col-md-4 p-0">
					<div class="play2l">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="#"><img src="<?php echo !empty($val->img) ? './admin/upload/videos/' . $val->img : 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2023/10/18/leo-poster.jpg'; ?>" height="489" class="w-100" alt="abc"></a>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-md-8 p-0">
					<div class="play2r  bg_grey p-4">
						<h5><span class="col_red">BEST MOVIE OF THE MONTH :</span>&nbsp; <?php echo $val->title;?> &nbsp;<span class="col_red"><?php echo $val->genres;?></span><br>
							THEY’RE GONNA NEED MORE MEN</h5>
						<h5 class="mt-3">Thriller</h5>
						<hr class="line">
						<p class="mt-3">A humble businessman with a buried past seeks justice when his daughter is killed in an act of terrorism. A cat-and-mouse conflict ensues with a government official, whose past may hold clues to the killers' identities.</p>
						<div class="play2ri row mt-4">
							<div class="col-md-12">
								<div class="play2ril">
									<h6 class="fw-normal">
										Running Time: <span class="pull-right">1 hr 50 min</span></h6>
									<hr class="hr_1">
									<h6 class="fw-normal">
										Genre: <span class="pull-right">Action, Thriller</span></h6>
									<hr class="hr_1">
									<h6 class="fw-normal">
										Director: <span class="pull-right">Eget Nulla</span></h6>
									<hr class="hr_1">
									<h6 class="fw-normal">
										Stars: <span class="pull-right">Semp Port, Dapibus Diam</span></h6>
									<hr class="hr_1">
									<h6 class="fw-normal">
										Release Date: <span class="pull-right">2023</span></h6>
									<hr class="hr_1 mb-0">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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