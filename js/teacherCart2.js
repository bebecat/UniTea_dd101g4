// hero視角
$(".parallax_3d").on("mousemove", function(e) {
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

  // 動圖片
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
});
//tweenMax
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
    x: -1000,
    y: 300
  })
  .to(".fly_animal", 10, {
    x: "10%",
    y: "480%"
  });

var secen_01 = new ScrollMagic.Scene({
  triggerElement: "#keypoint01", //觸發點
  duration: 1000, //距離
  reverse: true //動畫執行
  // triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(tl) //tween 動畫
  //.addIndicators() //觸發指標
  .addTo(controller); //回到場景

//butterfly
var controller = new ScrollMagic.Controller();
var t2 = new TimelineMax({
  // repeat: 10,
  yoyo: true
});

t2.to(".butterfly_bg", 10, {
  x: 0,
  y: 250
});

var secen_02 = new ScrollMagic.Scene({
  triggerElement: "#keypoint02", //觸發點
  duration: 900, //距離
  reverse: true, //動畫執行
  triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(t2) //tween 動畫
  //.addIndicators() //觸發指標
  .addTo(controller); //回到場景

//客製裝飾
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

//飄去購物車
const pdItem = $(".card_content .pic img");
const cart = $(".cart");
const pdBtns = $(".btn_submit_box");
// console.log(pdBtns);
// console.log(cart);
// console.log(pdItem);

pdBtns.click(function(e) {
  e.preventDefault();

  const thisImg = $(this)
    .parent()
    .parent()
    .parent()
    .find("img");
  // console.log(thisImg);
  const pdW = thisImg.width();
  const pdH = thisImg.height();
  const pdO = thisImg.offset();
  const pdL = pdO.left;
  const pdT = pdO.top - window.scrollY;
  const pdSrc = thisImg.attr("src");
  // console.log("pdSrc");
  const cartW = cart.width();
  const cartH = cart.height();
  const cartO = cart.offset();
  const cartL = cartO.left;
  const cartT = cartO.top - window.scrollY;

  // 加一 ele在隨便一 parent
  // position 設為 fixed
  const itemAnima = `<div 
            class="itemAnima"
            style="
                position: fixed; 
                top: ${pdT}px; 
                left: ${pdL}px; 
                transition: 1s; 
                width:15px;
                height:15px;
                border-radius:50%;
                z-index:999;
                background-color:#d53e23";
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
  }, 1100);
});
// console.log("123");
//篩選
// $(document).ready(function() {
//   $(".all_filter").click(function(e) {
//     e.preventDefault();
//     $(".pd_card_content").css({ display: "block" });
//   });
//   $(".mat_filter").click(function(e) {
//     e.preventDefault();
//     $(".pd_card_content").css({ display: "none" });
//     $(".mat").css({ display: "block" });
//   });
//   $(".box_filter").click(function(e) {
//     e.preventDefault();
//     $(".pd_card_content").css({ display: "none" });
//     $(".box").css({ display: "block" });
//   });
//   $(".fork_filter").click(function(e) {
//     e.preventDefault();
//     $(".pd_card_content").css({ display: "none" });
//     $(".fork").css({ display: "block" });
//   });
// });

//seemore//seemore//seemore//seemore//seemore//seemore
$("#toggle_see_more").click(function() {
  var seemore = $("#toggle_see_more").text();
  if (seemore == "查看更多") {
    $(".toggleItem").slideDown(150, function() {
      // $("#toggle_see_more").css("display", "none");
      $(".last_one").css("margin-bottom", "200px");
      $("#toggle_see_more").text("查看更少");
    });
  } else {
    $(".toggleItem").slideUp(150, function() {
      $("#toggle_see_more").text("查看更多");
    });
  }
});

let cart1 = {};

//----------------數量改變時的事件處理器
function changeCart(e) {
  let xhr = new XMLHttpRequest();
  xhr.onload = function(e) {
    cart1 = JSON.parse(xhr.responseText); //取回cart的最新狀況
    var count = Object.keys(cart1).length;
    console.log(count); //紅點數量
    var cartCount = document.getElementById("cart_count");
    var cartCircle = document.getElementById("cart_circle");
    if (count != 0) {
      cartCircle.setAttribute("style", "visibility:visible");
      cartCount.innerText = count;
      // alert(count);
    }
  };

  let url = "../php/cartUpdateT.php";
  xhr.open("post", url, true);
  let myForm = new FormData(this.parentNode.parentNode);
  console.log(myForm);
  xhr.send(myForm);
}

//.............取得購物車資料
function getCart() {
  let xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      cart1 = JSON.parse(xhr.responseText);
      console.log(cart1);
      var count = Object.keys(cart1).length;
      console.log(count); //紅點數量
      var cartCount = document.getElementById("cart_count");
      var cartCircle = document.getElementById("cart_circle");
      if (count != 0) {
        cartCircle.setAttribute("style", "visibility:visible");
        cartCount.innerText = count;
      }
    } else {
      alert(xhr.status);
    }
  };
  let url = "../php/getCartT.php";
  xhr.open("get", url, true);
  xhr.send(null);
}
window.addEventListener("load", function() {
  getCart();

  let btns = document.getElementsByClassName("btn_submit_box");
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", changeCart);
  }
  document.getElementsByClassName("btn_submit_box").onclick = function() {
    changeCart(e);
  };

  //----------------註冊+ , - 的事件處理器
  let min = document.getElementsByClassName("qty_minus");
  let plus = document.getElementsByClassName("qty_plus");

  function plusnum() {
    console.log(this);
    var obj = this.previousElementSibling;
    console.log(obj);
    var val = parseInt(obj.value);
    console.log(val);
    val++;
    obj.value = val;
    let sendQty = (this.parentNode.nextElementSibling.querySelectorAll(
      ".qty"
    )[0].value = val);
  }

  function minnum() {
    var obj = this.nextElementSibling;
    console.log(obj);
    var val = parseInt(obj.value);
    console.log(val);
    if (val > 1) {
      val--;
      obj.value = val;
      let sendQty = (this.parentNode.nextElementSibling.querySelectorAll(
        ".qty"
      )[0].value = val);
    }
    // console.log(obj.value);
  }

  for (i = 0; i < plus.length; i++) {
    plus[i].addEventListener("click", plusnum);
  }
  for (i = 0; i < plus.length; i++) {
    min[i].addEventListener("click", minnum);
  }
  //----------------註冊+ , - 的事件處理器-----------
});

//篩選結構

function showFilter() {
  let page = "";
  for (let num in prods) {
    page += `
    <div class="pd_card_content col-1 col-1md" id="pdCard">
    <div class="dicorateBox">
      <div class="baby">
        <img src="./scss/img/pdImg/pd/card_baby.png" alt="baby" />
      </div>
      <div class="nuts">
        <img src="./scss/img/pdImg/pd/card_nuts.png" alt="nuts" />
      </div>
    </div>
    <div class="card_content col-1 col-1md ">
      <h2 class="title">${prods[num].ProdName}</h2>
      <div class="pic">
        <img src="${prods[num].PicPath}" alt="pd" />
      </div>
      <ul class="txt">
        <li class="discrib">${prods[num].ProdDesc}</li>
        <li class="price">${prods[num].ProdPrice}</li>
      </ul>
      <form class="btn_qty_container" action="">
        <input type="hidden" class="prod_btn_id" name="psn"  value="${
          prods[num].ProdNo
        }">
        <ul>
          <li class="btn_qty_box" id="addQty">
            <input class="qty_minus" type="button" value="-" />
            <input type="text" name="qty" value="1" style="width:30px;height:30px;margin:10px;text-align:center;font-size:18px;">
            <input class="qty_plus" type="button" value="+" />
          </li>
          <li  class="btn_submit_box" id="${prods[num].ProdNo}">
            加入購物車
            <input class="add_to_cart" name="psn" type="hidden" value="${
              prods[num].ProdNo
            }">
            <input  type="hidden" name="name" value="${
              prods[num].ProdNo.ProdName
            } >
            <input  type="hidden" name="price" value="${prods[num].ProdPrice}" >
            <input  type="hidden" name="pic" value="${prods[num].PicPath}">
             <input type='hidden' name='qty' value='<?php echo $qty?>' class="qty"/>
          </li>
        </ul>
      </form>
    </div>
  </div>
  `;
  }
  document.getElementById("pd_card_container").innerHTML = page;
}

//篩選

let prods = {};
window.addEventListener("load", function() {
  document.getElementById("fork_filter").onclick = function(e) {
    let all_filter = document.getElementById("all_filter").querySelector("h2");
    let mat_filter = document.getElementById("mat_filter").querySelector("h2");
    let box_filter = document.getElementById("box_filter").querySelector("h2");
    let fork_filter = document
      .getElementById("fork_filter")
      .querySelector("h2");
    this.querySelector("h2").style.color = "#de8384";
    all_filter.style.color = "#222222";
    mat_filter.style.color = "#222222";
    box_filter.style.color = "#222222";

    let id = this.id;
    console.log(id);
    let xhr = new XMLHttpRequest();

    xhr.onload = function(e) {
      prods = JSON.parse(xhr.responseText);
      showFilter();
      console.log(xhr.responseText);
    };

    let url = "prod_filter.php?fork_filter";
    xhr.open("get", url, true);
    xhr.send(null);
  };
  document.getElementById("box_filter").onclick = function(e) {
    let all_filter = document.getElementById("all_filter").querySelector("h2");
    let mat_filter = document.getElementById("mat_filter").querySelector("h2");
    let box_filter = document.getElementById("box_filter").querySelector("h2");
    let fork_filter = document
      .getElementById("fork_filter")
      .querySelector("h2");
    this.querySelector("h2").style.color = "#de8384";
    all_filter.style.color = "#222222";
    mat_filter.style.color = "#222222";
    fork_filter.style.color = "#222222";
    let id = this.id;
    console.log(id);
    let xhr = new XMLHttpRequest();

    xhr.onload = function(e) {
      prods = JSON.parse(xhr.responseText);
      showFilter();
      console.log(xhr.responseText);
    };

    let url = "prod_filter.php?box_filter";
    xhr.open("get", url, true);
    xhr.send(null);
  };

  document.getElementById("mat_filter").onclick = function(e) {
    let all_filter = document.getElementById("all_filter").querySelector("h2");
    let mat_filter = document.getElementById("mat_filter").querySelector("h2");
    let box_filter = document.getElementById("box_filter").querySelector("h2");
    let fork_filter = document
      .getElementById("fork_filter")
      .querySelector("h2");
    this.querySelector("h2").style.color = "#de8384";
    all_filter.style.color = "#222222";
    fork_filter.style.color = "#222222";
    box_filter.style.color = "#222222";
    let id = this.id;
    console.log(id);
    let xhr = new XMLHttpRequest();

    xhr.onload = function(e) {
      prods = JSON.parse(xhr.responseText);
      showFilter();
      console.log(xhr.responseText);
    };

    let url = "prod_filter.php?mat_filter";
    xhr.open("get", url, true);
    xhr.send(null);
  };
  document.getElementById("all_filter").onclick = function(e) {
    let all_filter = document.getElementById("all_filter").querySelector("h2");
    let mat_filter = document.getElementById("mat_filter").querySelector("h2");
    let box_filter = document.getElementById("box_filter").querySelector("h2");
    let fork_filter = document
      .getElementById("fork_filter")
      .querySelector("h2");
    this.querySelector("h2").style.color = "#de8384";
    fork_filter.style.color = "#222222";
    mat_filter.style.color = "#222222";
    box_filter.style.color = "#222222";
    let id = this.id;
    console.log(id);
    let xhr = new XMLHttpRequest();

    xhr.onload = function(e) {
      prods = JSON.parse(xhr.responseText);
      showFilter();
      console.log(xhr.responseText);
    };

    let url = "prod_filter.php?all_filter";
    xhr.open("get", url, true);
    xhr.send(null);
  };
});
