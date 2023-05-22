<!-- Header
		    ================================================== -->
			<header class="clearfix sixth-style">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									<li>
										<span class="city-weather">Nigeria, Ondo State Akure</span>
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="24px" viewbox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
										
										</svg>
									
									</li>
										<!-- COUNTING TIMER SCRIPT	 -->
									<li><span class="time-now"> <span class="font-extra-bold m-t-xl m-b-xs" style="font-weight:bold">
                            <script language=javascript>
                                todaysDate = new Date();
                                dayarray = new
                            Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
                                "Saturday");
                            montharray = new Array("Jan", "Feb", "Mar", "Apr",
                                "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                            document.write(dayarray[todaysDate.getDay()] + ", " +
                                montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
                            if (todaysDate.getYear() <
                                1000) {
                                document.write(todaysDate.getYear() + 1900);
                            } else {
                                document.write(todaysDate.getYear());
                            }
                        </script>

                    </span> &nbsp; | &nbsp; <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
                        <script>
                            function checkTime(i) {
                                if (i < 10) {
                                    i = "0" + i;
                                }
                                return i;
                            }

                            function startTime() {
                                var today = new Date();
                                var h = today.getHours();
                                var m = today.getMinutes();
                                var s = today.getSeconds();
                                // add a zero in front of numbers<10
                                m = checkTime(m);
                                s = checkTime(s);
                                document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                                t = setTimeout(function() {
                                    startTime()
                                }, 500);
                            }
                            startTime();
                        </script>
                    </span></span></li>
									
									<li><a href="login/loginform.php">Log In</a></li>

								</ul>
							</div>	
							<!-- <div class="col-md-3">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	 -->
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
						</div>

						<div class="advertisement">
							<div class="desktop-advert">
								<span>HOT NEWS</span N>
								<img src="images/easynews2.png" alt="" height="60px">
							</div>
						
						</div>
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

								<li class="drop"><a class="home" href="index.php">HOME</a>
								
								</li>
								

								<li><a class="world" href="newscategory.php?category=Lifestyle">LIFESTYLE</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown world-dropdown">
												<div class="filter-block">
													<ul class="filter-posts">
														<li><a class="active" href="#">Lifestyle</a></li>
													
														
													</ul>
												</div>
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Lifestyle</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Lifestyle' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
															<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="travel" href="newscategory.php?category=Entertainment">ENTERTAINMENT</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

									
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Entertainment</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Entertainment' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="tech" href="newscategory.php?category=Business">BUSINESS</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

										
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Business</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Business' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>
								</li>

								
								<li><a class="sport" href="newscategory.php?category=Sport">SPORTS</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

										
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Sport</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Sport' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>
								</li>


								<li><a class="fashion" href="newscategory.php?category=Politics">POLITICS</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

										
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Politics</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Politics' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>
								</li>


								<li><a class="video" href="newscategory.php?category=Technology">TECHNOLOGY</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

										
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Technology</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Technology' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>
								</li>
								
								<li><a class="food" href="newscategory.php?category=Fashion">FASHION</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

										
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Fashion</h1>
														<div class="owl-carousel" data-num="4">
														<?php 
	$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Fashion' ORDER BY 'id' DESC LIMIT 0,7";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
														<div class="item news-post standard-post">
															<div class="post-gallery">
															<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>

															</div>
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
	<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
																</ul>
															</div>
														</div>
														<?php }} ?>
															
														</div>

											</div>
										</div>
									</div>
								</li>
								</li>
								
							</ul>
							<form class="navbar-form navbar-right" role="search" method="post" action="search.php">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header -->
	
