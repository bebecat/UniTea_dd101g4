console.log("start");
var zero = 0;
$(document).ready(function() {
  $(window).on("scroll", function() {
    $(".navbar_container").toggleClass("hide", $(window).scrollTop() > zero);
    zero = $(window).scrollTop();
  });
});
