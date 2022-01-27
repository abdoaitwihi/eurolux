$(document).ready(function () {
  /* add class on scroll */

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $("header").addClass("scrolled");
    } else {
      $("header").removeClass("scrolled");
    }
  });

  /* cloning the menu */

  $(".outer-menu").clone().appendTo(".mobile-menu");

  /* mobile menu */
  $(".aw-menu-toggler").click(function (e) {
    e.preventDefault();
    $(".mobile-menu").addClass("opened");
  });
  $(".close-menu").click(function (e) {
    e.preventDefault();
    $(".mobile-menu").removeClass("opened");
  });

  $(".owl-brochures").owlCarousel({
    loop: true,
    margin: 20,
    // center: true,
    nav: true,
    dots: false,
    navText: ["<img src='assets/icons/back.svg' />", "<img src='assets/icons/back.svg' />"],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".owl-full-space").owlCarousel({
    loop: true,
    margin: 20,
    // center: true,
    nav: true,
    dots: false,
    navText: ["<img src='assets/icons/back.svg' />", "<img src='assets/icons/back.svg' />"],
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
