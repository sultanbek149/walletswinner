
(function ($) {

  "use strict";

  // AOS ANIMATIONS
  AOS.init();

  let delay = 1000
  // NAVBAR
  $('.navbar-nav .nav-link').click(function () {
    $(".navbar-collapse").collapse('hide');
  });

  // NEWS IMAGE RESIZE
  function NewsImageResize() {
    $(".navbar").scrollspy({ offset: -76 });

    var LargeImage = $('.large-news-image').height();

    var MinusHeight = LargeImage - 6;

    $('.news-two-column').css({ 'height': (MinusHeight - LargeImage / 2) + 'px' });

    if (window.innerWidth <= 766) delay = 0

    if (window.innerWidth <= 992) {
      document.querySelectorAll('[data-aos="fade-up"]').forEach(el => el.dataset.aosDelay = 100)
    }
  }

  $(window).on("resize", NewsImageResize);
  $(document).on("ready", NewsImageResize);

  $('a[href*="#"]').click(function (event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 66
        }, delay);
      }
    }
  });

})(window.jQuery);



