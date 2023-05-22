<?php
include('blogger_conn.php');
?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/default/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:25:54 GMT -->
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "fe60f37f-ae7b-4a54-8e87-e28d00a55af3",
    });
  });
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8891299815748050"
     crossorigin="anonymous"></script>
<head>
	<title>EASYNEWS|| News Platform</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="The Insider - Its all about Facts, News and Gists!.. Business, Tech, Sports, Entertainment & Arts, Election, Politics, Crime, Southwest, National, Opinion, Editorial, Education, Religion, Health, Foreign, Business, Video, Nigeria, Wetin Dey, Wetin Dey Inc., Wetin Dey App, Wetin Dey Code Academy" />

	<meta name="description" content="The Insider | Its all about Facts, News and Gists!..." />
	<meta property="og:title" content="The Insider | Its all about Facts, News and Gists!">
	<meta property="og:site_name" content="theinsiderng.com">
	<meta property="og:description" content="The Insider || News">
	<meta property="og:image" itemprop="image" content="http://theinsiderng.com/icon.png">
	<meta property="og:type" content="theinsiderng.com" />
	<meta property="og:updated_time" content="<?php echo date("d/F/Y"); ?>" />
	<meta property="og:url" content="theinsderng.com">

	<meta name="twitter:title" content="The Insider || News">
	<meta name="twitter:site" content="@theinsiderngcom" />
	<meta name="twitter:image" content="http://theinsderng.com/icon.png">
	<meta name="twitter:card" content="summary_large_image">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="shortcut icon" href="images/fav.fw.png" type="image/x-icon">

</head>



<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=702889139821738&autoLogAppEvents=1" nonce="87rSJL6E"></script>
<body class="boxed">

	<!-- Container -->
	<div id="container">

		<?php 
        include("navmenu.php");
        ?>

		<!-- heading-news-section2
			================================================== -->
		<section class="heading-news2" >

			<div class="container">

				<div class="ticker-news-box">
					<span class="breaking-news">Latest News</span>
					<ul id="js-news">
                    <?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate ORDER BY `id` DESC LIMIT 0, 15";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
						<li class="news-item"><span class="time-news"><?php echo $row['newDate']; ?></span> &nbsp;<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></li>
                        <?php
                }
            }
            ?>
					</ul>
				</div>

				<div class="iso-call heading-news-box">
					<div class="image-slider snd-size">
						<span class="top-stories">TOP STORIES</span>
						<ul class="bxslider">
                        <?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate ORDER BY `id` DESC LIMIT 0, 10";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
							<li>
								<div class="news-post image-post">
                                <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""></a>
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post sport" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
												<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
												<li><i class="fa fa-eye"></i><?php echo $row['postedby']; ?></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
                            <?php
                }
            }
            ?>

						</ul>
					</div>

                    <?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='Business' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
					<div class="news-post image-post default-size">
                    <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""></a>
						<div class="hover-box">
							<div class="inner-hover">
											<a class="category-post travel" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
								<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
									<li><i class="fa fa-eye"></i><?php echo $row['postedby']; ?></li>
								</ul>

							</div>
						</div>
					</div>

                    <?php
                }
            }
            ?>



							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>
							<!-- End google addsense -->

							<!-- grid-box -->
							<!-- <div class="grid-box">

								<div class="title-section">
									<h1><span class="world">News in Video</span></h1>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video3.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Suspendisse urna.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video4.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Morbi in sem quis dui placerat ornare.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div> -->
							<!-- End grid-box -->

							

							<!-- pagination box -->
							<!-- <div class="pagination-box">
								<ul class="pagination-list">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">9</a></li>
									<li><a href="#">Next</a></li>
								</ul>
								<p>Page 1 of 9</p>
							</div> -->
							<!-- End Pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
<?php include('sideshows.php'); ?>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer
			================================================== -->
            <?php include('footer.php');?>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine/default/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:26:07 GMT -->
</html>