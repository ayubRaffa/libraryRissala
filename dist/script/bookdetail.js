const query = window.location.search.substring('?').substring(1);
const [key, id] = query.split('=');
let bookDist = '#';
function Detailsrender() {
  $.getJSON(`./requires/booksFetch.php?${key}`, { key: id }, (data, textStatus, jqXHR) => {
    $(document).ready(() => {
      filldetail(data);
    });
  });
}
Detailsrender();

$(document).ready(() => {
  $('#downloadBtn').click((e) => {
    e.preventDefault();
    $.post(
      './requires/booksFetch.php',
      {
        id,
      },
      (data, textStatus, jqXHR) => {
        if (data === 'OK') {
          window.location.href = `./src/books/${bookDist}`;
        }
      },
      'text',
    );
  });
});
function filldetail(data) {
  /*  $('.bookDetail .image').attr('data-quote', `${data.description}`); */
  $('.bookDetail img').attr('src', `./src/imgs/booksImgs/${data.image_dist}`);
  $('.bookDetail img').attr('alt', `${data.titre}`);
  $('.bookDetail .bookname').text(`${data.titre}`);
  $('.bookDetail .author').text(`${data.auteur_id}`);
  $('.bookDetail .category').text(`${data.categorie_id}`);
  $('.bookDetail .language').text(`${data.lang}`);
  $('.bookDetail .publisher').text(`${data.publisher}`);
  $('.bookDetail .release_date').text(`${data.annee_production}`);
  $('.bookDetail .pages').text(`${data.nombre_page}`);
  $('.bookDetail .file_size').text(`${data.taille}`);
  $('.book_description blockquote').text(`${data.description}`);
  /* $('.quote_wrapper .quote').text(`${data.description}`); */
  $('nav .results').html('');
  $('#searchInput').blur();
  bookDist = data.book_dist;
  /*  $('#downloadBtn').attr('href', `./src/books/${data.book_dist}`); */
  $('#readONLine').attr('href', `./src/books/${data.book_dist}`);

  $(".").text();
}
