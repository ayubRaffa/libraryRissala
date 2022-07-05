/* const url = new URL(window.location.href);
const getm = url.searchParams;
const nam = getm.get('categorie_id');
 */
// ** for books section

const urlbooks = window.location.search.substring('?').substring(1);
let specification = 'livre_id';
let specificationValue = '%';
/* let year1;
let year2; */
const [year1, year2] = decodeURI(urlbooks).split('&');
if (urlbooks) {
  [specification, specificationValue] = decodeURI(urlbooks).split('=');
}
if (year1 && year2) {
  specification = 'annee_production';
  specificationValue = [];
  specificationValue[0] = year1.split('=')[1];
  specificationValue[1] = year2.split('=')[1];
}

function getbooks(valueA, valueB, valueOfGet = 'books') {
  $.getJSON(
    `./requires/booksFetch.php?${valueOfGet}`,
    {
      specification: valueA,
      specificationValue: valueB,
    },
    (data, textStatus, jqXHR) => {
      $('.books_wrapper .books').html('');
      let htmlString = '';
      data.forEach((element) => {
        htmlString += ` 
        <div class="book" data-name="${element.categorie}" >
          <a href="./bookDetails.php?book=${element.livre_id}">
            <img src="./src/imgs/booksImgs/${element.image_dist}" alt="">
          </a>
        </div>`;
      });
      $(document).ready(() => {
        $('.books_wrapper .books').html(htmlString);
      });
    },
  );
}
getbooks(specification, specificationValue);
