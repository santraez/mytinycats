<?php
/////////////////////////////////////////////////////////
// DATABASE
/////////////////////////////////////////////////////////
// IMPORT CONNECTION
require "../includes/config/database.php";
$db = connectDB();
// ARRAY WITH ERROR MESSAGES
$errors = [];
// USER AUTHENTICATION
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // FORM CONSTANTS
  $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // ERROR AGGREGATOR
  if(!$email) {
    $errors[] = 'ADD A VALID EMAIL';
  }
  if(!$password) {
    $errors[] = 'ADD A PASSWORD';
  }
}
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "includes/templates/noAMPstart.php";
include "includes/templates/header.php";
?>

<section class="container login">
  <h3 class="login__title">login</h3>
  <div class="login__container">
    <div class="login-up">
      <form class="login-up__form" method="POST">
        <label for="email" class="login-up__form--label">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="login-up__form--input"
          placeholder=""
          value=""
        >
        <label for="password" class="login-up__form--label">Password</label>
        <input
          type="password"
          id="password"
          name="password"
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

<?php
// CLOSE THE CONNECTION
mysqli_close($db);
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "includes/templates/noAMPend.php";
?>/******* */