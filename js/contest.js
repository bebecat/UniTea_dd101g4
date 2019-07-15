
$(".heart").bind("click", function () {
    var src = ($(this).attr("src") === "scss/img/contest/heart.png")
        ? "scss/img/contest/empty_heart.png"
        : "scss/img/contest/heart.png";
    $(this).attr("src", src);
});


// var hearts = document.getElementsByClassName("heart");
// window.addEventListener("load", function () {
//     for (let i = 0; i < hearts.length; i++) {
//         hearts[i].onclick = heartSwing;
//     }
// }, false)

// function heartSwing(e) {
//     var love = e.target.cloneNode(true);
//     love.y--;
//     love.scale += 0.004;
//     love.alpha -= 0.013;
//     love.style = "left:" + love.x + "px;top:" + love.y + "px;opacity:" + love.alpha + ";transform:scale(" + love.scale + "," + love.scale + ") rotate(45deg);background:" + love.color;
//     console.log("love");
//     document.body.appendChild(love);
// }




// (function(window,document,undefined){
//     var hearts = [];
//     window.requestAnimationFrame = (function(){
//         return window.requestAnimationFrame ||
//         window.webkitRequestAnimationFrame ||
//         window.mozRequestAnimationFrame ||
//         window.oRequestAnimationFrame ||
//         window.msRequestAnimationFrame ||
//         function (callback){
//             setTimeout(callback,1000/60);
//         }
//     })();
//     init();
//     function init(){
//         css(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: absolute;}.heart:after{top: -5px;}.heart:before{left: -5px;}");
//         attachEvent();
//         gameloop();
//     }
//     function gameloop(){
//         for(var i=0;i<hearts.length;i++){
//             if(hearts[i].alpha <=0){
//                 document.body.removeChild(hearts[i].el);
//                 hearts.splice(i,1);
//                 continue;
//             }
//             hearts[i].y--;
//             hearts[i].scale += 0.004;
//             hearts[i].alpha -= 0.013;
//             hearts[i].el.style.cssText = "left:"+hearts[i].x+"px;top:"+hearts[i].y+"px;opacity:"+hearts[i].alpha+";transform:scale("+hearts[i].scale+","+hearts[i].scale+") rotate(45deg);background:"+hearts[i].color;
//         }
//         requestAnimationFrame(gameloop);
//     }
//     function attachEvent(){
//         var hearto = document.getElementsByClassName("heart");
//         var old = typeof window.onclick==="function" && window.onclick;
//         window.onclick = function(event){
//             old && old();
//             createHeart(event);
//         }
//     }
//     function createHeart(event){
//         var d = document.createElement("div");
//         d.className = "heart";
//         hearts.push({
//             el : d,
//             x : event.clientX - 5,
//             y : event.clientY - 5,
//             scale : 1,
//             alpha : 1,
//             color : "#f00",
//         });
//         document.body.appendChild(d);
//     }
//     function css(css){
//         var style = document.createElement("style");
//         style.type="text/css";
//         try{
//             style.appendChild(document.createTextNode(css));
//         }catch(ex){
//             style.styleSheet.cssText = css;
//         }
//         document.getElementsByTagName('head')[0].appendChild(style);
//     }
//     function randomColor(){
//         return "rgb("+(~~(Math.random()*255))+","+(~~(Math.random()*255))+","+(~~(Math.random()*255))+")";
//     }
// })(window,document);