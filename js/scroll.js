


// scrollmagic

//建場景
var controller = new ScrollMagic.Controller();

var tl = new TimelineMax({
   //屬性
//    onComplete: alerts,
});

tl.to('.time01', 1,{
    x:'110%'
});

var tr = new TimelineMax({
    //屬性
 //    onComplete: alerts,
 });
tr.to('.time02', 1,{
    x:'-100%'});

// tl.to('.time_01',2,{
//     x:-1000
// }).to('.time_02',2,{
//     x:1000
// });

var ts = new TimelineMax({
    //屬性
 //    onComplete: alerts,
 });
ts.to('.time03', 1,{
    rotationY:360
        });
//觸發事件
var secen_01 = new ScrollMagic.Scene({
    triggerElement:'#keypoint',//觸發點
    // duration: 400,//距離
    reverse:true, //動畫執行
    triggerHook: 0.7,//觸發參考點
    // offset: 300, //偏移量
 }).setTween(tl)//tween 動畫
//  .addIndicators() //觸發指標
 .addTo(controller) //回到場景

 var secen_02 = new ScrollMagic.Scene({
    triggerElement:'#keypoint',//觸發點
    // duration: 400,//距離
    reverse:true, //動畫執行
    triggerHook: 0.7,//觸發參考點
        // offset: 300, //偏移量
 }).setTween(tr)//tween 動畫
//  .addIndicators() //觸發指標
 .addTo(controller) //回到場景

 var secen_03 = new ScrollMagic.Scene({
    triggerElement:'#keypoint',//觸發點
    // duration: 400,//距離
    reverse:true, //動畫執行
    triggerHook: 0.7,//觸發參考點
        // offset: 300, //偏移量
 }).setTween(ts)//tween 動畫
//  .addIndicators() //觸發指標
 .addTo(controller) //回到場景


//  var h1 = new TimelineMax({
//     //屬性
//  //    onComplete: alerts,
//  });
 
//  h1.to('.h1', 1,{
//      y:500
//  });



//  var secen_03 = new ScrollMagic.Scene({
//     triggerElement:'#keypoint2',//觸發點
//  }).setClassToggle('.text','change')
//  .setTween(h1)
//  .addIndicators() //觸發指標
//  .addTo(controller) //回到場景
