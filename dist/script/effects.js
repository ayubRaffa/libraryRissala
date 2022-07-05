$(document).ready(() => {
  let scroll = 0;
  let shouldwailt = false;
  $(window).scroll(() => {
    // ** slide up and down the top navigation
    if (!shouldwailt) {
      if ($(window).scrollTop() > 200) {
        if ($(window).scrollTop() < (scroll)) {
          // $('.topnavbar ').show(500);
          $('.topnavbar').slideDown(400);
        } else if ($(window).scrollTop() > (scroll)) {
          // $('.topnavbar ').hide(500);
          $('.topnavbar').slideUp(400);
        }
      } else {
        $('.topnavbar').slideDown(400);
      }
      shouldwailt = true;
      setTimeout(() => {
        shouldwailt = false;
      }, 500);
    }
    scroll = $(window).scrollTop();
  });

  // ** day and night modes
  $('#check').change((e) => {
  /*     e.preventDefault(); */
    if (e.target.checked) {
      localStorage.setItem('mode', 'night');
    } else {
      localStorage.setItem('mode', 'day');
    }

    dayNightModes();
  });

  // ** set the language
  if (localStorage.getItem('language') === 'AR') {
    $('#lang').attr('checked', true);
  } else {
    $('#lang').attr('checked', false);
  }

  // ** hide and show the input when scrolling and show it when clicking
  $('#searchIcon').click((e) => {
  /* e.preventDefault(); */
  /* $('#searchInput').toggle(); */
  /*     $('#searchInput').toggle(200, () => { $('.topnavbar ul li').toggle(200); });
 */ if ($('#searchInput').css('display') === 'none') {
      if (window.matchMedia('(max-width: 796px)').matches) {
        $('.logo img , .night_mode, .language').hide();
      }
      $('.topnavbar ul li').hide(200, () => { $('#searchInput').show(200, () => $('#searchInput').focus()); });
    } else {
      $('#searchInput').hide(200, () => { $('.topnavbar ul li').show('.topnavbar ul li'); });
    }
    if (window.matchMedia('(max-width: 796px)').matches) { // hide the navigation bar when clicking thee search icon
      $('.navigation').css('width', '0');
    }
  });
  // ** hide the input on blur
  $('#searchInput').blur((e) => {
    setTimeout(() => {
      $('nav .results').html('');
      $(e.currentTarget).hide(200, () => {
        $('.topnavbar ul li').show();
        $('.logo img , .night_mode, .language').show();
      });
    }, 1000);
  });

  // ** media query
  $('.navigation .fa-times').click((e) => {
    e.preventDefault();
    $('.navigation').css('width', '0');
  });
  $('.fa-bars').click((e) => {
    e.preventDefault();
    $('.navigation').css('width', '100vw');
  });
});

let lastClicked;
$('.mainList').each((index, element) => {
  $(element).on('click', (e) => {
    if (lastClicked !== e.currentTarget) {
      $('.mainList .dropdown').slideUp();
      $(lastClicked).children('h4').css('color', 'unset');
    }
    $(e.currentTarget).children('.dropdown').slideToggle();
    $(e.currentTarget).children('h4').css('color', 'var(--color-colored2)');
    lastClicked = e.currentTarget;
  });
});
$('.account_detail').click((e) => {
  $(e.currentTarget).children('.detail').slideToggle();
});
$('.account_detail').blur((e) => {
  e.preventDefault();
  $(e.currentTarget).children('.detail').slideUp();
});
