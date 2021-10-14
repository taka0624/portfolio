jQuery(function ($) {

  function changeScrollColor() {

    const sliderHeight = $(".firstView").height();

    $(window).on("scroll", function () {
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".js-header").removeClass("headerColorScroll");
      } else {
        $(".js-header").addClass("headerColorScroll");
      }
    });
  }

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
  changeScrollColor();

});
