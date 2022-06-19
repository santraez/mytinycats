<?php include
"includes/templates/noAMPstart.php";
"includes/templates/navbar-default.php";
"includes/templates/navlog-default.php";
?>

<section class="container about-hero">
  <div class="about-hero__image">
    <div class="about-hero__image--up">
      <picture>
        <source srcset="build/img/normal/.avif" type="image/avif">
        <source srcset="build/img/normal/.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cat painting">
      </picture>
    </div>
    <div class="about-hero__image--down"></div>
	</div> <!--image-->
	<div class="about-hero__content">
    <h2>Lorem, ipsum dolor.</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime dolor doloribus eius quam itaque.</p>
	</div> <!--content-->
</section> <!--about-hero-->

<section class="container about-action">
  <div class="about-action__content">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime dolor doloribus eius quam itaque.</p>
	</div> <!--content-->
  <div class="about-action__button">
    <button
			onclick="location.href='/login.php'">
				store
		</button>
	</div> <!--button-->
</section> <!--about-action-->

<section class="container about-offer">
  <div class="container about-offer--down">
    <picture>
      <source srcset="build/img/normal/.avif" type="image/avif">
      <source srcset="build/img/normal/.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="coloring book">
    </picture>
  </div>
  <p>+</p>
  <div class="container about-offer--up">
    <picture>
      <source srcset="build/img/normal/.avif" type="image/avif">
      <source srcset="build/img/normal/.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="nft banner">
    </picture>
  </div>
  <p>+</p>
  <div class="container about-offer--down">
    <picture>
      <source srcset="build/img/normal/.avif" type="image/avif">
      <source srcset="build/img/normal/.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cupon image">
    </picture>
  </div>
</section> <!--about-offer-->

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

<?php include 
"includes/templates/noAMPend.php"; 
?>