<!DOCTYPE html>
<!--[if lt IE 7]>
	<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>
		<html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!-->
		<html class="no-js"> <!--<![endif]-->
		<?php
		$id = (isset($_GET['id']) ? $_GET['id'] : '');
		$dbquery = mysqli_query($con, "SELECT * FROM tekst WHERE id = '$id'");
		$row = mysqli_fetch_array($dbquery);
		$title = $row['title'];
		$image = $row['slika'];
		$id = $row['id'];
		$description = $row['rte'];
		$description = strip_tags($description);
		$getpage = $_SERVER['PHP_SELF'];
		if ($getpage == "/index.php" || $getpage == "/") {
			echo '
			<html lang="mk">
			<meta charset="utf-8">
			
			<meta name="robots" content="index, follow">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name=viewport content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link type="text/plain" rel="author" href="http://tropical.mk/humans.txt" />
			<meta property="og:title" content="Travel Agency Tropical - Dream becomes reality“" />
			<meta property="article:author" content="https://www.facebook.com/Sefot" />
			<meta property="og:site_name" content="Travel Agency Tropical - Dream becomes reality“" />
			<meta property="fb:app_id" content="1831061740509386" />
			<meta name="google-site-verification" content="0fUC-WPpLNUyZNYnB4M7MIn2znhMtlzdqN1dI-96f48" />
			<meta property="og:type" content="article" />
			<meta property="og:image" content="http://tropical.mk/images/logo.png"/>
			<meta property="article:tag" content="туристичка агенција, turisticka agencija, turisticki agencii,patuvanje,патување,zimuvanje,зимување,avtobski prevoz,avionski bileti, odmor, одмор, hotel, хотел, spa, спа, rent-a-car, аранжмани, booking" />
			<meta property="og:description" content="Travel Agency Tropical - Dream becomes reality">
			<meta name="description" content="Travel Agency Tropical - Dream becomes reality"/>
			<meta name="keywords"  content="туристичка агенција,turisticka agencija,turisticki agencii,patuvanje,патување,zimuvanje,зимување,avtobski prevoz,avionski bileti,odmor,одмор,hotel,хотел,spa,спа,rent-a-car,аранжмани,booking" />
			<meta name="author" content="Zoran Shefot Bogoevski">
			<link rel="publisher" href="https://plus.google.com/115524501745043744262">
			<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
			<link rel="manifest" href="/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">';
		}
		else {
			echo '<!-- Open Graph data -->
			<meta name=viewport content="width=device-width, initial-scale=1">
			<html lang="mk">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link type="text/plain" rel="author" href="http://tropical.mk/humans.txt" />
			<meta name="google-site-verification" content="0fUC-WPpLNUyZNYnB4M7MIn2znhMtlzdqN1dI-96f48" />
			<meta property="og:title" content="' . $title . '" />
			<meta property="og:url" content="http://tropical.mk/story/' . $id . '/" />
			<meta property="og:image" content="http://dev.tropical.mk/' . $image . '" />
			<meta property="og:description"content="' . $description . '">
			<meta property="fb:app_id" content="1831061740509386" />
			<meta name="author" content="Zoran Shefot Bogoevski">
			<meta name="description" content="' . $title . '"/>
			<!-- Schema.org markup for Google+ -->
			<meta itemprop="name" content="' . $title . '">
			<meta itemprop="description" content="">
			<meta itemprop="image" content="http://dev.tropical.mk/' . $image . '">
			<!-- Twitter Card data -->
			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:site" content="@zaebalovek">
			<meta name="twitter:title" content="' . $title . '">
			<meta name="twitter:description" content="' . $description . '">
			<meta name="twitter:creator" content="@zaebalovek">
			<meta name="twitter:image" content="http://dev.tropical.mk/' . $image . '">
			<meta name="author" content="Zoran Shefot Bogoevski">
			<link rel="publisher" href="https://plus.google.com/115524501745043744262">
			<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
			<link rel="manifest" href="/images/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			';
		}
		?>