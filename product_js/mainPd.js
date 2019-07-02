console.log("start");
TweenMax.to(".fly_animal", 4, {
  x: -800,
  y: 300,
  delay: 5,
  rotation: 30
});

// var controller = new ScrollMagic.Controller();

// //動畫
// var tl = new TimelineMax({
//   repeat: 1,
//   yoyo: true
//   //    onComplete: alerts
// })
//   .setClassToggle(".fly_animal", "pd_Customize_container") //(選擇器 , classname)
//   .addIndicators()
//   .addTo(controller);

// tl.to(".fly_animal", 1, {
//   x: 300,
//   y: 100
// });

// //觸發事件
// var secen_01 = new ScrollMagic.Scene({
//   triggerElement: "#keypoint", //觸發點
//   duration: 800, //距離
//   reverse: true, //動畫執行
//   triggerHook: 0, //觸發參考點
//   offset: 200 //偏移量
// })
//   .setTween(tl) //tween 動畫
//   .addIndicators() //觸發指標
//   .addTo(controller); //回到場景
// $(function() {
//   $(window).scroll(function() {
//     var scrollVal = $(this).scrollTop();
//     $(".qScrollTop").text(scrollVal);
//   });
// });
// if (scrollVal > 2330) {

// }
