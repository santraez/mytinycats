<?php 
/////////////////////////////////////////////////////////
// DATABASE
/////////////////////////////////////////////////////////
// IMPORT CONNECTION
require "includes/config/database.php";
$db = connectDB();
// ARRAY WITH ERROR MESSAGES
$errors = [];
// EMPTY CONSTANTS
$email = '';
$subject = '';
$message = '';
// AFTER SUBMITTING THE FORM
if($_SERVER['REQUEST_METHOD']==='POST') {
  // FORM CONSTANTS
  $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $date = date('Y/m/d');
  // ERROR AGGREGATOR
  if(!$email) {
    $errors[] = 'ADD A VALID EMAIL';
  }
  if(!$subject) {
    $errors[] = 'ADD A SUBJECT';
  }
  if(!$message) {
    $errors[] = 'ADD A MESSAGE';
  }
  // CHECK THAT THE ARRAY ERRORS IS EMPTY
  if(empty($errors)) {
    // INSERT TO DB
    $query = "INSERT INTO contact (email, subject, message, date) VALUES ('$email', '$subject', '$message', '$date')";
    // SEND TO DB
    $result = mysqli_query($db, $query);
    // FEEDBACK
    if($result) {
      // REDIRECT USER
      header('location:/contact.php?submitted=1');
    }
  }
}
// FEEDBACK CONSTANT
$submitted = $_GET['submitted'] ?? null;
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "includes/templates/noAMPstart.php";
include "includes/templates/header.php";
?>

<section class="container contact">
  <!--SHOW ERRORS-->
  <?php foreach($errors as $error): ?>
    <div class="contact-error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <!--SHOW FEEDBACK-->
  <?php if(intval($submitted) === 1): ?>
    <p class="contact-successful">
      Message sent succesfully.
    </p>
  <?php endif; ?>
  <h3 class="contact__title">contact</h3>
  <div class="contact__container">
    <div class="contact-up">
      <form class="contact-up__form" method="POST" action="/contact.php">
        <label for="email" class="contact-up__form--label">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="contact-up__form--input"
          placeholder=""
          value="<?php echo $email; ?>"
        >
        <label for="subject" class="contact-up__form--label">Subject</label>
        <input
          type="text"
          id="subject"
          name="subject"
          class="contact-up__form--input"
          placeholder=""
          value="<?php echo $subject; ?>"
        >
        <label class="contact-up__form--label" for="message">Message</label>
        <textarea class="contact-up__form--message" id="message" name="message" rows="10"><?php echo $message; ?></textarea>
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

<?php
// CLOSE THE CONNECTION
mysqli_close($db);
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "includes/templates/noAMPend.php"; 
?>