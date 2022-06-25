<?php
/////////////////////////////////////////////////////////
// DATABASE
/////////////////////////////////////////////////////////
// IMPORT CONNECTION
require "includes/config/database.php";
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
  // EMPTY ERRORS
  if(empty($errors)) {
    // CHECK USER EXISTS
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    if($result->num_rows) {
      $user = mysqli_fetch_assoc($result);
      // CHECK PASSWORD
      $auth = password_verify($password, $user['password']);
      if($auth) {
        // LOGIN
        session_start();
        // DATA SESSION
        $_SESSION['user'] = $user['email'];
        $_SESSION['login'] = true;
        // REDIRECT
        header('Location: /admin');
      } else {
        // ERROR AGGREGATOR
        $errors[] = 'INVALID PASSWORD';
      }
    } else {
      // ERROR AGGREGATOR
      $errors[] = 'USER DOES NOT EXIST';
    }
  }
}
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "includes/templates/header.php";
?>

<section class="container login">
  <!--SHOW ERRORS-->
  <?php foreach($errors as $error): ?>
    <div class="contact-error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
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
include "includes/templates/footer.php";
?>