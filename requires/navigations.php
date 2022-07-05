 <!-- !! top navigation -->
 <div class="topnavbar aze">
   <div class="bars">
     <i class="fa fa-bars" aria-hidden="true"></i>
   </div>
   <div class="logo">
     <a href="./index.php">
       <img src="./src/imgs/logo.png" alt="" />
     </a>
   </div>

   <nav>
     <ul class="aze">
       <li><a href="./index.php#hero" class="home">home</a></li>
       <li><a href="./books.php" class="books">books</a></li>
       <li><a href="#services" class="services">services</a></li>
       <li><a href="#home" class="home">audioBook</a></li>
       <li><a href="./index.php#contactUs" class="contactUs">contacte</a></li>
     </ul>


     <div class="search_input">
       <input type="search" name="searchInput" id="searchInput" placeholder="search for a book..." autofocus autocomplete="off" />
       <button type="submit"><i class="fa fa-search" id="searchIcon"></i></button>
       <div class="results"></div>
     </div>

     <div class="language">
       <input type="checkbox" name="lang" id="lang" />
       <label for="lang"><i class="icon_language" data-language="fr"><img src="./src/icons&background/icons8-language2.png" alt="" width="40px" height="40px"></i></label>
       <label for="lang"><i class="icon_language" data-language="ar"><img src="./src/icons&background/icons8-language.png" alt="" width="40px" height="40px"></i></label>
     </div>

     <div class="night_mode">
       <input type="checkbox" name="check" id="check" placeholder="search" />
       <label class="theIcon" for="check">
         <i class="fas fa-moon"></i>
         <i class="fas fa-sun"></i>
         <div class="ball"></div>
       </label>
     </div>
   </nav>
 </div>

 <!--  !! left navigation  ** -->


 <div class="navigation ">

   <div class="icon">
     <i class="fa fa-times" aria-hidden="true"></i>
   </div>
   <div id="connection" style="display: none;">
     <i class="fa fa-globe" aria-hidden="true" style="color: red;padding: 0.4em;text-align:center"><small> vérifiez votre connexion</small></i>
   </div>

   <div class="account">
     <div class="icon">
       <i class="fa fa-user" aria-hidden="true"></i>
     </div>
     <div class="account_detail" tabindex="0">

       <?php

        if (isset($_SESSION["user_id"])) {
          $user_id =  $_SESSION['user_id'];
          $emailadress =  mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT email from users where user_id = $user_id"));
          echo "<p class='email'>" . $emailadress['email'] . "</p>";
          echo '<div class="detail"  style="display:none">';

          if ($_SESSION["user_rank"] === "admin") {
            echo '<a href="./admin/index.php" class="toaAdminPage">admin page</a>';
          }
          echo '<a href="./requires/deconnect.php" id="logout">log out</a>';
          echo '</div>';
        } else {
          echo "<small id='loginNav'>se connecter</small>";
        }

        ?>

     </div>
   </div>
   <nav class="navbar">
     <ul>
       <li class="mainList">
         <h4>categories</h4>
         <ul class="dropdown">
           <li><i class="fa fa-heart" aria-hidden="true"></i><a href="">favorite</a></li>
           <li><i class="fa fa-star" aria-hidden="true"></i><a href="">top 10</a></li>
           <li><i class="fa fa-arrow-alt-circle-down" aria-hidden="true"></i><a href="">nouveautés</a></li>
           <li><a href='./books.php' class='booksLinkAll'>tous</a></li>
           <?php
            $results = mysqli_query($db_conn, "SELECT categorie from genre");
            while ($genres = mysqli_fetch_assoc($results)) {
              $categorie = $genres['categorie'];
              echo " <li><a href='' class='booksLink' data-specificationValue='$categorie' data-specification='categorie_id'>$categorie</a></li>";
            }
            ?>

         </ul>
       </li>
       <li class="mainList">
         <h4>auteurs</h4>
         <ul class="dropdown">
           <li><i class="fa fa-heart" aria-hidden="true"></i><a href="">favorite</a></li>
           <li><i class="fa fa-star" aria-hidden="true"></i><a href="">top 10</a></li>
           <li><i class="fa fa-arrow-alt-circle-down" aria-hidden="true"></i><a href="">nouveautés</a></li>
           <?php
            $results = mysqli_query($db_conn, "SELECT nom from auteurs");
            while ($noms = mysqli_fetch_assoc($results)) {
              $nom = $noms['nom'];
              echo " <li><a href='' class='booksLink' data-specificationValue='$nom' data-specification='auteur_id'>$nom</a></li>";
            }
            ?>
         </ul>
       </li>

       <li class="mainList">
         <h4>année</h4>
         <ul class="dropdown">
           <li><a href="./books.php?year1=0000&year2=1900">avant 1900</a></li>
           <li><a href="./books.php?year1=1900&year2=2000">1900-2000</a></li>
           <li><a href="./books.php?year1=2000&year2=2010">2000-2010</a></li>
           <li><a href="./books.php?year1=2010&year2=2020">2010-2020</a></li>
           <li><a href="./books.php?year1=2020&year2=2022">2020-2022</a></li>
         </ul>
       </li>
       <li class="mainList">
         <h4>magazing</h4>
         <ul class="dropdown">
           <li><i class="fa fa-heart" aria-hidden="true"></i><a href="">favorite</a></li>
           <li><i class="fa fa-star" aria-hidden="true"></i><a href="">top 10</a></li>
           <li><i class="fa fa-arrow-alt-circle-down" aria-hidden="true"></i><a href="">nouveautés</a></li>
         </ul>
       </li>
       <li class="mainList">
         <h4>kids</h4>
       </li>
     </ul>
   </nav>

 </div>

