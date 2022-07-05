<?php require('./requires/users.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./src/icons&background/favicon.png" />

  <!-- ** styles -->
  <!--  <link rel="alternate stylesheet" type="text/css" href="style.css" title="dark" media="all"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="dist/style/index.css" />
  <link rel="stylesheet" href="dist/style/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="dist/style/flipster/jquery.flipster.css" />

  <!-- ** scripts -->
  <script src="./dist/dependency/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src='./dist/script/scripts.js'></script>
  <script defer src="./dist/script/index.js"></script>
  <script src="./dist/script/mainpage.js"></script>
  <script defer src="./dist/dependency/flipster.js"></script>
  <script defer src="./dist/script/effects.js"></script>
  <title>rissala</title>
</head>

<body>
  <?php require('./requires/navigations.php') ?>
  <?php require('./requires/forms.php') ?>

  <!-- !! contents	** -->
  <div class="root">
    <div class="hero" id="hero">
      <header class="headersborder">
        <div>
          <img class="logo" src="./src/imgs/logo.png" alt="">
          <h1><strong>rissala</strong></h1>
        </div>
        <div class="sub_headers">
          <h2>explorez le monde des livres et lisez des milliers des livres gratuits</h2>
          <!-- votre bibliothéque numérique personnelle -->
        </div>
      </header>
      <div class="wrapper">
        <div class="slidersContainer">
          <div class="vertical_sliders">
            <div class="lign lign1"></div>
            <div class="lign lign2"></div>
            <div class="lign lign3"></div>
            <div class="lign lign4"></div>
          </div>
        </div>
      </div>

    </div>

    <!-- !! main  -->
    <main>
      <section class="statics__wrapper" id="statics__wrapper">
        <div class="content books_numbers">
          <div class="image">
            <img src="./src/icons&background/reading_book.png" />
          </div>
          <div class="details">
            <p>611,432 livres</p>
            <span>plus de 600K livres vous attendent au choix </span>
          </div>
        </div>

        <div class="content books_numbers">
          <div class="image">
            <img src="./src/icons&background/shelf_book.png" />
          </div>
          <div class="details">
            <p>25 categories est collection</p>
            <span>une collection complète de toutes les catégories où vous pouvez trouver les livres les plus intéressants et éducatifs </span>
          </div>
        </div>

        <div class="content books_numbers">
          <div class="image">
            <img src="./src/icons&background/library.png" />
          </div>
          <div class="details">
            <p>4,000 telechargement par mois</p>
            <span>plus de 6 000 visiteurs intéressés par les livres visitent le site Web de la bibliothèque rissala chaque mois dans le monde </span>
          </div>
        </div>
      </section>

      <section id="home" class="carousel_wrapper">
        <div id="carousel"></div>
      </section>


      <?php require("./requires/categories.php") ?>

      <?php require("./requires/contact.php") ?>
    </main>

    <?php require('./requires/footer.php') ?>


  </div>


</body>

</html>