/* eslint-disable no-use-before-define */
/* eslint-disable no-undef */
// ** if thee languague changed
$('#lang').change((e) => {
  e.preventDefault();
  if (e.target.checked) {
    lang = 'AR';
  } else {
    lang = 'FR';
  }
  localStorage.setItem('language', lang);
  changePageLanguague();
});

// ** search input books
let timeout;
$('#searchInput').on('keyup focus', (e) => {
  e.preventDefault();
  clearTimeout(timeout);
  timeout = setTimeout(() => {
    const val = e.target.value;
    if (val) {
      $('nav .results').css('display', 'flex');
    } else {
      $('nav .results').hide();
    }
    if (val.length > 1) {
      $.getJSON(
        './requires/booksFetch.php?searching',
        { insertedValue: val },
        (data, textStatus, jqXHR) => {
          if (data.length === 0) {
            $('nav .results').html('pas de livre');
          } else {
            let html = '';
            for (const book of data) {
              html += `
        <div class="result" onclick="sendToDetailPage(${book.livre_id})">
            <img src="./src/imgs/booksImgs/${book.image_dist}" alt='${book.titre}'  height="60px" />
            <p class="result_title">${book.titre}</p>
        </div>
        `;
            }
            $('nav .results').html(html);
          }
        },
      );
    }
  }, 500);
});

function sendToDetailPage(bookid) {
  window.location.href = `bookDetails.php?book=${bookid}`;
}
function changePageLanguague() {
  window.location.href = `index.php?book=${lang}`;
}

// ** create links for the navigations
$('.booksLink ').each((index, element) => {
  // element == this
  const specification = $(element).attr('data-specification');
  const specificationValue = $(element).attr('data-specificationValue');
  $(element).attr('href', `./books.php?${specification}=${specificationValue}`);
});
$('#login, #loginNav').on('click', (e) => {
  e.preventDefault();
  $('body').toggleClass('login');
  $('.notblured').toggle(400);
  $('#name').focus();
});
$('.notblured .closeform').on('click', () => {
  $('body').removeClass('login');
  $('.notblured').hide(400);
});

$('.notblured .tab').on('click', (e) => {
  e.preventDefault();
  const sign = $('.notblured .signIN');
  const register = $('.notblured .register');
  if ($(e.currentTarget).attr('data-log') === 'signIn') {
    $('#tabcheck').prop('checked', false);
    register.slideUp(400, () => sign.slideDown(400));
  } else if ($(e.currentTarget).attr('data-log') === 'signUp') {
    $('#tabcheck').prop('checked', true);
    sign.slideUp(400, () => register.slideDown(400));
  }
});

//* * show and hide password   */
$('.fa-eye-slash').click((e) => {
  e.preventDefault();
  $(e.currentTarget).toggleClass('fa-eye').toggleClass('fa-eye-slash');
  const type = $('#sign_pass').attr('type') === 'password' ? 'text' : 'password';
  $('#sign_pass').attr('type', type).focus();
});

$(document).ready(() => {
  $('.disclaimer').hide();
});
