$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: true
  });
  $(document).ready(function () {
    $(".custom-carousel .card").click(function () {
      $(".custom-carousel .card").not($(this)).removeClass("active");
      $(this).toggleClass("active");
    });
  });