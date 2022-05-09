$(document).ready(function () {
    /* carousel testimonials */
    // let owlExperties = $(".owl-expertieses");

    // owlExperties.owlCarousel({
    //   screenLeft: true,
    //   loop: false,
    //   margin: 20,
    //   center: true,
    //   nav: false,
    //   dots: true,
    //   responsive: {
    //     0: {
    //       items: 1,
    //     },
    //     600: {
    //       items: 1,
    //     },
    //     1000: {
    //       items: 3,
    //     },
    //   },
    // });
    $(".inner-menu").clone().removeClass("desktop").appendTo(".mobile-menu");

    //adding active class to particular menu
    let path = window.location.pathname;
    $(".clean-list a").each(function (index, value) {
        let className = $(this).attr("href").includes(path) ? "active" : "";
        $(this).addClass(className);
    });
});
