<?php include "includes/templates/noAMPstart.php"; ?>

<header class="container header">
	<div class="navigation">
		<div class="navigation__icon">
			<img loading="lazy" width="200" height="300" src="/build/images/normal/icon-cat.svg" alt="cat logo">
		</div>
		<div class="navigation__bar">
			<p class="navigation__bar--option">about</p>
			<p class="navigation__bar--option">contact</p>
			<p class="navigation__bar--option">resources</p>
			<p class="navigation__bar--option">store</p>
		</div>
	</div> <!--navigation-->
	<div class="user-option">
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
	</div> <!--user-option-->
</header> <!--header-->

<section class="container hero">
	<div class="hero__content">
		<div class="hero__content--text">
			<h1>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro libero exercitationem fugit cupiditate, corporis natus quidem fugiat distinctio, optio ut eos reprehenderit quo pariatur vel nostrum, nesciunt saepe odit ducimus?
			</h1>
		</div>
		<div class="hero__content--button">
			<button
				onclick="location.href='/'">
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
		<h3>Video Cat Reels</h3>
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
			<button
				onclick="location.href='/'">
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
		<button
			onclick="location.href='/'">
			about
		</button>
		<div class="footer__buttons--networks">
			<i></i>
			<i></i>
			<i></i>
			<i></i>
			<i></i>
		</div>
	</div> <!--buttons-->
	<div class="footer__information">
		<p>Lorem ipsum dolor sit amet</p>
	</div> <!--information-->
</footer> <!--footer-->

<?php include "includes/templates/noAMPend.php"; ?>