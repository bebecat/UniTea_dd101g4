const pdItem = $(".card_content .pic img");
const cart = $(".cart");
const pdBtns = $(".btn_submit_box");
console.log(pdBtns);
console.log(cart);
console.log(pdItem);

pdBtns.click(function(e) {
  e.preventDefault();

  const thisImg = $(this)
    .parent()
    .parent()
    .parent()
    .find("img");
  console.log(thisImg);
  const pdW = thisImg.width();
  const pdH = thisImg.height();
  const pdO = thisImg.offset();
  const pdL = pdO.left;
  const pdT = pdO.top - window.scrollY;
  const pdSrc = thisImg.attr("src");
  console.log("pdSrc");
  const cartW = cart.width();
  const cartH = cart.height();
  const cartO = cart.offset();
  const cartL = cartO.left;
  const cartT = cartO.top - window.scrollY;

  // 加一 element 在隨便一 parent，但 position 要設為 fixed
  const itemAnima = `<div 
        class="itemAnima"
        style="
            position: fixed; 
            top: ${pdT}px; 
            left: ${pdL}px; 
            transition: 1s; 
            opacity: 0.6;
            width:10px;
            height:10px;
            border-radius:50%;
            z-index:999;
            background-color:brown";
         >`;
  $("nav").append(itemAnima);

  setTimeout(function() {
    $(".itemAnima").css({
      // width: `${cartW}px`,
      // height: `${cartH}px`,
      top: `${cartT}px`,
      left: `${cartL}px`
    });
  }, 100);
  setTimeout(function() {
    $(".itemAnima").remove();
    alert("已成功加入購物車");
  }, 1100);
});
