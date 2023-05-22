<div class="sidebar">
							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li >
										<a href="#option1" data-toggle="tab">SPORTS</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">TECH</a>
									</li>
									<li>
										<a href="#option3" data-toggle="tab">Religion</a>
									</li>
								</ul>

								<div class="tab-content">
								<div class="tab-pane active" id="option1">
										<ul class="list-posts">

                                        <?php
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 0, 6";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
											<li>
                                            <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""></a>
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
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Technology' ORDER BY `id` DESC LIMIT 0, 6";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
											<li>
                                            <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""></a>
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
									<div class="tab-pane" id="option3">
										<ul class="list-posts">

                                        <?php
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Religion' ORDER BY `id` DESC LIMIT 0, 6";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
											<li>
                                            <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>" alt=""></a>
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
								</div>
							</div>

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Featured Posts</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
                                    <?php
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM newsupdate ORDER BY `id` DESC LIMIT 0, 6";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
										<li>
											<div class="news-post image-post2">
												<div class="post-gallery">
												<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage']; ?>"><a>
													<div class="hover-box">
														<div class="inner-hover">
                                                        <h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['category']; ?></a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
																<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['postedby']; ?></a></li>
																<li><i class="fa fa-eye"></i><?php echo $row['viewcount']; ?></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
<?php }} ?>
									</ul>
								</div>
</div>
<div class="widget categories-widget">
								<div class="title-section">
									<h1><span>News Category</span></h1>
								</div>
								<?php include('sidecategory.php');?>
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