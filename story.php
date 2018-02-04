<?php require 'header.php'; ?>
<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$id2 = explode('/', $uri_path);
$results = mysqli_query($con, "SELECT * FROM tekst WHERE id='$id2[2]'");
while ($row = mysqli_fetch_array($results)) {
	$title = $row['title'];
	$description = $row['rte'];
	$image = $row['slika_large'];
	$date = $row['date'];
	$kategorija = $row['type'];
	$youtube = $row['youtube'];
	echo '<div class="breadcrumb-container">
	<div class="container">
	<ol class="breadcrumb">
	<li><i class="fa fa-home pr-10"></i><a href="/">Повеќе</a></li>
	<li class="active">' . $title . '</li>
	</ol>
	</div>
	</div>
	<!-- breadcrumb end -->
	<!-- main-container start -->
	<!-- ================ -->
	<section class="main-container">
	<div class="container">
	<div class="row">
	<!-- main start -->
	<!-- ================ -->
	<div class="main col-md-12">
	<!-- page-title start -->
	<!-- ================ -->
	<h1 class="page-title">' . $title . '</h1>
	<!-- page-title end -->
	<!-- blogpost start -->
	<!-- ================ -->
	<article class="blogpost full">
	<header>
	<div class="post-info">
	<span class="post-date">
	<i class="icon-calendar"></i>
	<span class="month">' . $time . '</span>
	</span>
	<span class="submitted"><i class="icon-user-1"></i> by <a href="#">Administrator</a></span>
	</div>
	</header>';
	require 'gelerija.php';
	echo '<div class="blogpost-content">';
	echo '<p>' . $description . '</p>';
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$id2 = explode('/', $uri_path);
	$sql = mysqli_query($con, "SELECT * FROM tekst WHERE id='$id2[2]'");
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	while ($row = mysqli_fetch_array($sql)) {
		echo '<div class="clearfix">';
		if (isset($row['youtube']) && $row['youtube'] != NULL) {
			echo '<p class="col-md-12 col-lg-12 col-xs-12 col-sm-12"style="text-align: center;" class="white float-left"><iframe width="auto" height="auto" src="//www.youtube.com/embed/' . $row['youtube'] . '" frameborder="0" allowfullscreen></iframe></p> ';
		}
	}
	echo '</div>';
	echo'<div>';

	echo'<div class="divider divider-dotted"><!-- divider --></div>';
	echo'

	<div class="social">
	<div class="fb"><div class="fb-share-button" data-href="http://tropical.mk/story/' . $id . '/" data-layout="button_count"></div></div>';
	echo '<div class="twit"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tropical.mk/story/' . $id . '/" data-via="zaebalovek">Tweet</a></div>';
	echo '<div class="gplus"><div class="g-plus" data-action="share" data-annotation="bubble" data-href="http://tropical.mk/story/' . $id . '/"></div></div>
	</div>

	</article>
	</div>';
	$query = mysqli_query($con, "UPDATE tekst SET views=views+1 WHERE id='$id'");
	mysqli_fetch_array($query);
}
?>

<!-- main end -->
</div>
</div>
</section>
<section class="section dark-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">

				</div>
			</div>
		</div>
	</div>
</section>
<?php

require 'footer.php'; ?>