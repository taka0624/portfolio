$(function () {
  $(window).on("scroll", function () {
    const sliderHeight = $(".firstView").height();
    if (sliderHeight - 30 < $(this).scrollTop()) {
      $(".js-header").removeClass("headerColorScroll");
    } else {
      $(".js-header").addClass("headerColorScroll");
    }
  });
});

jQuery(function ($) {

  function displaySpMenu() {

    const $spMenu = $('#spMenu');
    const $headerNav = $('#headerNav');

    function noscrollBody() {
      $('body').toggleClass('noscroll');
    }

    function crossBtn() {
      $spMenu.toggleClass('cross');
    }

    function toggleHeaderNav() {
      $headerNav.fadeToggle(300);
    }

    function init() {
      toggleHeaderNav();
      noscrollBody();
      crossBtn();
    }

    $spMenu.on('click', init);
  }

  displaySpMenu();

});
