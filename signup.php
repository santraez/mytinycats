<?php
include "includes/templates/header.php";
?>

<section class="container signup">
  <div class="signup__content">
    <h2>Lorem, ipsum dolor.</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime dolor doloribus eius quam itaque.</p>
	</div> <!--content-->
  <div class="signup__form">
    <h3 class="signup__form--title">signup</h3>
    <div class="signup__form--container">
      <div class="signup__form-up">
        <form class="signup-up-form" method="post" action="">
          <label for="" class="signup-up-form__label">Display name</label>
          <input
            type="text"
            id=""
            name=""
            class="signup-up-form__input"
            placeholder=""
            value=""
          >
          <label for="" class="signup-up-form__label">Email</label>
          <input
            type="email"
            id=""
            name=""
            class="signup-up-form__input"
            placeholder=""
            value=""
          >
          <label for="" class="signup-up-form__label">Password</label>
          <input
            type="text"
            id=""
            name=""
            class="signup-up-form__input"
            placeholder=""
            value=""
          >
          <label for="" class="signup-up-form__label">Confirm password</label>
          <input
            type="text"
            id=""
            name=""
            class="signup-up-form__input"
            placeholder=""
            value=""
          >
          <input 
            type="submit"
            value="Submit"
            class="signup-up-form__submit"     
          >
        </form>
      </div> <!--signup__form-up-->
      <div class="signup__form-down"></div>
    </div> <!--container-->
    <p class="signup__text"></p>
  </div> <!--form-->
</section> <!--signup-->

<?php
include "includes/templates/footer.php"; 
?>