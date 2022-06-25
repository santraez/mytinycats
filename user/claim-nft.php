<?php
include "../includes/templates/header.php";
?>

<section class="container claim-nft">
  <div class="claim-nft__images">
    <picture>
      <source srcset="build/img/normal/.avif" type="image/avif">
      <source srcset="build/img/normal/.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="nft banner">
    </picture>
    <p>+</p>
    <picture>
      <source srcset="build/img/normal/.avif" type="image/avif">
      <source srcset="build/img/normal/.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/normal/.jpg" alt="cupon image">
    </picture>
  </div> <!--images-->
  <div class="claim-nft__box">
    <h3 class="claim-nft-title">Claim your NFT</h3>
    <div class="claim-nft-data">
      <div class="claim-nft-data__up">
        <form class="claim-nft-form" method="post" action="">
          <label for="" class="claim-nft-form__label">Purchase ID</label>
          <input
            type="text"
            id=""
            name=""
            class="claim-nft-form__input"
            placeholder=""
            value=""
          >
          <label for="" class="claim-nft-form__label">Collection</label>
          <input
            type="text"
            id=""
            name=""
            class="claim-nft-form__input"
            placeholder=""
            value=""
          >
          <input 
            type="submit"
            value="Submit"
            class="claim-nft-form__submit"     
          >
        </form>
      </div> <!--up-->
      <div class="claim-nft-data__down"></div>
    </div> <!--data-->
    <p class="claim-nft-text">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
  </div> <!--box-->
</section> <!--claim-nft-->

<?php
include "../includes/templates/footer.php"; 
?>