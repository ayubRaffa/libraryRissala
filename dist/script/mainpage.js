/* eslint-disable no-param-reassign */
/* eslint-disable no-tabs */
/* eslint-disable no-restricted-syntax */

function shuffle(sourceArray) {
  for (let i = 0; i < sourceArray.length - 1; i++) {
    const j = i + Math.floor(Math.random() * (sourceArray.length - i));

    const temp = sourceArray[j];
    sourceArray[j] = sourceArray[i];
    sourceArray[i] = temp;
  }
  return sourceArray;
}

// ** ajax the books
$.getJSON('./requires/booksFetch.php?all', { lang }, (data, textStatus, jqXHR) => {
  shuffle(data);
  const row = Math.ceil(data.length / 4);
  $(document).ready(() => {
    // ** for sliders
    $('.vertical_sliders .lign').each((index, element) => {
      for (let i = 0; i <= row - 1; i += 1) {
        // element == this
        const j = i + (row * index);
        element.innerHTML += `
				  <a href="bookDetails.php?book=${data[j].livre_id}">
            <div class="image">
				      <img src="./src/imgs/booksImgs/${data[j].image_dist}" alt="${data[j].titre}" />
				    </div>
          </a>
				`;
      }
    });
    setTimeout(() => {
      $('.hero .vertical_sliders').css('visibility', 'visible');
    }, 500);

    // **  for carousel
    let html = '';
    $('#carousel').html('<ul class="flip-items"></ul>');
    for (const book of data) {
      html += `
        <li data-flip-title="${book.titre}" data-flip-category="${book.category}" data-id="${book.livre_id}" >
        <a class="flipster_href">
              <img src="./src/imgs/booksImgs/${book.image_dist}" alt='book.titre' />
              </a>
            </li>
            `;
    }
    $('#carousel .flip-items').html(html);

    flipster(); // ** calling the function
    const myFlipster = $('#carousel').flipster({
      style: 'carousel',
      spacing: -0.3,
      nav: 'before',
      buttons: false,
      autoplay: 1500,
      loop: true,
      pauseOnHover: true,
      click: true,
      scrollwheel: false,
      touch: true,
      onItemSwitch: (currentItem, previousItem) => {
        $(previousItem).removeAttr('onclick');
        $(currentItem).attr('onclick', `sendToDetailPage(${$(currentItem).attr('data-id')})`);
      },
    });
    $('.flipster__item--current').attr('onclick', `sendToDetailPage(${$('.flipster__item--current').attr('data-id')})`);
  });
});
