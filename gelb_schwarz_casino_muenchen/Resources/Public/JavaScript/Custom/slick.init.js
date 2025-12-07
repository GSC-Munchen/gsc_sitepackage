$(document).ready(function(){
  $('.slick').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 6000,
      speed: 3000,
      fade: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      pauseOnDotsHover: false,
      prevArrow: '<button type="button" class="slick-prev">◄</button>',
      nextArrow: '<button type="button" class="slick-next">►</button>'
  });
});