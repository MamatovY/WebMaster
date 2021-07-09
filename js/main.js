$(document).ready(function () {
  $(".btn").click(function (e) {
    $(".popup").css("display", "block");

    $(".popupContent").slideDown(300);
    e.preventDefault();
  });

  $(".popupClose").click(function (e) {
    $(".popup").fadeOut(400);
    $(".popupContent").slideUp(300);

    e.preventDefault();
  });
});
