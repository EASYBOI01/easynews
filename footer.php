<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>Easy News is one of the best Online News Platform that brings you the latest & Trending news Happening around </p>
								<p>We are focused on bringing your adequate and Legit news to your satisfaction</p>
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 4, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<li>
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a>
										<div class="post-content">
										<a class="" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
											</ul>
										</div>	
									</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Education' ORDER BY `id` DESC LIMIT 2, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<li>
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a>
										<div class="post-content">
										<a class="" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
											</ul>
										</div>
									</li>
<?php }} ?>
<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 4, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
									<li>
									<a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a>
										<div class="post-content">
										<a class="" href="newscategory.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										<h2><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate']; ?></span></li>
											</ul>
										</div>
									</li>
<?php }} ?>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Hot Categories</h1>
								<ul class="category-list">
									<li>
										<a href="newscategory.php?category=Business">Business <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Business'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>

									<li>
										<a href="newscategory.php?category=Sport">Sport <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Sport'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Lifestyle">Lifestyle<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Lifestyle'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Fashion">Fashion <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Fashion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Technology">Technology<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Technology'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Entertainment">Entertainment <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Entertainment'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Politics">Politics <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Politics'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Education">Education <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Education'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Cover Photos</h1>
								<ul class="flickr-list">
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Politics' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Sport' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Education' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Fashion' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `newsupdate` WHERE category='Technology' ORDER BY `id` DESC LIMIT 0, 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
								<li><a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="dashboard/newscoverphoto/<?php echo $row['newscoverimage'] ?>" alt=""></a></li>
								<?php }} ?>
								</ul>
								<a <?php "href='index.php'"?> >View more photos...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2023 &copy; easyweb</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="index.php">Home</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>