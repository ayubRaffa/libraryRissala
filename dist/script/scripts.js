let lang;
/* (localStorage.getItem('language')) ? lang = localStorage.getItem('language') : lang = 'FR'; */
lang = localStorage.getItem('language') || 'FR';
/* (navigator.onLine) ? $('#connection').hide() : $('#connection').show(); */

function dayNightModes() {
  if (localStorage.getItem('mode') === 'day') {
    $(':root').css({
      '--color-prim': 'hsl(227, 58%, 95%) ',
      '--color-text': 'hsl(218, 27%, 6%)',
      '--color-second': 'hsl(0, 0%, 20%)',
      '--color-background': ' rgb(248, 249, 255)',
      '--color-midle': ' hsl(0, 0%, 81%)',
      '--color-shadow': ' ',
      '--color-whiteblack': '#EEE',
      '--color-background-trans': 'hsla(0, 0%, 90%, 0.342)',
      '--color-colored1': '#def4f4',
      '--color-colored2': '#f8a5bd',
    });
  } else {
    $(':root').css({
      '--color-prim': 'hsl(210, 10%, 8%)',
      '--color-text': 'rgb(239, 240, 240)',
      '--color-second': 'hsl(0, 0%, 90%)',
      '--color-background': 'hsl(210, 7%, 7%)',
      '--color-shadow': 'hsl(210, 8%, 9%)',
      '--color-midle': ' hsl(0, 0%, 25%)',
      '--color-background-trans': 'hsla(0, 0%, 0%, 0.342)',
      '--color-whiteblack': '#000',
      '--color-colored1': '#550553',
      '--color-colored2': '#057fbe',/* 00778f  */
    });
    window.addEventListener(
      'DOMContentLoaded',
      () => {
        document.querySelector('#check').checked = true;
      },
      false
    );
  }
}
dayNightModes();
