$(document).ready(function () {
  let headerHeight = $("header").outerHeight();
  let windowHeight = $(window).height();
  $(".menu").height(windowHeight - headerHeight);
  $(".menu").height(windowHeight - headerHeight);
  // $(".home-banner-inner").css("min-height", windowHeight - 300);
  $(".home-banner-inner").css("min-height", windowHeight - headerHeight);

  /* menu toggole */
  $(".menu-toggler").click(function (e) {
    e.preventDefault();
    $(".menu").toggleClass("active");
    $(".menu-icon").toggleClass("active");
    $(".menu-toggler .menu-text").toggle();
    $(".menu-toggler .close").toggle();
  });

  /* carousel testimonials */
  let owlExperties = $(".owl-expertieses");

  owlExperties.owlCarousel({
    screenLeft: true,
    loop: false,
    margin: 20,
    center: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".owl-solutions").owlCarousel({
    // loop: true,
    margin: 20,
    // center: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
});
