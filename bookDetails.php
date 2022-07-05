<?php require('./requires/users.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./src/icons&background/favicon.png" />

  <!-- ** style -->
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="./dist/style/index.css" />
  <link rel="stylesheet" href="./dist/style/book.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
  -->
  <!-- ** scripts -->
  <!--  <script src="./dist/dependency/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src='./dist/script/scripts.js'></script>
  <script src="./dist/script/bookdetail.js"></script>
  <script defer src="./dist/script/index.js"></script>
  <script defer src="./dist/script/effects.js"></script>
  -->

  <title>rissala</title>
</head>

<body>
  <?php require('./requires/navigations.php') ?>
  <?php require('./requires/forms.php') ?>

  <div class="root">
    <div class="bookDetails_wrapper">

      <section class="bookDetail">
        <input type="checkbox" name="" id="quote_checkbox" style="display: none" />
        <div class="image" data-quote="the yflsdf sdfhsdkf khf ehf kdsjf sdf dsf sd fdsf sdkhfkjds fdjshfi uzeh ishhfjkb v,xcbwviq h sdhidsh ichvvk cxwvhvklsehfF I HSDQIFH DSKF KLVHWXCIVHQS KL khkxj xcvhi u">
          <img src="" alt="" />
          <div class="quote_wrapper">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <blockquote id="quote">
              <!-- quote -->
            </blockquote>
            <i class="fa fa-quote-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="details">
          <input type="checkbox" name="" id="desctiption_checkbox" style="display: none" />
          <h2 class="bookname">
            <!-- trip to the seventh heaven -->
          </h2>
          <div class="rating"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
          <div class="book_description">
            <label for="desctiption_checkbox">
              <h3>desctiption...</h3>
              <blockquote>
                <!-- desctiption -->
              </blockquote>
            </label>
          </div>
          <table>
            <tr>
              <td>auteur</td>
              <td class="author">author</td>
            </tr>
            <tr>
              <td>categorie</td>
              <td class="category">category</td>
            </tr>
            <tr>
              <td>language</td>
              <td class="language">language</td>
            </tr>
            <tr>
              <td>éditeur</td>
              <td class="publisher">publisher</td>
            </tr>
            <tr>
              <td>date de sortie</td>
              <td class="release_date">release date</td>
            </tr>
            <tr>
              <td>pages</td>
              <td class="pages">pages</td>
            </tr>
            <tr>
              <td>taille</td>
              <td class="file_size">file size</td>
            </tr>
            <tr>
              <td>extensions</td>
              <td class="extensions">extensions</td>
            </tr>
          </table>
          <a href="http://" target="_parent" rel="noopener noreferrer">plus de données sur le livre!</a>
          <a href="http://" target="_parent" rel="noopener noreferrer">plus de livres comme celui-ci!</a>
        </div>
      </section>

      <section class="download_section">
        <div class="content download">
          <a id="downloadBtn">
            <i class="fa fa-download" aria-hidden="true"></i>
            <p>download</p>
          </a>
        </div>
        <div class="content readONLine">
          <a id="readONLine">
            <i class="fa fa-book" aria-hidden="true"></i>
            <p>lire online</p>
          </a>
        </div>
      </section>

    </div>

    <div class="similaire">
      <p>you may like also</p>
      <div class="content">
        <div class="bookwrapper">
          <div class="sameAutorBook"></div>
          <div class="sameCategorieBook"></div>
        </div>
      </div>
    </div>

    <?php require('./requires/footer.php') ?>
  </div>

  <script>

  </script>
</body>

</html>