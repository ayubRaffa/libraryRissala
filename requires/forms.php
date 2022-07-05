<div class="notblured" style="display:none ">
  <div class="image">
    <img src="./src/icons&background/book2Wallpaper.jpg" alt="" />
    <i class="fa fa-times closeform" aria-hidden="true"></i>
  </div>
  <div class="container">
    <input type="checkbox" id="tabcheck" name="tabcheck" style="display: none;">
    <div class="tabs borderButton">
      <div class="tab sign_in" data-log="signIn">
        <h3>se connecter</h3>
      </div>
      <div class="tab registering" data-log="signUp">
        <h3>S'inscrire</h3>
      </div>
    </div>

    <!-- ** redister -->
    <div class="register form" style="display: none ">
      <form action="" method="POST">
        <div class="name">
          <input type="text" name="txtlastname" id="name" placeholder="last name" required pattern="^\w{4,12}$" />
          <input type="text" name="txtfistname" id="firstname" placeholder="first name" required pattern="^\w{4,12}$" />
        </div>
        <input type="email" name="txtemail" id="email" placeholder="email" required />
        <input type="password" name="txtpassword" id="password" placeholder="make a password" required />
        <input type="password" name="txtpasswordrepeat" id="passwordrepeat" placeholder="repeat the password" required />
        <input type="date" name="date" id="date" placeholder="enter name" required />
        <div class="genders">
          <label><input type="radio" name="radiogender" value="homme" class="gendercheck" />homme</label>
          <label> <input type="radio" name="radiogender" value="femme" class="gendercheck" />femme</label>
        </div>
        <input type="submit" value="submit" name="registring" />
      </form>
      <div class="ORlign">
        <div class="lign"></div>
        <small>ou</small>
        <div class="lign"></div>
      </div>
      <div class="registerThrow">
        <div class="icon">
          <img src="./src/icons&background/icons8-facebook.svg" alt="" />
        </div>
        <div class="icon">
          <img src="./src/icons&background/icons9-app-store.svg" alt="" />
        </div>
        <div class="icon">
          <img src="./src/icons&background/icons8-twitter.svg" alt="" />
        </div>
      </div>
    </div>

    <!-- ** sign in -->
    <div class="signIN form">
      <form action="" method="POST">
        <input type="text" name="txtname" id="sign_name" placeholder="name or email" required pattern="^\w{4,12}$" />
        <div class="pass">
          <input type="password" name="txtpassword" id="sign_pass" placeholder="make a password" required pattern="^\w{4,12}$" />
          <!-- <input type="checkbox" name="checkboxpass" id="sign_pass_checkbox"> -->
          <i class="fa fa-eye-slash" aria-hidden="true"></i>
        </div>
        <div class="remembre">
          <input type="checkbox" name="checkboxRemembre" id="remembre" />
          <label for="remembre"> <small>me souvient </small></label>
        </div>
        <div class="passforgot">
          <a href=""><small>mot de pass oublié</small></a>
        </div>
        <input type="submit" value="submit" name="sign_in" id="signIN" />
      </form>
    </div>

  </div>
</div>
</div>