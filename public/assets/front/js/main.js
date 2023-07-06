$(document).ready(function () {
  AOS.init();
  $(".bar_icon").on("click", function () {
    $(".side_bar").animate({ right: "0" }, 400);
  });
  $(".close_icon").on("click", function () {
    $(".side_bar").animate({ right: "-210px" }, 400);
  });

  // carousel
  $(".main-carousel").flickity({
    // options
    adaptiveHeight: true,
    freeScroll: true,
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
  });
});
