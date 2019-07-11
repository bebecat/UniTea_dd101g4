console.log("start");

//nav收起來
var zero = 0;
$(document).ready(function() {
  $(window).on("scroll", function() {
    $(".navbar_container").toggleClass("hide", $(window).scrollTop() > zero);
    zero = $(window).scrollTop();
    $(".navbar_container").css({ transition: " 1s ease-in-out" });
  });
});

//hover_icon

function init() {
  var mem = document.getElementById("member_icon");
  mem.onmouseover = function() {
    mem.src = "./scss/img/h_f_img/member_hover.png";
  };
  mem.onmouseout = function() {
    mem.src = "./scss/img/h_f_img/member.png";
  };
  var cart = document.getElementById("cart_icon");
  cart.onmouseover = function() {
    cart.src = "./scss/img/h_f_img/cart_hover.png";
  };
  cart.onmouseout = function() {
    cart.src = "./scss/img/h_f_img/cart.png";
  };
}
window.addEventListener("load", init);

///cart_count
// var storage = localStorage;
// var cartCount = $("#cart_count");
// var cartCircle = $("#cart_circle");

// if (storage.getItem("add_to_cart")) {
//   var stArray = storage.getItem("addItemList").split(",");
//   var starrylength = stArray.length - 1;
//   if (starrylength >= 1) {
//     cartCircle.attr("style", "visibility:visible");
//     cartCount.text(starrylength);
//   }
// }
