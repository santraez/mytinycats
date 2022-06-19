<?php include
"includes/templates/noAMPstart.php";
"includes/templates/navbar-default.php";
"includes/templates/navlog-default.php";
?>

<section class="container contact">
  <h3 class="contact__title">contact</h3>
  <div class="contact__container">
    <div class="contact-up">
      <form class="contact-up__form" method="post" action="">
        <label for="" class="contact-up__form--label">Email</label>
        <input
          type="email"
          id=""
          name=""
          class="contact-up__form--input"
          placeholder=""
          value=""
        >
        <label for="" class="contact-up__form--label">Subject</label>
        <input
          type="text"
          id=""
          name=""
          class="contact-up__form--input"
          placeholder=""
          value=""
        >
        <label class="contact-up__form--label" for="">Message</label>
        <textarea class="contact-up__form--message" id="" name="" rows="10"></textarea>
        <input 
          type="submit"
          value="Submit"
          class="contact-up__form--submit"     
        >
      </form>
    </div> <!--contact-up-->
    <div class="contact-down"></div>
  </div>
  <p class="contact__text"></p>
  <p class="contact__text"></p>
</section> <!--contact-->

<footer class="footer-contact">
  <div class="footer-contact__container">
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
  </div>
</footer> <!--footer-contact-->

<?php include 
"includes/templates/noAMPend.php"; 
?>