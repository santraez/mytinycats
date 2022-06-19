<?php include
"includes/templates/noAMPstart.php";
"includes/templates/navbar-default.php";
"includes/templates/navlog-default.php";
?>

<section class="container hero">
	<div class="hero__content">
		<div class="hero__content--text">
			<h1>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro libero exercitationem fugit cupiditate, corporis natus quidem fugiat distinctio, optio ut eos reprehenderit quo pariatur vel nostrum, nesciunt saepe odit ducimus?
			</h1>
		</div>
		<div class="hero__content--button">
			<button onclick="location.href='/user/claim-nft.php'">
				claim nft
			</button>
		</div>
	</div> <!--content-->
	<div class="hero__image">
		<picture>
			<source srcset="build/img/normal/.avif" type="image/avif">
			<source srcset="build/img/normal/.webp" type="image/webp">
			<img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cat cover">
		</picture>
	</div> <!--image-->
</section> <!--hero-->

<main class="container reel">
	<div class="reel__title">
		<h3>video cat reels</h3>
	</div> <!--title-->
	<div class="reel__content">
		<?php include "includes/templates/carousel.php"; ?>
	</div> <!--content-->
</main> <!--reel-->

<section class="container presentation">
	<div class="presentation__image">
		<picture>
			<source srcset="build/img/normal/.avif" type="image/avif">
			<source srcset="build/img/normal/.webp" type="image/webp">
			<img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cat coloring book">
		</picture>
	</div> <!--image-->
	<div class="presentation__content">
		<div class="presentation__content--text">
			<h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro libero exercitationem fugit cupiditate, corporis natus quidem fugiat distinctio, optio ut eos reprehenderit quo pariatur vel nostrum, nesciunt saepe odit ducimus?
			</h2>
		</div>
		<div class="presentation__content--button">
			<button onclick="location.href='/about.php'">
				about
			</button>
		</div>
	</div> <!--content-->
</section> <!--presentation-->

<div class="cat-banner">
	<picture>
		<source srcset="build/img/normal/.avif" type="image/avif">
		<source srcset="build/img/normal/.webp" type="image/webp">
		<img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cat banner">
	</picture>
</div> <!--cat-banner-->

<section class="container faq-container">
	<?php include "includes/templates/noAMPend.php"; ?>
</section> <!--faq-container-->

<footer class="footer">
	<div class="footer__background"></div>
	<div class="footer__buttons">
		<button onclick="location.href='/contact.php'">
			contact
		</button>
		<div class="footer__buttons--networks">
			<i></i>
			<i></i>
			<i></i>
			<i></i>
			<i></i>
		</div>
	</div>
</footer> <!--footer-->

<?php include 
"includes/templates/noAMPend.php"; 
?>