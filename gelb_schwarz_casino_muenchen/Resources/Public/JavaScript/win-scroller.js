/* JS Code um Links die per Sprungmarken angesurft werden 
um die Höhe des Headers zu verschieben (Anchor fix)
Quelle: https://molily.de/css-position-fixed/#javascript-extern
*/

function scrollup () {
    if (location.hash)
      window.scrollBy(0, -130);
  }
  window.onload = scrollup;