console.log("start");
$(".parallax_3d")
  .on("mousemove", function(e) {
    $this = $(this);

    // Get move position relative to the container
    var width = $(this).width();
    var height = $(this).height();
    var offset = $this.offset();
    var x = e.pageX - offset.left;
    var y = e.pageY - offset.top;

    // pivot point from center
    x = x - width / 2;
    y = y - height / 2;

    // Depth higher num == lower depth
    x = x / 30;
    y = y / 30;

    // Move the image
    $(this)
      .find(".parallax_3d_inner")
      .css(
        "transform",
        "translate3d(" +
          x +
          "px," +
          y +
          "px,0) rotateY(" +
          x +
          "deg)  rotateX(" +
          -y +
          "deg"
      );

    // move text and keep it in the center
    var x_txt = x * 2.5;
    var y_txt = y * 2.5;

    $(this)
      .find(".parallax_3d_layer")
      .css("transform", "translate3d(" + x_txt + "px," + y_txt + "px,0)");
  })
  .on("mouseleave", function() {
    $(this)
      .find(".parallax_3d_inner, .parallax_3d_layer")
      .css("transform", "");
  });

//視差

//       //防止手機動
//       var navbar=document.getElementById("header");
// navbar.addEventListener('touchmove',function(e){e.preventDefault();
// })

// const concertBg = document.querySelector(".itemShow");
// console.log(concertBg);
// console.log(concertBg.style.backgroundPositionY);
// window.addEventListener("scroll", () => {
//   let offset = window.pageYOffset;
//   concertBg.style.backgroundPositionY = offset * 0.09 + "px";
//   console.log(concertBg.style.backgroundPositionY);
// });

var controller = new ScrollMagic.Controller();
var tl = new TimelineMax({
  // repeat: 10,
  yoyo: true
});

tl.to(".fly_animal", 3, {
  x: -500,
  y: 200
})
  .to(".fly_animal", 8, {
    x: -800,
    y: 400
  })
  .to(".fly_animal", 10, {
    x: -40,
    y: 1200
  });

var secen_01 = new ScrollMagic.Scene({
  triggerElement: "#keypoint01", //觸發點
  duration: 1000, //距離
  reverse: true //動畫執行
  // triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(tl) //tween 動畫
  .addIndicators() //觸發指標
  .addTo(controller); //回到場景

//butterfly
var controller = new ScrollMagic.Controller();
var t2 = new TimelineMax({
  // repeat: 10,
  yoyo: true
});

t2.to(".butterfly_bg", 10, {
  x: 0,
  y: 700
  })

  //   .to(".butterfly_bg", 3, {
  //     x: 1900,
  //     y: 600
  //   })

  //   .to(".butterfly_bg", 2, {
  //     x: 1900,
  //     y: 600
// });

var secen_02 = new ScrollMagic.Scene({
  triggerElement: "#keypoint02", //觸發點
  duration: 900, //距離
  reverse: true, //動畫執行
  triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(t2) //tween 動畫
  .addIndicators() //觸發指標
  .addTo(controller); //回到場景

//裝飾
$(document).ready(function() {
  $(".pic_dl").click(function() {
    $(".dl").css("opacity", 1);
  });
  $(".pic_dr").click(function() {
    $(".dr").css("opacity", 1);
  });
  $(".pic_dl").click(function() {
    $(".pic_dl").css("opacity", 0);
  });
  $(".pic_dr").click(function() {
    $(".pic_dr").css("opacity", 0);
  });
  //恢復
  $(".dl").click(function() {
    $(".dl").css("opacity", 0);
  });
  $(".dr").click(function() {
    $(".dr").css("opacity", 0);
  });
  $(".dl").click(function() {
    $(".pic_dl").css("opacity", 1);
  });
  $(".dr").click(function() {
    $(".pic_dr").css("opacity", 1);
  });
});




$(document).ready(function() {
  let  t=$("#qty")
  $(".qty_minus").click(function() {
    t.val(Math.abs(parseInt(t.val())) - 1);
    if (parseInt(t.val()) = 1) {
      $(".qty_minus").attr("disabled", true);
    }
  });
  $(".qty_plus").click(function() {
    t.val(Math.abs(parseInt(t.val())) + 1);
    if (parseInt(t.val()) != 1) {
      $(".qty_minus").attr("disabled", false);
    }
  });
});
