<ul class="category-list">
								<li>
										<a href="newscategory.php?category=Sport">Sport
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Sport'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
								
									<li>
										<a href="newscategory.php?category=Politics">Politics
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Politics'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									
									<li>
										<a href="newscategory.php?category=Entertainment">Entertainment
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Entertainment'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Education">Education
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Education'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Fashion">Fashion
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Fashion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Technology">Technology
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Technology'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Lifestyle">Lifestyle
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Lifestyle'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									
									<li>
										<a href="newscategory.php?category=Business">Business
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Business'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									
									<li>
										<a href="newscategory.php?category=Religion">Religion
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Religion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="newscategory.php?category=Trending Video">Trending Video
										<?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Trending Video'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
								</ul>