<?php include
"includes/templates/noAMPstart.php";
"includes/templates/navbar-default.php";
"includes/templates/navlog-login.php";
?>

<section class="container login">
  <h3 class="login__title">login</h3>
  <div class="login__container">
    <div class="login-up">
      <form class="login-up__form" method="post" action="">
        <label for="" class="login-up__form--label">Email</label>
        <input
          type="email"
          id=""
          name=""
          class="login-up__form--input"
          placeholder=""
          value=""
        >
        <label for="" class="login-up__form--label">Password</label>
        <input
          type="text"
          id=""
          name=""
          class="login-up__form--input"
          placeholder=""
          value=""
        >
        <input 
          type="submit"
          value="Submit"
          class="login-up__form--submit"     
        >
      </form>
    </div> <!--contact-up-->
    <div class="login-down"></div>
  </div>
  <p class="login__text"></p>
</section> <!--login-->

<?php include 
"includes/templates/noAMPend.php"; 
?>