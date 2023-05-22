<?php
include('blogger_conn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['category'])) {

	$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate WHERE category='$_REQUEST[category]'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$newcategory = $row['category'];
}
?>
<?php
           include("blogger_conn.php");
        $ip=$_SERVER['REMOTE_ADDR'];
        $device=$_SERVER['HTTP_USER_AGENT'];

		$sql="INSERT INTO visitors_ip (allvistorsip, vistorsphone) VALUES ('$ip', '$device')";
           
		mysqli_query($conn, $sql) or die (mysqli_error($conn));
		$num=mysqli_insert_id($conn);
		if(mysqli_affected_rows($conn)!=1){
		$message="error inserting record to DB";
		} 	
  ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>EASYNEWS</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='../../css.css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">
		
	<?php
	include('navmenu.php');
		?>
		
		<style type="text/css">
.hea{
	text-transform: uppercase;
}
</style>
		<!-- heading-news4-section
			================================================== -->
		<section class="heading-news4">
			<div class="container">
				
			<div class="ticker-news-box">
					<span class="breaking-news">Breaking News</span>
					<ul id="js-news">
                    <?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` ORDER BY `id` DESC LIMIT 0, 10";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)){
            ?>
			
						<li class="news-item "><span class="time-news"><?php echo $row['newDate']; ?></span> &nbsp;<a class="hea" <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></li>
                        <?php
                }
            }
            ?>
					</ul>
				</div>
			</div>
	
			<div class="heading-news-box">

<div class="owl-wrapper">
	<div class="owl-carousel" data-num="4">
	<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Business' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

	<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Education' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
				<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>


	<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Politics' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=".$row ['a']."'";?>></a>
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>	`
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>
		
		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Religion' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>
		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>
		<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
		<div class="item">
			<div class="news-post image-post4">
				<div class="post-gallery">
					<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""><a>
					<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
				</div>
				<div class="post-content">
					<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }} ?>

	</div>
</div>

</div>

</section>
		<!-- End heading-news4-section -->

	<!-- features-today-section
			================================================== -->
			<section class="features-today">
			<div class="container">

				<div class="title-section">
					<h1><span>Today's Featured</span></h1>
				</div>

				<div class="features-today-box owl-wrapper">
					<div class="owl-carousel" data-num="4">
					<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` ORDER BY `id` DESC LIMIT 8, 7";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
						<div class="item news-post standard-post">
							<div class="post-gallery">
							<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
								<a class="category-post world" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
							</div>
							<div class="post-content">
							<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
							</div>
						</div>

					<?php }} ?>
						

					</div>
				</div>

			</div>	
		</section>
		<!-- End features-today-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">

				<!-- block content -->
				<div class="block-content non-sidebar">

					<!-- google addsense -->
					<!-- <div class="advertisement">
						<div class="desktop-advert">
							<span>Advertisement</span>
							<img src="upload/addsense/728x90-white.jpg" alt="">
						</div>
					
					</div> -->
					<!-- End google addsense -->

					<!-- grid box -->
					<div class="grid-box">

						<div class="row">

							<div class="col-md-6">
								<div class="title-section">
									<h1><span class="world">Lifestyle</span></h1>
								</div>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<div class="news-post image-post2">
									<div class="post-gallery">
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										<div class="hover-box">
											<div class="inner-hover">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
								</div> <?php }} ?>

								
								<div class="row">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="col-md-6">

										<div class="item news-post standard-post">
											<div class="post-gallery">
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
											</div>
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
									<?php }} ?>

								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 3, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="col-md-6">

										<div class="item news-post standard-post">
											<div class="post-gallery">
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
											</div>
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
									<?php }} ?>
									

								</div>
							</div>

							<div class="col-md-6">
								<div class="title-section">
									<h1><span class="travel">Entertainment</span></h1>
								</div>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Entertainment' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<div class="news-post image-post2">
									<div class="post-gallery">
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										<div class="hover-box">
											<div class="inner-hover">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
								</div> <?php }} ?>

								
								<div class="row">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Entertainment' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="col-md-6">

										<div class="item news-post standard-post">
											<div class="post-gallery">
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
											</div>
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
									<?php }} ?>

								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Entertainment' ORDER BY `id` DESC LIMIT 3, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="col-md-6">

										<div class="item news-post standard-post">
											<div class="post-gallery">
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
											</div>
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
											</div>
										</div>
									</div>
									<?php }} ?>
						

								</div>
								
							</div>

						</div>

					</div>
					<!-- End grid box -->

				</div>
				<!-- End block content -->
			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- feature-video-section 
			================================================== -->
			<section class="feature-video">
			<div class="container">
				<div class="title-section white">
					<h1><span>HOT TRENDING VIDEO</span></h1>
				</div>

				<div class="features-video-box owl-wrapper">
					<div class="owl-carousel" data-num="4">
					
					<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='embeddedcode' ORDER BY `id` DESC LIMIT 0, 8";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
						<div class="item news-post video-post">
						<p><?php echo $row['embeddedcode']; ?></p>
						<h2><a class="video-link" <?php echo $row['embeddedcode']; ?>><?php echo $row['embeddedcode']; ?><i class="fa fa-play-circle-o"></i></a></h2>
							<div class="hover-box">
							<p><?php echo $row['embeddedcode']; ?></p>
															<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
								</ul>
							</div>
						</div>
					<?php }} ?>
						

					</div>
				</div>
			</div>
		</section>
		<!-- End feature-video-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 content-blocker">

						<!-- block content -->
						<div class="block-content">

							<!-- masonry box -->
							<div class="masonry-box">

								<div class="title-section">
									<h1><span>Latest Articles</span></h1>
								</div>

								<div class="latest-articles iso-call">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Technology' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="news-post standard-post3 default-size">
										<div class="post-gallery">
										<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										</div>
										<div class="post-title">
										<a class="category-post tech" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
										</div>
									</div>
<?php }} ?>
								
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Entertainment' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="news-post standard-post3 default-size">
										<div class="post-gallery">
										<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										</div>
										<div class="post-title">
										<a class="category-post tech" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
										</div>
									</div>
<?php }} ?>

<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="news-post standard-post3 default-size">
										<div class="post-gallery">
										<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										</div>
										<div class="post-title">
										<a class="category-post tech" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
										</div>
									</div>
<?php }} ?>

<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<div class="news-post standard-post3 default-size">
										<div class="post-gallery">
										<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
										</div>
										<div class="post-title">
										<a class="category-post tech" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
						<li><i class="fa fa-user"></i>by <?php echo $row['postedby']; ?></li>	
						<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
								</ul>
										</div>
									</div>
<?php }} ?>

								</div>

							</div>
							<!-- End masonry box -->

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
							<!-- End pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4 sidebar-sticky">

						<!-- sidebar -->
						<div class="sidebar theiaStickySidebar">

							<div class="widget social-widget">
								
								<!-- <ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul> -->
							</div>

							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a href="#option1" data-toggle="tab">Popular</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">Recent</a>
									</li>
							
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
											
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Education' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Politics' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>

<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Entertainment' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>

<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
										</ul>
									</div>
									<div class="tab-pane" id="option2">
										<ul class="list-posts">
										<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Business' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>

<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Religion' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 1, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
											<li>
											<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
													</ul>
												</div>
											</li>
<?php }} ?>
										</ul>										
									</div>
									<!-- <div class="tab-pane" id="option3">
										<ul class="list-posts">

											<li>
												<img src="upload/news-posts/listw4.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw1.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw3.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw2.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw5.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>										
									</div> -->
								</div>
							</div>


							<div class="widget tags-widget">

								<div class="title-section">
									<h1><span>Popular Tags</span></h1>
								</div>

								<ul class="tag-list">
									<li><a href="newscategory.php?category=Lifestyle">Lifestyle</a></li>
									<li><a href="newscategory.php?category=Fashion">Fashion</a></li>
									<li><a href="newscategory.php?category=Politics">Politics</a></li>
									<li><a href="newscategory.php?category=Sport">Sport</a></li>
									<li><a href="newscategory.php?category=Lifestyle">Business</a></li>
									<li><a href="newscategory.php?category=Entertainment">Entertainment</a></li>
									<li><a href="newscategory.php?category=Education">Education</a></li>
									<li><a href="newscategory.php?category=Technology">Technology</a></li>
									<li><a href="newscategory.php?category=Religion">Religion</a></li>
								</ul>

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
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<?php include("footer.php"); ?>

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
	<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
	<script type="text/javascript" src="js/sticky.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>

<!-- html comment box and ADD THIS -->