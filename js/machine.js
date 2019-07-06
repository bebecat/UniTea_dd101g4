$(document).ready(function() {
  $(".cancel").click(function() {
    $(".chatbot_wrapper").css({ right: "-300px" });
    $(".cancel").css({ opacity: 0 });
    $(".machine").css("display", "block");
  });
  $(".machine").click(function() {
    $(".chatbot_wrapper").css({ right: "0px" });
    $(".cancel").css({ opacity: 1 });
    $(".machine").css("display", "none");
    $(".chatBot_content_txt").fadeIn(slow);
  });
});
