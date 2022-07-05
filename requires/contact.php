<section class="contact_wrapper" id="contactUs">
  <div class="contact">
    <div class="leftside">
      <h2>contactez-nous</h2>
      <small>nous sommes ouverts à toute suggestion ou simplement pour discuter
        <!-- we're open for any suggestion or just to have a chat -->
      </small>
      <div class="info">
        <ul>
          <li>adress</li>
          <li>103 west 21th</li>
          <li>street, Marrakech</li>
          <li>Maroc</li>
        </ul>
        <ul>
          <li>email</li>
          <li>raffa4991@gmail.com</li>
        </ul>
        <ul>
          <li>phone</li>
          <li>+212 06 04 31 89 74</li>
        </ul>
      </div>
      <form action="" method="post">
        <input type="text" name="txtname" placeholder="name" required minlength="4" maxlength="12">
        <input type="email" name="txtemail" placeholder="email" required minlength="4" maxlength="36">
        <input type="text" name="txtsubject" placeholder="subject" maxlength="128">
        <textarea name="txtmessage" rows="5" placeholder="message here"></textarea>
        <button type="submit" name="submit_message">envoyer le message</button>
      </form>
      <div class="followUs">
        <h3>suivez nous ici</h3>
        <a href="http://facebook.com"><small>facebook</small></a>
        <a href="http://twitter.com"><small>twitter</small></a>
        <a href="http://instagram.com"><small>instagram</small></a>
        <a href="http://linkedin.com"><small>linkedin</small></a>
      </div>
    </div>
    <div class="rightside">
      <div class="image">
        <img src="./src/icons&background/book2Wallpaper.jpg" alt="" />
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST["submit_message"])) {
  $name = strip_tags($_POST["txtname"]);
  $email = strip_tags($_POST["txtemail"]);
  $subject = strip_tags($_POST["txtsubject"]);
  $message = strip_tags($_POST["txtmessage"]);
  $to = "raffa4991@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: $email" . "\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "done";
  };
}


?>