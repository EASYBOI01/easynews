<?php
include('blogger_conn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['a'])) {

	$view_query = "UPDATE `newsupdate` SET viewcount=viewcount + " . 17 . " WHERE a='$_REQUEST[a]'";
	$send_viewquery = mysqli_query($conn, $view_query);


	$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE headline='$_REQUEST[a]'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$newcategory = $row['category'];
}
?>

<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/default/single-post5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:47:54 GMT -->
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
	<title><?php echo $row['headline'];?> ||EASY NEWS</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="keywords" content="EASY NEWS-..OFOFO NO DEY TIRE US... latest News and Gists!.. Business, Tech, Sports, Entertainment & Arts, Politics, Crime">

		<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.wetindeycodeacademy.com.ng/easynews">
<meta property="og:title" content="<?php echo $row['headline']; ?>">
<meta property="og:description" content="EASY NEWS-..OFOFO NO DEY TIRE US... latest News and Gists!.. Business, Tech, Sports, Entertainment & Arts, Politics, Crime">
<meta property="og:image" content="https://www.wetindeycodeacademy.com.ng/easynews/index.html/dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.wetindeycodeacademy.com.ng/easynews">
<meta property="twitter:title" content="<?php echo $row['headline']; ?>">
<meta name="twitter:site" content="@truecruisz" />
<meta property="twitter:description" content="EASY NEWS-..OFOFO NO DEY TIRE US... latest News and Gists!.. Business, Tech, Sports, Entertainment & Arts, Politics, Crime">
<meta property="twitter:image" content="https://www.wetindeycodeacademy.com.ng/easynews/index.html/dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>">

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
<body>

	<!-- Container -->
	<div id="container">

		<?php include("navmenu.php");
        ?>

		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">
		<style type="text/css">
.hea{
	text-transform: uppercase;
}
</style>
			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">Latest News</span>
					<span class="new-news">New</span>
					<ul id="js-news">
                    <?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` ORDER BY `id` DESC LIMIT 0, 15";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
						<li class="news-item"><span class="time-news"><?php echo $row['newDate']; ?></span> &nbsp;<a class="hea" <?php echo "href='news.php?a=" . $row['headline'] . "' "; ?>><?php echo $row['headline']; ?></a></li>
                        <?php
                }
            }
            ?>
					</ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">

					<div class="col-md-2 col-sm-0">

						<!-- sidebar -->
						<div class="sidebar small-sidebar">

							<div class="widget review-widget">
								<h1>Top Stories</h1>
								<ul class="review-posts-list">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` ORDER BY `id` DESC LIMIT 0, 9";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<li>
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a>
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
										<span class="date"><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></span>
										<span class="post-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
									</li>
<?php
				}
			}
?>
								</ul>
							</div>

							<!-- <div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/160x600.jpg" alt="">
								</div>
							</div> -->

							

						</div>

					</div>

					<div class="col-md-7 col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">
							<?php
								$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE a='$_REQUEST[a]'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_array($result)) {
										$newcategory = $row['category'];


								?>
<style type="text/css">
.hea{
	text-transform: uppercase;
}
</style>
								<div class="title-post">
									<h1 class="hea"><?php echo $row['headline']; ?> </h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
										<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>
										<li><a href="newscategory.php?category=<?php echo $row['category']; ?>"><i class="fa fa-tag"></i><span><?php echo $row['category']; ?></span></a></li>
										<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
									</ul>
								</div>


								<div class="share-post-box">
								<ul class="share-box">

												<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6252ea46cf1fda9e"></script>




											</ul>
								</div>

								<div class="post-gallery">
                                <img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt="">
									<span class="image-caption"><?php echo $row['coverimagephotocredit']; ?></span>
								</div>

								<div class="post-content">

									<p style="text-align: justify;"><?php echo $row['content']; ?></p>

									<p><?php echo $row['embeddedcode']; ?></p>

								</div>



								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a></li>

									</ul>
								</div>

								<?php
									}
								}
								?>



								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>Related Post</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									<?php

$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE `category`='$newcategory' ORDER BY `id` DESC LIMIT 0, 4";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
?>
										<div class="item news-post image-post3">
										<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a>
													<div class="hover-box">
													<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
														</ul>
													</div>
												</div>
										<?php
											}
										}
										?>

									</div>
								</div>
								<!-- End carousel box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> </h1>
									</div>
									<!-- begin wwww.htmlcommentbox.com -->
									<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
									<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
									<script type="text/javascript" id="hcb">
										/*<!--*/
										if (!window.hcb_user) {
											hcb_user = {};
										}(function() {
											var s = document.createElement("script"),
												l = hcb_user.PAGE || ("" + window.location).replace(/'/g, "%27"),
												h = "//www.htmlcommentbox.com";
											s.setAttribute("type", "text/javascript");
											s.setAttribute("src", h + "/jread?page=" + encodeURIComponent(l).replace("+", "%2B") + "&mod=%241%24wq1rdBcg%244baItRbaNv3yJqDXwdeSy1" + "&opts=16862&num=10&ts=1522069891681");
											if (typeof s != "undefined") document.getElementsByTagName("head")[0].appendChild(s);
										})(); /*-->*/
									</script>
									<!-- end www.htmlcommentbox.com -->
								</div>
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-md-3 col-sm-4">

					<?php include("sideshows.php"); ?>

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer
			================================================== -->
<?php include("footer.php"); ?>
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

<!-- Mirrored from nunforest.com/hotmagazine/default/single-post5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:47:57 GMT -->
</html>