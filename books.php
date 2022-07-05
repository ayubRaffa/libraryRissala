<?php require('./requires/users.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./src/icons&background/favicon.png" />

  <!-- ** styles -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link rel="stylesheet" href="dist/style/index.css" />
  <link rel="stylesheet" href="dist/style/books.css" />
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />

  <!-- ** scripts -->
  <!--  <script src="./dist/dependency/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src='./dist/script/scripts.js'></script>
  <script defer src="./dist/script/index.js"></script>
  <script src="./dist/script/books.js"></script>
  <script defer src="dist/script/effects.js"></script>

  <title>rissala</title>
</head>

<body>
  <?php require('./requires/navigations.php') ?>
  <?php require('./requires/forms.php') ?>

  <!-- !! contents	** -->
  <div class="root">

    <div id="books_wrapper" class="books_wrapper">
      <div class="books">
      </div>
    </div>

    <?php require('./requires/footer.php') ?>
  </div>



</body>

</html>