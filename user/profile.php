<?php include
"includes/templates/noAMPstart.php";
"includes/templates/navbar-user.php";
"includes/templates/navlog-user-profile.php";
?>

<section class="container profile">
  <div class="profile-user">
    <div class="profile-user__box">
      <div class="profile-user__box--up">
        <div class="profile-user-image"></div>
        <p>User name</p>
      </div>
      <div class="profile-user__box--down"></div>
    </div> <!--box-->
    <div class="profile-user__buttons">
      <button onclick="location.href=''">
				cancel
			</button>
      <button onclick="location.href=''">
				save
			</button>
    </div> <!--buttons-->
  </div> <!--user-->
  <div class="profile-setting">
    <div class="profile-setting__title">
      <h3>edith your profile</h3>
    </div> <!--title-->
    <div class="profile-setting__box">
      <form class="profile-setting-form" method="post" action="">
        <label for="" class="profile-setting-form__label">Change display name</label>
        <input
          type="text"
          id=""
          name=""
          class="profile-setting-form__input"
          placeholder=""
          value=""
        >
        <label for="" class="profile-setting-form__label">Change email</label>
        <input
          type="email"
          id=""
          name=""
          class="profile-setting-form__input"
          placeholder=""
          value=""
        >
        <label for="" class="profile-setting-form__label">Change password</label>
        <input
          type="text"
          id=""
          name=""
          class="profile-setting-form__input"
          placeholder=""
          value=""
        >
        <input
          type="text"
          id=""
          name=""
          class="profile-setting-form__input"
          placeholder=""
          value=""
        >
        <input
          type="text"
          id=""
          name=""
          class="profile-setting-form__input"
          placeholder=""
          value=""
        >
        <input 
          type="submit"
          value="save"
          class="profile-setting-form__submit"    
        >
      </form> <!--form-->
      <div class="profile-setting-buttons">
        <p class="profile-setting-buttons__close">Close Account</p>
        <div class="profile-setting-buttons__options">
          <button onclick="location.href=''">
				    cancel
			    </button>
          <button onclick="location.href=''">
				    save
			    </button> 
        </div> <!--options-->
      </div> <!--buttons-->
    </div> <!--box-->
  </div> <!--setting-->
</section> <!--profile-->

<?php include 
"includes/templates/noAMPend.php"; 
?>