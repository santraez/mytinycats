<?php
/////////////////////////////////////////////////////////
// SESSION
/////////////////////////////////////////////////////////
// ADD SESSION
if(!isset($_SESSION)) {
	session_start();
}
// CHECK LOGIN
$auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="the best cat coloring book">
	<title>MyTinyCats</title>
	<!--preload-->
	<link rel="preload" href="/build/css/app.css" as="style">
	<!--prefetch-->
	<link rel="prefetch" href="#" as="document">
	<!--fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet"> 
	<!---icon-->
	<link rel="icon" type="image/png" href="#"/>
	<!--styles-->
	<link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
	<header class="container header">
		<div class="navigation">
			<a href="/" class="navigation__logo">
				<img loading="lazy" width="200" height="300" src="/build/images/normal/icon-cat.svg" alt="cat logo">
			</a> <!--logo-->
			<div class="navigation__bar">
				<a href="/about.php" class="navigation__bar--option">about</a>
				<a href="/contact.php" class="navigation__bar--option">contact</a>
				<a href="/user/resources.php" class="navigation__bar--option">resources</a>
				<a href="/user/claim-nft.php" class="navigation__bar--option">claim nft</a>
				<a href="#" class="navigation__bar--option">store</a>
			</div> <!--bar-->
		</div> <!--navigation-->
		<div class="user-option">
			<?php if($auth): ?>
			<button
				class="user-option__button-setting"
				onclick="location.href='/user/profile.php'">
				*
			</button>
			<button
				class="user-option__button-light"
				onclick="location.href='/logout.php'">
				log out
			</button>
			<?php endif; ?>
			<?php if(!$auth): ?>
			<button
				class="user-option__button-light"
				onclick="location.href='/login.php'">
					log in
			</button>
			<button
				class="user-option__button-dark"
				onclick="location.href='/signup.php'">
					sign up
			</button>
			<?php endif; ?>
		</div> <!--user-option-->
	</header> <!--header-->